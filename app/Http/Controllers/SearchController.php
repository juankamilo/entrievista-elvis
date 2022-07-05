<?php

namespace App\Http\Controllers;

use App\Models\SearchHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $competition = $request->input("select-competition");
        $matchday = $request->input('matchday');
        $url = "https://api.football-data.org/v4/competitions/$competition/matches";

        if(isset($matchday) && $matchday > 0) {
            $url = "https://api.football-data.org/v4/competitions/$competition/matches?matchday=15";
        }

        $response = Http::withHeaders([
           'X-Auth-Token' => '709dea6acbc04fc2adf206558c15c5c0'
        ])->get($url);

        if(count($response['matches']) < 1) {
            return response()->view('index', ['error' => 'No hay ningún partido con este criterio']);
        }

        $winner = $response['matches'][0]['score']['winner'];
        $home_team = $response['matches'][0]['homeTeam']['name'];
        $away_team = $response['matches'][0]['awayTeam']['name'];
        $competition_name = $response['competition']['name'];


        $winner = $winner == 'AWAY_TEAM' ? $away_team : ($winner == 'HOME_TEAM' ? $home_team : 'Aún no publicado');

        $actual_matches = SearchHistory::where('competition_id', $competition)
            ->where('matchday', $matchday)
            ->where('winner', $winner)
            ->count();

        if($actual_matches < 1) {
            SearchHistory::insert([
                'competition_name' => $competition_name,
                'competition_id' => $competition,
                'matchday' => $matchday,
                'winner' => $winner,
                'created_at' => now()
            ]);
        }

        return response()->view('matches', [
            'competition' => $response['matches'][0]['competition']['name'],
            'date' => $response['matches'][0]['season']['startDate'],
            'home_team' => $home_team,
            'away_team' => $away_team,
            'winner' => $winner,
            'matchday' => $matchday
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Symfony\Component\Console\Input\Input;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $competition = $request->input("select-competition");

        $response = Http::withHeaders([
           'X-Auth-Token' => '709dea6acbc04fc2adf206558c15c5c0'
        ])->get("https://api.football-data.org/v4/competitions/$competition/matches");

        return response()->view('matches', [
            'competition' => $response['matches'][0]['competition']['name'],
            'date' => $response['matches'][0]['season']['startDate'],
            'home_team' => $response['matches'][0]['homeTeam']['name'],
            'away_team' => $response['matches'][0]['awayTeam']['name'],
            'winner' => $response['matches'][0]['score']['winner'] ? ?? 'Aún no publicado'
        ]);
    }
}

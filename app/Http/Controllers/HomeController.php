<?php

namespace App\Http\Controllers;

use App\Models\SearchHistory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getIndex()
    {
        $search = SearchHistory::all();

        $array_result = array();
        foreach ($search as $key=>$item) {
            $array_result[$key]['id'] = $item->id;
            $array_result[$key]['competition_id'] = $item->competition_id;
            $array_result[$key]['created_at'] = $item->created_at;
            $array_result[$key]['competition_name'] = $item->competition_name;
            $array_result[$key]['winner'] = $item->winner;
            $array_result[$key]['matchday'] = $item->matchday;
        }

        return response()->view('index', [ 'array_result' => $array_result ]);
    }
}

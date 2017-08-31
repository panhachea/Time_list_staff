<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class SearchController extends Controller
{


    public  function index()
    {
        return view('test');
    }
    public function autocomplete(){
        $term =Input::get('term');

        $results = array();

        // this will query the users table matching the first name or last name.
        // modify this accordingly as per your requirements

        $queries = DB::table('time')
            ->where('name', 'LIKE', '%'.$term.'%')
            ->orWhere('date', 'LIKE', '%'.$term.'%')
            ->take(2)->get();

        foreach ($queries as $query)
        {
            $results[] = [ 'id' => $query->id, 'value' => $query->name.' '.$query->date ];
        }
        return Response::json($results);
    }




}

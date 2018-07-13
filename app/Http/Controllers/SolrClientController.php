<?php

namespace App\Http\Controllers;

use solr_conf;
use Illuminate\Http\Request;

class SolrClientController extends Controller
{
    public function get(String $key){

        // $search_key = Request.$argv[1];

        // $results = search($search_key)
//         return $request->all();
        return $key;
        // return view('welcome');

    }

    private function search($key){


    }

}

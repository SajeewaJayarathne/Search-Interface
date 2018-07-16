<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

require_once('solr/Apache/Solr/search.php');
use App\Http\Controllers\solr\Apache\Solr\Solr_Server;

class SolrClientController extends Controller{
    
    public function get(Request $request){
        $solr = new Solr_Server;
        $results = $solr->search($request['q']);
        // dd($results);
//         return $results;
        return view('welcome', compact('results'));
    }

}

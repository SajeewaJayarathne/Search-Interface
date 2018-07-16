<?php

namespace App\Http\Controllers\solr\Apache\Solr;

// The constants declared in the bootstrap.php script should be loaded

require('bootstrap.php');

// The Apache Solr Client library should be on the include path
// which is usually most easily accomplished by placing in the
// same directory as this script ( . or current directory is a default
// php include path entry in the php.ini)

require_once('Service.php');

use Apache_Solr_Service;


class Solr_Server{

    private $solr;

    private $parameters;

    public function __construct(){
        $this->solr = new Apache_Solr_Service(constant("SOLR_SERVER_HOSTNAME"), constant("SOLR_SERVER_PORT"), constant("SOLR_SERVER_PATH"));
        $this->parameters['df'] = config('solr.df');
        $this->parameters['facet'] = config('solr.facet');
        $this->parameters['rows'] = config('solr.rows');
        $this->parameters['facet.field'] = config('solr.facet.field');
        $this->parameters['fl'] = config('solr.fl');
        $this->parameters['omitHeader'] = config('solr.omitHeader');
        $this->parameters['wt'] = config('solr.wt');
    }

    
    function search($query){

            if ($query){
                // if magic quotes is enabled then stripslashes will be needed
                if (get_magic_quotes_gpc() == 1)
                {
                    $query = stripslashes($query);
                }

                // in production code you'll always want to use a try /catch for any
                // possible exceptions emitted  by searching (i.e. connection
                // problems or a query parsing error)

                try
                {
                    $results = $this->solr->search($query, 0, 10, $this->parameters);

                    if ($results)
                    {
                        // you can obtain more result parameters
                        $total = (int) $results->response->numFound;
                        $docs = $results->response->docs;
                        $facets = $results->facet_counts->facet_fields;
                    }
                    // For this instance only result documents are wanted
                    return $docs;
                    
                }
                catch (Exception $e)
                {
                    // in production you'd probably log or email this error to an admin
                    // and then show a special message to the user but for this example
                    // we're going to show the full exception
                    die("<html><head><title>SEARCH EXCEPTION</title><body><pre>{$e->__toString()}</pre></body></html>");
                }
            }           

    }  
}
?>

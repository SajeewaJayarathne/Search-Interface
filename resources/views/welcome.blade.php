@extends('layouts.master')

@section('title')
    Solr Search
@endsection

@section('content')
    <div id="search-bar" class="row" style="height: 20%; padding-top: 5%; padding-bottom: 5%">
        <div class="col-2"></div>
        <div class="col-8">
            <form class="card p-2">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Enter Keyword(s)">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-secondary">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-2"></div>
    </div> 
    
    <div class="results-container">
        <div class="row">
            <h2>Search</h2>
        </div>
    </div>
@endsection
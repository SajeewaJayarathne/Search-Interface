@extends('layouts.master')

@section('title')
    Solr Search
@endsection

@section('content')
    <div id="search-bar" class="row" style="height: 20%; padding-top: 5%; padding-bottom: 5%">
        @include('includes/search-bar') 
    </div> 
    
    <div class="results-container">
        <h3>Search Results</h3>

        {{-- include the search menu bar from layouts --}}
        @include('includes/search-menu-bar') 
        @include('includes/results')

        {{-- include the results pages --}}
        {{-- <div class="results" style="padding: 1.5%">
            @if (isset($results))
            @else
                @include('includes/empty')
            @endif
        </div> --}}
    </div>
@endsection

<div class="results">
    <div class="result-header">
        @if (count($results)>0)
            <span>{{ sizeof($results) }} results were found</span>
        @else
            <span>No results found</span>
        @endif
    </div>
    <section>
        <ul class="list-group">
            @foreach ($results as $result)
                <li class="list-group-item"> 
                    <a id="name" href="{{ $result->gi_website }}" style="font-size: 1.3em"><b> {{ $result->name }} </b></a>
                    <br>
                    <span style="color: green; font-size: 0.9em"> {{ $result->gi_website }} </span>
                    <br>
                    <div class="padded-multiline">
                        <span style="color: dimgray"> {{ $result->services }} </span>
                    </div>
                </li>
            @endforeach
        </ul>
    </section>
</div>

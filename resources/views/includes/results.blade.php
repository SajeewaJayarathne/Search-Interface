<div class="results" style="padding: 1.5%">
    <div class="result-header">
        @if (isset($results))
            @if ($results['matches']==0)
                <span><b>No results found</b></span>
            @endif
        @else
            <span><b>Please enter keyword(s) to begin Search</b></span>
        @endif
    </div>

    @if (isset($results))
        @if ($results['matches']>0)
            <section>
                <ul class="list-group">
                    @foreach ($results['docs'] as $group)
                        @foreach ($group->doclist->docs as $doc)
                            <li class="list-group-item {{ $group->groupValue }}"> 
                                <a id="name" href="{{ $doc->gi_website[0] }}" style="font-size: 1.3em"><b> {{ $doc->name[0] }} </b></a>
                                <br>
                                <span style="color: green; font-size: 0.9em"> {{ $doc->gi_website[0] }} </span>
                                <br>
                                <div class="padded-multiline">
                                    @if(isset($doc->services))
                                        <span style="color: dimgray"> {{ $doc->services[0] }} </span>
                                    @endif
                                </div>
                            </li>
                        @endforeach
                    @endforeach
                </ul>
            </section>
        @endif
    @endif            
</div>
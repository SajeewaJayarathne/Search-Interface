<div class="tab">
    <button class="tablinks active" onclick="openResults(event, 'all')">All</button>
    @if (isset($results))
        @foreach ($results['docs'] as $result)
            <button class="tablinks" onclick="openResults(event, '{{ $result->groupValue }}')"> {{ $result->groupValue }} </button>
        @endforeach
    @endif
</div>

<script>
    function openResults(evt, category) {
        var i, resultContent, tabResults, tablinks;
        resultContent = document.getElementsByClassName("list-group-item");

        if (category=="all") {
            for (i = 0; i < resultContent.length; i++) {
                resultContent[i].style.display = "block";
            }
        } else {
            for (i = 0; i < resultContent.length; i++) {
                resultContent[i].style.display = "none";
            }

            var tabResults = document.getElementsByClassName(category);
            for (var j = 0; j < tabResults.length; j++) {
                tabResults[j].style.display = "block";
            }
        }

        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        evt.currentTarget.className += " active";
    }
</script>
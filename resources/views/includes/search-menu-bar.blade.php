<ul id="menu-items" class="nav nav-tabs">
    <li id="all" class="menu-item active"><a href="#">All</a></li>
    @if (isset($results))
        @foreach ($results['docs'] as $result)
            <li id="{{ $result->groupValue }}" class="menu-item"><a href="#"> {{ $result->groupValue }} </a></li>
        @endforeach
    @endif
</ul>

<script>
    // Add active class to the current button (highlight it)
    var header = document.getElementById("menu-items");
    var menuItems = header.getElementsByClassName("menu-item");
    // var current_active_tab = "all"
    for (var i = 0; i < menuItems.length; i++) {
        menuItems[i].addEventListener("click", function () {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";

            // var all_elements = document.getElementsByClassName("list-group-item");
            // for (var j = 0; j < all_elements.length; j++) {
            //     all_elements[j].style.display = "none";
                
            // }

            // var filtered_elements = document.getElementsByClassName(this.id);
            // for (var j = 0; j < filtered_elements.length; j++) {
            //     filtered_elements[j].style.display = "block";
                
            // }

            // current_active_tab = this.id;
            // return current_active_tab;
            // var current_active_tab = document.getElementsByClassName(this.id);
            // current_active_tab.style.visibility = "visible";
        });
    }

    // $(document).ready(function() {
    //     // $("list-group-item").hide();
        
    //     $("ul.menu-items li").click(function() {
    //         $("ul.menu-items li").removeClass("active");
    //         $(this).addClass("active");
    //         $("list-group-item").hide();

    //         var active_tab = $(this).find("li").attr("id");
    //         $(active_tab).fadeIn();
    //     });

    // });
</script>
<ul id="menu-items" class="nav nav-tabs">
    <li class="menu-item active"><a href="#">All</a></li>
    @foreach ($results as $result)
        <li class="menu-item"><a href="#"> {{ $result->category }} </a></li>
    @endforeach
    {{-- <li class="menu-item"><a href="#">Courses</a></li>
    <li class="menu-item"><a href="#">News</a></li>
    <li class="menu-item"><a href="#">Research</a></li>
    <li class="menu-item"><a href="#">People</a></li>
    <li class="menu-item"><a href="#">Blogs</a></li> --}}
</ul>

<script>
    // Add active class to the current button (highlight it)
    var header = document.getElementById("menu-items");
    var menuItems = header.getElementsByClassName("menu-item");
    for (var i = 0; i < menuItems.length; i++) {
        menuItems[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
    }
</script>
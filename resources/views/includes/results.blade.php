<body>
    <span style="color: gray">
       @foreach ($results as $result )
           <li> {{ $result->name }} </li>
           {{-- <li> {{ $result->gi_website}}</li> --}}
           {{-- <li> {{ $result->services_-_services}}</li> --}}
       @endforeach
    </span>
</body>
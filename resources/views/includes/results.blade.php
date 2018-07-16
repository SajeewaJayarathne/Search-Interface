<body>
    <span style="color: gray">
       @foreach ($results as $result )
           <li> {{ $result->name }} </li>
       @endforeach
    </span>
</body>
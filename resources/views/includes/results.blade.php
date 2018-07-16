<body>
    <span style="color: gray">
       {{-- <b>dick move dick!</b> --}}
       @foreach ($results as $result )
           <b> $result->name </b>
       @endforeach
    </span>
</body>
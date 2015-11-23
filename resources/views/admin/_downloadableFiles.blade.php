<ol>
    @foreach($files as $file)
       <li><a href="/downloads/{{$file}}" target="_blank">{{$file}} </a> </li>
    @endforeach
</ol>

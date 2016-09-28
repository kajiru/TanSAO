
    <div class="list-group">

        <p class="list-group-item"><strong>Test Dates</strong></p>

        @foreach($tDateFiles as $key =>$file)
            <a href="{{storage_path()."/app/testDatesFiles/".$file.".pdf"}}" class="list-group-item" download>
             <strong>{{$file}}</strong> <br>
           </a>
        @endforeach
    </div>

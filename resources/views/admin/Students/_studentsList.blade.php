<table class="table table-hover table-bordered table-responsive">
    <thead>
    <tr>
        <th>Name</th>
        <th>School</th>
        <th>Graduation</th>
        <th>Residence</th>
        <th>First Language</th>
    </tr>
    </thead>

    <tbody>

    @foreach($students as $student)

        <tr>
            <td> <a href="/students/{{$student->id}}"> {{$student->firstName}} {{$student->secondName}} {{$student->familyName}}</a></td>
            <td>{{$student->highSchoolName}}</td>
            <td>{{$student->yearOfGraduation}}</td>
            <td>{{$student->countryOfResidence}}</td>
            <td>{{$student->firstLanguage}}
            </td>
        </tr>

    @endforeach

    </tbody>
</table>

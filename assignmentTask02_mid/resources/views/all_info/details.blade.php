<html>
<head>
    <title>All Details</title>
</head>
<body>
@foreach ($courses as $key=>$c)

<tr>
    {{$key+1}}. &emsp;<b>{{$c->course_name}}</b> 
    is taught by 
    @foreach (($c->Teachers()->where('course_id',$c->course_id)->get()) as $t)
    <b>{{$t->where('teacher_id',$t->teacher_id)->first()->Teachers->teacher_name}}</b>,
    @endforeach
</tr>

<tr>
    <ul> 
    @foreach (($c->Students()->where('course_id',$c->course_id)->get()) as $s)
    <li>{{$s->where('student_id',$s->student_id)->first()->Students->student_name}}</li>
    @endforeach
    </ul>
</tr>

<br>
@endforeach
</body>
</html>



{{-- {{
    foreach($c->Teachers()->where('course_id',$c->course_id)->get() as $teachers) {
        $teachers->
    } 
    }}</b></tr><br> --}}
<h1>Student Index</h1>
<a href="{{route('student.create')}}">Add</a> |
<a href="{{route('student.index')}}">View</a> |
<br/><br/>
@if(session()->get('Success'))
<span style="color: green">{{session()->get('Success')}}</span>
@endif
<table border='5'>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Mobile</th>
        <th>Email</th>
        <th>Address</th>
        <th>Created</th>
        <th>Updated</th>
        <th colspan="3">Action</th>
    </tr>
    @foreach($student as $sdata)
    <tr>
        <td>{{$sdata->id}}</td>
        <td>{{$sdata->student_name}}</td>
        <td>{{$sdata->student_gender}}</td>
        <td>{{$sdata->student_mobile}}</td>
        <td>{{$sdata->student_email}}</td>
        <td>{{$sdata->student_address}}</td>
        <td>{{$sdata->created_at}}</td>
        <td>{{$sdata->updated_at}}</td>
        <td>
           <form action="{{route('student.show',$sdata->id)}}" method="get">
                @csrf
                @method('GET')
                <button type="submit" class='button'>Show</button>
            </form>
        </td>
        <td>
            <form action="{{route('student.edit',$sdata->id)}}" method="get">
                @csrf
                @method('PATCH')
                <button type="submit" class='button'>Edit</button>
            </form>
        </td>
        <td>
            <form action="{{route('student.destroy',$sdata->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class='button'>Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>


<h1>Student Show</h1>
<a href="{{route('student.index')}}">Back</a> 
<br/><br/>
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
        <tr></tr>
        <td>{{$sdata->id}}</td>
        <td>{{$sdata->student_name}}</td>
        <td>{{$sdata->student_gender}}</td>
        <td>{{$sdata->student_mobile}}</td>
        <td>{{$sdata->student_email}}</td>
        <td>{{$sdata->student_address}}</td>
        <td>{{$sdata->created_at}}</td>
        <td>{{$sdata->updated_at}}</td>
    </tr>
    </table>


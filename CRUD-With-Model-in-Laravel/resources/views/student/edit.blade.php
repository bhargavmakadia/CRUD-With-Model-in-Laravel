<form method="post" action="{{route('student.update',$studentarray->id)}}">

    @method('PATCH')

    @csrf

    <h3>Edit Student</h3>
    <table>
        <tr>
        <td>Name</td>
        <td><input type='text' name='student_name' value='{{$studentarray->student_name}}'></td>
    </tr>
    <tr>
        <td>Gender</td>
        <td><input type='text' name='student_gender' value='{{$studentarray->student_gender}}'></td>
    </tr>
    <tr>
        <td>Mobile</td>
        <td><input type='number' name='student_mobile' value='{{$studentarray->student_mobile}}'></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><input type='email' name='student_email' value='{{$studentarray->student_email}}'></td>
    </tr>
    <tr>
        <td>Address</td>
        <td><input type='text' name='student_address' value='{{$studentarray->student_address}}'></td>
    </tr>
    <tr>
        <td></td>
        <td>
            <input type='submit' value="Update">
            <a href="{{URL::route('student.index')}}">Back</a>
        </td>
    </tr>
    </table>
</form>

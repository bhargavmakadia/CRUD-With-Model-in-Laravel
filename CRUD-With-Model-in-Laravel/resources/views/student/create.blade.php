<h1>Student Create</h1>

<form method="post" action="{{route('student.store')}}">
    @csrf
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="student_name" placeholder="Name"/></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td><input type="text" name="student_gender" placeholder="Gender"/></td>
        </tr>
        <tr>
            <td>Mobile</td>
            <td><input type="number" name="student_mobile" placeholder="Mobile"/></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="student_email" placeholder="Email"/></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input type="text" name="student_address" placeholder="Address"/></td>
        </tr>
        <tr>
            <td>
    <input type="submit"/>
            </td>
        </tr>
    </table>
</form>
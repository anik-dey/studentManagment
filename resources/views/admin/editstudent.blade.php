@extends('admin.admindashboard')

@section('content')
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

{
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password],  input[type=file],  input[type=email] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus, input[type=file]:focus, input[type=email:focus] {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}



.registerbtn:hover {
  opacity: 1;
}

.resetbtn {
  background-color: #db1324;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}


/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
.container_own{
    width: 70%;
}
</style>
</head>
<body>
  
 
<form action="{{url('/student_update',$student_view->student_id)}}" method="post" enctype="multipart/form-data">
  {{ csrf_field() }}
  <div class="container container_own">
    <h1>Update Student Information</h1>
    <p>Please fill the form row to update student information .</p>
    <hr>

    <label for="name"><b>Student Name</b></label>
    <input type="text"  value="{{$student_view->student_name}}"name="student_name" id="name" required>

    <label for="roll"><b>Student Roll</b></label>
    <input type="text" value="{{$student_view->student_roll}}" name="student_roll" id="roll" required>
     
    <label for="phone"><b>Phone Number</b></label>
    <input type="text" value="{{$student_view->student_phone}}"  pattern="[1-9]{4}-[0-9]{3}-[0-9]{3}" name="student_phone" id="phone" required>

    <label for="department"><b>Student Department</b></label>
    <input type="text" value="{{$student_view->student_department}}"  name="student_department" id="department" required>
    

    {{-- <label for="depertment"><b>Select Depertment</b></label>
    <select name="student_department" id="student_dept" value="{{$student_view->student_department}}">
      <option value="cse">CSE</option>
      <option value="eee">EEE</option>
      <option value="bba">BBA</option>
       --}}
    </select><br><br>

    <label for="email"><b>Email</b></label><br>
   <input type="email" value="{{$student_view->student_email}}" name="student_email" id="email" required><br><br>

    <label for="password"><b>Password</b></label>
    <input type="password" value="{{$student_view->student_password}}" name="student_password" id="password" required>
   
   

    <button type="submit" class="registerbtn">Update</button>
    <input type="reset"  class="resetbtn" value="Reset">
  </div>
  
  
</form>

</body>
</html>


@endsection
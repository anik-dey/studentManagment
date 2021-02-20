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
  <p class="alert-success"><?php
    $exception=Session::get('exception');
    if($exception)
    {
      echo $exception;
      Session::put('exception',null);
    }
    ?>
<form action="{{url('/saveteacher')}}" method="post" enctype="multipart/form-data">
  {{ csrf_field() }}
  <div class="container container_own">
    <h1>Add Student</h1>
    <p>Please fill in this form to Add Teacher.</p>
    <hr>

    <label for="name"><b>Teacher Name</b></label>
    <input type="text" placeholder=" Name" name="teacher_name" id="name" required>    
     
    <label for="phone"><b>Phone Number</b></label>
    <input type="text" placeholder="1234-456-678"  pattern="[1-9]{4}-[0-9]{3}-[0-9]{3}" name="teacher_phone" id="phone" required>
    
    <label for="file"><b>Teacher Picture</b></label>
    <input type="file" placeholder=" picture" name="teacher_picture" id="file" required><br>

    <label for="depertment"><b>Select Depertment</b></label>
    <select name="teacher_department" id="student_dept">
      <option value="CSE">CSE</option>
      <option value="EEE">EEE</option>
      <option value="BBA">BBA</option>
      
    </select><br><br>

    <label for="email"><b>Email</b></label><br>
   <input type="email" placeholder="Email" name="teacher_email" id="email" required><br><br>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Password" name="teacher_password" id="password" required>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">Register</button>
  </div>
  
  
</form>

</body>
</html>


@endsection
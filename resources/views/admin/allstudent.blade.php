@extends('admin.admindashboard')
@section('content')
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #f00d0d;
}

.button2:hover {
  background-color: #f00d0d;
  color: white;
}

</style>
</head>
<body>

<h2>Student List</h2>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for roll.." title="Type in a name">

<table id="myTable">
    <thead>
  <tr class="header">
    <th style="width:13%;">Name</th>
    <th style="width:13%;">Roll</th>
    <th style="width:13%;">Phone</th>
    <th style="width:20%;">Picture</th>
    <th style="width:13%;">Depertment</th>
    <th style="width:13%;">Email</th>
    <th style="width:13%;">Action</th>
    
  </tr>
    </thead>
    <tbody>
  @foreach ($allstudent_info as $item)
  <tr>
    <td>{{$item->student_name}}</td>
    <td>{{$item->student_roll}}</td>
    <td>{{$item->student_phone}}</td>
    <td><img src="{{URL::to($item->student_picture)}}" height="80" width="100" style="border-radius:50%"</td>
    <td>{{$item->student_department}}</td>
    <td>{{$item->student_email}}</td>
   <td> 
    <a href="{{URL::to('/student_edit/'.$item->student_id)}}"><button class="button button1">Edit</button><a>
    <a href="{{URL::to('/student_delete/'.$item->student_id)}}"><button class="button button2">Delete</button></a>
    
   </td>
  </tr>
  @endforeach
    </tbody>
  
</table>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

</body>
</html>


@endsection
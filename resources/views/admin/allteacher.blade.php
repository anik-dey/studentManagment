@extends('admin.admindashboard')
@section('content')
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

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search By Name.." title="Type in a name">

<table id="myTable">
    <thead>
  <tr class="header">
    <th style="width:15%;">Name</th>
   
    <th style="width:15%;">Phone</th>
    <th style="width:20%;">Picture</th>
    <th style="width:15%;">Depertment</th>
    <th style="width:15%;">Email</th>
   
    
  </tr>
    </thead>
    <tbody>
  @foreach ($allteacher_info as $item)
  <tr>
    <td>{{$item->teacher_name}}</td>
    
    <td>{{$item->teacher_phone}}</td>
    <td><img src="{{URL::to($item->teacher_picture)}}" height="80" width="100" style="border-radius:50%"</td>
    <td>{{$item->teacher_department}}</td>
    <td>{{$item->teacher_email}}</td>
  
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
    td = tr[i].getElementsByTagName("td")[0];
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


@endsection
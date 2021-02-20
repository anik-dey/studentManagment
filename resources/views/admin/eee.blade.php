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
</style>
</head>
<body>

<h2>Student List</h2>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

<table id="myTable">
    <thead>
  <tr class="header">
    <th style="width:13%;">Name</th>
    <th style="width:13%;">Roll</th>
    <th style="width:13%;">Phone</th>
    <th style="width:20%;">Picture</th>
    <th style="width:13%;">Depertment</th>
    <th style="width:13%;">Email</th>
    {{-- <th style="width:13%;">Action</th> --}}
    
  </tr>
    </thead>
    <tbody>
  @foreach ($eeestudent_info as $item)
  <tr>
    <td>{{$item->student_name}}</td>
    <td>{{$item->student_roll}}</td>
    <td>{{$item->student_phone}}</td>
    <td><img src="{{URL::to($item->student_picture)}}" height="80" width="100" style="border-radius:50%"</td>
    <td>{{$item->student_department}}</td>
    <td>{{$item->student_email}}</td>
   {{-- <td> 
    <button class="btn btn-outline-primary">Edit</button>
    <button class="btn btn-outline-primary">Edit</button>
    
   </td> --}}
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
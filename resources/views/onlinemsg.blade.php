
@extends('master')

 

@section('content')


 	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">

 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 	
 	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

 	<script>
 		
 		$(document).ready( function () {
    	$('#example').DataTable();
		} );

 	</script>

 	<title>Online Message</title>

     


 <body>
 	<h2> <center><font color="blue">Online Messages</font></center> </h2>
 	<br>

 	   
 	<table id="example" class="display" cellspacing="0" width="100%">

 		 <thead>
 			<tr>
 				<th>ID</th>
 				<th>Name</th>
 				<th>Department</th>
 				<th>Series</th>
 				<th>Message</th>
 				<th>Time</th>

 			</tr>
 		
		</thead>
 		 @foreach ($onlinemsg as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->department }}</td>
                        <td>{{ $user->series }}</td>
                        <td>{{ $user->message }}</td>
                        <td>{{ $user->created_at }}</td>

                     </tr>
                       @endforeach
	</table> 
	@endsection

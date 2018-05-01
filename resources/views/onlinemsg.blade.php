
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

 	   <div class="bootstrap-iso">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <form action="{{ url('/admin/onlinemsg/filter') }}" method="post">
                                <div class="form-group ">
                                    <label class="control-label " for="fromdate">
                                        From Date
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar">
                                            </i>
                                        </div>
                                        <input class="form-control" id="date" name="fromdate" placeholder="YYYY/MM/DD"
                                               type="text"/>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label " for="date">
                                        To Date
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar">
                                            </i>
                                        </div>
                                        <input class="form-control form-control" id="date" name="todate"
                                               placeholder="YYYY/MM/DD" type="text"/>
                                    </div>
                                </div>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group">
                                    <div>
                                        <button class="btn btn-primary " name="submit" type="submit">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

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

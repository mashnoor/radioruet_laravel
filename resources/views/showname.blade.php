@extends('master')

 

@section('content')

<!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>

<!-- HTML Form (wrapped in a .bootstrap-iso div) -->
<div class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-6 col-sm-6 col-xs-12">
    <form action="/admin/showname" method="post" >
      
     <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
     <div class="form-group ">
      <label class="control-label " for="name">
       Today's Show Name
      </label>
      <input class="form-control" id="name" name="name" type="text"/>
     </div>
      <!-- <input type ="hidden" name="_token" value = "{{csrf_token()}}"><br/> -->
     <div class="form-group">
      <div>
       <!-- <input type ="hidden" name="_token" value = "{{csrf_token()}}"> -->
       <button class="btn btn-lg btn-danger " name="submit" type="submit">
        Set   
       </button>
      </div>
     </div>
    </form>
   </div>
  </div>
 </div>
</div>
@endsection
@extends('master')



@section('content')

    <!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
    <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css"/>

    <!-- Inline CSS based on choices in "Settings" tab -->
    <style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form {
            font-family: Arial, Helvetica, sans-serif;
            color: black
        }

        .bootstrap-iso form button, .bootstrap-iso form button:hover {
            color: white !important;
        }</style>

    <!-- HTML Form (wrapped in a .bootstrap-iso div) -->
    <div class="bootstrap-iso">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <form action="{{ route('postshowname') }}" method="post">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                        <div class="form-group ">
                            <label class="control-label " for="title">
                                Notification Title
                            </label>
                            <input class="form-control" id="title" name="title" type="text"/>
                        </div>
                        <div class="form-group ">
                            <label class="control-label " for="body">
                                Today's Show Name
                            </label>
                            <input class="form-control" id="body" name="body" type="text"/>
                        </div>
                        <div class="form-group">
                            <div>
                                <button class="btn btn-lg btn-danger " name="submit" type="submit">
                                    Send
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
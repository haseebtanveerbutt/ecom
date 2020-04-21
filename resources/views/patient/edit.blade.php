@extends('layouts.main')
@section('customCSS')
    <style>
        body {
            background: url('https://static-communitytable.parade.com/wp-content/uploads/2014/03/rethink-target-heart-rate-number-ftr.jpg') fixed;
        background-size: cover;
        }

        *[role="form"] {
        max-width: 530px;
        padding: 15px;
        margin: 0 auto;
        border-radius: 0.3em;
        background-color: #f2f2f2;
        }

        *[role="form"] h2 { 
        font-family: 'Open Sans' , sans-serif;
        font-size: 40px;
        font-weight: 600;
        color: #000000;
        margin-top: 5%;
        text-align: center;
        text-transform: uppercase;
        letter-spacing: 4px;
        }
        
        
    </style>
@endsection
@section('content')
    <div class="container">
        <form class="form-horizontal" method="post" action="{{ route('patient-crud.update',$data->id) }}" role="form" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <h2>Registration</h2>
            <div class="form-group">
                <label for="firstName" class="col-sm-3 control-label">First Name</label>
                <div class="col-sm-9">
                    <input name="name" type="text" id="firstName" placeholder="First Name" class="form-control" value="{{ $data->name }}" autofocus>
                </div>
            </div>
            <div  class="form-group">
                <label for="email" class="col-sm-3 control-label">Email* </label>
                <div class="col-sm-9">
                    <input name="email" type="email" id="email" placeholder="Email" class="form-control" value="{{ $data->email }}" name= "email">
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-3 control-label">Password*</label>
                <div class="col-sm-9">
                    <input name="password" type="password" id="password" placeholder="Password" value="{{ $data->password }}" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="birthDate" class="col-sm-3 control-label">Date of Birth*</label>
                <div class="col-sm-9">
                    <input name="birthDate" type="date" id="birthDate" value="{{ $data->birthDate }}" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3">Gender</label>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-4">
                            <label class="radio-inline">
                                <input type="radio" name="gender" id="femaleRadio" value="female" value="{{ $data->gender }}">Female
                            </label>
                        </div>
                        <div class="col-sm-4">
                            <label class="radio-inline">
                                <input type="radio" name="gender" id="maleRadio" value="{{ $data->gender }}">Male
                            </label>
                        </div>
                    </div>
                </div>
            </div> <!-- /.form-group -->
            <div class="form-group">
                <div class="file-upload-wrapper">
                    <input type="file" name="image" id="input-file-now" class="file-upload" />
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-9 col-sm-offset-3">
                    <span class="help-block">*Required fields</span>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Register</button>
        </form> <!-- /form -->
    </div> <!-- ./container -->
@endsection
@section('customScripts')
    <script>
        $('.file-upload').file_upload();
    </script>
@endsection

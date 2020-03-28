@extends('student.layouts.main')

@section('student-body')
    <body class="login">
        <div>
            <div class="login_wrapper">
                <div class="animate form login_form">
                    <section class="login_content">
                        @if (session('message'))
                            <div class="alert alert-danger">
                                {{ session('message') }}
                            </div>
                        @endif
                        <form action="{{ URL::to('') }}/student-login-request " method="post">
                            @csrf
                            <h1>Login Form</h1>
                            <div>
                                <input type="text" name="name" class="form-control" placeholder="Username" required="" />
                            </div>
                            <div>
                                <input type="password" name="password" class="form-control" placeholder="Password" required="" />
                            </div>
                            <div>
                                <button  class=" btn btn-outline-success " type="submit"> Login </button>
                            </div>
                            
                        </form>
                        <span>
                            <a class="reset_pass" href="#">Lost your password?</a>
                        </span>

                        <div class="clearfix"></div>

                        <div class="separator">                                
                            <a  href="{{URL::to('')}}/student-register"> Create Account </a>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </body>
    {{-- Country
City
Address
Date of birth
Contact no --}}

@endsection
@extends('student.layouts.main')

@section('student-body')
            <div class="login_wrapper">
                <div  class="">
                    <section class="login_content">
                        <h1>Create Account</h1>
                        <form  action="student-register-request" method="post">
                            @csrf
                            
                            <div>
                                <input type="text" name="name" class="form-control" placeholder="Username"  />
                            </div>
                            <div>
                                <input type="email" name="email" class="form-control" placeholder="Email"  />
                            </div>
                            <div>
                                <input type="password" name="password" class="form-control" placeholder="Password"  />
                            </div>     
                            <div>
                                @include('student._partials.country-select')                 
                            </div>
                            <br>
                            <div>
                                <input type="text" name="city" class="form-control" placeholder="City"  />
                            </div>
                            
                            <div>
                                <input class="form-control" name="address" placeholder="Address" >
                                               
                            </div>
                            <br>
                            <div>
                                <input  type="date" name="date_of_birth" class="form-control" placeholder="Date of Birth"  />
                            </div>
                            <br>
                            <div>
                                <input type="number" name="phone_no" class="form-control" placeholder="Phone no."  />
                            </div>
                            <br>
                            <div>
                                <button  class="to_register btn btn-outline-primary "> Submit </a>
                            </div>
                            
                        </form>
                        <div class="separator">
                            <a href= "{{URL::to('')}}/student-login ">Login Page !!</a>
                        </div>
                    </section>
                </div>
            </div>
@endsection
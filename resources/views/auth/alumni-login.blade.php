@extends('layouts.app')

@section('content')
<!--== Page Title Area Start ==-->
<section id="page-title-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto text-center">
                <div class="page-title-content">
                    <h1 class="h2">Membership Form</h1>
                    <p>Register now and become a member.</p>

                </div>
            </div>
        </div>
    </div>
</section>
<!--== Page Title Area End ==-->

<!--== Register Page Content Start ==-->
<section id="page-content-wrap">
    <div class="register-page-wrapper ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <center>
                        <img src="{{asset('/alumni.png')}}" alt="">
                    </center>
                    <div class="register-page-inner">
                        <div class="col-lg-10 m-auto">
                            <div class="register-form-content">
                                <div class="row">


                                    <!-- Regsiter Form Area Start -->
                                    <div style="background-color: #2fa360;color: white" class="col-lg-7 text-center col-md-6 ml-auto">
                                        <br>
                                        <h5>Welcome to alumni section</h5>

                                        <p>Login by filling in the required details or </p>

                                        <a class="btn btn-reg" data-toggle="modal" data-target="#register-alumni" style="color: white" href="#">Register here <i class="fa fa-chevron-circle-right pull-right"></i> </a>

                                    </div>
                                    <!-- Regsiter Form Area End -->
                                    <!-- Signin Area Content Start -->
                                    <div class="col-lg-4 col-md-6 text-center">
                                        <div class="display-table">
                                            <div class="display-table-cell">
                                                <div class="signin-area-wrap">
                                                    <h4>Already a Member?Login here</h4>
                                                    <div class="sign-form">
                                                        <form method="post" action="{{ url("login/$url") }}">
                                                            {{csrf_field()}}
                                                            <input name="email" type="text" placeholder="Enter your email address">
                                                            <input name="password" type="password" placeholder="Password">
                                                            <button type="submit" class="btn btn-reg">Login</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Signin Area Content End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="backdrop-filter: blur(10px); background-color: rgba(0,0,0,0.3); padding: 40px; min-height: 100vh;" id="register-alumni" class="register-form-wrap modal">
        <div class="text-center mb-4 position-relative">
            <h3 style="color: white;">Registration Form</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute; right: 20px; top: 0;">
                <span aria-hidden="true"><i class="fa fa-2x fa-close" style="color: white;"></i></span>
            </button>
        </div>

        <div class="register-form modal-dialog">
            <div class="modal-content" style="background: white; border-radius: 12px; box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2); padding: 30px;">
                <div class="modal-body">

                    <form enctype="multipart/form-data" method="post" action="{{ url("register/$url") }}">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-12 col-sm-6 mb-3">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                            <div class="col-12 col-sm-6 mb-3">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>

                            <div class="col-12 col-sm-6 mb-3">
                                <label>First Name</label>
                                <input type="text" class="form-control" name="fname" required>
                            </div>
                            <div class="col-12 col-sm-6 mb-3">
                                <label>Middle Name</label>
                                <input type="text" class="form-control" name="mname">
                            </div>

                            <div class="col-12 col-sm-6 mb-3">
                                <label>Surname</label>
                                <input type="text" class="form-control" name="surname">
                            </div>
                            <div class="col-12 col-sm-6 mb-3">
                                <label>Phone Number</label>
                                <input type="text" class="form-control" name="phone">
                            </div>

                            <div class="col-12 col-sm-6 mb-3">
                                <label>Course</label>
                                <input type="text" class="form-control" name="course">
                            </div>
                            <div class="col-12 col-sm-6 mb-3">
                                <label>Profession</label>
                                <input type="text" class="form-control" name="profession">
                            </div>

                            <div class="col-12 col-sm-6 mb-3">
                                <label>Work Station</label>
                                <input type="text" class="form-control" name="wstation">
                            </div>
                            <div class="col-12 col-sm-6 mb-3">
                                <label>Location</label>
                                <input type="text" class="form-control" name="location">
                            </div>

                            <div class="col-12 col-sm-6 mb-3">
                                <label>Year Joined</label>
                                <input type="text" class="form-control" name="year_joined">
                            </div>
                            <div class="col-12 col-sm-6 mb-3">
                                <label>Year Graduated</label>
                                <input type="text" class="form-control" name="year_graduated">
                            </div>

                            <div class="col-12 mb-4">
                                <label>Upload Your Photo</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="cover_image" id="customfile">
                                    <label class="custom-file-label" for="customfile"><i class="fa fa-upload"></i> Choose file</label>
                                </div>
                            </div>
                            <div class="col-12 mb-4">
                                <label class="d-block mb-2">Gender</label>
                                <div class="flex items-center space-x-6">
                                    <div class="custom-control custom-radio flex items-center">
                                        <input type="radio" id="gender_male" name="gender" value="male" class="custom-control-input">
                                        <label class="custom-control-label ml-2" for="gender_male">Male</label>
                                    </div>
                                    <div class="custom-control custom-radio flex items-center">
                                        <input type="radio" id="gender_female" name="gender" value="female" class="custom-control-input">
                                        <label class="custom-control-label ml-2" for="gender_female">Female</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-4">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="termsCheck" required>
                                    <label class="custom-control-label" for="termsCheck">
                                        I agree to the <a href="#">Terms of Service</a>
                                    </label>
                                </div>
                            </div>

                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</section>
@endsection
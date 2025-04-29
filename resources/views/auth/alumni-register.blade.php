@extends('layouts.app')
@section('content')

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
                                        <div style="background-color: dodgerblue;color: white" class="col-lg-7 text-center col-md-6 ml-auto">
                                            <br>
                                            <h5>Welcome to alumni section</h5>

                                            <p>Login by filling in the required details or </p>

                                            <a   style="color: gold" href="/">Register here</a>
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
    </section>
    @endsection
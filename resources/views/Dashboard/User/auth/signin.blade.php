@extends('Dashboard.layouts.master2')
@section('css')

    <style>
        .panel {display: none;}
    </style>


    <!-- Sidemenu-respoansive-tabs css -->
    <link href="{{URL::asset('Dashboard/plugins/sidemenu-responsive-tabs/css/sidemenu-responsive-tabs.css')}}" rel="stylesheet">
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row no-gutter">
            <!-- The image half -->
            <div class="col-md-6 col-lg-6 col-xl-7 d-none d-md-flex bg-primary-transparent">
                <div class="row wd-100p mx-auto text-center">
                    <div class="col-md-12 col-lg-12 col-xl-12 my-auto mx-auto wd-100p">
                        <img src="{{URL::asset('Dashboard/img/media/login.png')}}" class="my-auto ht-xl-80p wd-md-100p wd-xl-80p mx-auto" alt="logo">
                    </div>
                </div>
            </div>
            <!-- The content half -->
            <div class="col-md-6 col-lg-6 col-xl-5 bg-white">
                <div class="login d-flex align-items-center py-2">
                    <!-- Demo content-->
                    <div class="container p-0">
                        <div class="row">
                            <div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
                                <div class="card-sigin">
                                    <div class="mb-5 d-flex"> <a href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('Dashboard/img/brand/favicon.png')}}" class="sign-favicon ht-40" alt="logo"></a><h1 class="main-logo1 ml-1 mr-0 my-auto tx-28">Va<span>le</span>x</h1></div>
                                    <div class="card-sigin">
                                        <div class="main-signup-header">
                                            <h2>{{trans('Dashboard/login_trans.Welcome')}}</h2>
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif

                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">{{trans('Dashboard/login_trans.Select_Enter')}}</label>
                                                <select class="form-control" id="sectionChooser">
                                                    <option value="" selected disabled>{{trans('Dashboard/login_trans.Choose_list')}}</option>
                                                    <option value="user">{{trans('Dashboard/login_trans.user')}}</option>
                                                    <option value="admin">{{trans('Dashboard/login_trans.admin')}}</option>
                                                </select>
                                            </div>


                                            {{--form user--}}
                                            <div class="panel" id="user">
                                                <h2>الدخول كمريض</h2>
                                                <form method="POST" action="{{ route('login.user') }}">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label>Email</label> <input  class="form-control" placeholder="Enter your email" type="email" name="email" :value="old('email')" required autofocus>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Password</label> <input class="form-control" placeholder="Enter your password"   type="password"name="password" required autocomplete="current-password" >
                                                    </div><button type="submit" class="btn btn-main-primary btn-block">Sign In</button>
                                                    <div class="row row-xs">
                                                        <div class="col-sm-6">
                                                            <button class="btn btn-block"><i class="fab fa-facebook-f"></i> Signup with Facebook</button>
                                                        </div>
                                                        <div class="col-sm-6 mg-t-10 mg-sm-t-0">
                                                            <button class="btn btn-info btn-block"><i class="fab fa-twitter"></i> Signup with Twitter</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="main-signin-footer mt-5">
                                                    <p><a href="">Forgot password?</a></p>
                                                    <p>Don't have an account? <a href="{{ url('/' . $page='signup') }}">Create an Account</a></p>
                                                </div>
                                            </div>

                                            {{--form admin--}}
                                            <div class="panel" id="admin">
                                                <h2>الدخول ادمن</h2>
                                                <form method="POST" action="{{ route('login.admin') }}">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label>Email</label> <input  class="form-control" placeholder="Enter your email" type="email" name="email" :value="old('email')" required autofocus>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Password</label> <input class="form-control" placeholder="Enter your password"   type="password"name="password" required autocomplete="current-password" >
                                                    </div><button type="submit" class="btn btn-main-primary btn-block">Sign In</button>
                                                    <div class="row row-xs">
                                                        <div class="col-sm-6">
                                                            <button class="btn btn-block"><i class="fab fa-facebook-f"></i> Signup with Facebook</button>
                                                        </div>
                                                        <div class="col-sm-6 mg-t-10 mg-sm-t-0">
                                                            <button class="btn btn-info btn-block"><i class="fab fa-twitter"></i> Signup with Twitter</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="main-signin-footer mt-5">
                                                    <p><a href="">Forgot password?</a></p>
                                                    <p>Don't have an account? <a href="{{ url('/' . $page='signup') }}">Create an Account</a></p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End -->
                </div>
            </div><!-- End -->
        </div>
    </div>
@endsection
@section('js')


    <script>
        $('#sectionChooser').change(function(){
            var myID = $(this).val();
            $('.panel').each(function(){
                myID === $(this).attr('id') ? $(this).show() : $(this).hide();
            });
        });
    </script>
@endsection

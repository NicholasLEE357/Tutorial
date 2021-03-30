
 

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Options Admin - Responsive Web Application Kit - Login</title>

        <!-- ========== COMMON STYLES ========== --> 

        <link href="{{ asset('templete/css/bootstrap.min.css') }}" media="screen" >
        <link href="{{ asset('templete/css/font-awesome.min.css') }}" media="screen">
        <link href="{{ asset('templete/css/animate-css/animate.min.css') }}" media="screen">

        <!-- ========== PAGE STYLES ========== -->
        <link href="{{ asset('templete/css/icheck/skins/flat/blue.css') }}" rel="stylesheet">
        <!-- ========== THEME CSS ========== --> 
        <link href="{{ asset('templete/css/main.css') }}" rel="stylesheet">
        <!-- ========== MODERNIZR ========== -->
        <script src="{{ asset('templete/js/bar-chart.js') }}" defer></script> 
    </head>
    <body class="">
        <div class="main-wrapper">

            <div class="login-bg-color bg-gray">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel login-box">
                            <div class="panel-heading">
                                <div class="panel-title text-center">
                                    <h4>Options - Admin Register</h4>
                                </div>
                            </div>
                            <div class="panel-body p-20">

                                <div class="section-title">
                                    <p class="sub-title text-muted">Admin Register</p>
                                </div>

                                <form method="POST" action="{{ route('admin.register') }}">   
                                     @csrf
                                    <div class="form-group left-icon">
                                		<label for="name" class="col-sm-3 control-label">{{ __('Name') }}</label>
                                		<div class="col-sm-9">
                                            <span class="glyphicon glyphicon-user form-left-icon"></span>
                                			<input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus id="name" placeholder="Enter Your Full Name">
                                            @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                            @enderror                                        
                                        </div>
                                	</div>

                                    <div class="form-group left-icon">
                                		<label for="exampleInputEmail1" class="col-sm-3 control-label">{{ __('Email') }}</label>
                                		<div class="col-sm-9">
                                            <span class="glyphicon glyphicon-envelope form-left-icon"></span>
                                			<input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" id="exampleInputEmail1" placeholder="Enter Your Email Id">
                                            @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                            @enderror                                        
                                        </div>
                                        </div>
                                	</div>

                                    <div class="form-group left-icon">
                                		<label for="exampleInputPassword1" class="col-sm-3 control-label">{{ __('Password') }}</label>
                                		<div class="col-sm-9">
                                            <span class="glyphicon glyphicon-tags form-left-icon"></span>
                                			<input type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="email" id="exampleInputPassword1" placeholder="Enter Password">
                                            @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                            @enderror                                        
                                        </div>
                                    </div>

                                    <div class="form-group left-icon">
                                    <label for=" " class="col-sm-3 control-label">{{ __('Confirm Password') }}</label>
                                    <div class="col-md-9">
                                    <span class="glyphicon glyphicon-tags form-left-icon"></span>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"placeholder="Enter Confirm Password">
                                    </div>
                                     </div>

                                	</div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-9">
                                            <div class="checkbox op-check">
                                                <label>
                                                    <input type="checkbox" name="remember" class="flat-blue-style" checked> <span class="ml-10">I agree <a href="pages-register-2.html#">terms & conditions</a></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                                </form>

                                <hr>

                                <h5 class="text-center mt-10 mb-20">Or Register With</h5>

                                <div class="text-center">
                                    <button type="button" class="btn btn-primary bg-primary-600 btn-labeled">Facebook<span class="btn-label btn-label-right"><i class="fa fa-facebook"></i></span></button>
                                    <button type="button" class="btn btn-primary bg-primary-300 btn-labeled ml-5">Twitter<span class="btn-label btn-label-right"><i class="fa fa-twitter"></i></span></button>
                                    <button type="button" class="btn btn-danger bg-danger-300 btn-labeled ml-5">Google<span class="btn-label btn-label-right"><i class="fa fa-google-plus"></i></span></button>
                                </div>
                                <!-- /.text-center -->

                            </div>
                        </div>
                        <!-- /.panel -->
                        <p class="text-muted text-center"><small>Copyright © SaltTechno 2017</small></p>
                    </div>
                    <!-- /.col-md-6 col-md-offset-3 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /. -->

        </div>
        <!-- /.main-wrapper -->

        <!-- ========== COMMON JS FILES ========== -->
        
    <script src="{{ asset('templete/js/jquery/jquery-2.2.4.min.js') }}" defer></script>  
    
    <script src="{{ asset('templete/js/bootstrap/bootstrap.min.js') }}" defer></script>  
    
    <script src="{{ asset('templete/js/jquery/jquery-2.2.4.min.js') }}" defer></script>  
    
    <script src="{{ asset('templete/jsjquery/jquery-2.2.4.min.js') }}" defer></script>  
    
    <script src="{{ asset('templete/js/pace/pace.min.js') }}" defer></script>  
    
    <script src="{{ asset('templete/js/lobipanel/lobipanel.min.js') }}" defer></script>  
    
    <script src="{{ asset('templete/js/iscroll/iscroll.js') }}" defer></script>  

 

        <!-- ========== PAGE JS FILES ========== -->  
        
    <script src="{{ asset('templete/js/modernizr/modernizr.min.js') }}" defer></script> 
    
    <script src="{{ asset('templete/js/icheck/icheck.min.js') }}" defer></script>  

        <!-- ========== THEME JS ========== -->
        
    <script src="{{ asset('templete/js/main.js') }}" defer></script>   
        <script>
            $(function(){
                $('input.flat-blue-style').iCheck({
                    checkboxClass: 'icheckbox_flat-blue'
                });
            });
        </script>

        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
    </body>
</html>

<!-- @extends('admin.auth.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.register') }}">  //put admin.register
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection -->

 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Options Admin - Responsive Web Application Kit - Login</title>

        <!-- ========== COMMON STYLES ========== -->
        <link href="{{ asset('templete/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('templete/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('templete/css/animate-css/animate.min.css') }}" rel="stylesheet">
         

        <!-- ========== PAGE STYLES ========== -->
        <link href="{{ asset('templete/css/prism/prism.css') }}" media="screen" > 

        <!-- ========== THEME CSS ========== -->
        
        <link href="{{ asset('templete/css/main.css') }}" media="screen" > 
        <link rel="stylesheet" href="css/" media="screen" >

        <!-- ========== MODERNIZR ========== -->
        <script src="{{ asset('templete/js/modernizr/modernizr.min.js') }}" defer></script>  
    </head>
    <body class="">
        <div class="main-wrapper">

            <div class="">
                <div class="row">
                    <div class="col-lg-6 visible-lg-block">
                        <img src="templete/images/photo-1.jpg" alt="Options - Admin Template" class="img-responsive">
                    </div>
                    <!-- /.col-lg-6 -->

                    <div class="col-lg-6">
                        <section class="section">
                            <div class="row mt-40">
                                <div class="col-md-10 col-md-offset-1 pt-50">

                                    <div class="row mt-50 ">
                                        <div class="col-md-11">
                                            <div class="panel">
                                                <div class="panel-heading">
                                                    <div class="panel-title text-center"> 
                                                    </div>
                                                </div>
                                                <div class="panel-body p-20">

                                                    <div class="section-title">
                                                        <p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    </div>

                                                    <form method="POST" action="{{ route('admin.login') }}"> //put admin.login
                                                     @csrf
                                                    	<div class="form-group">
                                                    		<label for="inputEmail3" class="col-sm-2 control-label">{{ __('E-Mail Address') }}</label>
                                                    		<div class="col-sm-10">
                                                    			<input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
                                                                        @error('email')
                                                                         <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                         </span>
                                                                          @enderror
                                                            </div>
                                                    	</div>
                                                    	<div class="form-group">
                                                    		<label for="inputPassword3" class="col-sm-2 control-label">{{ __('Password') }}</label>
                                                    		<div class="col-sm-10">
                                                    			<input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                                                                @error('password')
                                                                <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                                </span>
                                                                 @enderror
                                                            </div>
                                                    	</div>
                                                    	<div class="form-group">
                                                    		<div class="col-sm-offset-2 col-sm-10">
                                                    			<div class="checkbox">
                                                    				<label>
                                                    					<input type="checkbox"> Remember me
                                                    				</label>
                                                    			
                                                                </div>
                                                    		</div>
                                                    	</div>
                                                        <div class="form-group mt-20">
                                                    		<div class="col-sm-offset-2 col-sm-10">
                                                            

                                                            @if (Route::has('password.request'))
                                    <a href="{{ route('admin.password.request') }}" class="form-link"><small class ="muted-text">Forgot Password?</small></a> 
                                        
                                @endif
                                                                <button type="submit" class="btn btn-success btn-labeled pull-right">Sign in<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                                    		</div>
                                                    	</div>
                                                    </form>

                                                    <hr>

                                                    <h5 class="text-center mt-10 mb-20">Or Login With</h5>

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
                                        <!-- /.col-md-11 -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.col-md-12 -->
                            </div>
                            <!-- /.row -->
                        </section>

                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /. -->

        </div>
        <!-- /.main-wrapper -->

        <!-- ========== COMMON JS FILES ========== --> 
        <script src="{{ asset('templete/js/jquery/jquery-2.2.4.min.js') }}" defer></script> 
        <script src="{{ asset('templete/js/jquery-ui/jquery-ui.min.js') }}" defer></script> 
        <script src="{{ asset('templete/js/bootstrap/bootstrap.min.js') }}" defer></script> 
        <script src="{{ asset('templete/js/pace/pace.min.js') }}" defer></script> 
        <script src="{{ asset('templete/js/lobipanel/lobipanel.min.js') }}" defer></script>  
        <script src="{{ asset('templete/js/iscroll/iscroll.js') }}" defer></script>
        <!-- ========== PAGE JS FILES ========== -->

        <!-- ========== THEME JS ========== -->
        
        <script src="{{ asset('templete/js/main.js') }}" defer></script> 
        <script>
            $(function(){

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
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.login') }}"> //put admin.login
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('admin.password.request') }}"> //admin.password
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 -->
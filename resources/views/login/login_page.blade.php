@extends('layouts.loginmaster')

@section('title','Login Page')

@section('content')

    <!-- Login Div Start Here -->
    <div class="login animated flipInY" id="logindiv">   
        <div class="text-center logo">
            <img src="{{url('assets/images/logo-c.svg')}}" alt="logo">
        </div>

        <form role="form" class="loginForm">

            <div class="form-group">
                <div class="input-icon">
                    <input type="email" class="form-control" name="lgn_email" placeholder="email@example.com">
                </div>
            </div>

            <div class="form-group">
                <div class="input-icon">
                    <input type="password" class="form-control" name="lgn_pwd" placeholder="Password">
                </div>
            </div>                        

            <div class="clearfix">

                <div class="checkbox pull-left">
                    <div class="mk-trc" data-style="check">
                        <input id="chkRemember" type="checkbox">
                        <label for="chkRemember"> Remember Me</label>
                    </div>
                </div>

                <a href="javascript:void(0);" class="pull-right lnkForgot">Forgot Password?</a>
            </div>                        

            <div class="clearfix">
                <button type="submit" class="btn btn-primary pull-right">LOGIN</button>
            </div>
            
            <div class="clearfix mt-md">
                If you don't have an account <a href="javascript:;" class="lnkRegister">Register</a> here
            </div>
        </form>

    </div>  
    <!-- Login Div Ends Here -->
    
    <!-- Forgot Div Start Here -->
    <div class="login animated flipInY" id="forgotDiv">  
        <div class="text-center logo">
            <img src="assets/images/logo-c.svg" alt="logo">
        </div>

        <form role="form" class="ForgotForm">

            <div class="clearfix">
                <p>Enter your e-mail address below to reset your password.</p>
            </div>

            <div class="form-group">
                <div class="input-icon">
                    <input type="email" class="form-control" name="forgot_email" placeholder="email@example.com">
                </div>
            </div>                        

            <div class="clearfix">
                <button type="button" class="btn btn-danger pull-left lnkLogin">BACK</button>
                <button type="submit" class="btn btn-primary pull-right">SUBMIT</button>
            </div>     

        </form>


    </div>  
    <!-- Forgot Div End Here -->
    
    <!-- Register Div Start Here -->
    <div class="login animated flipInY" id="registerDiv">  
        <div class="text-center logo">
            <img src="assets/images/logo-c.svg" alt="logo">
        </div>

        <form role="form" class="registerForm">
            
            <div class="form-group">
                <div class="input-icon">
                    <input type="text" class="form-control" name="register_fulName" placeholder="Full Name">
                </div>
            </div>                        
            
            <div class="form-group">
                <div class="input-icon">
                    <input type="email" class="form-control" name="register_email" placeholder="email@example.com">
                </div>
            </div>                        
            
            <div class="form-group">
                <div class="input-icon">
                    <input type="password" class="form-control" name="forgot_password" placeholder="Password">
                </div>
            </div>                        
            
            <div class="form-group">
                <div class="input-icon">
                    <input type="password" class="form-control" name="forgot_cpassword" placeholder="Confirm Password">
                </div>
            </div>                        

            <div class="clearfix">
                <button type="button" class="btn btn-danger pull-left lnkLogin">BACK</button>
                <button type="submit" class="btn btn-primary pull-right">REGISTER</button>
            </div>     

        </form>

    </div>  
    <!-- Register Div End Here -->
@endsection
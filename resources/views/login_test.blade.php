@extends('spark::layouts.default_layout')

@section('title', 'Page Title')

@section('content')
<section class="main-screen__primary">
      <div class="container">
        <div class="form-login col-lg-6 col-md-8 offset-md-2 offset-lg-3 d-flex justify-content-center">
          <form action="">
            <h1>Log in</h1>
            <div class="d-flex flex-column align-items-center align-items-lg-start align-items-md-start align-items-xl-start align-items-sm-start">
              <label for="login-email" class="label-regular">Your username or e-mail</label>
              <input id="login-email" class="input-regular" type="text" placeholder="">
            </div>
            <div class="d-flex flex-column align-items-center align-items-lg-start align-items-md-start align-items-xl-start align-items-sm-start">
              <label for="login-password" class="label-regular">Password</label>
              <input id="login-password" class="input-regular" type="password" placeholder="">
            </div>
            <div class="d-flex checkbox-block justify-content-center  justify-content-lg-start justify-content-xl-start justify-content-md-start justify-content-sm-start">
              <div class="checkbox-container">
                  <input type="checkbox">
                  <span class="checkmark"></span>
              </div>
              <span class="text-for-checkbox">Keep me signed in</span>
            </div>
            <div class="d-flex checkbox-block justify-content-center  justify-content-lg-start justify-content-xl-start justify-content-md-start justify-content-sm-start">
              <button type="submit" class="sign-in-btn">Sign in</button>
            </div>
            <div class="d-flex justify-content-center">
                <a href="#" class="forgot-btn">Forgot Password or Username?</a>
            </div>
            <div class="d-flex or-block">
              <hr>
              <span>OR</span>
              <hr>
            </div>
            <div class="d-flex justify-content-center login-social">
              <a href="#">
                <img src="img/icons/twitter.svg" alt="">
              </a>
              <a href="#">
                <img src="img/icons/facebook.svg" alt="">
              </a>
              <a href="#">
                <img src="img/icons/google-plus.svg" alt="">
              </a>
            </div>
          </form>
        </div>
      </div>
    </section>
@endsection
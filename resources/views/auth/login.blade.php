@extends('layouts.app')

@section('content')
<div class="login-box" >
  <div class="login-logo">
    <a href="../../index2.html"><b>Sg</b>Marcial</a>
  </div>


    <div class="login-box-body">
      <p class="login-box-msg">Sign in to start your session</p>



                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group has-feedback">
                          <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
                          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

                            <div class="">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>




                        <div class="form-group has-feedback">
                          <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"  placeholder="Contraseña" required>
                          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                            <div class="">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                          <div class="col-md-6 offset-md-4">
                              <div class="form-check">
                                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                  <label class="form-check-label" for="remember">
                                      {{ __('Remember Me') }}
                                  </label>
                              </div>
                          </div>
                          <!-- /.col -->
                          <div class="col-xs-6">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">
                                {{ __('Login') }}
                            </button>

                          </div>


                          <!-- /.col -->
                        </div>

                        <div class="form-group row">

                        </div>
                        <div class="social-auth-links text-center">
                          <p>- OR -</p>
                          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
                            Facebook</a>
                          <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
                            Google+</a>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">


                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
              
    </div>
</div>
@endsection

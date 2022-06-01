@extends('layouts.auth_app')

@section('content')

<div class="theme-layout">
	<div class="container-fluid pdng0">
		<div class="row merged">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="land-featurearea">
					<div class="land-meta">
						<img src="{{ asset('assets/images/logo.png') }}" alt="">
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="login-reg-bg">
					<div class="log-reg-area sign">
						<h2 class="log-title">{{__('Login')}}</h2>
							<p>
								{{__('Are you a new member ?')}} 
								<a href="{{route('register')}}" title="register">{{__('Join now')}}</a>
							</p>

                        <form method="POST" action="{{ route('login') }}">
                        @csrf

						<div class="form-group">	
							  <input id="email" type="email" class="mtrl-select @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
							  <label class="control-label" for="input">{{ __('Email Address') }}</label><i class="mtrl-select"></i>
							
							  @error('email')
                                    <small class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </small>
                              @enderror
						</div>

						<div class="form-group">	
						     <input id="password" type="password" class="mtrl-select @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
							  <label class="control-label" for="input">{{ __('Password') }}</label><i class="mtrl-select"></i>
							
							  @error('password')
                                    <small class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
									</small>
                                @enderror
						</div>

                        <div class="d-flex">

							<div class="checkbox">
								<label for="">
									<input type="checkbox" name="remember" /><i class="check-box"></i>
									{{__('Remember Me')}}
								</label>
							</div>

							@if (Route::has('password.request'))
										<a class="forgot-pwd" href="{{ route('password.request') }}">
											{{ __('Forgot Your Password?') }}
										</a>
							@endif
						</div>

						<div class="submit-btns">
							<button class="mtr-btn signin" type="submit"><span>Login</span></button>
						</div>

                    </form>
					</div>
					<div class="log-reg-area reg">
						<h2 class="log-title">Register</h2>
							<p>
								Don’t use Winku Yet? <a href="#" title="">Take the tour</a> or <a href="#" title="">Join now</a>
							</p>
						<form method="post">
							<div class="form-group">	
							  <input type="text" required="required"/>
							  <label class="control-label" for="input">First & Last Name</label><i class="mtrl-select"></i>
							</div>
							<div class="form-group">	
							  <input type="text" required="required"/>
							  <label class="control-label" for="input">User Name</label><i class="mtrl-select"></i>
							</div>
							<div class="form-group">	
							  <input type="password" required="required"/>
							  <label class="control-label" for="input">Password</label><i class="mtrl-select"></i>
							</div>
							<div class="form-radio">
							  <div class="radio">
								<label>
								  <input type="radio" name="radio" checked="checked"/><i class="check-box"></i>Male
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="radio"/><i class="check-box"></i>Female
								</label>
							  </div>
							</div>
							<div class="form-group">	
							  <input type="text" required="required"/>
							  <label class="control-label" for="input"><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6c29010d05002c">[email&#160;protected]</a></label><i class="mtrl-select"></i>
							</div>
							<div class="checkbox">
							  <label>
								<input type="checkbox" checked="checked"/><i class="check-box"></i>Accept Terms & Conditions ?
							  </label>
							</div>
							<a href="#" title="" class="already-have">Already have an account</a>
							<div class="submit-btns">
								<button class="mtr-btn signup" type="button"><span>Register</span></button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

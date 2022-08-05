@extends('layouts.admin.master')

@section('content')
<form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
	@csrf
	<span class="login100-form-title p-b-26">
		Welcome
	</span>
	<span class="login100-form-title p-b-48">
		<i class="zmdi zmdi-font"></i>
	</span>

	<div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
		<input id="email" type="email" class="input100" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
		<span class="focus-input100" data-placeholder="{{ __('email') }}"></span>
	</div>

	<div class="wrap-input100 validate-input" data-validate="Enter password">
		<span class="btn-show-pass">
			<i class="zmdi zmdi-eye"></i>
		</span>
		<input id="password" type="password" class="input100" name="password" required autocomplete="current-password">
		<span class="focus-input100" data-placeholder="Password"></span>
	</div>

	<div class="container-login100-form-btn">
		<div class="wrap-login100-form-btn">
			<div class="login100-form-bgbtn"></div>
			<button type="submit" class="login100-form-btn">
				{{ __('Login') }}
			</button>
		</div>
	</div>

	<!-- <div class="row mb-3">
		<div class="col-md-6 offset-md-4">
			<div class="form-check">
				<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

				<label class="form-check-label" for="remember">
					{{ __('Remember Me') }}
				</label>
			</div>
		</div>
	</div> -->

	<div class="text-center p-t-10">
		<span class="txt1">
			Don’t have an account?
		</span>

		<a class="txt2" href="{{ route('register') }}">
			Sign Up
		</a>

		<div class="text-center p-t-10">
			@if (Route::has('password.request'))
				<a class="txtl" href="{{ route('password.request') }}">
					{{ __('Forgot Your Password?') }}
				</a>
			@endif
		</div>

		<div class="text-center p-t-10">
			<a class="txt1" href="{{ url ('/') }}">
				go to home
			</a>
		</div>
	</div>
</form>

@endsection
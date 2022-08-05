@extends('layouts.admin.master')

@section('content')

<form class="login100-form validate-form" method="POST" action="{{ route('password.email') }}">
@csrf
					<span class="login100-form-title p-b-26">
						Welcome Reset Password
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="email" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>


					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
                            Send Password Reset Link
							</button>
						</div>
					</div>


					
                


					</div>
				</form>

@endsection
@extends('layouts.admin.master')

@section('content')

<form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
@csrf
					<span class="login100-form-title p-b-26">
						Welcome Sing up
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>


                    <!-- 1 -->
					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="name">
						<span class="focus-input100" data-placeholder="Name"></span>
					</div>


                    <!-- 2 -->
					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="username">
						<span class="focus-input100" data-placeholder="Username"></span>
					</div>


                    <!-- 3 -->
					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="address">
						<span class="focus-input100" data-placeholder="Address"></span>
					</div>


					
                    <!-- 4 -->
					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="phone">
						<span class="focus-input100" data-placeholder="Phone"></span>
                    </div>


                    <!-- 5 -->
					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="email" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>


                    <!-- 6 -->
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password confirm">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password_confirmation">
						<span class="focus-input100" data-placeholder="password confirm"></span>
					</div>


                    
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button   type="submit" class="login100-form-btn">
								Register
							</button>
						</div>
					</div>

					<div class="text-center p-t-10">
						<span class="txt1">
							Don’t have an account?
						</span>

						<a class="txt2" href="{{ route('login') }}">
							login
						</a>
					<div class="text-center p-t-10">
						<a class="txtl" href="{{ route('password.request') }}">
								Forgot Password?
						</a>
					</div>

					<div class="text-center p-t-10">
                        <a class="txt1" href="{{ url ('/') }}">
                            go to home
                        </a>
                    </div>
					</div>
				</form>

@endsection
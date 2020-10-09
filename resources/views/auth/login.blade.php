@extends('auth.layout')

@section('content')
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
                <form action="{{route('login')}}" method="post" class="login100-form validate-form" >
				@csrf
					<span class="login100-form-title p-b-26">
						Welcomeaa
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>
                    <div>Email</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" ></span>
					</div>
                    <div>Password</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							
						</span>
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Login
							</button>
						</div>
					</div>

					<div class="text-center p-t-15">
						<span class="txt1">
							Don’t have an account?
						</span>

						<a class="txt2" href="{{route('register')}}">
							Sign Up
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection

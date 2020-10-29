@extends('auth.layout')

@section('content')
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
            <form method="POST" action="{{ route('register') }}" class="login100-form validate-form">
                        @csrf

						<img style="width:100%; margin-bottom:50px;" src="{{ asset('front-end/images2/goals.png')}}" alt="">
				
                    <div>Name</div>
                    <div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="name" >
						<span class="focus-input100" ></span>
					</div>
                    <div>Email</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" ></span>
					</div>
                    <div>Password</div>
					<div class="wrap-input100 validate-input" validate="Enter password">
						
						<input class="input100" type="password" name="password">
						<span class="focus-input100" ></span>
                    </div>
                    <div> Repeat Password</div>
                    <div class="wrap-input100 validate-input" data-validate="Enter password">
						
						<input class="input100" type="password" name="password_confirmation">
						<span class="focus-input100" ></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Register
							</button>
						</div>
					</div>

					<div class="text-center p-t-15">
						<span class="txt1">
							Already have an account?
						</span>

						<a class="txt2" href="{{route('login')}}">
							Login
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection
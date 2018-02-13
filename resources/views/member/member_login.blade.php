@extends("front.layout")
@section("member_content")

<div class="full-screen d-flex flex-column align-items-center justify-content-center" style="background-image: url('/assets/img/login-cover2.jpg')">
	<div class="login-holder">
		
		<div class="logo-holder">
			{{-- <img src="/assets/img/anyland-logo.jpg" alt=""> --}}
            <img src="/assets/img/allbyall-logo.png" alt="" width="200">
		</div>

   		<div class="signin-container mt-4">
   			<form method="post" action="/member/dashboard">
    			{{csrf_field()}}
    			<div class="register-form">
    				<input type="text" name="user_email" id="user_email" placeholder="Username">
    			</div>
    			<div class="register-form">
    				<input type="password" name="user_password" id="user_password" placeholder="Password">
    			</div>
    			<div class="button-container mt-4">
    				<button class="btn btn-login" type="submit">LOGIN</button>
    			</div>
    		</form>
    	</div>
		
		<div class="no-account">
			<div class="text">Don't have an account yet? <a href="/register"> Register Here</a></div>
		</div>

		<div class="login-footer">
			<div class="text">All Rights Reserved &copy; 2018 anyband.com</div>
		</div>

	</div>
</div>
@endsection

@section("css")
<link rel="stylesheet" href="/assets/css/login.css">
@endsection

@section("script")
@endsection

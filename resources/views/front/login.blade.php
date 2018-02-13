@extends("front.layout")
@section("member_content")

<div class="full-screen" style="background-image: url('/assets/img/login-cover.png')">
	<div class="login-holder">
		
		<div class="logo-holder">
			<img src="/assets/img/anyland-logo.jpg" alt="">
		</div>

   		<div class="signin-container">
   			<form method="post" action="/dashboard">
    			{{csrf_field()}}
    			<div class="register-form">
    				<input type="text" name="user_email" id="user_email" placeholder="Username">
    			</div>
    			<div class="register-form">
    				<input type="password" name="user_password" id="user_password" placeholder="Password">
    			</div>
    			<div class="button-container">
    				<button class="btn btn-login" type="submit">LOGIN</button>
    			</div>
    		</form>
    	</div>
		
		<div class="no-account">
			<div class="text">Don't have an account yet? <a href="/registration"> Register Here</a></div>
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

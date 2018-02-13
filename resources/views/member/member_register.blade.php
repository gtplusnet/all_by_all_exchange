@extends("front.layout")
@section("member_content")

<div class="full-screen d-flex flex-column align-items-center justify-content-center" style="background-image: url('/assets/img/login-cover2.jpg')">
	<div class="login-holder">
		
		<div class="logo-holder">
			<img src="/assets/img/allbyall-logo.png" alt="" width="200">
		</div>

   		<div class="registration-container">
   			<form method="post" action="/dashboard">
    			{{csrf_field()}}

                <div class="flex-me">
                    <div class="left">
                        <div class="form-group">
                            <input type="text" name="first_name" id="user_email" placeholder="First Name">
                            <input type="password" name="email_add" id="user_password" placeholder="Email Address">
                            <input type="password" name="user_password" id="user_password" placeholder="Password">
                        </div>
                    </div>

                    <div class="right">
                        <div class="form-group">
                            <input type="text" name="last_name" id="user_email" placeholder="Last Name">
                            <input type="password" name="phone_number" id="user_password" placeholder="Phone Number">
                            <input type="password" name="repeat_pass" id="user_password" placeholder="Repeat Password">
                        </div>
                    </div>
                </div>

                <div class="bottom">
                    <div class="terms-and-condition">
                        <div class="text">Signing up implies you agree to our <a href="javascript:"> Terms of Use</a></div>
                    </div>

                    <div class="button-container">
                        <button class="btn btn-register" type="submit">REGISTER</button>
                    </div>
                </div>

    		</form>

    	</div>

		<div class="register-footer">
			<div class="text">All Rights Reserved &copy; 2018 anyband.com</div>
		</div>

	</div>
</div>
@endsection

@section("css")
<link rel="stylesheet" href="/assets/css/register.css">
@endsection

@section("script")
@endsection

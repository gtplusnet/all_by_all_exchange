@extends("front.layout")
@section("member_content")

<div class="full-screen d-flex flex-column align-items-center justify-content-center" style="background-image: url('/assets/img/login-cover4.jpg')">
	<div class="login-holder">
		<div class="logo-holder">
			<img src="/assets/img/allbyall-logo.png" alt="" width="200">
		</div>
   		<div class="registration-container">
   			<form method="post" action="/member/dashboard">
    			{{csrf_field()}}
                <div class="flex-me">
                    <div class="left">
                        <div class="form-group d-flex flex-column">
                            <input type="text" name="first_name" id="user_email" placeholder="First Name">
                            <input type="text" name="email_add" id="user_password" placeholder="Email Address">
                            <input type="password" name="user_password" id="user_password" placeholder="Password">
                        </div>
                    </div>
                    <div class="right">
                        <div class="form-group d-flex flex-column">
                            <input type="text" name="last_name" id="user_email" placeholder="Last Name">
                            <input type="text" name="phone_number" id="user_password" placeholder="Phone Number">
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

			{{-- <form method="post" action="/member/dashboard" class="mt-4">
				{{csrf_field()}}
				<div class="flex-me form-row">
					<div class="col-lg-6">
						<input type="text" class="form-control my-2" placeholder="First Name">
					</div>
					<div class="col-lg-6">
						<input type="text" class="form-control my-2" placeholder="Last Name">
					</div>
					<div class="col-lg-6">
						<input type="text" class="form-control my-2" placeholder="Email Address">
					</div>
					<div class="col-lg-6">
						<input type="text" class="form-control my-2" placeholder="Phone Number">
					</div>
					<div class="col-lg-6">
						<input type="text" class="form-control my-2" placeholder="Password">
					</div>
					<div class="col-lg-6">
						<input type="text" class="form-control my-2" placeholder="Repeat Password">
					</div>
					<div class="bottom">
	                    <div class="terms-and-condition">
	                        <div class="text">Signing up implies you agree to our <a href="javascript:"> Terms of Use</a></div>
	                    </div>
	                    <div class="button-container">
	                        <button class="btn btn-register" type="submit">REGISTER</button>
	                    </div>
	                </div>
				</div>
			</form> --}}

    	</div>
		<div class="register-footer">
			<div class="text">All Rights Reserved &copy; 2018 allbyall-exchange.com</div>
		</div>
	</div>
</div>
@endsection

@section("css")
<link rel="stylesheet" href="/assets/css/register.css">
@endsection

@section("script")
@endsection

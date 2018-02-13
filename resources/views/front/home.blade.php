@extends("front.layout")
@section("member_content")
	<div class="content">
		<div class="full-screen" style="background-image: url('/assets/img/login-cover.png')">
			<div class="login-holder">
				
				<div class="logo-holder">
					<img src="/assets/img/anyland-logo.jpg" alt="">
				</div>
				
				<div class="buttons">
					<div class="button-container">
						<button onclick="location.href='/login'" class="btn btn-login" type="submit">LOGIN</button>
					</div>
					<div class="button-container">
						<button onclick="location.href='/registration'" class="btn btn-create-account" type="submit">CREATE AN ACCOUNT</button>
					</div>
				</div>
				
				<div class="landing-footer">
					<div class="text">All Rights Reserved &copy; 2018 anyband.com</div>
				</div>

			</div>
		</div>
	</div>
@endsection

@section("css")
<link rel="stylesheet" href="/assets/css/home.css">
@endsection

@section("script")

@endsection
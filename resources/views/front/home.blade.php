@extends("front.layout")
@section("member_content")
	<div class="content">
		<div class="full-screen d-flex flex-column align-items-center justify-content-center" style="background-image: url('/assets/img/login-cover4.jpg')">
			<div class="login-holder">
				<div class="logo-holder">
					{{-- <img src="/assets/img/anyland-logo.jpg" alt=""> --}}
		            <img src="/assets/img/allbyall-logo.png" alt="" width="200">
				</div>
				<div class="buttons mt-5">
					<div class="button-container">
						<button onclick="location.href='/member/login'" class="btn btn-login" type="submit">LOGIN</button>
					</div>
					<div class="button-container">
						<button onclick="location.href='/member/register'" class="btn btn-create-account" type="submit">CREATE AN ACCOUNT</button>
					</div>
				</div>
				<div class="landing-footer">
					<div class="text">All Rights Reserved &copy; 2018 allbyall-exchange.com</div>
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

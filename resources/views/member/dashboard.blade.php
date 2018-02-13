@extends("front.member_layout")
@section("content")
	<div class="content">

		<nav class="bottom-nav">
			<div class="container-fluid">
				<div class="text-header">My Wallet <span>You can send a payment request to anyone with a phone number, email address, or to your Facebook friends.  </span></div>
			</div>
		</nav>

		<div class="container">
			<!--PESO AND WALLET-->
			<div class="row clearfix">
				<div class="col-md-6">
					<div class="holder match-height">
						<div class="top">
							<div class="holder-title">PESO WALLET</div>
							<div class="button-holder">
								<a class="btn btn-wall-add" href="javascript:"> WALLET ADDRESS <img src="/assets/img/wall-add.png" alt=""></a>
							</div>
						</div>
						<div class="bottom">
							<div class="row clearfix">
								<div class="col-md-8 col-sm-8">
									<div class="left">
										<div class="text-price">PHP 0.00</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-4">
									<div class="right">
										<div class="btn-container">
											<a class="btn btn-request" href=""><img src="/assets/img/request-icon.png" alt=""> <span>REQUEST</span></a>
										</div>
										<div class="btn-container">
											<a class="btn btn-send" href=""><img src="/assets/img/send-icon.png" alt=""> <span style="padding: 0 14px;">SEND</span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="holder match-height">
						<div class="top">
							<div class="holder-title">ALL WALLET</div>
							<div class="button-holder">
								<a class="btn btn-convert" href="javascript:">CONVERT <img src="/assets/img/convert-icon.png" alt=""></a>
							</div>
						</div>
						<div class="bottom">
							<div class="row clearfix">
								<div class="col-md-6 col-sm-6">
									<div class="all-wallets">
										<div class="converted-price php">PHP 0.00</div>
										<div class="currency">PESO</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="all-wallets">
										<div class="converted-price btc">0.000000</div>
										<div class="currency">BITCOIN</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!--GET STARTED WITH A BAND-->
			<div class="row clearfix">
				<div class="col-md-12">
					<div class="holder">
						<div class="top">
							<div class="holder-title">GET STARTED WITH ANY BAND</div>
						</div>
						<div class="bottom">
							<div class="row clearfix">
								<div class="col-md-3 col-sm-3">
									<div class="icon-holder">
										<img src="/assets/img/connect-to-fb-icon.png" alt="">
									</div>
									<div class="label-container">
										<div class="label1">Connect to Facebook</div>
										<div class="label2">Send and recieve money from your friends.</div>
									</div>
								</div>
								<div class="col-md-3 col-sm-3">
									<div class="icon-holder">
										<img src="/assets/img/submit-ver-icon.png" alt="">
									</div>
									<div class="label-container">
										<div class="label1">Submit your verification</div>
										<div class="label2">Make your account more secure.</div>
									</div>
								</div>
								<div class="col-md-3 col-sm-3">
									<div class="icon-holder">
										<img src="/assets/img/add-funds-icon.png" alt="">
									</div>
									<div class="label-container">
										<div class="label1">Add Funds</div>
										<div class="label2">Cash in instantly and use your funds to make payments.</div>
									</div>
								</div>
								<div class="col-md-3 col-sm-3">
									<div class="icon-holder">
										<img src="/assets/img/earn-reward-icon.png" alt="">
									</div>
									<div class="label-container">
										<div class="label1">Earn Rewards</div>
										<div class="label2">Share your promo codes and get an unbeatable rewards.</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!--HISTORY AND REQUEST-->
			<div class="row clearfix">
				<div class="col-md-12">
					<div class="holder">
						<div class="top">
							<div class="holder-title">
								<nav class="nav">
									<a class="active tab-link history" data-toggle="tab" href="#history">HISTORY</a>
									<span>|</span>
									<a class="tab-link request" data-toggle="tab" href="#request">REQUEST</a>
								</nav>
							</div>
							<div class="button-holder">
								<a class="btn btn-down-history" href="javascript:">DOWNLOAD HISTORY <img src="/assets/img/download-history-icon.png" alt=""></a>
							</div>
						</div>
						<div class="bottom tab-content">
							<div id="history" class="tab-pane fade in active">
								<div class="explaination">There are no transactions yet.</div>
							</div>
							<div id="request" class="tab-pane fade">
								<div class="explaination">There are no request yet.</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
@endsection
@section("css")
<link rel="stylesheet" href="/assets/css/dashboard.css">
@endsection

@section("script")

@endsection
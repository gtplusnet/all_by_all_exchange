@extends("member.member_layout")
@section("content")
<div class="content">
	<nav class="bottom-nav">
		<div class="container-fluid">
			<div class="text-header">Cash Out <span>This process requires you to take picture. Both your face and the text on your ID should be clearly visible. </span></div>
		</div>
	</nav>
	<div class="content-wrapper">
		<div class="container">
			<div class="holder">
				{{-- <div class="head-text row no-gutters clearfix">
					<div class="col-md-3 col-sm-3 col-xs-3"><div class="text-container t-center t-yellow">Method</div></div>
					<div class="col-md-3 col-sm-3 col-xs-3"><div class="text-container t-center">Amount</div></div>
					<div class="col-md-3 col-sm-3 col-xs-3"><div class="text-container t-center">Recipient</div></div>
					<div class="col-md-3 col-sm-3 col-xs-3"><div class="text-container t-center">Payment</div></div>
				</div> --}}
				<div class="head-text d-flex justify-content-between m-auto">
					<div><div class="text-container t-yellow">Method</div></div>
					<div><div class="text-container">Amount</div></div>
					<div><div class="text-container">Recipient</div></div>
					<div><div class="text-container">Payment</div></div>
				</div>
				<div class="head-text-img t-center"><img src="/assets/img/c2-step1.png"></div>
				{{-- <div class="head-text-2 row no-gutters clearfix mt-4">
					<div class="col-md-3 col-sm-3 col-xs-3"><div class="head-text-img2"><img src="/assets/img/cashout-vector.png"></div></div>
					<div class="col-md-9 col-sm-9 col-xs-9"><div class="text-container">How should we send the money?</div></div>
				</div> --}}
				<div class="head-text-2 d-flex align-items-center justify-content-center mt-4">
					<div class="head-text-img2"><img src="/assets/img/cashout-vector.png"></div>
					<div class="text-container">How should we send the money?</div>
				</div>
				<div class="cash-option row clearfix mt-5">
					<div class="col-md-4 col-sm-4 col-xs-4">
						<div class="per-option t-center match-height">
							<div class="icon-container"><img src="/assets/img/bank-depo.png"></div>
							<div class="title">BANK DEPOSIT</div>
							<div class="line-btn-y">CHOOSE</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-4">
						<div class="per-option t-center match-height">
							<div class="icon-container"><img src="/assets/img/money-remit.png"></div>
							<div class="title">MONEY REMITTANCE</div>
							<div class="line-btn-y">CHOOSE</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-4">
						<div class="per-option t-center match-height">
							<div class="icon-container"><img src="/assets/img/gcash.png"></div>
							<div class="title">VIA GCASH</div>
							<div class="line-btn-y">CHOOSE</div>
						</div>
					</div>
				</div>
				<p class="p-sm t-center mt-5">
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
				</p>
			</div>
		</div>
	</div>
</div>
@endsection
@section("css")
<link rel="stylesheet" href="/assets/css/cash_out.css">
@endsection

@section("script")
@endsection

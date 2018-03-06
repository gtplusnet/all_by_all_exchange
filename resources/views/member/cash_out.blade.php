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
				{{-- <div class="head-text-2 d-flex align-items-center justify-content-center mt-4">
					<div class="head-text-img2"><img src="/assets/img/cashout-vector.png"></div>
					<div class="text-container">How should we send the money?</div>
				</div> --}}
				{{-- <div class="cash-option row clearfix mt-5"> --}}
				<div class="cash-option d-flex align-items-center justify-content-center mt-4">
					{{-- STEP 1 --}}
					<div class="per-option t-center" id="step_1">
						<div class="icon-container"><img src="/assets/img/bank-depo.png"></div>
						<div class="title"><h5>How would you like to Cash In?</h5></div>
						<h6 class="mt-3">Over-the-Counter Banking</h6>
						<small class="text-muted d-block my-3">
							Processing Time: (Monday - Friday) 
							<br>
							<em>Orders placed by 10AM are delivered by 6PM. Later orders will be delivered by 6PM on the next business day.</em>
							<br><br>
							Fees: Free for branch accounts within Metro Manila.
						</small>
						<select name="" id="" class="form-control mb-2">
							<option value="BPI">BPI</option>
						</select>
						<small class="text-muted d-block my-3">
							If account is based outside Metro Manila, deposit fees may be applied by the bank.
						</small>
						<div class="line-btn-y" id="step1_next">NEXT</div>
					</div>

					{{-- STEP 2 --}}
					<div class="d-none per-option t-center" id="step_2">
						<div class="icon-container"><img src="/assets/img/bank-depo.png"></div>
						<div class="title"><h5>How much would you like to Cash In?</h5></div>
						<div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="0" aria-label="0" aria-describedby="basic-addon2">
                  <div class="input-group-append">
                    <span class="input-group-text">PHP</span>
                  </div>
                </div>
						<small class="text-muted">Processing Time: Orders placed before 10 AM are processed same business day. (Monday to Friday)</small>
                <table class="table table-striped mt-2 text-left table-bordered">
                	<tr>
                		<td><h6 style="font-size: 13px;">Payment Method</h6></td>
                		<td><h6 style="font-size: 13px;">BPI</h6></td>
                	</tr>
                	<tr>
                		<td><h6 style="font-size: 13px;">Recipient will get</h6></td>
                		<td><h6 style="font-size: 13px;">-</h6></td>
                	</tr>
                	<tr>
                		<td><h6 style="font-size: 13px;">Payout Fee</h6></td>
                		<td><h6 style="font-size: 13px;">-</h6></td>
                	</tr>
                	<tr>
                		<td><h6 style="font-size: 13px;">Amount Due</h6></td>
                		<td><h6 style="font-size: 13px;">-</h6></td>
                	</tr>
                </table>
                <div class="d-flex flex-row justify-content-center">
                <div class="col"><div class="line-btn-y" id="step2_back">BACK</div></div>
                <div class="col"><div class="line-btn-y" id="step2_next">NEXT</div></div>
                </div>
                
						
					</div>

					{{-- STEP 3 --}}
					<div class="d-none per-option t-center" id="step_3">
						<div class="icon-container"><img src="/assets/img/bank-depo.png"></div>
						<div class="title"><h5>Recipient Details</h5></div>
				<small class="my-0 py-0 font-weight-bold">Bank Account Number:</small>
                  <input type="text" class="form-control mb-2">
                  <small class="my-0 py-0 font-weight-bold">Account Holder Name:</small>
                  <input type="text" class="form-control mb-2">
                  <small class="my-0 py-0 font-weight-bold">Mobile Number (optional):</small>
                  <input type="text" class="form-control mb-2">
						<small class="text-muted">Processing Time: Orders placed before 10 AM are processed same business day. (Monday to Friday)</small>
                <table class="table table-striped mt-2 text-left table-bordered">
                	<tr>
                		<td><h6 style="font-size: 13px;">Payment Method</h6></td>
                		<td><h6 style="font-size: 13px;">BPI</h6></td>
                	</tr>
                	<tr>
                		<td><h6 style="font-size: 13px;">Recipient will get</h6></td>
                		<td><h6 style="font-size: 13px;">-</h6></td>
                	</tr>
                	<tr>
                		<td><h6 style="font-size: 13px;">Payout Fee</h6></td>
                		<td><h6 style="font-size: 13px;">-</h6></td>
                	</tr>
                	<tr>
                		<td><h6 style="font-size: 13px;">Amount Due</h6></td>
                		<td><h6 style="font-size: 13px;">-</h6></td>
                	</tr>
                </table>
                <div class="d-flex flex-row justify-content-centerx`">
                <div class="col"><div class="line-btn-y" id="step3_back">BACK</div></div>
                <div class="col"><div class="line-btn-y popup" id="step3_complete" link="/member/dashboard/cashout_complete_payment" size="md">COMPLETE PAYMENT</div></div>
                </div>
                
						
					</div>


					{{-- STEP 4 --}}
					<div class="d-none per-option t-center" id="step_4">
						<div class="icon-container"><img src="/assets/img/bank-depo.png"></div>
						<div class="title"><h5>Sell Order #123123</h5></div>
						<div class="alert alert-success p-3 my-3">
							<small>
								Thank you! We have received your payment. We will send you an email notification once we have processed your payout.
							</small>
							
						</div>
				
                <table class="table table-striped mt-2 text-left table-bordered">
                	<tr>
                		<td><h6 style="font-size: 13px;">Status</h6></td>
                		<td><h6 style="font-size: 13px;">Processing</h6></td>
                	</tr>
                	<tr>
                		<td><h6 style="font-size: 13px;">Payment Method</h6></td>
                		<td><h6 style="font-size: 13px;">BPI</h6></td>
                	</tr>
                	<tr>
                		<td><h6 style="font-size: 13px;">Bank Account Name</h6></td>
                		<td><h6 style="font-size: 13px;">-</h6></td>
                	</tr>
                	<tr>
                		<td><h6 style="font-size: 13px;">Bank Account Number</h6></td>
                		<td><h6 style="font-size: 13px;">-</h6></td>
                	</tr>
                </table>
                <div class="d-flex flex-row justify-content-center">
                <div class="col"><div class="line-btn-y" id="step4_cancel">Cancel Order</div></div>
                <div class="col"><div class="line-btn-y popup" id="step4_paidmark" link="/member/dashboard/cashout_complete_payment" size="md">Mark As Paid</div></div>
                </div>
                
						
					</div>


					{{-- <div class="col-md-4 col-sm-4 col-xs-4">
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
					</div> --}}
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

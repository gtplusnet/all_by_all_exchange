@extends("member.member_layout")
@section("content")
<div class="content">
	<nav class="bottom-nav">
		<div class="container-fluid">
			<div class="text-header">Cash In <span>This process requires you to take picture. Both your face and the text on your ID should be clearly visible. </span></div>
		</div>
	</nav>
	<div class="content-wrapper">
		<div class="container">
			<div class="holder">
				{{-- <div class="head-text row no-gutters clearfix">
					<div class="col-md-4 col-sm-4 col-xs-4"><div class="text-container t-yellow">Method</div></div>
					<div class="col-md-4 col-sm-4 col-xs-4"><div class="text-container t-center">Amount</div></div>
					<div class="col-md-4 col-sm-4 col-xs-4"><div class="text-container t-right">Payment</div></div>
				</div> --}}
				<div class="head-text d-flex justify-content-between m-auto">
					<div class="text-container t-yellow" id="method">Method</div>
					<div class="text-container" id="amount">Amount</div>
					<div class="text-container" id="payment">Payment</div>
				</div>
				<div class="head-text-img t-center"><img src="/assets/img/c-step1.png" id="cashin_steps"></div>
				{{-- <div class="head-text-2 row no-gutters clearfix mt-4">
					<div class="col-md-3 col-sm-3 col-xs-3"><div class="head-text-img2"><img src="/assets/img/cashin-vector.png"></div></div>
					<div class="col-md-9 col-sm-9 col-xs-9"><div class="text-container">How would you like to Cash-In?</div></div>
				</div> --}}
				{{-- <div class="head-text-2 d-flex align-items-center justify-content-between mt-4">
					<div class="head-text-img2"><img src="/assets/img/cashin-vector.png"></div>
					<div class="text-container" >How would you like to Cash-In?</div>
				</div> --}}
				{{-- <div class="cash-option mt-3 row clearfix"> --}}
				<div class="cash-option d-flex align-items-center justify-content-center cashin_step1">

					{{-- STEP 1 --}}
					<div class="per-option t-center" id="step_1">
						<div class="icon-container"><img src="/assets/img/bank-depo.png"></div>
						<div class="title"><h5>How would you like to Cash In?</h5></div>
						<h6 class="mt-3">Over-the-Counter Banking</h6>
						<select name="" id="" class="form-control mb-2">
							<option value="BPI">BPI</option>
						</select>
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
                <small class="text-muted">Processing Time: Within 24 hours</small>
                <table class="table table-striped mt-2 text-left table-bordered">
                	<tr>
                		<td><h6 style="font-size: 13px;">Payment Method</h6></td>
                		<td><h6 style="font-size: 13px;">BPI (via DragonPay)</h6></td>
                	</tr>
                	<tr>
                		<td><h6 style="font-size: 13px;">Receiving Wallet</h6></td>
                		<td><h6 style="font-size: 13px;">Peso Wallet</h6></td>
                	</tr>
                	<tr>
                		<td><h6 style="font-size: 13px;">You will receive</h6></td>
                		<td><h6 style="font-size: 13px;">-</h6></td>
                	</tr>
                	<tr>
                		<td><h6 style="font-size: 13px;">All by All Exchange Fee</h6></td>
                		<td><h6 style="font-size: 13px;">-</h6></td>
                	</tr>
                	<tr>
                		<td><h6 style="font-size: 13px;">Payment Method Fee</h6></td>
                		<td><h6 style="font-size: 13px;">-</h6></td>
                	</tr>
                	<tr>
                		<td><h6 style="font-size: 13px;">Amount Due</h6></td>
                		<td><h6 style="font-size: 13px;">-</h6></td>
                	</tr>
                </table>
                <small class="text-muted ">
                	Noted: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore sit voluptas rem, ad exercitationem dignissimos.
                </small>
						<div class="line-btn-y mt-2 " id="step2_next">NEXT</div>
					</div>

					{{-- STEP 3 --}}
					<div class="d-none per-option t-center" id="step_3">
						<div class="icon-container"><img src="/assets/img/bank-depo.png"></div>
						<div class="title"><h5>Complete your payment</h5></div>
                <small class="text-muted">Please complete your payment within 8 hours.</small>
                <small class="my-3 font-weight-bold d-block">1. Complete payment at any Bank Partners of the Philippines branch to the following account:</small>
                <div class="border-left border-primary pl-2 text-left mb-2">
                	<small>
                	<span class="d-block"><em><strong>Amount Due:</strong> 60.00PHP</em></span>
                	<span class="d-block"><em><strong>Amount Name:</strong> ALL BY ALL INC.</em></span>
                	<span class="d-block"><em><strong>Amount Number:</strong> 000910028667</em></span>
                	<span class="d-block"><em><strong>Amount Type:</strong> CHECKING</em></span>
                	</small>
                </div>
                <small class="text-muted">Please ensure the amount and reference number match your order. Check deposits and payments through third-party agents and international wire transfer are not accepted.</small>
                 <small class="my-3 font-weight-bold d-block">1. After completing your payment, click on Mark as paid button.</small>
                 <button class="btn btn-secondary btn-sm">Cancel Order</button>
                 <button class="btn btn-warning btn-sm popup" link="/member/dashboard/cashin_mark_as_paid" size="lg">Mark as Paid</button>

                <table class="table table-striped mt-3 text-left table-bordered">
                	<tr>
                		<td><h6 style="font-size: 13px;">Status</h6></td>
                		<td><h6 style="font-size: 13px;">Waiting for your payment....</h6></td>
                	</tr>
                	<tr>
                		<td><h6 style="font-size: 13px;">Receiving Wallet</h6></td>
                		<td><h6 style="font-size: 13px;">Peso Wallet</h6></td>
                	</tr>
                	<tr>
                		<td><h6 style="font-size: 13px;">You will receive</h6></td>
                		<td><h6 style="font-size: 13px;">-</h6></td>
                	</tr>
                	<tr>
                		<td><h6 style="font-size: 13px;">All by All Exchange Fee</h6></td>
                		<td><h6 style="font-size: 13px;">-</h6></td>
                	</tr>
                	<tr>
                		<td><h6 style="font-size: 13px;">Payment Method Fee</h6></td>
                		<td><h6 style="font-size: 13px;">-</h6></td>
                	</tr>
                	<tr>
                		<td><h6 style="font-size: 13px;">Amount Due</h6></td>
                		<td><h6 style="font-size: 13px;">-</h6></td>
                	</tr>
                </table>
                {{-- <small class="text-muted ">
                	Noted: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore sit voluptas rem, ad exercitationem dignissimos.
                </small> --}}
					</div>
					{{-- <div class="col-md-6 col-sm-6 col-xs-6">
						<div class="per-option t-center">
							<div class="icon-container"><img src="/assets/img/money-remit.png"></div>
							<div class="title">MONEY REMITTANCE</div>
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
<link rel="stylesheet" href="/assets/css/cash_in.css">
@endsection

@section("script")
<script type="text/javascript">
	var step1_next = document.getElementById("step1_next");
	var step2_next = document.getElementById("step2_next");
	var method = document.getElementById("method");
	var payment = document.getElementById("payment");
	var amount = document.getElementById("amount");
	var step_2 = document.getElementById("step_2");
	var step_1 = document.getElementById("step_1");
	var step_title = document.getElementById("step_title");

	var cashin_steps = document.getElementById("cashin_steps");

	step1_next.addEventListener("click", goToStep2);
	step2_next.addEventListener("click", goToStep3);

	function goToStep2(){
		cashin_steps.setAttribute("src", "/assets/img/c-step2.png");
		method.classList.remove("t-yellow");
		amount.classList.add("t-yellow");
		step_1.classList.add("d-none");
		step_2.classList.remove("d-none");
		step_title.innerText = "How much would you like to Cash In?";
	}

	function goToStep3(){
		cashin_steps.setAttribute("src", "/assets/img/c-step3.png");
		amount.classList.remove("t-yellow");
		payment.classList.add("t-yellow");
		step_2.classList.add("d-none");
		step_3.classList.remove("d-none");
		step_title.innerText = "Complete Your Payment";
	}
</script>
@endsection

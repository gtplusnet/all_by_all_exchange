@extends("member.member_layout")
@section("content")
<div class="content">
<nav class="bottom-nav">
	<div class="container-fluid">
		<div class="text-header">My Wallet <span>You can send a payment request to anyone with a phone number, email address, or to your Facebook friends.  </span></div>
	</div>
</nav>
<div class="container">
	<div class="row clearfix">

		<div class="col-md-4">
			<!--PESO AND WALLET-->
			<div class="holder peso-wallet match-height">
				<div class="top">
					<div class="holder-title">PESO WALLET</div>
					<div class="button-holder">
						<a  href="javascript:" class="popup btn btn-wall-add" link="/member/dashboard/peso_walletaddress" size="md" id="pesoWalletAddressBtn" {{-- data-toggle="modal" data-target="#pesoWalletModal" --}}>WALLET ADDRESS <i class="fas fa-qrcode ml-2"></i></a>
					</div>
				</div>
				<div class="bottom d-flex flex-column align-items-center justify-content-center">
						<div class="peso-wallets d-flex flex-column justify-content-center">
							<div class="converted-price peso">PHP 0.00</div>
							<div class="currency">CURRENT PESO WALLET</div>
						</div>
						
					</div>
				</div>
				<div class="footer">
					<div class="btn-container mt-2 d-flex flex-row align-items-stretch justify-content-between">
						<a class="btn btn-sm-block btn-send popup" href="javascript:" link="/member/dashboard/peso_to_aba_conv"><i class="fas fa-exchange-alt"></i> <span>|</span> CONVERT</a>
						<a class="btn btn-sm-block btn-send popup" href="javascript:" link="/member/dashboard/send_money_step_1" size="lg"><i class="far fa-arrow-alt-circle-right"></i> <span>|</span> SEND</a>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				{{-- ABA WALLET --}}
				<div class="holder aba-wallet match-height">
					<div class="top">
						<div class="holder-title">ABA WALLET</div>
						<div class="button-holder">
							<a class="popup btn btn-convert" href="javascript:" id="abaWalletAddressBtn" link="/member/dashboard/aba_walletaddress" size="md">WALLET ADDRESS <i class="fas fa-qrcode ml-2"></i></a>
						</div>
					</div>
					<div class="bottom d-flex flex-column align-items-center justify-content-center">
						<div class="aba-wallets d-flex flex-column justify-content-center">
							<div class="converted-price aba">ABA 0.00</div>
							<div class="currency">CURRENT ABA WALLET</div>
						</div>
						<div class="aba-wallets mt-3" style="min-width: 80%;">
							<div class="d-flex justify-content-between flex-row border pt-2" id="abaToBtcConvert">
								<div class="col currency text-left" ><h5  class="" style="cursor: pointer;">BITCOIN</h5></div>
							<div class="col converted-price btc"><h5>0.000000</h5></div>
							</div>
						</div>
						<div class="aba-wallets" style="min-width: 80%;">
							<div class="d-flex justify-content-between flex-row border pt-2" id="abaToPesoConvert">
								<div class="col currency text-left" ><h5  style="cursor: pointer;">PESO</h5></div>
							<div class="col converted-price btc"><h5>0.000000</h5></div>
							</div>
						</div>

					</div>
					
					
				</div>
				<div class="footer">
					<div class="btn-container mt-2 d-flex flex-row align-items-center justify-content-between" id="abaConvertModal">
						<a class="popup btn btn-convert" href="javascript:" link="/member/dashboard/aba_to_btc_conv" ><i class="fas fa-exchange-alt"></i> <span>|</span> CONVERT</a>
						<a class="btn btn-send popup" href="javascript:" link="/member/dashboard/send_money_step_1" size="lg"><i class="far fa-arrow-alt-circle-right"></i> <span>|</span> SEND</a>
					</div>

				</div>
			</div>

			<div class="col-md-4">
				{{-- BITCOIN WALLET --}}
				<div class="holder aba-wallet match-height">
					<div class="top">
						<div class="holder-title">BITCOIN WALLET</div>
						<div class="button-holder">
							<a class="popup btn btn-convert" href="javascript:" link="/member/dashboard/btc_walletaddress" size="md">WALLET ADDRESS <i class="fas fa-qrcode ml-2"></i></i></a>
						</div>
					</div>
					<div class="bottom d-flex flex-column align-items-center justify-content-center">
						<div class="aba-wallets d-flex flex-column justify-content-center">
							<div class="converted-price aba">BTC 0.000000</div>
							<div class="currency">CURRENT BTC WALLET</div>
						</div>
						{{-- <div class="aba-wallets mt-3" style="min-width: 80%;">
							<div class="d-flex justify-content-between flex-row border pt-2">
								<div class="col currency text-left" ><h5 id="btcToAbaConvert">ABA</h5></div>
							<div class="col converted-price btc"><h5>0.000000</h5></div>
							</div>
						</div> --}}

					</div>
					
				</div>
				<div class="footer">
					<div class="btn-container mt-2 d-flex  flex-column align-items-center justify-content-center">
						<a class="popup btn btn-block btn-convert" href="javascript:" link="/member/dashboard/btc_to_aba_conv"><i class="fas fa-exchange-alt"></i> <span>|</span> CONVERT</a>
					</div>
				</div>
			</div>
		</div>



		<!--GET STARTED WITH A BAND-->
		{{-- <div class="row clearfix">
			<div class="col-md-12">
				<div class="holder get-started">
					<div class="top">
						<div class="holder-title">GET STARTED WITH ALLBYALL EXCHANGE</div>
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
		--}}
		<!--HISTORY AND REQUEST-->
		{{-- <div class="row clearfix">
			<div class="col-md-12">
				<div class="holder history-holder">
					<div class="top">
						<div class="holder-title">
							<nav class="nav">
								<a class="tab-link history" data-toggle="tab" href="#history">HISTORY</a>
								<span>|</span>
								<a class="tab-link request" data-toggle="tab" href="#request">REQUEST</a>
							</nav>
						</div>
						<div class="button-holder">
							<a class="btn btn-down-history" href="javascript:">DOWNLOAD HISTORY <img src="/assets/img/download.svg" alt="" width="16" height="16"></a>
						</div>
					</div>
					<div class="bottom tab-content text-center">
						<div id="history" class="tab-pane fade in active">
							<div class="explaination">There are no transactions yet.</div>
							<div class="table-responsive-sm border">
								<table class="table table-hover table-condensed">
									<tr>
										<td>December 10, 2018</td>
										<td>15 000.00 to 0.0121123123 BTC</td>
										<td>- 15 000.00</td>
									</tr>
									<tr>
										<td>December 9, 2018</td>
										<td>15 000.00 to 0.0121123123 BTC</td>
										<td>- 15 000.00</td>
									</tr>
									<tr>
										<td>December 8, 2018</td>
										<td>15 000.00 to 0.0121123123 BTC</td>
										<td>- 15 000.00</td>
									</tr>
								</table>
							</div>
						</div>
						<div id="request" class="tab-pane fade">
							<div class="explaination">There are no request yet.</div>
						</div>
					</div>
				</div>
			</div>
		</div> --}}
	<hr>
		{{-- HISTORY --}}
		<nav class="mt-4">
		  <div class="nav nav-tabs" id="nav-tab" role="tablist">
		  	<a class="nav-item nav-link active" id="nav-conversion-tab" data-toggle="tab" href="#nav-conversion" role="tab" aria-controls="nav-conversion" aria-selected="true"><small>Conversion History</small></a>
		    <a class="nav-item nav-link" id="nav-sending-tab" data-toggle="tab" href="#nav-sending" role="tab" aria-controls="nav-sending" aria-selected="true"><small>Sending Transactions</small></a>
		    <a class="nav-item nav-link" id="nav-receiving-tab" data-toggle="tab" href="#nav-receiving" role="tab" aria-controls="nav-receiving" aria-selected="false"><small>Receiving Transactions</small></a>
		    <a class="nav-item nav-link" id="nav-cashin-tab" data-toggle="tab" href="#nav-cashin" role="tab" aria-controls="nav-cashin" aria-selected="false"><small>Cash In Transactions</small></a>
		     <a class="nav-item nav-link" id="nav-cashout-tab" data-toggle="tab" href="#nav-cashout" role="tab" aria-controls="nav-cashout" aria-selected="false"><small>Cash Out Transactions</small></a>
		     <a class="ml-auto nav-link text-warning"  href="javascript:" role="tab" aria-controls="nav-cashout" aria-selected="false"><small><i class="fas fa-download"></i> Download History</small></a>
		  </div>
		</nav>
		<div class="tab-content" id="nav-tabContent">
			{{-- Sending Transaction --}}
		  <div class="tab-pane fade " id="nav-sending" role="tabpanel" aria-labelledby="nav-sending-tab">
		  	<div class="table-responsive border">
			  <table class="table table-hover table-striped">
			    <thead>
			    <tr>
			      <th scope="col">Date</th>
			      <th scope="col">Description</th>
			      <th scope="col">Value</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<tr  class="popup" link="/member/dashboard/sending_transactions">
			  		<td>March 2</td>
			  		<td>Sent money to a bitcoin address from PHP Wallet</td>
			  		<td>- 15 000.00</td>
			  	</tr>
			  	<tr  class="popup" link="/member/dashboard/sending_transactions">
			  		<td>March 1</td>
			  		<td>Sent money to a bitcoin address from PHP Wallet</td>
			  		<td>- 35 000.00</td>
			  	</tr>
			  </tbody>
			  </table>
			</div>
		  </div>

		  {{-- Receiving Transaction --}}
		  <div class="tab-pane fade" id="nav-receiving" role="tabpanel" aria-labelledby="nav-receiving-tab">
		  	<div class="table-responsive border">
			  <table class="table table-hover table-striped">
			    <thead>
			    <tr >
			      <th scope="col">Date</th>
			      <th scope="col">Description</th>
			      <th scope="col">Value</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<tr class="popup" link="/member/dashboard/receiving_transactions">
			  		<td>March 2</td>
			  		<td>Received money from Juan Dela Cruz</td>
			  		<td>+ 15 000.00</td>
			  	</tr >
			  	<tr class="popup" link="/member/dashboard/receiving_transactions">
			  		<td>March 1</td>
			  		<td>Received money from Juan Dela Cruz</td>
			  		<td>+ 35 000.00</td>
			  	</tr>
			  </tbody>
			  </table>
			</div>
		  </div>

		  {{-- Cash In Transactions --}}
		  <div class="tab-pane fade" id="nav-cashin" role="tabpanel" aria-labelledby="nav-cashin-tab">
		  	<div class="table-responsive border">
			  <table class="table table-hover table-striped">
			    <thead>
			    <tr>
			      <th scope="col">Date</th>
			      <th scope="col">Description</th>
			      <th scope="col">Bank</th>
			      <th scope="col">Value</th>
			      <th scope="col">Transaction Number</th>
			      <th scope="col">Status</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<tr class="popup" link="/member/dashboard/cashin_history">
			  		<td>March 2</td>
			  		<td>Cash In</td>
			  		<td>BDO</td>
			  		<td>5 000</td>
			  		<td>EUZXGK</td>
			  		<td>Completed</td>
			  	</tr>
			  	<tr class="popup" link="/member/dashboard/cashin_history">
			  		<td>March 2</td>
			  		<td>Cash In</td>
			  		<td>BDO</td>
			  		<td>15 000</td>
			  		<td>KLPWEQ</td>
			  		<td>Expired</td>
			  	</tr>
			  </tbody>
			  </table>
			</div>
		  </div>

		  {{-- Cash Out Transaction --}}
		  <div class="tab-pane fade" id="nav-cashout" role="tabpanel" aria-labelledby="nav-cashout-tab">
		  	<div class="table-responsive border">
			  <table class="table table-hover table-striped">
			    <thead>
			    <tr class="popup" link="/member/dashboard/cashout_history">
			      <th scope="col">Date</th>
			      <th scope="col">Description</th>
			      <th scope="col">Value</th>
			      <th scope="col">Status</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<tr class="popup" link="/member/dashboard/cashout_history">
			  		<td>March 2</td>
			  		<td>Cash Out via BPI</td>
			  		<td>5 000.00</td>
			  		<td>Completed</td>
			  	</tr>
			  	<tr>
			  		<td>March 3</td>
			  		<td>Cash Out via BPI</td>
			  		<td>25 000.00</td>
			  		<td>Processing</td>
			  	</tr>
			  </tbody>
			  </table>
			</div>
		  </div>

		   {{-- Conversion History --}}
		  <div class="tab-pane fade show active" id="nav-conversion" role="tabpanel" aria-labelledby="nav-conversionx`-tab">
		  	<div class="table-responsive border">
			  <table class="table table-hover table-striped">
			    <thead>
			    <tr>
			      <th scope="col">Date</th>
			      <th scope="col">Description</th>
			      <th scope="col">From</th>
			      <th scope="col">To</th>
			      <th scope="col">Conversion Rate</th>
			      <th scope="col">Value</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<tr class="popup" link="/member/dashboard/conversion_history">
			  		<td>March 2</td>
			  		<td>ConvertI</td>
			  		<td>ABA WALLET</td>
			  		<td>PHP WALLET</td>
			  		<td>+5 000.00</td>
			  		<td></td>
			  	</tr>
			  </tbody>
			  </table>
			</div>
		  </div>

		</div>

	</div>
</div>
@endsection
@section("css")
<link rel="stylesheet" href="/assets/css/dashboard.css?v=1.0">
@endsection

@section("script")
{{-- Copy Wallet Address --}}
<script>
	function copyPesoWalletAddress(){
		var copyText = document.getElementById("pesoWalletAddressInput");
		copyText.select();
		document.execCommand("Copy");
		
	}

	function copyAbaWalletAddress(){
		var copyText = document.getElementById("abaWalletAddressInput");
		copyText.select();
		document.execCommand("Copy");
		
	}

	function copyBtcWalletAddress(){
		var copyText = document.getElementById("btcWalletAddressInput");
		copyText.select();
		document.execCommand("Copy");
		
	}


</script>

{{-- Aba Wallet Conversion --}}
 <script>
	var abaToPesoConvert = document.getElementById("abaToPesoConvert");
	var abaToBtcConvert = document.getElementById("abaToBtcConvert");

	abaToPesoConvert.addEventListener('click', changeColor1);
	abaToBtcConvert.addEventListener('click', changeColor2);
	function changeColor1(){
		abaToPesoConvert.classList.add("bg-convert");
		abaToBtcConvert.classList.remove("bg-convert");
		document.getElementById("abaConvertModal").innerHTML = '<a class="popup btn btn-convert" href="javascript:" link="/member/dashboard/aba_to_peso_conv" ><i class="fas fa-exchange-alt"></i> <span>|</span> CONVERT</a> <a class="btn btn-send popup" href="javascript:" link="/member/dashboard/send_money_step_1" size="lg"><i class="far fa-arrow-alt-circle-right"></i> <span>|</span> SEND</a>';
	}

	function changeColor2(){
		abaToPesoConvert.classList.remove("bg-convert");
		abaToBtcConvert.classList.add("bg-convert");
		document.getElementById("abaConvertModal").innerHTML = '<a class="popup btn btn-convert" href="javascript:" link="/member/dashboard/aba_to_btc_conv" ><i class="fas fa-exchange-alt"></i> <span>|</span> CONVERT</a> <a class="btn btn-send popup" href="javascript:" link="/member/dashboard/send_money_step_1" size="lg"><i class="far fa-arrow-alt-circle-right"></i> <span>|</span> SEND</a>	';
	}

</script>


<script>
	function changeLabel(e){
		var sourceWalletLabel = document.getElementById("sourceWalletLabel");
		sourceWalletLabel.innerText = e.target.value;
	}
	
</script>

@endsection

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
						<a class="btn btn-wall-add" href="javascript:" class="popup" link="/member/dashboard/peso_walletaddress" size="md" id="pesoWalletAddressBtn" {{-- data-toggle="modal" data-target="#pesoWalletModal" --}}>WALLET ADDRESS <i class="fas fa-qrcode ml-2"></i></a>
					</div>
				</div>
				<div class="bottom d-flex flex-column align-items-center justify-content-center">
						{{-- <div class="left text-center">
							<div class="text-price">PHP 0.00</div>
						</div>
						<div class="right">
							<div class="btn-container d-flex flex-column align-items-center justify-content-center">
								<a class="btn btn-request" href=""><i class="fas fa-reply-all"></i> <span>|</span> REQUEST</a>
								<a class="btn btn-send" href=""><i class="far fa-arrow-alt-circle-right"></i> <span>|</span> SEND</a>
							</div>
						</div> --}}
						<div class="text-price">PHP 0.00</div>
						
					</div>
				</div>
				<div class="footer">
					<div class="btn-container mt-2 d-flex flex-row align-items-stretch justify-content-between">
						<a class="btn btn-block btn-send" href=""><i class="far fa-arrow-alt-circle-right"></i> <span>|</span> SEND</a>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				{{-- ABA WALLET --}}
				<div class="holder aba-wallet match-height">
					<div class="top">
						<div class="holder-title">ABA WALLET</div>
						<div class="button-holder">
							<a class="btn btn-convert" href="javascript:" id="abaWalletAddressBtn" data-toggle="modal" data-target="#abaWalletModal">WALLET ADDRESS <i class="fas fa-qrcode ml-2"></i></a>
						</div>
					</div>
					<div class="bottom d-flex flex-column align-items-center justify-content-center">
						<div class="aba-wallets d-flex flex-column justify-content-center">
							<div class="converted-price aba">ABA 0.00</div>
							<div class="currency">CURRENT ABA WALLET</div>
						</div>
						<div class="aba-wallets mt-3" style="min-width: 80%;">
							<div class="d-flex justify-content-between flex-row border pt-2">
								<div class="col currency text-left" ><h5 id="abaToBtcConvert" class="text-primary" style="cursor: pointer;">BITCOIN</h5></div>
							<div class="col converted-price btc"><h5>0.000000</h5></div>
							</div>
						</div>
						<div class="aba-wallets" style="min-width: 80%;">
							<div class="d-flex justify-content-between flex-row border pt-2">
								<div class="col currency text-left" ><h5 id="abaToPesoConvert" style="cursor: pointer;">PESO</h5></div>
							<div class="col converted-price btc"><h5>0.000000</h5></div>
							</div>
						</div>

					</div>
					
					
				</div>
				<div class="footer">
					<div class="btn-container mt-2 d-flex flex-column align-items-center justify-content-center" id="abaConvertModal">
						<a class="btn btn-block btn-convert" href="javascript:"  data-toggle="modal" data-target="#abaToBtcModal" ><i class="fas fa-exchange-alt"></i> <span>|</span> CONVERT</a>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				{{-- BITCOIN WALLET --}}
				<div class="holder aba-wallet match-height">
					<div class="top">
						<div class="holder-title">BITCOIN WALLET</div>
						<div class="button-holder">
							<a class="btn btn-convert" href="javascript:" data-toggle="modal" data-target="#btcWalletModal">WALLET ADDRESS <i class="fas fa-qrcode ml-2"></i></i></a>
						</div>
					</div>
					<div class="bottom d-flex flex-column align-items-center justify-content-center">
						<div class="aba-wallets d-flex flex-column justify-content-center">
							<div class="converted-price aba">BTC 0.000000</div>
							<div class="currency">CURRENT BTC WALLET</div>
						</div>
						<div class="aba-wallets mt-3" style="min-width: 80%;">
							<div class="d-flex justify-content-between flex-row border pt-2">
								<div class="col currency text-left" ><h5 id="btcToAbaConvert" {{-- style="cursor: pointer;" --}}>ABA</h5></div>
							<div class="col converted-price btc"><h5>0.000000</h5></div>
							</div>
						</div>

					</div>
					
				</div>
				<div class="footer">
					<div class="btn-container mt-2 d-flex  flex-column align-items-center justify-content-center">
						<a class="btn btn-block btn-convert" href=""><i class="fas fa-exchange-alt"></i> <span>|</span> CONVERT</a>
					</div>
				</div>
			</div>
		</div>

		{{-- WALLET ADDRESS MODAL --}}
	
		
		{{-- PESO WALLET MODAL --}}
		{{-- <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="pesoWalletModal" aria-hidden="true" id="pesoWalletModal" style="border-radius: 0;">
			<div class="modal-dialog modal-lg modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						
						<button type="button" class="close py-0" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body px-5">
						<h4 class="modal-title mb-1 text-center">PESO WALLET ADDRESS</h4>
						<div class="border mb-2"></div>
						<small class="text-muted text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque quos nemo expedita iste distinctio, illo inventore? Quae temporibus pariatur blanditiis dolores quidem labore quod nesciunt, sed sunt earum velit libero.</small>



						<div class="input-group my-3">
							<input type="text" class="form-control text-center" value="3QJmV3qfvL9SuYo34YihAf3sRCW3qSinyC" placeholder="Wallet Address" aria-label="Wallet Address" aria-describedby="basic-addon2" style="border-radius: 0;" id="pesoWalletAddressInput">
							<div class="input-group-append">
								<button class="btn btn-light border" type="button" style="border-radius: 0;" onclick="copyPesoWalletAddress()">
									<i class="far fa-copy"></i></button>
								</div>
							</div>
							<div class="d-flex justify-content-center">
								<img src="/assets/img/QR.png" class="my-3" alt="">
							</div>

							<small class="text-muted text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat cumque exercitationem, architecto.</small>

						</div>
					</div>
				</div>
			</div> --}}
			
			{{-- ABA WALLET MODAL --}}
		<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="abaWalletModal" aria-hidden="true" id="abaWalletModal" style="border-radius: 0;">
			<div class="modal-dialog modal-lg modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						
						<button type="button" class="close py-0" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body px-5">
						<h4 class="modal-title mb-1 text-center">ABA WALLET ADDRESS</h4>
						<div class="border mb-2"></div>
						<small class="text-muted text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque quos nemo expedita iste distinctio, illo inventore? Quae temporibus pariatur blanditiis dolores quidem labore quod nesciunt, sed sunt earum velit libero.</small>

						

						<div class="input-group my-3">
							<input type="text" class="form-control text-center" value="1F1tAaz5x1HUXrCNLbtMDqcw6o5GNn4xqX" placeholder="Wallet Address" aria-label="Wallet Address" aria-describedby="basic-addon2" style="border-radius: 0;" id="abaWalletAddressInput">
							<div class="input-group-append">
								<button class="btn btn-light border" type="button" style="border-radius: 0;" onclick="copyAbaWalletAddress()">
									<i class="far fa-copy"></i></button>
								</div>
							</div>
							<div class="d-flex justify-content-center">
								<img src="/assets/img/QR.png" class="my-3" alt="">
							</div>

							<small class="text-muted text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat cumque exercitationem, architecto.</small>
							
						</div>
					</div>
				</div>
			</div>

{{-- BTC WALLET MODAL --}}
		<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="btcWalletModal" aria-hidden="true" id="btcWalletModal" style="border-radius: 0;">
			<div class="modal-dialog modal-lg modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						
						<button type="button" class="close py-0" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body px-5">
						<h4 class="modal-title mb-1 text-center">BTC WALLET ADDRESS</h4>
						<div class="border mb-2"></div>
						<small class="text-muted text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque quos nemo expedita iste distinctio, illo inventore? Quae temporibus pariatur blanditiis dolores quidem labore quod nesciunt, sed sunt earum velit libero.</small>

						

						<div class="input-group my-3">
							<input type="text" class="form-control text-center" value="1F1tAaz5x1HUXrCNLbtMDqcw6o5GNn4xqX" placeholder="Wallet Address" aria-label="Wallet Address" aria-describedby="basic-addon2" style="border-radius: 0;" id="btcWalletAddressInput">
							<div class="input-group-append">
								<button class="btn btn-light border" type="button" style="border-radius: 0;" onclick="copyBtcWalletAddress()">
									<i class="far fa-copy"></i></button>
								</div>
							</div>
							<div class="d-flex justify-content-center">
								<img src="/assets/img/QR.png" class="my-3" alt="">
							</div>

							<small class="text-muted text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat cumque exercitationem, architecto.</small>
							
						</div>
					</div>
				</div>
			</div>

{{-- ABA TO PESO --}}
<div class="modal fade" id="abaToPesoModal" tabindex="-1" role="dialog" aria-labelledby="abaToPesoModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Convert ABA to PESO </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        How much ABA would you like to convert?
        <div class="d-flex flex-row my-3">
        	<div class="col">
        		<div class="input-group mb-3">
				  <input type="text" class="form-control" placeholder="0" aria-label="0" aria-describedby="basic-addon2" id="abaToPeso">
				  <div class="input-group-append">
				    <span class="input-group-text" id="basic-addon2">ABA</span>
				  </div>
				</div>
        	</div>
        	<div class="col">
        		<div class="input-group mb-3">
				  <input type="text" class="form-control" placeholder="0" aria-label="0" aria-describedby="basic-addon2" id="pesoInput">
				  <div class="input-group-append">
				    <span class="input-group-text" id="basic-addon2">PHP</span>
				  </div>
				</div>
        	</div>
        </div>
         <hr>
        <ul class="list-unstyled">
        	<li class="border p-3">
        		<div class="d-flex flex-row justify-content-between">
        			<h6 class="my-0 text-muted">Wallet Balance</h6>
        			<h6 class="my-0">0 ABA</h6>
        		</div>
        	</li>
        	<li class="border p-3">
        		<div class="d-flex flex-row justify-content-between">
        			<h6 class="my-0 text-muted">Conversion Rate</h6>
        			<h6 class="my-0">1 ABA &boxh; 3.5 PHP</h6>
        		</div>
        	</li>
        </ul>
        <div class="text-center">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Convert</button>
        <small class="my-3 d-block text-muted">
        	Please keep in mind that the prices of digital currencies are volatile. Prices may go up or down at any time.
        </small>
    </div>
      </div>
    </div>
  </div>
</div>

{{-- ABA TO BTC --}}
<div class="modal fade" id="abaToBtcModal" tabindex="-1" role="dialog" aria-labelledby="abaToBtcModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Convert ABA to BTC </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        How much ABA would you like to convert?
        <div class="d-flex flex-row my-3">
        	<div class="col">
        		<div class="input-group mb-3">
				  <input type="text" class="form-control" placeholder="0" aria-label="0" aria-describedby="basic-addon2" id="abaToBtc">
				  <div class="input-group-append">
				    <span class="input-group-text" id="basic-addon2">ABA</span>
				  </div>
				</div>
        	</div>
        	<div class="col">
        		<div class="input-group mb-3">
				  <input type="text" class="form-control" placeholder="0" aria-label="0" aria-describedby="basic-addon2" id="btcInput">
				  <div class="input-group-append">
				    <span class="input-group-text" id="basic-addon2">BTC</span>
				  </div>
				</div>
        	</div>
        </div>
        <hr>
        <ul class="list-unstyled">
        	<li class="border p-3">
        		<div class="d-flex flex-row justify-content-between">
        			<h6 class="my-0 text-muted">Wallet Balance</h6>
        			<h6 class="my-0">0 ABA</h6>
        		</div>
        	</li>
        	<li class="border p-3">
        		<div class="d-flex flex-row justify-content-between">
        			<h6 class="my-0 text-muted">Conversion Rate</h6>
        			<h6 class="my-0">ABA 1 &boxh; 0.00007 BTC</h6>
        		</div>
        	</li>
        </ul>
        <div class="text-center">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Convert</button>
        <small class="my-3 d-block text-muted">
        	Please keep in mind that the prices of digital currencies are volatile. Prices may go up or down at any time.
        </small>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- BTC TO ABA--}}
<div class="modal fade" id="btcToAbaModal" tabindex="-1" role="dialog" aria-labelledby="btcToAbaModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Convert BTC to ABA </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        How much BTC would you like to convert?
        <div class="d-flex flex-row my-3">
        	<div class="col">
        		<div class="input-group mb-3">
				  <input type="text" class="form-control" placeholder="0" aria-label="0" aria-describedby="basic-addon2" id="btcToAba">
				  <div class="input-group-append">
				    <span class="input-group-text" id="basic-addon2">BTC</span>
				  </div>
				</div>
        	</div>
        	<div class="col">
        		<div class="input-group mb-3">
				  <input type="text" class="form-control" placeholder="0" aria-label="0" aria-describedby="basic-addon2" id="abaInput">
				  <div class="input-group-append">
				    <span class="input-group-text" id="basic-addon2">ABA</span>
				  </div>
				</div>
        	</div>
        </div>
        <hr>
        <ul class="list-unstyled">
        	<li class="border p-3">
        		<div class="d-flex flex-row justify-content-between">
        			<h6 class="my-0 text-muted">Wallet Balance</h6>
        			<h6 class="my-0">0 BTC</h6>
        		</div>
        	</li>
        	<li class="border p-3">
        		<div class="d-flex flex-row justify-content-between">
        			<h6 class="my-0 text-muted">Conversion Rate</h6>
        			<h6 class="my-0">ABA 1 &boxh; 0.00007 BTC</h6>
        		</div>
        	</li>
        </ul>
        <div class="text-center">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Convert</button>
        <small class="my-3 d-block text-muted">
        	Please keep in mind that the prices of digital currencies are volatile. Prices may go up or down at any time.
        </small>
        </div>
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
		<div class="row clearfix">
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
							{{-- <div class="explaination">There are no transactions yet.</div> --}}
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
		</div>
	</div>
</div>
@endsection
@section("css")
<link rel="stylesheet" href="/assets/css/dashboard.css?v=1.0">
@endsection

@section("script")
{{-- Copy Wallet Address --}}
{{-- <script>
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

</script> --}}

{{-- Aba Wallet Conversion --}}
{{-- <script>
	var abaToPesoConvert = document.getElementById("abaToPesoConvert");
	var abaToBtcConvert = document.getElementById("abaToBtcConvert");

	abaToPesoConvert.addEventListener('click', changeColor1);
	abaToBtcConvert.addEventListener('click', changeColor2);
	function changeColor1(){
		abaToPesoConvert.classList.add("text-primary");
		abaToBtcConvert.classList.remove("text-primary");
		document.getElementById("abaConvertModal").innerHTML = '<a class="btn btn-block btn-convert" href="javascript:"  data-toggle="modal" data-target="#abaToPesoModal" id="abaConvertModal"><i class="fas fa-exchange-alt"></i> <span>|</span> CONVERT</a>';
	}

	function changeColor2(){
		abaToPesoConvert.classList.remove("text-primary");
		abaToBtcConvert.classList.add("text-primary");
		document.getElementById("abaConvertModal").innerHTML = '<a class="btn btn-block btn-convert" href="javascript:"  data-toggle="modal" data-target="#abaToBtcModal" id="abaConvertModal"><i class="fas fa-exchange-alt"></i> <span>|</span> CONVERT</a>';
	}

	var peso = document.getElementById("pesoInput");
	var abaToPeso = document.getElementById("abaToPeso");
	var abaToBtc = document.getElementById("abaToBtc");
	var btc = document.getElementById("btcInput");

	abaToPeso.addEventListener('keyup', convertAbaToPeso);
	abaToBtc.addEventListener('keyup', convertAbaToBtc);
	peso.addEventListener('keyup', convertPesoToAba);
	btc.addEventListener('keyup', convertPesoToBtc);

	function convertAbaToPeso(e){
			peso.value = e.target.value*3.5;
	}

	function convertAbaToBtc(e){
			btc.value = e.target.value*0.00007;
	}

	function convertPesoToAba(e){
			abaToPeso.value = e.target.value*0.2857143;
	}

	function convertPesoToBtc(e){
			abaToBtc.value = e.target.value*14290;
	}


</script> --}}
@endsection

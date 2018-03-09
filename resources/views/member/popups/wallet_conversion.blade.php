<div class="wallet_conversion_modal">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Wallet Conversion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        How much <strong id="convertWalletFromLabel">ABA</strong> would you like to convert?
        <div class="d-flex flex-row my-3">
        	<div class="col">
        		<div class="input-group mb-3">
				  <input type="text" class="form-control" placeholder="0.00" aria-label="0" aria-describedby="basic-addon2" id="convertWalletFromInput">
				  <div class="input-group-append">
                    <select class="input-group-text form-control" {{-- onchange="showFromWallet(event)" --}} name="" id="convertWalletFrom">
                        <option value="ABA">ABA</option>
                        <option value="BTC">BTC</option>
                        <option value="PHP">PHP</option>
                    </select>
				  </div>
				</div>
        	</div>
        	<div class="col">
        		<div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="0.00" aria-label="0" aria-describedby="basic-addon2" id="convertWalletToInput">
                  <div class="input-group-append">
                    <select class="input-group-text form-control" name="" id="convertWalletTo">
                        <option value="BTC">BTC</option>
                        <option value="PHP">PHP</option>
                        <option value="ABA">ABA</option>
                    </select>
                  </div>
                </div>
        	</div>
        </div>
        <hr>
        <ul class="list-unstyled">
        	<li class="border p-3">
        		<div class="d-flex flex-row justify-content-between">
        			<h6 class="my-0 text-muted">Wallet Balance</h6>
        			<h6 class="my-0"><span id="convertWalletFromBalanceLabel">3 ABA</span></h6>
        		</div>
        	</li>
        	<li class="border p-3">
        		<div class="d-flex flex-row justify-content-between">
        			<h6 class="my-0 text-muted">Conversion Rate</h6>
        			<h6 class="my-0"><span id="convertWalletFromRateLabel">ABA 1</span> &boxh; <span id="convertWalletToRateLabel">0.00000023 BTC</span></h6>
        		</div>
        	</li>
        </ul>
        <div class="text-center d-flex flex-row justify-content-center">
            <div class="col">
                <button class="xbtn outline-btn xbtn-sm d-70" data-dismiss="modal">CANCEL</button>
            </div>
            <div class="col">
                <button class="xbtn outline-btn popup xbtn-sm d-70" href="javascript:" link="/member/dashboard/conversion_success" >CONVERT</button>
            </div>
        </div>
        <div class="alert alert-warning p-2 my-3 mx-2">
            <small>
                Please keep in mind that the prices of digital currencies are volatile. Prices may go up or down at any time.
            </small>
        </div>
      </div>
</div>

<script>
    $(document).ready(function(){
    var btc_balance = 1;
    var php_balance = 2;
    var aba_balance = 3;
    var aba = 3;
    var btc = 1;
    var php = 2;
    $("#convertWalletFrom").on('change', function(){
        var conversionFrom = $(this).val();
        $("#convertWalletFromLabel").text(conversionFrom);

        if(conversionFrom == "BTC"){
            $("#convertWalletFromBalanceLabel").text(btc_balance+" "+conversionFrom);
            $("#convertWalletFromRateLabel").text(conversionFrom+" "+btc);
        } else if(conversionFrom == "PHP"){
            $("#convertWalletFromBalanceLabel").text(php_balance+" "+conversionFrom);
            $("#convertWalletFromRateLabel").text(conversionFrom+" "+php);
        } else {
            $("#convertWalletFromBalanceLabel").text(aba_balance+" "+conversionFrom);
            $("#convertWalletFromRateLabel").text(conversionFrom+" "+aba);
        }
       
    });

     $("#convertWalletTo").on('change', function(){
        var conversionTo = $(this).val();

        if(conversionTo == "BTC"){
            $("#convertWalletToRateLabel").text(btc+" "+conversionTo);
        } else if(conversionTo == "PHP"){
            $("#convertWalletToRateLabel").text(php+" "+conversionTo);
        } else {
            $("#convertWalletToRateLabel").text(aba+" "+conversionTo);
        }
       
    });
    
});
</script>
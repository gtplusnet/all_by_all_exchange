<div class="send_money_step1">
 <div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Send Money</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
   <div class="row mb-2">
     <div class="col-lg-6 col-md-6 col-sm-12">
       <h6>Source of Wallet</h6>
       <select name="sendSourceWallet" id="sendSourceWallet" onchange="changeLabel(event)" class="form-control">
         <option value="ABA">ABA</option>
         <option value="BTC">BTC</option>
         <option value="PHP">PHP</option>
       </select>
     </div>
     <div class="col-lg-6 col-md-6 col-sm-12">
       <h6>Amount</h6>
       <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="0.00" aria-label="Recipient's username" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <span class="input-group-text" id="sourceWalletLabel">ABA</span>
        </div>
      </div>
    </div>
  </div>
  <div class="row mb-2">
   <div class="col-sm">
     <h6>To:</h6>
     <input type="text" class="form-control mb-1" placeholder="Please input wallet address">
     <textarea name="" class="form-control" id="" cols="20" rows="5" placeholder="Remarks here"></textarea>
   </div>
 </div>
 <div class="d-flex flex-row align-items-end">
  {{-- <div class="col text-center">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="popup btn btn-warning" link="/member/dashboard/send_money_step_2" size="lg" href="javascript:">Continue</button>
        
</div> --}}
                <div class="col text-center d-flex flex-row justify-content-center mt-2">
                  <div class="col">
                <button class="xbtn outline-btn xbtn-sm d-70" data-dismiss="modal" >CANCEL</button>
            </div>
            <div class="col">
                <button class="xbtn outline-btn xbtn-sm d-70 popup" link="/member/dashboard/send_money_step_2" size="lg" >CONTINUE</button>
            </div>
        </div>

   <div class="col-lg-4">
     <h6>Audience:</h6>
      <select name="audienceDropdown" id="audienceDropdown"  class="form-control">
         <option value="Participants Only">Participants Only</option>
         <option value="Public">Public</option>
         <option value="Friends">Friends</option>
       </select>
   </div>
 </div>
 <div class="alert alert-warning p-2 my-3 mx-2">
          <small>
              Sending funds to someone you don't know? Allbyall Exchange are non-reversible.
          </small>
        </div>
   
 </div>
 
</div>
</div>
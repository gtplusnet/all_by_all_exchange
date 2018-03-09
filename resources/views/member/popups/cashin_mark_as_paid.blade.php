<div class="cashin_mark_as_paid">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Complete Your Payment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <p>Please enter Confirmation Code shown on your deposit slip in the filed below and attach the file.</p>
                <div class="text-center d-flex flex-row justify-content-center mt-2">
            <div class="col">
                <button class="xbtn outline-btn xbtn-sm d-50" id="step2_next" >ATTACH FILE</button>
            </div>
        </div>
        <div class="px-5 py-3">
            <img src="/assets/img/depositslip.jpg" class="border border-dark" width="100%" alt="">
        </div>
        <div class="alert alert-warning p-2 my-3">
          <small>Your funds will be released within 24 hours.</small>
        </div>
        <div class="input-group mb-3 ">
            <div class="input-group-prepend ">
          <span class="input-group-text bg-convert" id="basic-addon2">Transaction Number</span>
        </div>  
        <input type="text" class="form-control" placeholder="" aria-label="0" aria-describedby="basic-addon2" id="transactionnumber">
        
      </div>
      <div class="text-center d-flex flex-row justify-content-center">
            <div class="col">
                <button class="xbtn outline-btn xbtn-sm d-70" data-dismiss="modal">No, still haven't paid!</button>
            </div>
            <div class="col">
                <button class="xbtn outline-btn popup xbtn-sm d-70" href="javascript:" link="/member/dashboard/send_money_step_3" size="md" >Fully Paid!</button>
            </div>
        </div>
        
        </div>
      </div>
</div>
  <div id="content" class="span-24">
         <form accept-charset="UTF-8" action=" " autocomplete="off" class="cmxform" id="payment_confirmation_form" method="post" novalidate="novalidate">
<div class="span-24 last">
<fieldset><legend>Job Information</legend>	
	<div id="job_information_left">
	  <div class="span-24 last">
		<div class="column span-3 last">
		  <strong> Title: </strong>
		</div>
		<div class="column span-5 last">
		   <?php echo htmlspecialchars($this->post[0]['title'])?>
		</div>
	  </div>
	  <div class="span-24 last">
		<div class="column span-3 last">
		  <strong> User: </strong>
		</div>
		<div class="column span-5 last">
		   <?php echo $_SESSION['userEmail'] ?>
		</div>
	  </div>
	  <div class="span-24 ">
		<div class="column span-3 last">
		  <strong> Job Price: </strong>
		</div>
		<div class="column">
		  $ <span id="job_price"> <?php echo $this->post[0]['price']?> </span>
		</div>
	   </div>
	</div>
	<div id="job_information_right">
	       


    <div class="span-20">
     
    </div>



	</div>
</fieldset></div>

<div class="span-24 last">
<fieldset><legend>Payment Options</legend>            <div class="span-24 last">
              <div class="column last span-1" style="padding-top: 10px">
                  <input checked="checked" class="radio_payment" id="transaction_payment_method_creditcard" name="paymentMethod" type="radio" value="creditcard" />
              </div>
              <div class="column last span-5">
                <label for="transaction_payment_method_creditcard">
                  <img alt="Credit Card" src="<?php echo URL; ?>public/images/cc_logos.jpg" />
                </label>
              </div>
            </div>




</fieldset>  
</div>


</form>
<?php echo $this->htm; ?>
 </div>  
   

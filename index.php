<a href="#sendtophone" name="modal">SEND TO PHONE</a></li>


<!-- Start Send To Phone -->
<div class="phone-notify successNotify" style="display:none">
	<div class="phone-notify-bg"></div>
    <div class="phone-notify-txt">
    <img src="/sendtophone/success.png" height="40" width="48" alt="" />
    <p>Message Sent</p>
    </div>
</div>


<div class="phone-notify errorNotify" style="display:none;">
	<div class="phone-notify-bg"></div>
    <div class="phone-notify-txt">
    <img src="/sendtophone/error.png" height="40" width="48" alt="" />
    <p>Message Failed</p>
    </div>
</div>


<div class="boxes"><div id="mask"></div>

  <div id="sendtophone" class="window">

	<div class="close-promotions"><a href="#" class="close"></a></div><div class="clr"></div>
  
  	<div class="sendtophone-bg-wrapper">

<form action="" method="post" name="theform" id="theform">
<input type="hidden" name="redirect" value="message_success.php">

<div class="send-to-phone-wrapper">
	<div class="send-to-phone">
    	
        <div class="phone-top"><div class="phone-disable-keypress"></div>
        <input type="text" id="phone" name="10digit" class="phone-enter-number" placeholder="Mobile Number" readonly="readonly">
        </div>
        
        
        
        <div class="buttons-wrapper">
        	<div class="phone-button"><a href="1"><p>1<br /><span></span></p></a></div>
            <div class="phone-button"><a href="2"><p>2<br /><span>ABC</span></p></a></div>
            <div class="phone-button"><a href="3"><p>3<br /><span>DEF</span></p></a></div>
            <div class="phone-button"><a href="4"><p>4<br /><span>GHI</span></p></a></div>
            <div class="phone-button"><a href="5"><p>5<br /><span>JKL</span></p></a></div>
            <div class="phone-button"><a href="6"><p>6<br /><span>MNO</span></p></a></div>
            <div class="phone-button"><a href="7"><p>7<br /><span>PQR</span></p></a></div>
            <div class="phone-button"><a href="8"><p>8<br /><span>STU</span></p></a></div>
            <div class="phone-button"><a href="9"><p>9<br /><span>VXZ</span></p></a></div>
            <div class="phone-button"><a href="clear"><p><div class="phone-star"></div><span>CLEAR</span></p></a></div>
            <div class="phone-button"><a href="0"><p>0<br /><span style="font-size:23px; font-weight:100;">+</span></p></a></div>
            <div class="phone-button"><a href="clear"><p><div class="phone-pound"></div><span>CLEAR</span></p></a></div>
        </div>
        
        <div class="choose-carrier-wrapper">
        	
            <div class="choose-carrier">
            <select name="carrier" id="carrier" class="choose-carrier-selections">
                <option value="" >- Select One - </option>
                <option value="att" >AT&amp;T</option>
                <option value="metropcs" >MetroPCS</option>
                <option value="nextel" >Nextel</option>
                <option value="sprint" >Sprint</option>
                <option value="tmobile" >T-Mobile</option>
                <option value="verizon" >Verizon</option>
                <option value="virgin" >Virgin Mobile</option>
			</select>          
            </div>
        
       		<div class="phone-submit"><input type="submit" value="" name="submit" class="submit-phone"></div>
        
        </div>
    
    
    </div>
</div>
</form>
<!-- End Send To Phone -->


	</div>
</div>  



<!-- Phone PHP -->
<?php

if ( $_SERVER['REQUEST_METHOD'] == "POST" ) {

	$ph = preg_replace('/[^[:digit:]]/', '', $_POST['10digit']);
	$carrier = $_POST['carrier'];
	switch ($carrier){
		case 'att':
			$to = $ph . '@txt.att.net';
			break;
		case 'metropcs':
			$to = $ph . '@mymetropcs.com';
			break;
		case 'nextel':
			$to = $ph . '@messaging.nextel.com';
			break;
		case 'sprint':
			$to = $ph . '@messaging.sprintpcs.com';
			break;
		case 'tmobile':
			$to = $ph . '@tmomail.net';
			break;
		case 'verizon':
			$to = $ph . '@vtext.com';
			break;
		case 'virgin':
			$to = $ph . '@vmobl.com';
			break;		
		default:
			error("No carrier selected, message not sent!");
	}
	
	$subject = "Name of Place";
	$message = "Address, phone number, website";
	$headers = 'From: info@youremail.com' . "\r\n" . 'Reply-To: info@youremail.com' . "\r\n" . 'X-Mailer: PHP/' . phpversion();	
		
	if (strlen($ph) == 10 ) {
		
			mail($to, $subject, $message, $headers, '-finfo@youremail.com');
			
			


			
		
			echo "<script type=\"text/javascript\">
	$(function(){
		$(\".successNotify\").fadeTo(\"slow\", 0.9).delay(2000).fadeOut(\"slow\");
	});
	</script>";
		
		
		
		
	} else {
		
		
		echo "<script type=\"text/javascript\">
	$(function(){
		$(\".errorNotify\").fadeTo(\"slow\", 0.9).delay(2000).fadeOut(\"slow\");
	});
	</script>";
		
		
		
	}
		
}


;?>

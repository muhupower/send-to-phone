<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta charset='utf-8'>
<meta content='en' name='language'>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<title>Send To Phone</title>










<!-- CSS -->

<style>
				
/* Main and Reset
---------------------------------------------------------------------------------*/
* {	margin: 0; padding: 0; outline:none;}
ul, li { list-style-type: none }
.clr { clear:both;}
img { border:0;}
a:link, a:visited, a:hover, a.selected { color:#000; text-decoration:none;}
p { padding-bottom:10px; }
article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section {display: block;}
img {
	height: auto;
	width: auto\9; /* ie8 */
	vertical-align: middle;
}
body {
	font-family:Arial, Helvetica, sans-serif;
	font-size:14px;
}
html, body{
	width:100%;
	height:100%;
	overflow:visible;	
}









/* Modal + Mask
--------------------------------------------------------------------------------------*/
#mask {
  position:absolute;
  left:0;
  top:0;
  z-index:1001;
  display:none;
  background:#000;
  width: 100%; 
  height: 100%;
}
.boxes .window {
  position:absolute;
  left:0;
  top:0;
  z-index:9999;
  display:none;
}
.close-promotions {
	height:41px;
	width:40px;
	position:relative;
	z-index:10001;
	float:right;
}
.close-promotions a:link, .close-promotions a:visited{
	display:block;
	height:41px;
	width:40px;
	background-image:url(sendtophone/close5.png);
	background-position:0px -1px;
	background-size:40px 88px;
}
.close-promotions a:hover{
	background-position:0px -48px;
}










/* Send To Phone
---------------------------------------------------------------------------------*/
#sendtophone {
   -moz-border-radius: 10px;
    -webkit-border-radius: 10px;
    border-radius: 10px;	
}
.send-to-phone-wrapper {
	width:300px;
	margin:0 auto;
    -moz-border-radius: 10px;
    -webkit-border-radius: 10px;
    border-radius: 10px;
}
.phone-top {
	position:relative;
}
.phone-disable-keypress {
	height:73px;
	width:297px;
	position:absolute;
	top:0;
	left:0;
	z-index:1000;
}
.buttons-wrapper {
	width:300px;
	height:268px;
	background-color:#fff;
	border-right:1px solid #2d3136;
}
.phone-button {
	float:left;
	text-align:center;
	border-bottom:1px solid #000;
	border-left:1px solid #2d3136;
	border-right:1px solid #151b22;
	position:relative;	
}
.phone-button-fix {
	float:left;
	text-align:center;
	border-bottom:1px solid #000;
	border-left:1px solid #2d3136;
	border-right:1px solid #151b22;
	position:relative;	
	height:66px;
	width:105px;
	background:url(/img/bg-keypad.gif) repeat-x;	
}
.phone-button p {
	color:#FFF;
	font-size:30px;
	padding-top:14px;
	font-family:Arial, Helvetica, sans-serif;
	font-weight:bold;
	line-height:23px;
}
.phone-button span {
	color:#878b90;
	font-size:14px;
	text-shadow:0px -1px 0px #000;
	font-family:Arial, Helvetica, sans-serif;
}

.phone-button a:link, .phone-button a:visited {
	text-decoration:none;
	display:block;
	height:66px;
	width:98px;
	background:url(/img/bg-keypad.gif) repeat-x;
}
.phone-button a:hover {
	background:url(/img/bg-keypad2.gif) repeat-x;
	text-decoration:none;
}
.phone-button a:active {
	background-image:none;
	background-color:#3559c3;
}
.phone-button a:hover span  {color:#9ac2fa;}
.phone-button a:active p  {text-shadow:0px 0px 5px #000;}

.phone-star {
	height:24px;
	width:25px;
	background:url(/img/phone-star.png) no-repeat;
	margin:0 auto 2px auto;
}
.phone-pound {
	height:24px;
	width:25px;
	background:url(/img/phone-pound.png) no-repeat;
	margin:0 auto 2px auto;
}
.phone-enter-number {
	border:none;
	text-align:center;
	font-size:34px;
	font-weight:bold;
	text-shadow:0px 2px 0px #fff;
	font-family:Arial, Helvetica, sans-serif;
	height:73px;
	width:300px;
	background:url(/img/bg-top.gif) repeat-x;
	-webkit-appearance: none;
    border-radius: 0;
}
input.placeholder {
    text-align: center;
}
.choose-carrier-wrapper {
	height:64px;
	position:relative;
	width:100%;
	background:url(/img/bg-choose.gif) repeat-x;	
}
.choose-carrier {
	width:215px;
	overflow:hidden;
}
.choose-carrier-selections {
	background:url(/img/phone-carrier.gif) no-repeat -10px 0px;
	border:none;
	color:#FFF;	
	font-family:Arial, Helvetica, sans-serif;
	position:absolute;
	top:0;
	left:0;
	width:200px;
	height:63px;
	padding-top:42px;
	padding-left:26px;
	cursor:pointer;
	-webkit-appearance: none;
	-moz-appearance: none;
	appearance: none;
	font-size:14px;
	font-weight:bold;
	background-color:#000;
	color:#fff;
	-webkit-appearance: none;
	border-radius: 0;
}
.choose-carrier-selections:hover {
	background-position:-10px -63px;
}
.submit-phone {
	height:64px;
	width:107px;
	background:url(/img/send.gif) no-repeat;
	border:none;
	position:absolute;
	top:-1px;
	right:0;
	cursor:pointer;	
	-webkit-appearance: none;
    border-radius: 0;
}
.phone-notify-bg{
	background-color:#000;
	width:300px;
	height:60px;
    -moz-border-radius: 10px;
    -webkit-border-radius: 10px;
    border-radius: 10px;
 	box-shadow: 0px 0px 12px #000;
	-webkit-box-shadow: 0px 0px 12px #000;
	-moz-box-shadow: 0px 0px 12px #000;			
}
.phone-notify-txt {
	position:absolute;
	top:0;
	left:0;
	width:300px;
	height:60px;
}
.phone-notify {
	position:absolute;
	top:10px;
	right:10px;
	width:300px;
	height:60px;
	z-index:10000;
}
.phone-notify img {
	float:left;
	padding:10px 15px 0px 15px;
}
.phone-notify p {
	color:#FFF;
	font-weight:bold;
	font-size:20px;
	font-family:Arial, Helvetica, sans-serif;
	padding-top:20px;
	text-shadow:0px 1px 1px #000;
}
.needsfilledphone {
	background-position:-10px -126px;
}
</style>









</head>
<body>











<!-- HTML LINK -->

<a href="#sendtophone" name="modal">send to phone</a></li>









<!-- Send To Phone -->
<div class="phone-notify successNotify" style="display:none">
	<div class="phone-notify-bg"></div>
    <div class="phone-notify-txt">
    <img src="/img/success.png" height="40" width="48" alt="" />
    <p>Message Sent</p>
    </div>
</div>

<div class="phone-notify errorNotify" style="display:none;">
	<div class="phone-notify-bg"></div>
    <div class="phone-notify-txt">
    <img src="/img/error.png" height="40" width="48" alt="" />
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
		
		

	</div>
</div><!-- End Send To Phone --> 













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
		
};

?>









<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>
<script type="text/javascript">
		
		
$(function(){



	///////////////////////////////////////////
	//Modal Functions for Phone 
	///////////////////////////////////////////	

	var $currentId = false;
	
	function resizeModal() {
		if ($currentId === false) return;
		var winW = $(window).width();
		$currentId.css('left', winW / 2 - $currentId.width() / 2);
		var winH = $(window).height();
		$currentId.css('top', winH / 2 - $currentId.height() / 2);
	}

		$('a[name=modal]').click(function(e) {
		$(this).addClass("selected"); 
		$('html, body').animate({ scrollTop: 0 }, 0);
		$('#mask').hide(0);
		$('.window').hide(0);
		e.preventDefault();	
		var id = $(this).attr('href');
		var maskHeight = $(document).height();
		var maskWidth = $(window).width();
		$('#mask').fadeTo(0,0.8);
		var winH = $(window).height();
    	$currentId = $(id);
		
		
    	resizeModal();
		$currentId.fadeIn(500);
		$("body, html").css("overflow", "hidden");
	});	
		
	$('.window .close, #mask').click(function (e) {
		$(".navigation li a").removeClass("selected"); 
		e.preventDefault();	
		
		$('#mask').fadeOut(400);
		$('.window').fadeOut(0);
        $currentId = false;
		$("body, html").css("overflow", "visible");
	});

	$(window).on('resize',resizeModal);
	
	




	///////////////////////////////////////////
	//Send To Phone
	///////////////////////////////////////////
	
	$(".phone-notify-bg").css({opacity: 0.8});
		
	required = ["phone" , "carrier"];
	emptyerror = "Try Again";

	$("#theform").submit(function(){	
		//Validate required fields
		for (i=0;i<required.length;i++) {
			var input =$(this).find('#'+required[i]);
			if ((input.val() == "") || (input.val() == emptyerror)) {
				input.addClass("needsfilledphone").fadeIn();
				input.val(emptyerror);
				
				$(".errorNotify").fadeTo("slow", 0.9).delay(2000).fadeOut("slow");			
				
			} else {
				input.removeClass("needsfilledphone");
			}
		}

		//if any inputs on the page have the class 'needsfilled' the form will not submit
		if ($(":input").hasClass("needsfilledphone")) {
			
		$(".buttons-wrapper a")
		num = [];
		$("#phone").val(num);
		i=0;
		
		$("#sendtophone").delay(200).effect("shake", { distance: 7, times:2 }, 300);
			return false;
			
		} else {
			return true;
		}
	});
	
		
	// Clears any fields in the form when the user clicks on them
	$(":input").focus(function(){		
	   if ($(this).hasClass("needsfilledphone") ) {
			$(this).val("");
			$(this).removeClass("needsfilledphone");
	   }
	});

	
	
        var i = 0;
        var num = [];
        $(".buttons-wrapper a").click(function(e) {
            e.preventDefault();
			$("#phone").focus();
            if($(this).attr("href") == "clear") {
                num = [];
                $("#phone").val(num);
                i=0;
            }
            else if($(this).attr("href") == "delete") {
                i--;
                var str = $("#phone").val();
                console.log(str);
                if(num.length == 3) {
                    str = str.substring(0, str.length-3).substring(1, str.length);
                }
                else if(num.length == 6) {
                    str = str.substring(0, str.length-2);
                }
                else {
                    str = str.substring(0, str.length-1);
                }
                $("#phone").val(str);
                num.splice(i, 1);
            }
            else {
                if(num.length <= 9) {
                    num[i] = $(this).attr("href");
                    if(num.length == 3) {
                        $("#phone").val("("+$("#phone").val()+num[i]+")-");
                    }
                    else if(num.length == 6) {
                        $("#phone").val($("#phone").val()+num[i]+"-");

                    }
                    else {
                        $("#phone").val($("#phone").val()+num[i]);
                    }
                    i++;
                }
            }
        });







});

</script>








</body>
</html>
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
		
		$("#sendtophone").delay(200).effect("shake", { distance: 7, times:2 }, 100);
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

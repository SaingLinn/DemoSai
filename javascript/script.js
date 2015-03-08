/** login drop down **/
$(document).ready(function() {
/**modal dialog**/

	$("#elogin").click(function(){
		$("#overlay").fadeIn("slow");
		$("#dialog").fadeIn("slow");
	})
	$("#overlay").click(function(){
		$("#overlay").fadeOut("slow");
		$("#dialog").fadeOut("slow");
		$("#dialog1").fadeOut("slow");
		$("#dialog2").fadeOut("slow");
	})
	$("#close").click(function(){
		$("#overlay").fadeOut("slow");
		$("#dialog").fadeOut("slow");
	})
	$("#eRegister").click(function(){
		$("#dialog1").slideToggle("slow");
		$("#dialog").fadeOut("slow");
	})
	$("#close1").click(function(){
		$("#dialog").fadeIn("slow");
		$("#dialog1").slideToggle("slow");
	})
	$("#close2").click(function(){
		$("#overlay").fadeOut("slow");
		$("#dialog2").fadeOut("slow");
	})

/** admin login **/
	$("#adlogin").click(function(){
		$("#overlay").fadeIn("slow");
		$("#dialog2").fadeIn("slow");
	})

/** validationform **/

	$(".loginvalid").validate({
		rules:{
			username:{
				"required":true
				
			},
			password:{
				"required":true
				
			}
		},
		messages:{
			username:{
				"required":"Please provide a username"
				
			},
			password: {
                "required": "Please provide a password"
                   
            }
   		}
   		
   	}); 
 

/*Job seeker Register validation*/

	$(".regvalid").validate({
		rules:{
			nusername:{
				"required":true,
				minlength:4
			},
			npassword:{
				"required":true,
				minlength:8
			},
			nemail:{
				"required":true,
				"email":true
			}
		},
		messages:{
			nusername:{
				"required":"Please provide a username",
				minlength:"must be at least 4 characters"
			},
			npassword:{
				"required":"Please provide a password",
				minlength:"must be at least 8 characters"
			},
			nemial:{
				"required":"Please provide a email",
				"email":"Please enter a valid email"
			}
		}
	});

/* employer login validation*/

	$(".employer").validate({
		rules:{
			eusername:{
				"required":true
				
			},
			epassword:{
				"required":true
				
			}
		},
		messages:{
			eusername:{
				"required":"Please provide a username"
				
			},
			epassword:{
				"required":"Please provide a password"
				
			}
		}
	});


/*employer register validation*/

	$(".empRegister").validate({
		rules:{
			empusername:{
				"required":true,
				minlength:4
			},
			emppassword:{
				"required":true,
				minlength:8
			},
			empemail:{
				"required":true,
				"email":true
			}
		},
		messages:{
			empusername:{
				"required":"Please provide a username",
				minlength:"must be at least 4 characters"
			},
			emppassword:{
				"required":"Please provide a password",
				minlength:"must be at least 8 characters"
			},
			empemial:{
				"required":"Please provide a email",
				"email":"Please enter a valid email"
			}
		}
	});

	$(".admin").validate({
		rules:{
			adusername:{
				"required":true
			},
			adpassword:{
				"required":true
			},
			newname:{
				"required":true
			},
			newpass:{
				"required":true
			}
		},
		messages:{
			adusername:{
				"required":"Please provide AdminName",
				minlength:"must be at least 4 characters"
			},
			adpassword:{
				"required":"Please provide last change password",
				minlength:"must be at least 8 characters"
			},
			newname:{
				"required":"Please provide a new name",
				minlength:"must be at least 4 characters"
			},
			newpass:{
				"required":"Please provide a new password",
				minlength:"must be at least 8 characters"
			}
		}
	});

	$(".report").validate({
		rules:{
			adusername:{
				"required":true
			},
			adpassword:{
				"required":true
			},
			newname:{
				"required":true
			},
			newpass:{
				"required":true
			}
		},
		messages:{
			adusername:{
				"required":"Please provide AdminName",
				minlength:"must be at least 4 characters"
			},
			adpassword:{
				"required":"Please provide last change password",
				minlength:"must be at least 8 characters"
			},
			newname:{
				"required":"Please provide a new name",
				minlength:"must be at least 4 characters"
			},
			newpass:{
				"required":"Please provide a new password",
				minlength:"must be at least 8 characters"
			}
		}
	});
	
	/* payment form and posting form*/
	$(".vacancy").validate({
		rules:{
			jobcategory:{
				"required":true
			},
			jobname:{
				"required":true
			},
			comname:{
				"required":true
			},
			localjob:{
				"required":true
			},
			time:{
				"required":true
			},
			skill:{
				"required":true
			},
			jobdesc:{
				"required":true
			},
			salary:{
				"required":true
			},
			howapply:{
				"required":true
			}
		}
	});

	/** new resume **/
	$(".newresume").validate({
		rules:{
			jobname:{
				"required":true
			},
			jobcategory:{
				"required":true
			},
			salary:{
				"required":true
			},
			localjob:{
				"required":true
			},
			time:{
				"required":true
			},
			summary:{
				"required":true
			},
			email:{
				"required":true
			},
			phone:{
				"required":true
			},
			education:{
				"required":true
			},
			language:{
				"required":true
			}
		}
	});


	
	$("#job").hide();
	$("#job1").hide();
	$("#job2").hide();
	$("#job3").hide();

	$("#mesg").click(function(){
		$("#job").fadeIn("slow");
	})
	$(".off").click(function(){
		$("#job").fadeOut("slow");
		$("#job1").fadeOut("slow");
		$("#job2").fadeOut("slow");
		$("#job3").fadeOut("slow");
	})

	$("#mesg1").click(function(){
		$("#job1").fadeIn("slow");
	})

	$("#mesg2").click(function(){
		$("#job2").fadeIn("slow");
	})
	$("#mesg3").click(function(){
		$("#job3").fadeIn("slow");
	})
	
	
	$("#payment").validate({
		rules:{
			bank:{
				"required":true
			},
			agree:{
				"required":true
			}	
		},
		messages:{
			bank:{
				"required":"Please provide your code"
			},
			agree:{
				"required":"Required your agreement"
			}
		}
	});
	/** apply form validation **/
	$(".jobapply").validate({
		rules:{
			jobname:{
				"required":true
			},
			gender:{
				"required":true
			},
			city:{
				"required":true
			},
			phone:{
				"required":true
			},
			letter:{
				"required":true
			}
		}
	});

	/** jslogin form and jsregister form **/

	$("#jsform").hide();

	$("#jsReg").click(function(){
		$("#jsform").show("slow");
		$("#jslogin").hide("slow");
	})
	$("#altReg").click(function(){
		$("#jsform").hide("slow");
		$("#jslogin").show("slow");
	})

	/** Report **/
	$("#jlistReport").hide();
	$("#payReport").hide();
	$("#jsReport").hide();
	$("#appReport").hide();
	$(".color").css("background-color","#9c9c9c");
	$(".jlistReport").click(function(){
		$("#jlistReport").show("fast");
		$("#empReport").hide("fast");
		$("#payReport").hide("fast");
		$("#jsReport").hide("fast");
		$("#appReport").hide("fast");
		$(".color1").css("background-color","#9c9c9c");
		$(".color").css("background-color","#6785CE");
		$(".color2").css("background-color","#6785CE");
		$(".color3").css("background-color","#6785CE");
		$(".color4").css("background-color","#6785CE");
	})
	$(".empReport").click(function(){
		$("#empReport").show("fast");
		$("#jlistReport").hide("fast");
		$("#payReport").hide("fast");
		$("#jsReport").hide("fast");
		$("#appReport").hide("fast");
		$(".color").css("background-color","#9c9c9c");
		$(".color1").css("background-color","#6785CE");
		$(".color2").css("background-color","#6785CE");
		$(".color3").css("background-color","#6785CE");
		$(".color4").css("background-color","#6785CE");
	})
	$(".payReport").click(function(){
		$("#payReport").show("fast");
		$("#jlistReport").hide("fast");
		$("#empReport").hide("fast");
		$("#jsReport").hide("fast");
		$("#appReport").hide("fast");
		$(".color2").css("background-color","#9c9c9c");
		$(".color").css("background-color","#6785CE");
		$(".color1").css("background-color","#6785CE");
		$(".color3").css("background-color","#6785CE");
		$(".color4").css("background-color","#6785CE");

	})
	$(".jsReport").click(function(){
		$("#jsReport").show("fast");
		$("#payReport").hide("fast");
		$("#jlistReport").hide("fast");
		$("#empReport").hide("fast");
		$("#appReport").hide("fast");
		$(".color3").css("background-color","#9c9c9c");
		$(".color2").css("background-color","#6785CE");
		$(".color").css("background-color","#6785CE");
		$(".color1").css("background-color","#6785CE");
		$(".color4").css("background-color","#6785CE");
	})
	$(".appReport").click(function(){
		$("#appReport").show("fast");
		$("#jsReport").hide("fast");
		$("#payReport").hide("fast");
		$("#jlistReport").hide("fast");
		$("#empReport").hide("fast");
		$(".color4").css("background-color","#9c9c9c");
		$(".color3").css("background-color","#6785CE");
		$(".color2").css("background-color","#6785CE");
		$(".color").css("background-color","#6785CE");
		$(".color1").css("background-color","#6785CE");
	})

	/** Account Setting **/
	$(".setting").hide();
	$("#setting").click(function(){
		$(".setting").slideToggle("slow");
	})

	/** search **/
	$(".type").hide();
	$(".type1").hide();
	$(".type2").hide();
	$(".type3").hide();
	$(".search").click(function(){
		$(".type").slideToggle("slow");
	})
	$(".search1").click(function(){
		$(".type1").slideToggle("slow");
	})
	$(".search2").click(function(){
		$(".type2").slideToggle("slow");
	})
	$(".search3").click(function(){
		$(".type3").slideToggle("slow");
	})
});





		

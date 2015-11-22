jQuery(document).ready(function($){
	//access wpvars set up in functions.php with wpvars.nameofvar
	
	//Simple Mail v1.0.1
	//enable the submit button on all simple_mail forms
	$(".simple_mail input[type=submit]").removeAttr("disabled");
	$(".simple_mail").submit(function(e){
		e.preventDefault();
		var form = $(this);
		var btn = $(this).find("input[type=submit]");
		var path = $(this).attr("action");
		
		//update the return message to processing
		if ($(form).find(".return").length) {
			$(form).find(".return").html("...processing").show();
		}
		
		btn.attr("disabled","disabled");
		$.post(path,form.serialize(),function(data){
			if (data.ok == true) {
				//if a redirect is specified, use that. Else replace the form with a message.
				if (form.find("input[name=redirect]").length && form.find("input[name=redirect]").val() != "") {
					window.location = form.find("input[name=redirect]").val();
				} else {
					form.html("<div class='sent'>Your message has been sent.</div>");
				}
			} else if (data.ok == false) {
				if ($(form).find(".return").length) {
					$(form).find(".return").html(data.message);
				} else {
					alert(data.message);
				}
				btn.removeAttr("disabled");
			} else {
				form.html("<div class='sent'>An unkown error has occurred.  Please try again later.</div>");
			}
		}, "json");
	});
	
	if ($(".wtext").length) {
		//copy all of the inputs with class wtext into an array and add the watermark class to the input
		wtextval = new Array();
		$(".wtext").each(function(i){
			//get the unique id of the input or assign it one if it doesn't have it.
			var id = $(this).attr("id");
			if (id == "" || id == null || id == undefined) {
				id = "wtext_" + i;
				$(this).attr("id","wtext_" + i);
			}
			wtextval[id] = $(this).val();
			$(this).addClass("watermark");
		});
		//on focus, check if the value is set to the default text, if so clear it out and remove the watermark class
		$(".wtext").focus(function(){
			var id = $(this).attr("id");
			if ($(this).val() == wtextval[id]) {
				$(this).val("").removeClass("watermark");
			}
		});
		//on blur check if the field is empty. if so, replace the default text and add the watermark class.
		$(".wtext").blur(function(){
			var id = $(this).attr("id");
			if ($(this).val() == "") {
				$(this).val(wtextval[id]).addClass("watermark");
			}
		});
	}
	
	//this is to replace target='_blank' which is deprecated code.  Any anchor with new_win class will open in a new browser window.
	$(".new_win").click(function(e){
		e.preventDefault();
		var url = $(this).attr("href");
		window.open(url);
	});
	
	
});

<!--This is the js for the menu toggle-->
jQuery(document).ready(function () {
	jQuery('#main-nav').meanmenu();
});

jQuery(function() {

	function disableEmailForm(flag) {
		jQuery("#txtTitle").prop("disabled", flag);
		jQuery("#txtName").prop("disabled", flag);
		jQuery("#txtClientEmail").prop("disabled", flag);
		jQuery("#txtMessage").prop("disabled", flag);
		jQuery("#btnEmailSubmit").prop("disabled", flag);
		jQuery("#txtCaptcha").prop("disabled", flag);
	}

	function emptyEmailForm() {
		jQuery('#txtTitle').prop('selectedIndex', 0); 
		jQuery("#txtName").val("");
		jQuery("#txtClientEmail").val("");
		jQuery("#txtMessage").val("");
		jQuery("#txtCaptcha").val("");
	}
	
	function renewAudioPath() {
		jQuery("#captchaAudioSourceMP3").attr("src", "");
		jQuery("#captchaAudioSourceOOG").attr("src", "");
		jQuery("#captchaAudio")[0].pause();
		jQuery("#captchaAudio")[0].load();
		
		jQuery.ajax({
			url: "./library/captcha/captcha_audio.php",
			type: "GET",
			success: function (data) {
				jQuery("#captchaAudioSourceMP3").attr("src", data + ".mp3");
				jQuery("#captchaAudioSourceOOG").attr("src", data + ".oog");
				jQuery("#captchaAudio")[0].pause();
				jQuery("#captchaAudio")[0].load();
			}
		});
	}
	
	jQuery("#btnRefreshCaptcha").click(function(e) {
		var d = new Date();
		jQuery("#captcha").attr("src", "./library/captcha/captcha.php?r=" + d.getTime());
		jQuery("#captcha").load(function(){
			renewAudioPath();
		});
	});
	
	function validateEmail(str) {
		if (isEmpty(str))
			return false;
			
		var atpos = str.indexOf("@");
		var dotpos = str.lastIndexOf(".");
		if (atpos < 1 || dotpos<atpos + 2 || dotpos + 2 >= str.length) {
			return false;
		}
		return true;
	}
	
	function isEmpty(str) {
		if (str == null || str == "")
			return true;
		return false;
	}
	
	jQuery("#btnEmailSubmit").click(function(e) {
		e.preventDefault();
		
		disableEmailForm(true);
		
		txtTitle = jQuery("#txtTitle option:selected").text();
		txtName = jQuery("#txtName").val();
		txtProgcode = jQuery("#txtProgcode").val();
		txtProgTitle = jQuery("#txtProgTitle").val();
		txtToEmail = jQuery("#txtToEmail").val();
		txtClientEmail = jQuery("#txtClientEmail").val();
		txtMessage = jQuery("#txtMessage").val();
		txtCaptcha = jQuery("#txtCaptcha").val();
		mail_lang = jQuery("#mail_lang").val();
		

		var flag = true;
		if (validateEmail(txtClientEmail) == false) {
			flag = false;
			jQuery("label[for='txtClientEmail']").css("display", "inline");
		} else {
			jQuery("label[for='txtClientEmail']").css("display", "none");
		}
		if(isEmpty(txtName) == true){
			flag = false;
			jQuery("label[for='txtName']").css("display", "inline");
		}
		else
		{
			jQuery("label[for='txtName']").css("display", "none");
		}
		if (isEmpty(txtMessage) == true) {
			flag = false;
			jQuery("label[for='txtMessage']").css("display", "inline");
		} else {
			jQuery("label[for='txtMessage']").css("display", "none");
		}
		if (isEmpty(txtCaptcha) == true) {
			flag = false;
			jQuery("label[for='txtCaptcha']").css("display", "inline");
		} else {
			jQuery("label[for='txtCaptcha']").css("display", "none");
		}
		
		if (flag == true) {
			jQuery.ajax({
				url: "/mail.php",
				type: "POST",
				timeout: 15000,
				data: {
					txtTitle: txtTitle,
					txtName: txtName,
					txtProgcode: txtProgcode,
					txtProgTitle: txtProgTitle,
					txtClientEmail: txtClientEmail,
					txtToEmail: txtToEmail,
					txtMessage: txtMessage,
					txtCaptcha: txtCaptcha,
					mail_lang: mail_lang
				},
				success: function(data) {
					if (data == '1') {
						emptyEmailForm();
					} else if (data == '2') {
						jQuery("#txtCaptcha").val("");
					}
					else if(data == 'error'){
						 errormsg=jQuery("#txtEmailMsg_3").val();
						 alert(errormsg);
						 disableEmailForm(false);
					     return;
					}
					alert(jQuery("#txtEmailMsg_" + data).val());
					disableEmailForm(false);
				
					var d = new Date();
					jQuery("#captcha").attr("src", "./library/captcha/captcha.php?r=" + d.getTime());
					jQuery("#captcha").load(function(){
						renewAudioPath();
					});
				},
			  error: function(x, t, m) {
				   disableEmailForm(false);
				   errormsg=jQuery("#txtEmailMsg_3").val();
				   alert(errormsg);
			/*
					if(t==="timeout") {
						alert("Timeout");
					} else {
						alert(t);
					}
			*/
				}				
			});
		} else {
			disableEmailForm(false);
		}
	});
	
	renewAudioPath();
	
	jQuery("#btnApplyOnline").click(function(e) {
		var url = jQuery("#txtApplyOnlineURL").val();
		window.open(url, 'Apply online', '');
	});
	
	jQuery("#AdvSearchbtn").removeAttr("style");
});
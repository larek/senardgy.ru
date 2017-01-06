$(document).ready(function(){
	
	$(".btn-callback").click(function(){
		var name = $(".name").val(),
			email = $(".email").val(),
			phone = $(".phone").val(),
			company = $(".company").val(),
			subject = $(".subject").val(),
			message = $(".message").val();

		if(name == "" && phone == ""){
			alert("Зполните обязательные поля Имя и Телефон");
		}else{
			$.get("sendmessage",{'name' : name, 'email' : email, 'phone' : phone, 'company' : company, 'subject' : subject, 'message' : message}).done(function(data){
				if(data == '1'){
					$("input").val("");
					$(".alert-success").show();
				}
			});
		}
	});

});
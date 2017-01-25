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
			$(this).html("Подождите");
			$.get("sendmessage",{'name' : name, 'email' : email, 'phone' : phone, 'company' : company, 'subject' : subject, 'message' : message}).done(function(data){
				if(data == '1'){
					$("input").val("");
					$("textarea").val("");
					$(".alert-success").show();
					$(".btn-callback").html('Отправить');
				}else{
					alert("Произошла ошибка");
				}
			});
		}
	});

});
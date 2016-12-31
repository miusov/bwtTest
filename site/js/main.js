(function($) {
	$(function() {

		$('#sendform').validate({
			rules:{
				name:{
					required: true,
					minlength: 2,
				},
				surname:{
					required: true,
					minlength: 3,
				},
				email:{
					required: true,
					email: true,				
				}
			},
			messages:{
				email:{
					email: 'Введите правильный Email!',
				},
				name:{
					minlength: 'Длина имени должна быть не менее 4-х символов',
				}
			}
		})

		$('#message').validate({
			rules:{
				name:{
					required: true,
					minlength: 2,
				},
				message:{
					required: true,
					minlength: 10,
				},
				email:{
					required: true,
					email: true,				
				}
			},
			messages:{
				email:{
					email: 'Введите правильный Email!',
				},
				name:{
					minlength: 'Длина имени должна быть не менее 4-х символов',
				},
				message:{
					minlength: 'Длина сообщения должна быть не менее 10 смволов',
				},
			}
		})


		$("#chbox").on("click", function () {
			if ($(this).is(":checked")) {
				$('.hid').slideDown(500);
				$('#reg').val('Зарегистрироваться');
				$('#reg').attr( 'name', 'register' );
			}
			else {
				$('.hid').slideUp(500);
				$('#reg').val('Войти');
				$('#reg').attr( 'name', 'login' );
			}
		})


	}) 
})(jQuery)
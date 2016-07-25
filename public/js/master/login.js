$(function() {
	$("form").on('click', '#btnLogin', function(event) {
		event.preventDefault();
		var _this = $(this);
		var _form = _this.closest('form');
		$.ajax({
			url: URL +'login/login_ajax',
			type: 'POST',
			dataType: 'json',
			data: _form.serializeArray()
		})
		.done(function(reponse) {
			if (Boolean(reponse.status)) {
				window.location = URL+'clientes/load_list';
			}else{
				bootbox.alert(reponse.message, function() {
				  
				});
			}
		})
		.fail(function(reponse) {
			console.log("error",reponse);
		});
		
		








	});
})
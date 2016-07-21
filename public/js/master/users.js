(function(){

if ($('table').length > 0) {
	$('table').DataTable();
}
	
	$('form').on('click','.btn-add',function(event){
	event.preventDefault();

	var _form = $(this).closest('form');
	var _url = _form.attr('action');
	var _data = _form.serializeArray()

		$.ajax({
			url: _url,
			type: 'POST',
			dataType: 'json',
			data: _data,
		})
		.done(function(_response) {
			
			if (Boolean(_response.status)) {
				window.location = URL+'users/load_list';
			}else{
				bootbox.alert(_response.message);
			}
		})
		.fail(function() {
			console.log("error");
		});


	});

	$('form').on('click','.btn-update',function(event){
	event.preventDefault();
	
	var _form = $(this).closest('form');
	var _url = _form.attr('action');
	var _data = _form.serializeArray()

		$.ajax({
			url: _url,
			type: 'POST',
			dataType: 'json',
			data: _data,
		})
		.done(function(_response) {
			
			if (Boolean(_response.status)) {
				window.location = URL+'users/load_list';
			}else{
				bootbox.alert(_response.message);
			}
		})
		.fail(function() {
			console.log("error");
		});


	});

	$('table').on('click','.btn-delete',function(event){
	event.preventDefault();

	var _this = $(this);
	var _url = _this.attr('href');

		bootbox.confirm("¿Deseas eliminar este usuario?", function(result) {
		  if (Boolean(result)) {
		  	$.ajax({
				url: _url,
				type: 'GET',
				dataType: 'json'
				
			})
			.done(function(_response) {
				
				if (Boolean(_response.status)) {
					window.location = URL+'users/load_list';
				}else{
					bootbox.alert(_response.message);
				}
			})
			.fail(function() {
				console.log("error");
			});
		  }

		}); 
	
		


	});

})();
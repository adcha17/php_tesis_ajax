$(function() {



	$('#btn-load-modal').on('click', function(event) {
		event.preventDefault();

		var _form = $(this).closest('form');
		var _url = URL +'orders/load_modal'
		var _data = _form.serializeArray()

			$.ajax({
				url: _url,
				type: 'POST',
				dataType: 'json',
			 
			})
			.done(function(_response) {
				
				if (Boolean(_response.status)) {
					 $('#main-modal').html(_response.html);
					 if ($('#load-modal').length> 0) {
					 		$('#load-modal').modal();
					 }
				}else{
					bootbox.alert(_response.message);
				}
			})
			.fail(function() {
				console.log("error");
			});

		
	});


	$('#btnAdd').on('click', function(event) {
		event.preventDefault();
		
		var html = '<tr>'+
		                '<td>1</td>'+
		                '<td>productos 1</td>'+
		                '<td>25.20</td>'+
		                '<td><input type="text" class="item-cantidad" value=""></td>'+
		                '<td class="item-total">25.50</td>'+
		                '<td>'+
		                    '<a href="" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>'+
		                '</td>'+
		            '</tr>';

		$('table').find('tbody').append(html)
		calcular_total();


	});


$("table").on('keydown','.item-cantidad',function (e) {

	console.log(e)

    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13]) !== -1 ||
            (e.keyCode == 65 && e.ctrlKey === true) ||
            (e.keyCode >= 35 && e.keyCode <= 40)) {
        return;
    }

    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
        e.preventDefault();
    }
});


















});


var calcular_total = function() {
	var total = 0;
	var _item = $('.item-total');
	$.each(_item, function(index, val) {
		 var item = $(val).text();
		 total += item;
	});

	return total;

}
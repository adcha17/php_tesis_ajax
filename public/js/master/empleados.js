(function(){

	if ($('#datepicker').length > 0) {
		$("#datepicker").datepicker({
		  changeMonth: true,
		  changeYear: true,
		  dateFormat: "yy-mm-dd"
		});

		$("#datepicker").on('change', function(event) {
		  event.preventDefault();
		  var fec_nac = $('#datepicker').datepicker().val();
		  $("#fec_nac").attr('value', fec_nac);
		});
	}

	$(document).ready(function() {

        $(".load_photos").on("change", function() {
            var _this = $(this);                    
            load_photos(_this);

        });

    });
    

    function load_photos(element) {
       
        $('.msj_success').fadeIn();
        var _this = element;
        var _parent = _this.closest('#file_upload_form');
        $('.postIframe').remove();
        var _iframe = $('<iframe id="upload_frame" name="upload_frame" class="postIframe"></iframe>');
        _parent.append(_iframe);
        _parent.find("#upload_frame").load(function() {
            var _res = _parent.find("iframe")[0].contentDocument.body.innerHTML;
            var _obj = $.parseJSON(_res);
            
            $("#res").html('<img src="'+URL+'uploads/' + _obj[0].name + '" width="150" heigth="150" />');
            
            $("#photo").attr('value', URL+'uploads/'+_obj[0].name);
            $('.msj_success').fadeOut();

        })
        _parent.attr('method', 'post');
        _parent.attr('enctype', 'multipart/form-data');
        _parent.attr('target', 'upload_frame').submit();

    }
        

	if ($('table').length > 0) {
		$('table').DataTable();
	}
	
	$('form').on('click','.btn-add',function(event){
	event.preventDefault();


		$('form').attr('action',URL+'empleados/action_add');

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
				window.location = URL+'empleados/load_list';
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

	$('form').attr('action',URL+'empleados/action_update');
	
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
				window.location = URL+'empleados/load_list';
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

		bootbox.confirm("¿Deseas eliminar este empleado?", function(result) {
		  if (Boolean(result)) {
		  	$.ajax({
				url: _url,
				type: 'GET',
				dataType: 'json'
				
			})
			.done(function(_response) {
				
				if (Boolean(_response.status)) {
					window.location = URL+'empleados/load_list';
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
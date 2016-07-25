<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="<?php echo base_url('public/css/bootstrap.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('public/css/style.css')?>">

<script> var URL = "<?php echo base_url()?>"</script>
</head> 
<body>
	<div class="container">
		<div class="wrapper">
		<div class="col-md-12">
		   <form action="<?php echo base_url($controller.'/action_add')?>" method="POST" role="form">
		   		<legend>Datos del Cliente | <?php echo $controller?></legend>
		   	
		   		<div class="form-group">
		   			<label for="">Nombre</label>
		   			<input type="text" class="form-control" id="name" name="name" placeholder="Nombre">
		   		</div>
		   		<div class="form-group">
		   			<label for="">Apellido</label>
		   			<input type="text" class="form-control" id="last_name" name="last_name" placeholder="Apellidos">
		   		</div>
		   		<div class="form-group">
		   			<label for="">Sexo</label>
		   			<select name="sex" id="sex" class="form-control">
		   				<option value="">--SELECCIONE--</option>
		   				<option value="M">MASCULINO</option>
		   				<option value="F">FEMENINO</option>
		   			</select>
		   	    </div>
		   	    <div class="form-group">
		   			<label for="">Dni</label>
		   			<input type="text" class="form-control" id="dni" name="dni" placeholder="Dni" maxlength="8">
		   		</div>
		   	    <div class="form-group">
		   			<label for="">Direccion</label>
		   			<input type="text" class="form-control" id="address" name="address" placeholder="Direccion">
		   		</div>
		   		<div class="form-group">
		   			<label for="">Distrito</label>
		   			<select name="district_id" id="district_id" class="form-control">
		   				<option value="">--SELECCIONE--</option>
		   				<option value="1">ATE</option>
		   				<option value="2">EL AGUSTINO</option>
		   				
		   			</select>
		   		</div>
		   		
		   	
		   		
		   	
		   		<button type="submit" class="btn btn-primary btn-add"><span class="glyphicon glyphicon-send" aria-hidden="true"> REGISTRAR</span></button>
		   		<a href="<?php echo base_url($controller.'/load_list')?>" class="btn btn-warning">
   					<span class="glyphicon glyphicon-repeat" aria-hidden="true"> CANCELAR</span>
   				</a>
		   	</form>	
		

		</div>

		</div>

	</div>


	<script src="<?php echo base_url('public/js/jquery.min.js')?>"></script>
	<script src="<?php echo base_url('public/js/bootstrap.js')?>"></script>
	<script src="<?php echo base_url('public/js/bootbox.js')?>"></script>
	<script src="<?php echo base_url('public/js/master/'.$controller.'.js') ?>"></script>
</body>
</html>
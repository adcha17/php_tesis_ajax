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
		   		<legend>Datos del Categoria | <?php echo $controller?></legend>
		   	
		   		<div class="form-group">
		   			<label for="">Nombre</label>
		   			<input type="text" class="form-control" id="name" name="name" placeholder="Nombre">
		   		</div>
		   		<div class="form-group">
		   		<label for="">Descripcion</label>
		   		<br>
		   		<textarea class="form-control" id="descripcion" name="descripcion" placeholder="Ingresa tu descripcion" cols="75" rows="10"></textarea>
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
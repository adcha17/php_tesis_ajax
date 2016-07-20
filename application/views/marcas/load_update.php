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
		   <form action="<?php echo base_url($controller.'/action_update')?>" method="POST" role="form">
		   		<legend>Datos del marcas | <?php echo $controller?></legend>

		   		<div class="form-group">
		   			<label for="">Nombre</label>
		   			<input type="hidden" value="<?php echo $item->id ?>" class="form-control" id="marcas_id" name="marcas_id">
		   			<input type="text" value="<?php echo $item->name ?>" class="form-control" id="name" name="name" placeholder="Nombre">
		   		</div>
		   		
		   		<div class="form-group">
		   		<label for="">Descripcion</label>
		   		<br>	
				<textarea class="form-control" id="descripcion" name="descripcion" cols="75" rows="10"><?php echo $item->descripcion ?></textarea>		 
		   		</div>	
		   	
		   		<button type="submit" class="btn btn-primary btn-update"><span class="glyphicon glyphicon-send" aria-hidden="true"> GUARDAR</span></button>
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
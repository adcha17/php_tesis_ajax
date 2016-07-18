<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="<?=base_url('public/css/bootstrap.css')?>">
	<link rel="stylesheet" href="<?= base_url('public/css/style.css')?>">
	
</head>
<body>
	<div class="container">
		<div class="wrapper">
		<div class="col-md-12">
		   <form action="" method="POST" role="form">
		   		<legend>Datos de la Marcas | <?=$controller?></legend>
		   	
		   		<div class="form-group">
		   			<label for="">Nombre</label>
		   			<input type="text" class="form-control" id="" placeholder="nombre">
		   		</div>
		   	
		   		
		   	
		   		<button type="submit" class="btn btn-primary">REGISTRAR</button>
		   	</form>	
		

		</div>

		</div>

	</div>


<script src="<?= base_url('public/js/jquery.min.js')?>"></script>
<script src="<?= base_url('public/js/bootstrap.js')?>"></script>
<script src="<?=base_url('public/js/master/'.$controller.'.js') ?>"></script>
</body>
</html>
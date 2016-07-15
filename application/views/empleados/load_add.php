<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="<?php echo base_url('public/css/bootstrap.css')?>">
	<!-- <link rel="stylesheet" href="<?php echo base_url('public/css/style.css')?>"> -->

<script> var URL = "<?php echo base_url()?>"</script>
</head> 
<body>
	<div class="container">
		<div class="wrapper">
		<div class="col-md-12">
		   <form action="<?php echo base_url($controller.'/action_add')?>" method="POST" role="form">
		   		<legend>Datos del Empleado | <?php echo $controller?></legend>
		   		
		   		<div class="row">
                  <div class="form-group col-md-2">
                    <label >Nombre:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nombre">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-3">
                    <label >Apellido:</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Apellidos">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-2">
                    <label >Dni:</label>
                    <input type="text" class="form-control" id="dni" name="dni" placeholder="Dni" maxlength="8">
                  </div>
                  <div class="form-group col-md-2">
		   			<label for="">Sexo</label>
		   			<select name="sex" id="sex" class="form-control">
		   				<option value="">--SELECCIONE--</option>
		   				<option value="M">MASCULINO</option>
		   				<option value="F">FEMENINO</option>
		   			</select>
		   	      </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-2">
                    <label >Departamento:</label>
                    <select name="department_id" id="department_id" class="form-control">
		   				<option value="">--SELECCIONE--</option>
		   				<option value="1">LIMA</option>
		   				<option value="2">TACNA</option>
		   			</select>
                  </div>
                  <div class="form-group col-md-2">
		   			<label for="">Estado Civil</label>
		   			<select name="civil_status" id="civil_status" class="form-control">
		   				<option value="">--SELECCIONE--</option>
		   				<option value="S">SOLTERO</option>
		   				<option value="C">CASADO</option>
		   			</select>
		   	      </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-2">
                    <label >Provincia:</label>
                    <select name="province_id" id="province_id" class="form-control">
		   				<option value="">--SELECCIONE--</option>
		   				<option value="1">OROYA</option>
		   				<option value="2">LIMA</option>
		   			</select>
                  </div>

                </div>
                <div class="row">
                  <div class="form-group col-md-2">
                    <label >Distrito:</label>
                    <select name="district_id" id="district_id" class="form-control">
		   				<option value="">--SELECCIONE--</option>
		   				<option value="1">SANTA ANITA</option>
		   				<option value="2">ATE</option>
		   			</select>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-4">
                    <label >Direccion:</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Direccion">
                  </div>
                </div>
		   	
		   		P
		   		
		   	
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
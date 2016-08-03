<div class="page-header">
<h1>Forms <small>General forms elements</small></h1>
</div>
<div class="row">
<div class="col-md-12">
<div class="pull-right">
<a href="<?php echo base_url($controller.'/load_list')?>" class="btn btn-info btn-sm">
<span class="glyphicon glyphicon-repeat" aria-hidden="true"></span>
</a>
</div>
</div>
</div>
    
            <div class="row">
              <div class="col-md-12">
                  <div class="panel panel-default">
                        <div class="panel-heading">AGREGAR USUARIOS</div>
                        <div class="panel-body">
		   	<form action="<?php echo base_url($controller.'/action_add')?>" method="POST" role="form">
		   		<legend>Datos del Usuario | <?php echo $controller?></legend>
				
		   	   
		   	   <div class="form-group">
		   			<label for="">Empledos</label>
		   			<select name="empleado_id" id="empleado_id" class="form-control">
		   	<option value="">--SELECCIONE--</option>
		   				<?php
						for($x=0; $x < count($empleados); $x++){
						?>
						<option value = "<?php echo $empleados[$x]->id ?>"><?php echo $empleados[$x]->name ?></option>
					<?php
					}
					?>



		   				
		   			</select>
		   		</div>
		   	  
		   		<div class="form-group">
		   			<label for="">Tipo de Usuario</label>
		   			<select name="tipo_usuario" id="tipo_usuario" class="form-control">
		   				<option value="">--SELECCIONE--</option>
		   				<option value="USUARIO NORMAL">USUARIO NORMAL</option>
		   				<option value="USUARIO ADMINISTADOR">USUARIO ADMINISTRADOR</option>
		   				
		   			</select>
		   		</div>

		   		<div class="form-group">
		   			<label for="">Nombre de Usuario</label>
		   			<input type="text" class="form-control" id="nombre_usuario" name="nombre_usuario" placeholder="Nombre de Usuario">
		   		</div>
		   		<div class="form-group">
		   			<label for="">Contraseña</label>
		   			<input type="password" class="form-control" id="password" name="password" placeholder="Password">
		   		</div>

		   		
		   		
		   		
		   	
		   		
		   	
		   		<button type="submit" class="btn btn-primary btn-add"><span class="glyphicon glyphicon-send" aria-hidden="true"> REGISTRAR</span></button>
		   		<a href="<?php echo base_url($controller.'/load_list')?>" class="btn btn-warning">
   					<span class="glyphicon glyphicon-repeat" aria-hidden="true"> CANCELAR</span>
   				</a>
		   	</form>	
		

		</div>

		</div>

	</div>


	</div>
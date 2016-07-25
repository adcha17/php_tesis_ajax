
	<div class="container">
		<div class="">
		<div class="col-md-12">

		   <form id="file_upload_form" action="<?php echo base_url($controller.'/upload') ?>" method="POST" role="form">
		   		<legend>Datos del Empleado | <?php echo $controller?></legend>
		   		
		   		<div class="row">
                  <div class="form-group col-md-3" >
                    <label >Nombre:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nombre">
                  </div>
                  <div class="form-group col-md-4">
                  
			            <label for="upload_field">Foto</label>                 
                  <input type="hidden" id="photo" name="photo">
			            <input type="file" id="upload_field[]" name="upload_field[]" class="load_photos" name="upload_field" />
                                     
              <br/>
			        <div id="res"></div>

			        <div class="msj_success">
			            <div class="loading" ><img src="<?php echo base_url('public/images/loading.GIF')?>" /></div>
			        </div>
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
                  <div class="form-group col-md-2">
                    <label >Fecha de Nacimiento:</label>

                    <input type="hidden" id="fec_nac" name="fec_nac">
                    <input type="text" class="form-control" id="date" name="datepicker" placeholder="--SELECCIONE--">
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
		   	
		   	
		   	
		   		<button type="submit" class="btn btn-primary btn-add"><span class="glyphicon glyphicon-send" aria-hidden="true"> REGISTRAR</span></button>
		   		<a href="<?php echo base_url($controller.'/load_list')?>" class="btn btn-warning">
   					<span class="glyphicon glyphicon-repeat" aria-hidden="true"> CANCELAR</span>
   				</a>
		   	</form>	
		

		</div>

		</div>

	</div>

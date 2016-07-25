
	<div class="container">
		<div class="">
		<div class="col-md-12">
		   <form id="file_upload_form" action="<?php echo base_url($controller.'/upload') ?>" method="POST" role="form">
       		<legend>Datos del Empleado | <?php echo $controller?></legend>
		   		
		   		<div class="row">
                  <div class="form-group col-md-3" >
                    <input type="hidden" value="<?php echo $item->id ?>" class="form-control" id="empleado_id" name="empleado_id">
                    <label >Nombre:</label>
                    <input type="text" value="<?php echo $item->name ?>" class="form-control" id="name" name="name" placeholder="Nombre">
                  </div>
                  <div class="form-group col-md-4">
                  
			            <label for="upload_field">Foto</label>                 
                  <input type="hidden" id="photo" name="photo" value="<?php echo $item->photo ?>">
			            <input type="file" id="upload_field[]" name="upload_field[]" class="load_photos" name="upload_field" />
                  <br/>
                  <div id="res">
                      <img src="<?php echo $item->photo ?>" width="150">
                  </div>
			        
			        <div class="msj_success">
			            <div class="loading" ><img src="<?php echo base_url('public/images/loading.GIF')?>" /></div>
			        </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-3">
                    <label >Apellido:</label>
                    <input type="text" value="<?php echo $item->last_name ?>" class="form-control" id="last_name" name="last_name" placeholder="Apellidos">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-2">
                    <label >Dni:</label>
                    <input type="text" class="form-control" id="dni" name="dni" placeholder="Dni" maxlength="8"  value="<?php echo $item->dni ?>">
                  </div>
                  <div class="form-group col-md-2">
		   			<label for="">Sexo</label>
		   			<select name="sex" id="sex" class="form-control">
		   				<option value="">--SELECCIONE--</option>
		   				<option value="M" <?php echo ($item->sex=='M')?'selected':'' ?>>MASCULINO</option>
              <option value="F" <?php echo ($item->sex=='F')?'selected':'' ?>>FEMENINO</option>
		   			</select>
		   	      </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-2">
                    <label >Departamento:</label>
                    <select name="department_id" id="department_id" class="form-control">
		   				<option value="">--SELECCIONE--</option>
		   				<option value="1" <?php echo ($item->district_id==1)?'selected':'' ?> >PUNO</option>
              <option value="2" <?php echo ($item->district_id==2)?'selected':'' ?> >TACNA</option>
		   			</select>
                  </div>
                  <div class="form-group col-md-2">
		   			<label for="">Estado Civil</label>
		   			<select name="civil_status" id="civil_status" class="form-control">
		   				<option value="">--SELECCIONE--</option>
		   				<option value="S" <?php echo ($item->district_id==1)?'selected':'' ?> >SOLTERO</option>
              <option value="C" <?php echo ($item->district_id==2)?'selected':'' ?> >CASADO</option>
		   			</select>
		   	      </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-2">
                    <label >Provincia:</label>
                    <select name="province_id" id="province_id" class="form-control">
		   				<option value="">--SELECCIONE--</option>
		   				<option value="1" <?php echo ($item->district_id==1)?'selected':'' ?> >OROYA</option>
              <option value="2" <?php echo ($item->district_id==2)?'selected':'' ?> >LIMA</option>
		   			</select>
                  </div>
                  <div class="form-group col-md-2">
                    <label >Fecha de Nacimiento:</label>

                    <input type="hidden" id="fec_nac" name="fec_nac"  value="<?php echo $item->fec_nac ?>">
                    <input type="text" class="form-control" id="date" name="datepicker" placeholder="--SELECCIONE--" value="<?php echo $item->fec_nac ?>">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-2">
                    <label >Distrito:</label>
                    <select name="district_id" id="district_id" class="form-control">
		   				<option value="">--SELECCIONE--</option>
		   				<option value="1" <?php echo ($item->district_id==1)?'selected':'' ?> >SANTA ANITA</option>
              <option value="2" <?php echo ($item->district_id==2)?'selected':'' ?> >LA MOLINA</option>
		   			</select>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-4">
                    <label >Direccion:</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Direccion"  value="<?php echo $item->address ?>">
                  </div>
                </div>
		   	
		   	
		   	
		   		<button type="submit" class="btn btn-primary btn-update"><span class="glyphicon glyphicon-send" aria-hidden="true"> GUARDAR</span></button>
		   		<a href="<?php echo base_url($controller.'/load_list')?>" class="btn btn-warning">
   					<span class="glyphicon glyphicon-repeat" aria-hidden="true"> CANCELAR</span>
   				</a>
		   	</form>	
		

		</div>

		</div>

	</div>

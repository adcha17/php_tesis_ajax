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
                        <div class="panel-heading">AGREGAR CLIENTES</div>
                        <div class="panel-body">
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
            </div>


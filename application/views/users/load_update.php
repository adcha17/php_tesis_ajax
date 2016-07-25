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
                        <div class="panel-heading">Listade de Clientes</div>
                        <div class="panel-body">


                    <form action="<?php echo base_url($controller . '/action_update') ?>" method="POST" role="form">
                        <legend>Datos del Usuario | <?php echo $controller ?></legend>
                      

                       

        <div class="form-group">
        <label for="">Empledos</label>
        <input value="<?php echo $item->id ?>" type="hidden" id="cliente_id" name="cliente_id" class="form-contrl">
        

        <select name="empleado_id" id="empleado_id" class="form-control">
       

<?php

for($x=0; $x < count($empleados); $x++){
echo $empleados->id . '=>'.$item->empleado_id;
$_selected = ($empleados[$x]->id === $item->empleado_id)?'selected':'';
?>

<option value="<?php echo $empleados[$x]->id ?>"<?php echo $_selected ?>> <?php echo $empleados[$x]->name ?></option>}



                    

    <?php
    }
    ?>



                        
                    </select>
                </div>

                        



                        <div class="form-group">
                            <label for="">Tipo de Usuario</label>
                            <select name="tipo_usuario" id="tipo_usuario" class="form-control">

           
            
                    
            <option value="USUARIO ADMINISTRADOR" <?php echo ($item->tipo_usuario == 'USUARIO ADMINISTRADOR') ?'selected' : '' ?>>USUARIO ADMINISTRADOR</option>
            <option value="USUARIO NORMAIL" <?php echo ($item->tipo_usuario == 'USUARIO NORMAL')       ? 'selected' : '' ?>>USUARIO NORMAL</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Nombre de Usuario</label>
                            <input type="text" value="<?php echo $item->nombre_usuario ?>" class="form-control" id="nombre_usuario" name="nombre_usuario" placeholder="Nombre de Usuario">
                        </div>
                        <div class="form-group">
                            <label for="">Contraseña</label>
                            <input type="password" value="<?php echo $item->password ?>" class="form-control" id="password" name="password" placeholder="Password">
                        </div>





                        <button type="submit" class="btn btn-primary btn-update"><span class="glyphicon glyphicon-send" aria-hidden="true"> GUARDAR</span></button>
                        <a href="<?php echo base_url($controller . '/load_list') ?>" class="btn btn-warning">
                            <span class="glyphicon glyphicon-repeat" aria-hidden="true"> CANCELAR</span>
                        </a>
                    </form>	


                </div>

            </div>

        </div>


        </div>
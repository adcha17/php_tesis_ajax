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
                        <div class="panel-heading">Lista de Categorias</div>
                        <div class="panel-body">
                             <form action="<?php echo base_url($controller.'/action_add')?>" method="POST" role="form">
          <legend>Datos de Categoria | <?php echo $controller?></legend>
        
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
            </div>

<script src="<?php echo base_url('public/js/bootbox.js')?>"></script>
<script src="<?php echo base_url('public/js/master/'.$controller.'.js') ?>"></script>
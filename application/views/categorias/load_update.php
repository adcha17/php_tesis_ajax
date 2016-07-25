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
                        <div class="panel-heading">ACTUALIZAR CATEGORIA</div>
                        <div class="panel-body">
                        	<form action="<?php echo base_url($controller.'/action_update')?>" method="POST" role="form">
		   		<legend>Datos de Categoria | <?php echo $controller?></legend>

		   		<div class="form-group">

		   		<div class="form-group">
		   			<label for="">Nombre</label>
		   			<input type="hidden" value="<?php echo $item->id ?>" class="form-control" id="categoria_id" name="categoria_id">
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


	
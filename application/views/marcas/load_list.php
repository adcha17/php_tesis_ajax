<div class="page-header">
<h1>Forms <small>General forms elements</small></h1>
</div>
<div class="row">
<div class="col-md-12">
<div class="pull-right">
<a href="<?php echo base_url($controller.'/load_add')?>" class="btn btn-info btn-sm">
<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
</a>
</div>
</div>
</div>
    
            <div class="row">
              <div class="col-md-12">
                  <div class="panel panel-default">
                        <div class="panel-heading">LISTADO DE MARCAS</div>
                        <div class="panel-body">
			   <table class="table table-bordered table-hover">
			   	<thead>
			   		<tr>
			   			<th>#</th>
			   			<th>Nombre</th>
			   			<th>Descripcion</th>
			   			<th></th>
			   			
			   		</tr>
			   	</thead>
			   	<tbody>
			   		<?php 
			   			$_count = count($items);

			   			if ($_count > 0) {
			   				
			   				for ($x=0; $x < $_count; $x++) {
			   		 ?>
			   		<tr>
			   			<td><?php echo $items[$x]->id ?></td>
			   			<td><?php echo $items[$x]->name?></td>
			   			<td><?php echo $items[$x]->descripcion?></td>
		


			   			<td>
			   				<a href="<?php echo base_url($controller.'/load_update/'.$items[$x]->id)?>" class="btn btn-success btn-sm">
			   					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
			   				</a>
			   				<a href="<?php echo base_url($controller.'/action_delete/'.$items[$x]->id)?>" class="btn btn-danger btn-sm  btn-delete">
			   					<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
			   				</a>
			   			</td>
			   		</tr>
			   		<?php 
			   			}
			   		}else{
			   		 ?>
			   			<tr> <td colspan="5">NO HAY RESULTADOS</td> </tr>
			   		<?php 
			   			}
			   		 ?>
			   		
			   	</tbody>
			   </table>

			
			</div>

		</div>

	</div>


</div>
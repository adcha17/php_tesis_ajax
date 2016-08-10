<?php 
vdebug($items_products);

 ?>
	<div class="container">
		<div class="row">
				<div class="col-md-12">
					<h4>LISTADO DE EMPLEADOS</h4>
				</div>
				<div class="pull-right">
					<a href="<?php echo base_url($controller.'/load_add')?>" class="btn btn-info btn-sm">
	   					<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
	   				</a>
				</div>
			</div>
			<hr>
			<div class="row">
			<div class="col-md-12">

			   <table class="table table-bordered table-hover">
			   	<thead>
			   		<tr>
			   			<th>#</th>
			   			<th>Nombre</th>
			   			<th>Foto</th>
			   			<th>Apellidos</th>
			   			<th>Dni</th>
			   			<th>Sexo</th>
			   			<th>Dirección</th>
			   			<th>Estado Civil</th>
			   			<th>Fecha Nacimiento</th>
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
			   			<td><?php echo $items[$x]->name ?></td>

			   	
			   			<td class="text-center"><img src="<?php echo $items[$x]->photo ?>" width="50"></td>

			   			<td><?php echo $items[$x]->last_name ?></td>
			   			<td><?php echo $items[$x]->dni ?></td>			   			
			   			<td class="text-center"><?php echo $items[$x]->sex ?></td>
			   			<td>
			   			
			   				<?php echo $items[$x]->address ?>
			   			
			   			</td>
			   			<td class="text-center"><?php echo $items[$x]->civil_status ?></td>
			   			<td class="text-center"><?php echo $items[$x]->fec_nac ?></td>

			   			<td class="text-center">
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


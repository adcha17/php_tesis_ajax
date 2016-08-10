<div class="modal fade" id="load-modal">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Lista de Productos</h4>
			</div>
			<div class="modal-body">
				<div class="row">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>#</th>
									<th>Producto</th>
									<th>Precio</th>
									<th>Stock</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
							<?php 
							$_count = 	count($items_products);
							for ($i=0; $i < $_count ; $i++) { 
								$item = $items_products[$i];
							?>
								<tr>
									<td><?=$i?></td>
									<td><?=$item->nombre ?></td>
									<td><?=$item->precio ?></td>
									<td><?=$item->stock ?></td>
									<td><a href="javascript:;" class="btn"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></td>
								</tr>
								<?php } ?>
							</tbody>
						</table>




				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
				 
			</div>
		</div>
	</div>
</div>
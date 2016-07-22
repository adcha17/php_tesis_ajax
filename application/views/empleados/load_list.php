<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="<?php echo base_url('public/css/bootstrap.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('public/css/style.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('public/css/jquery.dataTables.min.css')?>">

<script> var URL = "<?php echo base_url()?>"</script>
</head> 
<body>
	<div class="container">
		<div class="row">
				<div class="col-md-12">
					<h4>LISTADO DE CLIENTES</h4>
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
			   			<td><?php echo $items[$x]->photo ?></td
			   			<td><?php echo $items[$x]->last_name ?></td>
			   			<td><?php echo $items[$x]->dni ?></td>			   			
			   			<td><?php echo $items[$x]->sex ?></td>
			   			<td><?php echo $items[$x]->address ?></td>
			   			<td><?php echo $items[$x]->civil_status ?></td>
			   			<td><?php echo $items[$x]->fec_nac ?></td>

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


	<script src="<?php echo base_url('public/js/jquery.min.js')?>"></script>
	<script src="<?php echo base_url('public/js/bootstrap.js')?>"></script>
	<script src="<?php echo base_url('public/js/bootbox.js')?>"></script>
	<script src="<?php echo base_url('public/js/jquery.dataTables.min.js') ?>"></script>
	<script src="<?php echo base_url('public/js/master/'.$controller.'.js') ?>"></script>
	
</body>
</html>


<div class="container">
	<h2>Lista Alumnos</h2>
	<form class="form-inline" action="?controller=alumno&action=search" method="POST">
		<div class="form-group row">
			<div class="col-xs-4">
				<input class="form-control" id="id" name="id" type="text" placeholder="Busqueda por ID">
			</div>
		</div>
		<div class="form-group row">
			<div class="col-xs-4">
				<button type="submit" class="btn btn-primary" ><span class="glyphicon glyphicon-search"> </span> Buscar</button>
			</div>
		</div>
	</form>
	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>Nombres</th>
					<th>Apellidos</th>
					<th>Direcc&iacuteon</th>
					<th>Estado</th>
					<th>Accion</th>
				</tr>
				<tbody>
					<?php foreach ($listaAlumnos as$alumno) {?>

					
					<tr>
						<td> <a href="?controller=alumno&&action=updateshow&&id=<?php  echo $alumno->getId()?>"> <?php echo $alumno->getId(); ?></a> </td>
						<td><?php echo $alumno->getNombres(); ?></td>
						<td><?php echo $alumno->getApellidos(); ?></td>
						<td><?php echo $alumno->getDireccion(); ?></td>
						<td><?php if ( $alumno->getEstado()=='checked'):?>
							Activo
						<?php  else:?>
							Inactivo
						<?php endif; ?></td>
						<td><a href="?controller=alumno&&action=delete&&id=<?php echo $alumno->getId() ?>">Eliminar</a> </td>
					</tr>
					<?php } ?>
				</tbody>

			</thead>
		</table>

	</div>	

</div>
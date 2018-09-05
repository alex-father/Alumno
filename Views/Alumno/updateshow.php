<div class="container">
	<h2>Actualizar Alumno</h2>
	<form class="form-inline" action="?controller=alumno&action=search" method="post">
		<div class="form-group row">
			<div class="col-xs-4">
				<input class="form-control" id="id" name="id" type="text" placeholder="Busqueda por ID">
			</div>
		</div>
		<div class="form-group row">
			<div class="col-xs-4">
				<button type="submit" class="btn btn-primary" ></span> Buscar</button>
			</div>
		</div>
	</form>
	<form action="?controller=alumno&&action=update" method="POST">
		<input type="hidden" name="id" value="<?php echo $alumno->getId() ?>" >
		<div class="form-group">
			<label for="text">Nombres</label>
			<input type="text" name="nombres" id="nombres" class="form-control" value="<?php echo $alumno->getNombres() ?>">
		</div>
		<div class="form-group">
			<label for="text">Apellidos</label>
			<input type="text" name="apellidos" id="apellidos" class="form-control" value="<?php echo $alumno->getApellidos(); ?>">
		</div>
		<div class="form-group">
			<label for="text">Direccion</label>
			<input type="text" name="direccion" id="direccion" class="form-control" value="<?php echo $alumno->getDireccion(); ?>">
		</div>
		<div class="check-box">
			<label>Activo <input type="checkbox" name="estado" <?php echo $alumno->getEstado() ?>></label>
		</div>
		<button type="submit" class="btn btn-primary">Actualizar</button>
<tr>
						<td> <a href="?controller=alumno&&action=update&&idAlumno=<?php  echo $alumno->getId()?>"> <?php echo $alumno->getId(); ?></a> </td>
						<td><?php echo $alumno->getNombres(); ?></td>
						<td><?php echo $alumno->getApellidos(); ?></td>
						<td><?php echo $alumno->getDireccion(); ?></td>
						<td><?php if ( $alumno->getEstado()=='checked'):?>
							Activo
						<?php  else:?>
							Inactivo
						<?php endif; ?></td>
						<td><a href="?controller=alumno&&action=update&&id=<?php echo $alumno->getId() ?>">Actualizar</a> </td>
					</tr>
	</form>
</div>
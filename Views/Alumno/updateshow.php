<div class="container">
	<h2>Actualizar Alumno</h2>
	<form action="?controller=alumno&&action=updateshow" method="POST">
		<div class="form-group">
		    <label for="text">Id Alumno</label>
		    <input type="text" name="id" id="id" class="form-control" value="<?php echo $alumno->getId(); ?>" >
		</div>

		<div class="form-group">
			<label for="text">Nombres</label>
			<input type="text" name="nombres" id="nombres" class="form-control" value="<?php echo $alumno->getNombres(); ?>">
		</div>
		<div class="form-group">
			<label for="text">Apellidos</label>
			<input type="text" name="apellidos" id="apellidos" class="form-control" value="<?php echo $alumno->getApellidos(); ?>">
		</div>

		<div class="form-group">
			<label for="text">Direcc&iacuteon</label>
			<input type="text" name="direccion" id="direccion" class="form-control" value="<?php echo $alumno->getDireccion(); ?>">
		</div>
		
		<div class="check-box">
			<label>Activo <input type="checkbox" name="estado" <?php echo $alumno->getEstado() ?>></label>
		</div>
		<button type="submit" class="btn btn-primary">Actualizar</button>

	</form>
</div>
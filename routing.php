<?php 


$controllers=array(
	'alumno'=>['index','register','save','show','updateshow','update','delete','search','error']
);

if (array_key_exists($controller,  $controllers)) {
   if (in_array($action, $controllers[$controller])) {
		call($controller, $action);
		/*print_r($controller);
		print_r($action);*/
	}
	else{
		call('alumno','error');
	}		
}else{
	call('alumno','error');
}

function call($controller, $action){
	require_once('Controllers/'.$controller.'Controller.php');

	switch ($controller) {
		case 'alumno':
		require_once('Model/Alumno.php');
		 $controller= new UsuarioController();
		//print_r($controller);
		break;			
		default:
				# code...
		break;
	}
	$controller->{$action}();
}

?>
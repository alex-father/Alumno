<?php 
/**
* 
*/
class Alumno
{
	private $id;
	private $nombres;
	private $apellidos;
	private $direccion;
	private $estado;

	
	function __construct($id, $nombres,$apellidos,$direccion,$estado)
	{
		$this->setId($id);
		$this->setNombres($nombres);
		$this->setApellidos($apellidos);
		$this->setDireccion($direccion);
		$this->setEstado($estado);
	}

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getNombres(){
		return $this->nombres;
	}

	public function setNombres($nombres){
		$this->nombres = $nombres;
	}

	public function getApellidos(){
		return $this->apellidos;
	}

	public function setApellidos($apellidos){
		$this->apellidos = $apellidos;
	}

    public function getDireccion(){
       return $this->direccion;
    }

    public function setDireccion($direccion){
        $this->direccion = $direccion;
    }

	public function getEstado(){

		return $this->estado;
	}

	public function setEstado($estado){
		
		if (strcmp($estado, 'on')==0) {
			$this->estado=1;
		} elseif(strcmp($estado, '1')==0) {
			$this->estado='checked';
		}elseif (strcmp($estado, '0')==0) {
			$this->estado='off';
		}else {
			$this->estado=0;
		}

	}

	public static function save($alumno){
		$db=Db::getConnect();
		//var_dump($alumno);
		//die();
		

		$insert=$db->prepare('INSERT INTO alumno VALUES (NULL, :nombres,:apellidos,:direccion,:estado)');
		$insert->bindValue('nombres',$alumno->getNombres());
		$insert->bindValue('apellidos',$alumno->getApellidos());
		$insert->bindValue('direccion',$alumno->getDireccion());
		$insert->bindValue('estado',$alumno->getEstado());
		$insert->execute();
	}

	public static function all(){
		$db=Db::getConnect();
		$listaAlumnos=[];

		$select=$db->query('SELECT * FROM alumno order by id');

		foreach($select->fetchAll() as $alumno){
			$listaAlumnos[]=new Alumno($alumno['id'],$alumno['nombres'],$alumno['apellidos'],$alumno['direccion'],$alumno['estado']);
		}
		return $listaAlumnos;
	}

	public static function searchById($id){
		$db=Db::getConnect();
		$select=$db->prepare('SELECT * FROM alumno WHERE id=:id');
		$select->bindValue('id',$id);
		$select->execute();

		$alumnoDb=$select->fetch();


		$alumno = new Alumno ($alumnoDb['id'],$alumnoDb['nombres'], $alumnoDb['apellidos'],$alumnoDb['direccion'], $alumnoDb['estado']);
		//var_dump($alumno);
		//die();
		return $alumno;

	}

	public static function update($alumno){
		$db=Db::getConnect();
		$update=$db->prepare('UPDATE alumno SET nombres=:nombres, apellidos=:apellidos, direccion=:direccion, estado=:estado WHERE id=:id');
		$update->bindValue('nombres', $alumno->getNombres());
		$update->bindValue('apellidos',$alumno->getApellidos());
		$update->bindValue('direccion',$alumno->getDireccion());
		$update->bindValue('estado',$alumno->getEstado());
		$update->bindValue('id',$alumno->getId());
		$update->execute();
	}

	public static function delete($id){
		$db=Db::getConnect();
		$delete=$db->prepare('DELETE  FROM alumno WHERE id=:id');
		$delete->bindValue('id',$id);
		$delete->execute();		
	}
}

?>
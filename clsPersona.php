<?php
include_once('clsConexion.php');

class Persona extends Conexion
{
	//atributos
	private $id_persona;
	private $nombre;
	private $edad;
	private $mail;
	
	//construtor
	public function Persona()
	{   parent::conexion();
		$this->id_persona=0;
		$this->nombre="";
		$this->edad=0;
		$this->mail="";		
	}
	//propiedades de acceso
	public function setIdPersona($valor)
	{
		$this->id_persona=$valor;
	}
	public function getIdPersona()
	{
		return $this->id_persona;
	}

	public function setNombre($valor)
	{
		$this->nombre=$valor;
	}
	public function getNombre()
	{
		return $this->nombre;
	}

	public function setEdad($valor)
	{
		$this->edad=$valor;
	}
	public function getEdad()
	{
		return $this->edad;
	}
	
	public function setMail($valor)
	{
		$this->mail=$valor;
	}
	public function getMail()
	{
		return $this->mail;
	}

	public function guardar()
	{
     $sql="insert into persona(nombre,edad,mail) values('$this->nombre','$this->edad','$this->mail')";
		
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}
	
	public function modificar()	{
	$sql="update persona set nombre='$this->nombre', edad='$this->edad', mail='$this->mail' where id_persona=$this->id_persona";		
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}
	
	public function eliminar()
	{
		$sql="delete from persona where id_persona=$this->id_persona";
		
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}
	
	public function buscar()
	{
		$sql="select *from persona";
		return parent::ejecutar($sql);
	}										

	public function buscarPorCodigo($criterio)
	{
		$sql="select *from persona where id_persona like '$criterio%'";
		return parent::ejecutar($sql);
	}								
	
	public function buscarPorNombre($criterio)
	{
		$sql="select *from persona where nombre like '$criterio%'";
		return parent::ejecutar($sql);
	}
}    
?>
<?php

require_once '../Config/Conn.php';
require_once '../Model/Servidor.php';

class ServidorDAO {
	 
	//private $table = 'servidor';
	private $conn = null;
	private $server = null;
	private $db = null;
		
	public function __construct() {
		$this->conn = new Conn();
		$this->db = $this->conn->getInstance();
		$this->server = new Servidor();
	}
	
	/**
	 * 
	 * @param Servidor $s
	 */
	public function insert($s){
		
		try{
			
			$this->server = $s;
			$values = array();
			$values = $this->objectToArray($s);
			
			foreach ($values as $field => $v){
				$ins[] = ':' . $field;
			}
			
			$ins = implode(',', $ins);			
			$fields = implode(',', array_keys($values));
		
			$sql = "INSERT INTO servidor ($fields) VALUES ($ins)";
			$stmt = $this->db->prepare($sql);
			var_dump($sql);
			
			foreach ($values as $f => $v)
			{
				$stmt->bindValue(':' . $f, $v);
			}
			
			$stmt->execute();
			
		}catch(PDOException $e){
			echo $e->getMessage();
		}
		
	}
	
	public function update($servidor){
		
	}
	
	public function delete($id){
		
	}
	
	function objectToArray($o) { 
		 $reflectionClass = new ReflectionClass(get_class($o));
    $array = array();
    foreach ($reflectionClass->getProperties() as $property) {
        $property->setAccessible(true);
        $array[$property->getName()] = $property->getValue($o);
        $property->setAccessible(false);
    }
    return $array; 
	}
	
}

new ServidorDAO();
?>
<?php

require_once '../Config/Conn.php';
require_once '../Model/Servidor.php';
include_once '../Config/Registry.php';

class ServidorDAO {
	 
	//private $table = 'servidor';
	private $server = null;
		
	public function __construct() {
		$conn = new Conn();
		//$registry = Registry::getInstance();
		//$registry->set('Connection', $conn);
	}
	
	/**
	 * 
	 * @param Servidor $s
	 */
	public function insert($s){
		
		$this->server = new Servidor();
		$this->server = $s;
		
		foreach ($servidor as $field => $v){
			$ins[] = ':' . $field;
		}
		
		$ins = implode(',', $ins);
		$fields = implode(',', array_keys($servidor));
		$sql = "INSERT INTO servidor ($fields) VALUES ($ins)";
		
		return $sql;
		try{
			/*
			$sth = $this->db->prepare($sql);
			foreach ($values as $f => $v)
			{
				$sth->bindValue(':' . $f, $v);
			}
			$sth->execute();
			*/
		}catch(PDOException $e){
			echo $e->getMessage();
		}
		
	}
	
	public function update($servidor){
		
	}
	
	public function delete($id){
		
	}
	
}

?>
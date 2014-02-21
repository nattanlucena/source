<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/hostdime/Config/Conn.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/hostdime/Config/Functions.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/hostdime/Model/Servidor.php';

class ServidorDAO {
	 
	//private $table = 'servidor';
	private $conn = null;
	private $server = null;
	private $db = null;
		
	public function __construct() {
		$this->conn = new Conn();
		$this->db = $this->conn->getInstance();
		$this->server = new Servidor();
		$this->functions = new Functions();
	}
	
	/**
	 * inserir um objeto Servidor no BD
	 * @param Servidor $s
	 */
	public function insert($s){
		
		try{
			
			$this->server = $s;
			$values = array();
			
			//transformar um objeto em um array
			$values = $this->functions->objectToArray($s);
			
			foreach ($values as $field => $v){
				$ins[] = ':' . $field;
			}
			
			$ins = implode(',', $ins);			
			$fields = implode(',', array_keys($values));
		
			$sql = "INSERT INTO servidor ($fields) VALUES ($ins)";
			$stmt = $this->db->prepare($sql);
			//var_dump($sql);
			
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
	
	
	public function findAllEUA(){

		try {

			$sql = "SELECT * FROM servidor WHERE dc = 'EUA' AND tipo = 'hospedagem'";

			$stmt = $this->db->prepare($sql);
			$stmt->execute();

			$rows = $stmt->fetchAll();

			//var_dump($rows);
			return $rows;
			
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	public function findAllBR(){

		
		try {

			$sql = "SELECT * FROM servidor WHERE dc = 'EUA' AND tipo = 'hospedagem'";

			$stmt = $this->conn->prepare($sql);
			$stmt->execute();

			$rows = $stmt->fetchAll();

			var_dump($rows);
			//return $rows;
			
		} catch (PDOException $e) {
			echo $e->getMessage();
		}

	}

	public function findAllSPO(){


		try {

			$sql = "SELECT * FROM servidor WHERE dc = 'EUA' AND tipo = 'hospedagem'";

			$stmt = $this->conn->prepare($sql);
			$stmt->execute();

			$rows = $stmt->fetchAll();

			var_dump($rows);
			//return $rows;
			
		} catch (PDOException $e) {
			echo $e->getMessage();
		}

	}

	public function find($id){

		try {

			$sql = "SELECT * FROM servidor WHERE id = ':id'";

			$stmt = $this->conn->prepare($sql);
			$stmt->bindValue(':id'. $id);
			$stmt->execute();

			$row = $stmt->fetch(PDO::FETCH_ASSOC);

			return $row;
			
		} catch (PDOException $e) {
			echo $e->getMessage();
		}

	}
	
}

new ServidorDAO();
?>
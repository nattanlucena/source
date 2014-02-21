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

			foreach ($values as $f => $v)
			{
				$stmt->bindValue(':' . $f, $v);
			}
			//print_r($stmt);
			$stmt->execute();
			
		}catch(PDOException $e){
			echo $e->getMessage();
		}
		
	}
	
	public function update($servidor){
		
	}
	
	
	public function delete($id){
		
		try{
			
			$sql = "DELETE FROM servidor WHERE hdnumber = :hdnumber";
			$stmt = $this->db->prepare($sql);
			$stmt->bindValue(":hdnumber", $id);
			$stmt->execute();
			
		}catch(PDOException $e){
			echo $e->getMessage();
		}
		
	}
	
	
	public function findAllShared(){

		try {

			$sql = "SELECT * FROM servidor WHERE tipo = 'hospedagem' ORDER BY dc";

			$stmt = $this->db->prepare($sql);
			$stmt->execute();

			//retornar ja como objetos do tipo 'servidor'
			$rows = $stmt->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'servidor');

			return $rows;
			
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	
	public function findAllReseller(){

		try {

			$sql = "SELECT * FROM servidor WHERE tipo = 'revenda' ORDER BY dc";

			$stmt = $this->conn->prepare($sql);
			$stmt->execute();

			$rows = $stmt->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'servidor');

			return $rows;
			
		} catch (PDOException $e) {
			echo $e->getMessage();
		}

	}

	
	public function findAllVPS(){

		try {

			$sql = "SELECT * FROM servidor WHERE tipo = 'vps' ORDER BY dc";

			$stmt = $this->conn->prepare($sql);
			$stmt->execute();

			$rows = $stmt->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'servidor');

			return $rows;
			
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
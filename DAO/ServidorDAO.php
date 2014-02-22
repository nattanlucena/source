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
	 * insert a new object of type 'servidor'
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
	
	/**
	 * 
	 * @param servidor $s
	 * @param int $cond
	 */
	public function update($s, $cond){
		
		try{
			
			$this->server = $s;
			
			$sql = "UPDATE servidor SET 
					dc = :dc, 
					tipo = :tipo,
					hostname = :hostname,
					ip = :ip,
					dns1 = :dns1,
					dns2 = :dns2,
					php53 = :php53,
					php54 = :php54,
					apache = :apache,
					mysql = :mysql,
					nginx = :nginx,
					cloudlinux = :cloudlinux,
					cpanel = :cpanel
			WHERE hdnumber = :hdnumber";
			
			$stmt = $this->db->prepare($sql);
			$stmt->bindValue(':dc', $this->server->getDc());
			$stmt->bindValue(':tipo', $this->server->getTipo());
			$stmt->bindValue(':hostname', $this->server->getDc());
			$stmt->bindValue(':ip', $this->server->getIp());
			$stmt->bindValue(':dns1', $this->server->getDns1());
			$stmt->bindValue(':dns2', $this->server->getDns2());
			$stmt->bindValue(':php53', $this->server->getPhp53());
			$stmt->bindValue(':php54', $this->server->getPhp54());
			$stmt->bindValue(':apache', $this->server->getApache());
			$stmt->bindValue(':mysql', $this->server->getMysql());
			$stmt->bindValue(':nginx', $this->server->getNginx());
			$stmt->bindValue(':cloudlinux', $this->server->getCloudlinux());
			$stmt->bindValue(':cpanel', $this->server->getCpanel());
			$stmt->bindValue(':hdnumber', $this->server->getHdnumber());
			
			$stmt->execute();
			
		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}
	
	
	/**
	 * 
	 * @param int $id
	 */
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
	
	
	/**
	 * Return all the objects where tipo = shared
	 * @return $rows
	 */
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

	
	/**
	 * Return all the objects where tipo = reseller
	 * @return $rows
	 */
	public function findAllReseller(){

		try {

			$sql = "SELECT * FROM servidor WHERE tipo = 'revenda' ORDER BY dc";

			$stmt = $this->db->prepare($sql);
			$stmt->execute();

			$rows = $stmt->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'servidor');

			return $rows;
			
		} catch (PDOException $e) {
			echo $e->getMessage();
		}

	}

	
	
	/**
	 * Return all the objects where tipo = vps
	 * @return $rows
	 */
	public function findAllVPS(){

		try {

			$sql = "SELECT * FROM servidor WHERE tipo = 'vps' ORDER BY dc";

			$stmt = $this->db->prepare($sql);
			$stmt->execute();

			$rows = $stmt->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'servidor');

			return $rows;
			
		} catch (PDOException $e) {
			echo $e->getMessage();
		}

	}

	
	public function find($id){

		try {

			$sql = "SELECT * FROM servidor WHERE hdnumber = :hdnumber";

			$stmt = $this->db->prepare($sql);
			$stmt->bindValue(':hdnumber', $id);
			$stmt->execute();
			
			$stmt->setFetchMode(PDO::FETCH_CLASS, 'servidor');
			$row = $stmt->fetch();

			//var_dump($row);
			return $row;
			
		} catch (PDOException $e) {
			echo $e->getMessage();
		}

	}
	
}

new ServidorDAO();
?>
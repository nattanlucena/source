<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/hostdime/Config/Conn.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/hostdime/Config/Functions.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/hostdime/Model/Historico.php';

class HistoricoDAO extends PDO{
	
	private $conn = null;
	private $server = null;
	private $db = null;
	private $history;
	
	public function __construct() {
		
		$this->conn = new Conn();
		$this->db = $this->conn->getInstance();
		$this->history = new Historico();
		$this->functions = new Functions();
		
	}
	
	/**
	 * 
	 * @param unknown $h
	 * 
	 */
	public function insert($h){
	
		try{
			
			$this->history = $h;			
			
			$sql = "INSERT INTO historico (servidor_hdnumber, dia, ticket, problema, status, resolvido, downtime, observacoes) 
							VALUES (:servidor_hdnumber, :dia, :ticket, :problema, :status, :resolvido, :downtime, :observacoes)";
			
			$stmt = $this->db->prepare($sql);
			
			$stmt->bindValue(":servidor_hdnumber", $this->history->getServidor_hdnumber());
			$stmt->bindValue(":dia", $this->history->getDia());
			$stmt->bindValue(":ticket", $this->history->getTicket());
			$stmt->bindValue(":problema", $this->history->getProblema());
			$stmt->bindValue(":status", $this->history->getStatus());
			$stmt->bindValue(":resolvido", $this->history->getResolvido());
			$stmt->bindValue(":downtime", $this->history->getDowntime());
			$stmt->bindValue(":observacoes", $this->history->getObservacoes());
			
			$stmt->execute();
			
		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}
	
	public function update(){
	
	}
	
	public function delete(){
	
	}
	
	/*
	 * find all history with an count of each server
	 * "SELECT  H.*, count(distinct (H.servidor_hdnumber)) AS contador, S.hostname, S.tipo FROM historico H JOIN servidor S
		WHERE  H.id IN (SELECT MAX(H.id)FROM historico GROUP BY H.id)"
	 */
	public function findAllHistory(){
		
		$sql = "SELECT  H.*, S.hostname, S.tipo FROM historico H JOIN servidor S ORDER BY H.servidor_hdnumber";
		
		try{
		
			$stmt = $this->db->prepare($sql);
			$stmt->execute();
			$r = array();
			$rows = $stmt->fetchAll();
			//var_dump($rows);			
			foreach($rows as $row){
						$this->history2 = new Historico();
						$this->history2->setTicket($row["ticket"]);
						$this->history2->setTipo($row["tipo"]);
						$this->history2->setDia($row["dia"]);
						$this->history2->setHostname($row["hostname"]);
						$this->history2->setDowntime($row["downtime"]);
						$this->history2->setObservacoes($row["observacoes"]);
						$this->history2->setProblema($row["problema"]);
						$this->history2->setResolvido($row["resolvido"]);
						$this->history2->setServidor_hdnumber($row["servidor_hdnumber"]);
						$this->history2->setStatus($row["status"]);
						array_push($r, $this->history2 );
			}
			//var_dump($r);
			return $r;
			
		}catch(PDOException $e){
			return $e->getMessage();
		}
	}
	
	public function findAll(){}
}

?>
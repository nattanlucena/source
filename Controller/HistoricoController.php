<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/hostdime/Model/Historico.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/hostdime/Config/Functions.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/hostdime/DAO/HistoricoDAO.php';

class HistoricoController {
	
	private $historico;
	private $historicoDAO;
	
	public function __construct(){
	
		$this->historico = new Historico();
		$this->historicoDAO = new HistoricoDAO();
	
		if( isset($_GET['acao'])){
			$acao = $_GET['acao'];
				
			switch ($acao){
				case "insert":{
					self::insertAction();
				}
				case "edit":{
					self::editAction();
				}
				case "delete":{
					self::deleteAction();
				}
			}
		}
	
	}
	
	
	public function insertAction(){
		
		if( isset($_POST['save']) ){
			
			$this->historico->setServidor_hdnumber($_POST['hdnumber']);
			$this->historico->setDia( $_POST["day"] );
			$this->historico->setTicket( $_POST["ticket"] );
			$this->historico->setProblema( $_POST["issue"] );
			$this->historico->setStatus( $_POST["status"] );
			$this->historico->setResolvido( $_POST["solved"] );
			$this->historico->setDowntime( $_POST["downtime"] );
			$this->historico->setObservacoes( $_POST["desc"] );
			
			try{
				
				$this->historicoDAO->insert($this->historico);
				header('Location: ../view/audit/index.php');
				
			}catch(Exception $e){
				return 'Erro: '.$e;
			}
			
		}else{
			return 'Erro ao salvar!';
		}
		
	}
	
	public function editAction(){
		
	}
	
	public function deleteAction(){
		
	}
	
	public function loadHistoriyAction(){
		
		try{
			
			$rows = array();
			$rows = $this->historicoDAO->findAllHistory();
			
			return $rows;
			
		}catch(Exception $e){
			return $e;
		}		
	}
	
	
}

new HistoricoController();

?>
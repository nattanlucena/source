<?php

require_once '../Model/Servidor.php';
require_once '../DAO/ServidorDAO.php';

class ServidorController {
		
		private $servidor;
		private $servidorDAO;
	
	public function __construct(){
		
		if( isset($_GET['acao'])){
			$acao = $_GET['acao'];
			
			switch ($acao){				
				case "inserir":{
					self::inserirAction();
				}
				case "editar":{
					self::editarAction();
				}
				case "deletar":{
					self::editarAction();
				}
			}
		}
		
	}
	
	public function inserirAction(){
		
		$this->servidor = new Servidor();
		$this->servidorDAO = new ServidorDAO();
		
		if( isset( $_POST['salvar'] ) ){
			
			$this->servidor->setCpanel($_POST['cpanel']);
			$this->servidor->setApache($_POST['apache']);
			$this->servidor->setCloudlinux($_POST['cloudlinux']);
			$this->servidor->setDc($_POST['dc']);
			$this->servidor->setDns1($_POST['dns1']);
			$this->servidor->setDns2($_POST['dns2']);
			$this->servidor->setHdnumber($_POST['hdnumber']);
			$this->servidor->setHostname($_POST['hostname']);
			$this->servidor->setIp($_POST['ip']);
			$this->servidor->setMysql($_POST['mysql']);
			$this->servidor->setNginx($_POST['nginx']);
			$this->servidor->setPhp53($_POST['php53']);
			$this->servidor->setPhp54($_POST['php54']);
			$this->servidor->setTipo($_POST['tipo']);
			
			
			try{
				
				$v = $this->servidorDAO->insert($this->servidor);
				
				//header('Location: ../index.php');
				
			}catch(Exception $e){
				echo 'Erro: '.$e;
				exit();
			}		
		}
	}
	
	public function editarAction(){
		
	}
	
	public function deletarAction(){
		
	}
}

new ServidorController();
?>
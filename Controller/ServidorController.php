<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/hostdime/Model/Servidor.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/hostdime/DAO/ServidorDAO.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/hostdime/Config/Functions.php';

class ServidorController {
		
	private $servidor;
	private $servidorDAO;
	
	public function __construct(){

		$this->servidor = new Servidor();
		$this->servidorDAO = new ServidorDAO();
		
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
					self::deletarAction();
				}
			}
		}
		
	}
	
	public function inserirAction(){
		
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
				header('Location: ../index.php');
				
			}catch(Exception $e){
				echo 'Erro: '.$e;
				exit();
			}		
		}
	}
	
	public function editarAction(){
		
		if( isset( $_POST['salvar'] ) ){
				
			$this->servidor->setCpanel($_POST['cpanel']);
			$this->servidor->setApache($_POST['apache']);
			$this->servidor->setCloudlinux($_POST['cloudlinux']);
			$this->servidor->setDc($_POST['dc']);
			$this->servidor->setDns1($_POST['dns1']);
			$this->servidor->setDns2($_POST['dns2']);	
			$this->servidor->setHostname($_POST['hostname']);
			$this->servidor->setIp($_POST['ip']);
			$this->servidor->setMysql($_POST['mysql']);
			$this->servidor->setNginx($_POST['nginx']);
			$this->servidor->setPhp53($_POST['php53']);
			$this->servidor->setPhp54($_POST['php54']);
			$this->servidor->setTipo($_POST['tipo']);
			$this->servidor->setHdnumber( $_POST['hdnumber']);
		
			try{
		
				$v = $this->servidorDAO->update($this->servidor, $hdnumber);
				header('Location: ../index.php');
		
			}catch(Exception $e){
				echo 'Erro: '.$e;
				exit();
			}
		}
	}
	
	public function deletarAction(){
		
		if( isset($_GET['id']) ){
			
			try{
				$id = $_GET['id'];
				$this->servidorDAO->delete($id);
				//var_dump($id);
			}catch(Exception $e){
				echo 'Erro: '.$e;
			}
		}
	}

	public function carregarSharedAction(){

		try{

			$rows = array();
			$rows = $this->servidorDAO->findAllShared();
			
			if( is_array($rows) && !empty($rows) ){
				//retorna um array de objetos Servidor
				return $rows;
			}

		}catch(Exception $e){
			echo 'Erro: '.$e;
			exit();
		}
	}
	
	
	public function carregarResellerAction(){
	
		try{
	
			$rows = array();
			$rows = $this->servidorDAO->findAllReseller();
				
			if( is_array($rows) && !empty($rows) ){
				//retorna um array de objetos Servidor
				return $rows;
			}
	
		}catch(Exception $e){
			echo 'Erro: '.$e;
			exit();
		}
	}
	
	
	public function carregarVPSAction(){
	
		try{
	
			$rows = array();
			$rows = $this->servidorDAO->findAllVPS();
				
			if( is_array($rows) && !empty($rows) ){
				//retorna um array de objetos Servidor
				return $rows;
			}
	
		}catch(Exception $e){
			echo 'Erro: '.$e;
			exit();
		}
	}
	
	
	public function findServer($id){
		
		try{
			
			$s = $this->servidorDAO->find($id);
			
			if($s != null){
				return $s;
			}
			
		}catch(Exception $e){
			echo 'Erro: '.$e;
		}
		
	}
}

new ServidorController();
?>
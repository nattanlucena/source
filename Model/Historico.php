<?php
class Historico {
	
	private $servidor_hdnumber;
	private $dia;
	private $ticket;
	private $problema;
	private $status;
	private $resolvido;
	private $downtime;
	private $observacoes;
	private $hostname;
	private $count;
	private $tipo;
	
	public function __construct(){
		
	}
	
	public function getServidor_hdnumber(){
		return $this->servidor_hdnumber;
	}
	
	public function setServidor_hdnumber($servidor_hdnumber){
		$this->servidor_hdnumber = $servidor_hdnumber;
	}
	
	
	public function getDia(){
		return $this->dia;
	}
	
	public function setDia($dia){
		$this->dia = $dia;
	}
	
	public function getTicket(){
		return $this->ticket;
	}
	
	public function setTicket($ticket){
		$this->ticket = $ticket;
	}
	
	public function getProblema(){
		return $this->problema;
	}
	
	public function setProblema($problema){
		$this->problema = $problema;
	}
	
	public function getStatus(){
		return $this->status;
	}
	
	public function setStatus($status){
		$this->status = $status;
	}
	
	public function getResolvido(){
		return $this->resolvido;
	}
	
	public function setResolvido($resolvido){
		$this->resolvido = $resolvido;
	}
	
	public function getDowntime(){
		return $this->downtime;
	}
	
	public function setDowntime($downtime){
		$this->downtime = $downtime;
	}
	
	public function getObservacoes(){
		return $this->observacoes;
	}
	
	public function setObservacoes($observacoes){
		$this->observacoes = $observacoes;
	}
	
	public function getHostname(){
		return $this->hostname;
	}
	
	public function setHostname($hostname){
		$this->hostname = $hostname;
	}
	
	public function getCount(){
		return $this->count;
	}
	
	public function setCount($count){
		$this->count = $count;
	}
	
	public function getTipo(){
		return $this->tipo;
	}
	
	public function setTipo($tipo){
		$this->tipo = $tipo;
	}
	
}

?>
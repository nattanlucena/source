<?php
class Historico {
	
	private $dia;
	private $ticket;
	private $problema;
	private $status;
	private $resolvido;
	private $downtime;
	private $observacoes;
	
	public function __construct(){
		
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
	
	
}

?>
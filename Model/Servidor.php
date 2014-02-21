<?php
class Servidor {
	
	private $hdnumber;
	private $dc;
	private $tipo;
	private $hostname;
	private $ip;
	private $dns1;
	private $dns2;
	private $php53;
	private $php54;
	private $apache;
	private $mysql;
	private $nginx;
	private $cloudlinux;
	private $cpanel;
	
	public function __construct(){
		
	}
	
	public function getHdnumber(){
		return $this->hdnumber;
	}
	
	public function setHdnumber($hdnumber){
		$this->hdnumber = $hdnumber;
	}
	
	public function getDc(){
		return $this->$dc;
	}
	
	public function setDc($dc){
		$this->dc = $dc;
	}
	
	public function getTipo(){
		return $this->$dc;
	}
	
	public function setTipo($tipo){
		$this->dc = $tipo;
	}
	public function getHostname(){
		return $this->hostname;
	}
	
	public function setHostname($hostname){
		$this->dc = $hostname;
	}
	
	public function getIp(){
		return $this->ip;
	}
	
	public function setIp($ip){
		$this->ip = $ip;
	}
	
	public function getDns1(){
		return $this->dns1;
	}
	
	public function setDns1($dns1){
		$this->dns1 = $dns1;
	}
	
	public function getDns2(){
		return $this->dns2;
	}
	
	public function setDns2($dns2){
		$this->dns2 = $dns2;
	}
	
	public function getPhp53(){
		return $this->php53;
	}
	
	public function setPhp53($php53){
		$this->php53 = $php53;
	}
	
	public function getPhp54(){
		return $this->php54;
	}
	
	public function setPhp54($php54){
		$this->php54 = $php54;
	}
	
	public function getApache(){
		return $this->apache;
	}
	
	public function setApache($apache){
		$this->apache = $apache;
	}
	
	public function getNginx(){
		return $this->nginx;
	}
	
	public function setNginx($nginx){
		$this->nginx = $nginx;
	}
	
	public function getCloudlinux(){
		return $this->cloudlinux;
	}
	
	public function setCloudlinux($cloudlinux){
		$this->cloudlinux = $cloudlinux;
	}
	
	public function getMysql(){
		return $this->mysql;
	}
	
	public function setMysql($mysql){
		$this->mysql = $mysql;
	}
	
	public function getCpanel(){
		return $this->cpanel;
	}
	
	public function setCpanel($cpanel){
		$this->cpanel = $cpanel;
	}
	
	
}

?>
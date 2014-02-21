<?php

/**
 * Database connection class
 * @author Nattan
 *
 */
class Conn extends PDO {
	
	private $dsn = 'mysql:host=localhost;dbname=list_hd';
	private $username = 'list_hd';
	private $passwd = 'root';
	protected static  $db;
	
	
	public function __construct(){
		
		try{
			self::$db = new PDO($this->dsn, $this->username, $this->passwd);
			self::$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
			
		}catch (PDOException $e){
			echo $e->getMessage();
		}
	
	}
	
	public function getInstance(){	
		
		if (!self::$db) {
			
			new dbConn();
		}
		return self::$db;
	}
	
	
}

?>
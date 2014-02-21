<?php

/**
 * Database connection class
 * @author Nattan
 *
 */
class Conn extends PDO {
	
	private $con = false;
	
	public function Conn(){
		
	//connect to database
        if (!$this->con)
        {
            //not yet connected, make a connection
            try
            {
                $this->db = new PDO('mysql:host=localhost;dbname=list_hd','list_hd', 'root');
                $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->con = true;
                
                return $this->con;
            }
            catch (PDOException $e)
            {
               echo $e->getMessage();
            }
        }
        else
        {
            return true;
        }
	}
	
	
}

?>
<?php
class dbConnect{
    private $host="localhost";
    private $user="root";
    private $pass="";
    private $db="trace_waste";
    public function Connect(){
        $conn=mysqli_connect($this->host, $this->user, $this->pass, $this->db);
		
        if($conn){
            //echo "Connected";
        }
		else{
			echo "error";
		}
        return $conn;
    }
	
} 
?>
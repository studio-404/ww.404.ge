<?php
namespace lib\ajax;

use config\main as c;
use lib\functions\url as url;
use lib\database\connection as connection;

class receive{

	function __construct(){
		$this->connection = new connection();
		$this->conn = $this->connection->conn();
		$this->request = new url\request();
		
	}

	public function geta(){

		if($this->request->method("POST", "load")){
			switch($this->request->method("POST", "load")){
				case "getAbout":
				$object = new \lib\database\about();
				$out = $object->select($this->conn);
				break;
				case "getGithub":
				$object = new \lib\database\github();
				$out = $object->select($this->conn);
				break;
				case "getAndroid":
				$object = new \lib\database\android();
				$out = $object->select($this->conn);
				break;
				case "getWebsites":
				$object = new \lib\database\websites();
				$out = $object->select($this->conn);
				break;
				case "getJava":
				$object = new \lib\database\java();
				$out = $object->select($this->conn);
				break;
			}			
			echo json_encode($out);
		}	

	}
}
?>
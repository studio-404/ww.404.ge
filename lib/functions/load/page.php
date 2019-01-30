<?php
namespace lib\functions\load;

use config\main as c;
use lib\ajax\receive as ajax;
use lib\database\connection as connection;
use lib\functions\url as url;
use lib\template\header as head;
use lib\template\footer as footer;

class page{
	public $head;
	public $footer;
	public $conn;

	function __construct(){
		$this->connection = new connection();
		$this->conn = $this->connection->conn();
		$this->request = new url\request();
		if($this->request->method("POST", "ajax")=="true"){
			$ajax = new ajax();
			echo $ajax->geta();	
			exit();
		}
	}

	public function bootstap(){
		$slug = new url\slug();
		$params = $slug->params();
		
		$this->head = new head();
		$this->footer = new footer();
		
		echo $this->head->html_header();
		switch ($params[0]) { 
			case 'About': 
				$about_object = new \lib\database\about();
				$about = $about_object->select($this->conn);
				@include("website/about.php");
				break;

			case 'Websites': 
				$websites_object = new \lib\database\websites();
				$websites = $websites_object->select($this->conn);
				@include("website/websites.php");
				break;

			case 'Github': 
				$github_object = new \lib\database\github();
				$github = $github_object->select($this->conn);
				@include("website/github.php");
				break;

			case 'Android': 
				$android_object = new \lib\database\android();
				$android = $android_object->select($this->conn);
				@include("website/android.php");
				break;

			case 'Java': 
				$java_object = new \lib\database\java();
				$java = $java_object->select($this->conn);
				@include("website/java.php");
				break;

			default:
				@include("website/homepage.php");
				break;
		}
		echo $this->footer->html_footer_nav($params[0]);
		echo $this->footer->html_footer_close($params[0]);
		echo $this->footer->html_footer();	
	}
}
?>
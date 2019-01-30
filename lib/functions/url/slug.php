<?php
namespace lib\functions\url;

use config\main as c;
use lib\functions\url\currenturl as currenturl;

class slug{
	public function params(){
		$params = "";
		$geturl = currenturl::geturl();
		$exp = explode(c::WEBSITE, $geturl);
		if(!empty($exp[1])){
			$params = explode("/", $exp[1]);
		}
		return $params;
	}
}
?>
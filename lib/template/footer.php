<?php
namespace lib\template;

use config\main as c;

class footer{

	public function html_footer_nav($params){
		if(!empty($params)){ $style = ' style="display:block"'; }else{ $style = ''; }
		$out = "<div class=\"footer-nav\"".$style.">\n";
		$out .= "<a href=\"".c::WEBSITE."\">Welcome</a>\n";

		$out .= "<a href=\"javascript:void(0)\" class=\"Websites\" ".$this->active($params, "Websites").">Websites</a>\n";

		$out .= "<a href=\"javascript:void(0)\" class=\"Github\" ".$this->active($params, "Github").">Github</a>\n";
		$out .= "<a href=\"javascript:void(0)\" class=\"Android\" ".$this->active($params, "Android").">Android</a>\n";

		$out .= "<a href=\"javascript:void(0)\" class=\"Java\" ".$this->active($params, "Java").">Java</a>\n";

		$out .= "<a href=\"javascript:void(0)\" class=\"About\" ".$this->active($params, "About").">About</a>\n";

		$out .= "</div>\n";
		return $out;
	}

	public function html_footer_close($params){
		$out = "<div class=\"gowelcome\" onclick=\"Studio404.goWelcome()\">Welcome</div>";
		return $out;	
	}

	public function active($a, $c){
		if($a == $c){
			return " style='color:red'";
		}
		return "";
	}

	public function html_footer(){
		$out = "</body>\n";
		$out .= "</html>\n";
		return $out;
	}

}
?>
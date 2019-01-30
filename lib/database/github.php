<?php
namespace lib\database;

class github{

	public function select($conn){
		$sql = 'SELECT * FROM `github` ORDER BY `position` ASC';
		$prepare = $conn->prepare($sql);
		$prepare->execute();
		$fetch = $prepare->fetchAll(\PDO::FETCH_ASSOC);
		return $fetch;
	}

}
?>
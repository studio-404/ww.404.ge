<?php
namespace lib\database;

class websites{

	public function select($conn){
		$sql = 'SELECT * FROM `websites` ORDER BY `position` ASC';
		$prepare = $conn->prepare($sql);
		$prepare->execute();
		$fetch = $prepare->fetchAll(\PDO::FETCH_ASSOC);
		return $fetch;
	}

}
?>
<?php
namespace lib\database;

class android{

	public function select($conn){
		$sql = 'SELECT * FROM `android` ORDER BY `position` ASC';
		$prepare = $conn->prepare($sql);
		$prepare->execute();
		$fetch = $prepare->fetchAll(\PDO::FETCH_ASSOC);
		return $fetch;
	}

}
?>
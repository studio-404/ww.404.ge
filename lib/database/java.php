<?php
namespace lib\database;

class java{

	public function select($conn){
		$sql = 'SELECT * FROM `java` ORDER BY `position` ASC';
		$prepare = $conn->prepare($sql);
		$prepare->execute();
		$fetch = $prepare->fetchAll(\PDO::FETCH_ASSOC);
		return $fetch;
	}

}
?>
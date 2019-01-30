<?php
namespace lib\database;

class projects{

	public function select($conn){
		$sql = 'SELECT * FROM `projects` ORDER BY `position` ASC';
		$prepare = $conn->prepare($sql);
		$prepare->execute();
		$fetch = $prepare->fetchAll(\PDO::FETCH_ASSOC);
		return $fetch;
	}

}
?>
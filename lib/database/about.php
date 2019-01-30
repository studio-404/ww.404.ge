<?php
namespace lib\database;

class about{

	public function select($conn){
		$sql = 'SELECT * FROM `about` WHERE `id`=1';
		$prepare = $conn->prepare($sql);
		$prepare->execute();
		$fetch = $prepare->fetch(\PDO::FETCH_ASSOC);
		return $fetch;
	}

}
?>
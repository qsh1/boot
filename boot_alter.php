<?php
	$id = $_POST['id'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$coon = new mysqli('localhost','root','','establish','3306');
	$sql = "UPDATE boot_verify SET username = '$username', password = '$password'WHERE id =" .$id;
	$row = $coon -> query($sql);
	if ($row) {
			$json = array("msg" => "","code" => "200","data" => $row);
	} else {
		$json = array("msg" => "修改失败","code" => "0");
	}

	echo json_encode($json);

?>
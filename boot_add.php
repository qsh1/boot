<?php
	$username = $_POST['user'];
	$password = $_POST['pwd'];
	$coon = new mysqli('localhost','root','','establish','3306');
	$sql = "INSERT INTO boot_verify(username,password) VALUES ('$username','$password')";
	$row = $coon -> query($sql);
	if ($row) {
			$json = array("msg" => "","code" => "200","data" => $row);
	} else {
		$json = array("msg" => "添加失败","code" => "0");
	}

	echo json_encode($json);
?>
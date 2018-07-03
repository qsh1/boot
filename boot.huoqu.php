<?php
	$coon = new mysqli('localhost','root','','establish','3306');
	$sql = "SELECT * FROM boot_verify";
	$result = $coon -> query($sql);
	$row = $result -> fetch_all();
	if ($row) {
		$json = array("msg" => "","code" => "200","data" => $row);
	} else {
		$json = array("msg" => "用户名或密码错误","code" => "0");
	}
	
	echo json_encode($json);
?>
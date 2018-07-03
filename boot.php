<?php
	$username = $_POST['username'];
	$password = $_POST['password'];
	$coon = new mysqli('localhost','root','','establish','3306');
	$sql = "SELECT * FROM boot_verify WHERE username = '$username' and password = '$password'";
	$result = $coon -> query($sql);
	$row = $result -> fetch_assoc();
	if ($row) {
		$json = array("msg" => "","code" => "200");
	} else {
		$json = array("msg" => "用户名或密码错误","code" => "0");
	}
	echo json_encode($json);
	// mysql_close();
?>

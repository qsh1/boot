<?php
	$id = $_POST['id'];
	$coon = new mysqli('localhost','root','','establish','3306');
	$sql = "DELETE FROM boot_verify WHERE id =" .$id;
	$row = $coon -> query($sql);

	if ($row) {
		$json = array("msg" => "","code" => "200","data" => $row);
	} else {
		$json = array("msg" => "删除失败","code" => "0");
	}

	echo json_encode($json);
?>
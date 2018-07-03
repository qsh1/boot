<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">
	.table{
		text-align: center;
	}
	th{
		text-align: center;
	}
	</style>
</head>
<body>
	<table class="table table-hover">
  	<th>序号</th>
	<th>用户名</th>
	<th>密码</th>
	<th>操作</th>
		<tbody>
		<?php
			header("Content-Type:text/html;charset=utf8");
			$coon = new mysqli('localhost','root','','establish','3306');
			$sql = 'select * from boot_verify';
			$result = $coon -> query($sql);
			$row = $result -> fetch_all();
			foreach ($row as $key => $value) {
				$arr = array('<tr>');
				foreach ($value as $json) {
					array_push($arr,"<td>$json</td>");
				}
				array_push($arr,"<td><button type='button'class='btn btn-warning'>修改</button> <button type='button' class='btn btn-danger'>删除</button></td></tr>");
				echo join($arr);
			}
		?>
		</tbody>
	</table>
		
</body>
</html>
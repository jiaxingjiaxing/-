<?php
error_reporting(0);
header('content-type:text/html;charset=utf8');
$mysqli=new mysqli('localhost','root','root','tiger');
if($mysqli->connect_errno){
	die('connect error:'.$mysql->connect_error);
}
$mysqli->set_charset('utf8');
$squery=<<<EOF
    create table if not exists user(
   id tinyint unsigned auto_increment key,
   name varchar(20) not null,
   class varchar(20) not null,
   core varchar(20) not null
	);
EOF;
$mysqli->query($squery);
$sql="select id,name,class,core from user";
$mysqli_result=$mysqli->query($sql);
if($mysqli_result && $mysqli_result->num_rows>0){
	while($row=$mysqli_result->fetch_assoc()){
		$rows[]=$row;
	}
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
		<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?e109b8d09cc4d272c0008f65723ed6e9";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

		<title>日照职业技术学院管理系统</title>
	</head>
	
	<body >
		<nav class="navbar navbar-default" role="navigation">
			
				<h1 class="text-center"><strong>日照职业技术学院管理系统</strong></h1>
			
		</nav>
		<a href="addUser.php"><button type="button" class="btn btn-success"style="margin-left:30px">添加学生</button></a>
		<div style="margin-top:30px">
			<table class="table table-bordered table-hover text-center"  >
				<tr >
						<td><strong>编号</strong></td>
						<td><strong>姓名</strong></td>
						<td><strong>班级</strong></td>
						<td><strong>成绩</strong></td>
						<td><strong>操作</strong></td>
					</tr>
				
				<?php $i=1; foreach($rows as $row):?>
				<tr>
					<td><?php echo $i;?></td>
						<td><?php echo $row['name'];?></td>
						<td><?php echo $row['class'];?></td>
						<td><?php echo $row['core'];?></td>
					<td><a href="editUser.php?id=<?php echo $row['id'];?>"><button type="button" class="btn btn-warning  btn-sm">修改</button></a><a href="doAction.php?act=delUser&id=<?php echo $row['id'];?>"><button type="button" class="btn btn-danger  btn-sm ">删除</button></a></td>
				</tr>
				<?php $i++; endforeach;?>
				
			</table>
		</div>
		<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>


<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	</body>
</html>
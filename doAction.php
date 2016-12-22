<?php
header('content-type:text/html;charset=utf8');
$mysqli=new mysqli('localhost','root','root','tiger');
if($mysqli->connect_errno){
	die('connect error:'.$mysql->connect_error);
}
$mysqli->set_charset('utf8');
$name=@$_POST['name'];
$class=@$_POST['class'];
$core=@$_POST['core'];
$act=@$_GET['act'];
$id=@$_GET['id'];
switch($act){
case 'addUser':
	  $sql="insert  user(name,class,core) VALUES ('{$name}','{$class}','{$core}')";
	  $res=$mysqli->query($sql);
      if($res){
	  echo 
	  "<script type='text/javascript'> 
	  alert('添加成功'); 
	  location.href='students.php';
	  </script>";
 	   }else{
      echo 
	   "<script type='text/javascript'>
	   alert('添加失败');
	   location.href='addUser.php';
	   </script>";
	   exit;
       }
       break;
 case 'delUser':
		$sql="delete from user where id=".$id;
		$res=$mysqli->query($sql);
	    if($res){
		$mes="删除成功";
	    }else{
		$mes="删除失败";
		}
		$url='students.php';
		echo"<script type='text/javascript'>
		alert('{$mes}');
		location.href='{$url}';
		</script>";
		exit;
		break;
case 'editUser':
		$sql="update user set name='{$name}',class='{$class}',core='{$core}' where id=".$id;
		$res=$mysqli->query($sql);
		if($res){
		$mes="修改成功";
		}else{
		$mes="修改失败";
		}
		$url='students.php';
		echo"<script type='text/javascript'>
		alert('{$mes}');
		location.href='{$url}';
		</script>";
		exit;
		break;
}
?>
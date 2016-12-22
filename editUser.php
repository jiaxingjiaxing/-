<?php

$mysqli=new mysqli('localhost','root','root','tiger');
if($mysqli->connect_errno){
	die('connect error:'.$mysql->connect_error);
}
$mysqli->set_charset('utf8');
$id=$_GET['id'];
$sql="select id,name,class,core from user where id=".$id;
$mysqli_result=$mysqli->query($sql);
if($mysqli_result){
    $row=$mysqli_result->fetch_assoc();
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="css.css">
		<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?e109b8d09cc4d272c0008f65723ed6e9";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

		<title>XX大学成绩管理系统</title>
	</head>
<body>
    <div class="navbar navbar-default" role="navigation"><h1 class="text-center">XX大学成绩管理系统</h1></div>
   
    <form  class="add" action="doAction.php?act=editUser&id=<?php echo $id; ?>" method="post">
    <table  cellpadding="0" cellmargin="0">
    <tr>
    <td>姓名</td>
    <td><input type="text" name="name" id=""value="<?php echo $row['name']; ?>" > </td>
    </tr> 
     <tr>
         <td>班级</td>
    <td><input type="text" name="class" id="" value="<?php echo $row['class']; ?>" > </td>
    </tr>
    <tr>
     <td>成绩</td>
    <td><input type="number" name="core" id="" value="<?php echo $row['core']; ?>"> </td>
       
    </tr>
    <tr>
        <td id="addipt" colspan="2"><input class="btn btn-default btn-success" type="submit" value="提交" </td>
      </tr>
    </table>
    </form>
</body>
</html>
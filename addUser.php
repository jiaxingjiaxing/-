
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
    <div class="navbar navbar-default" role="navigation"><h1 class="text-center"><strong>XX大学成绩管理系统</strong></h1></div>
   
    <form  class="add" action="doAction.php?act=addUser" method="post">
    <table  cellpadding="0" cellmargin="0">
    <tr>
    <td>姓名</td>
    <td><input type="text" name="name" id="" placeholder="请输入合法用户名"> </td>
    </tr> 
     <tr>
         <td>班级</td>
    <td><input type="text" name="class" id="" placeholder="请输入合法班级"> </td>
    </tr>
    <tr>
     <td>成绩</td>
    <td><input type="number" name="core" id="" placeholder="请输入合法成绩"> </td>
       
    </tr>
    <tr>
        <td id="addipt" colspan="2"><input class="btn btn-defult btn-success" type="submit" value="提交" </td>
      </tr>
    </table>
    </form>
</body>
</html>
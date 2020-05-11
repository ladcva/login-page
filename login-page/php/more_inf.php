<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
	include'./config.php';
	if(isset($_POST['submit'])){
		if(empty($_POST['name']) or empty($_POST['birth']) or empty($_POST['email']) or empty($_POST['address']) or empty($_POST['phone'])){
			echo "xin nhap day du thong tin";
		}else{
			if(strlen($_POST['phone']) > 11){
				echo "xin nhập đúng số điện thoại";
			}else{
				$mybirth=$_POST['birth'];
				$mysex=$_POST['selection'];
				$myname=$_POST['name'];
				$myphone=$_POST['phone'];
				$myaddress=$_POST['address'];
				$myemail=$_POST['email'];
				$sql="SELECT * FROM `inf` WHERE gmail = '$myemail'";
				$query= mysqli_query($conn,$sql);
				$count = mysqli_num_rows($query);
				if($count > 0){
					echo"gmail đã được sử dụng";
				}else{
					$sql="INSERT INTO `inf`(`gmail`, `address`, `phone`, `birth`, `sex`, `name`) VALUES ('$myemail','$myaddress','$myphone','$mybirth','$mysex','$myname')";
					$query= mysqli_query($conn,$sql);
					if($query){
						echo"dang ky thanh cong";
					}else{
						echo "dang ky that bai";
					}
				}
			}
		}	
	}
?>
<form method="post" action="">
	<table>
    	<tr>
        	<td> Nhập họ và tên </td>
            <td><input type="text" name="name"/></td>
        </tr>
        <tr>
        	<td> Nhập ngày tháng năm sinh </td>
            <td><input type="text" name="birth"/></td>
        </tr>
        <tr>
        	<td> Nhập email </td>
            <td><input type="text" name="email"/></td>
        </tr>
    	<tr>
        	<td> Nhập giới tính</td>
            <td><input type="radio" name="selection" value="0"/><label>Nam<br /></label>
            	<input type="radio" name="selection" value="1"/><label>Nữ<br /></label>
                <input type="radio" name="selection" value="2"/><label>Khác<br /></label></td>
        </tr>
        <tr>
        	<td> Nhập địa chỉ </td>
            <td><input type="text" name="address"/></td>
        </tr>
        <tr>
        	<td> Nhập số điện thoại</td>
            <td><input type="text" name="phone"/></td>
        </tr>
        <tr>
        	<td><input type="submit" name="submit"/></td>
        </tr>
    </table>
</form>


</body>
</html>
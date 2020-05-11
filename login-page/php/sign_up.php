<?php
    include '../php/config.php';
	$action="";
    if(isset($_POST['submit'])){
        if(empty($_POST['username']) or empty($_POST['password']) or empty($_POST['firstname']) or empty($_POST['lastname'])){
            echo'<p style = "color:red"> Vui long dien day du thong tin</p>';
        }else{
            $username = $_POST['username'];
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $password = $_POST['password'];
            $repassword = $_POST['repassword'];
            if(strlen($username) < 6 or strlen($password) < 6){
                echo'<p style = "color:red">Username or password phải nhiều hơn  6 kí tự</p>';
            }else{
                if($password != $repassword){
                    echo'<p style = "color:red">Password không trùng nhau</p>';
                }else{
                    $sql = "SELECT * FROM user WHERE username = '$username'";
                    $query = mysqli_query($conn,$sql);
                    $num = mysqli_num_rows($query);
                    $password = md5($password);
                    if($num == 0){
						$action="php/more_inf.php";
                        echo'<h1>Điền thêm một số thông tin</h1>';
                    }else{
                        echo'<p style = "color:red">Tài khoản đã tồn tại vui lòng sử dụng tài khoản khác</p>';
                    }
                }
            }
        }
    }

?>
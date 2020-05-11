<?php
    $conn=mysqli_connect("localhost","root","zozazozin1","demo");
    // thay host, username database, pass, tên database vào
    mysqli_set_charset($conn,"utf8");
    //include '../php/config.php';
    if(isset($_POST['submit'])){
        if(empty($_POST['username']) or empty($_POST['password'])){
            echo'<p style = "color:red"> Vui lòng điền đầy đủ thông tin user và password</p>';
        }else{
            $username = $_POST['username'];
            $password = $_POST['password'];
            $password = md5($password);
            $sql = "SELECT * FROM user WHERE username = '$username'  AND password = '$password'";
            $user = mysqli_query($conn,$sql);
            if(mysqli_num_rows($user) > 0){
                echo'<p style = "color:#059824">Chúc mừng bạn đã đăng nhập thanh công</p>';
            }else{
                echo'<p style = "color:red">Tên đăng nhập không đúng hoặc sai mật khẩu</p>';
            }
        }
        
    }
?>
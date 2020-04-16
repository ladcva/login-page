<?php
    include 'login-page/php/config.php';
	
    if(isset($_POST['submit'])){
        if(empty($_POST['name'])   or empty($_POST['birth_date']) or empty($_POST['city']) or
        empty($_POST['email'])  or empty($_POST['id']) or  empty($_POST['infor']) or
        empty($_POST['major']) or empty($_POST['class']) or empty($_POST['phone'])){
            echo'<p style = "color:red"> Vui long dien day du thong tin</p>';
        }else{
            $name = $_POST['name'];
            //$sex = $_POST['sex'];
            $birth_date = $_POST['birth_date'];
            $city = $_POST['city'];
            $email = $_POST['email'];
            $id = $_POST['id'];
            $major = $_POST['major'];
            $class = $_POST['class'];
            $phone = $_POST['phone'];
            $infor = $_POST['infor'];

            if(strlen($phone) < 10 ){
                echo'<p style = "color:red">Số điện thoại không chính xác</p>';
            }else{
                    $sql = "SELECT * FROM information WHERE email = '$email'";
                    $query = mysqli_query($conn,$sql);
                    $num = mysqli_num_rows($query);
                    if($num == 0){
                                             
                        $sql2= "INSERT INTO information (name,sex,birth_date,city,email,id,major,class,phone,infor) 
                        VALUES ('$name','sex','$birth_date','$city','$email','id','major','class','phone','infor')";

                        $add = mysqli_query($conn,$sql2);
                        if($add){
                            echo'<p style = "color:#059824">Đăng kí tài khoản thành công</p>';
                            header('location:../homepage/recuitment.html');
                        }
                        else{
                            echo'<p style = "color:red">Đăng kí tài khoản thất bại</p>';
                        }
                    }else{
                        echo'<p style = "color:red">Tài khoản email đã tồn tại vui lòng sử dụng tài khoản khác</p>';
                    }
                }
            }
        }

?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTf-8">
  <title>Nhóm chát</title>
  
  
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
      <link rel="stylesheet" href="./assets/css/style.css">
  
</head>
<body>
<?php
    include 'php/config.php';
	include 'php/dbcloud.php';
    if(isset($_POST['submit'])){
        if(empty($_POST['username']) or empty($_POST['password']) or empty($_POST['repassword'])){
            echo'<p style = "color:red"> Vui long dien day du thong tin</p>';
        }else{
            $username = $_POST['username'];
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
					$repassword = md5($repassword);
                    if($num == 0){
						$action="php/more_inf.php";
						$count=1;
                        echo'<p style="color:green">Bạn có thể sử dụng tài khoản này <br />Nhấn tiếp tục để đăng ký</p>';
                    }else{
                        echo'<p style = "color:red">Tài khoản đã tồn tại vui lòng sử dụng tài khoản khác</p>';
                    }
                }
            }
        }
    }
	if($count==0){
		$username = ""  ;
		$password  = "";
		$repassword = "";
	}
?>
  
  <div class="login-wrap">
  <div class="login-html">
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
    <div class="login-form">
      <form class="sign-in-htm" action="../login-page/sign_in.php" method="POST">        
                  <tr>
                      <td>username :</td>
                      <td><input type="text" name="username"></td>
                  </tr>
                  <tr>
                      <td>password :</td>
                      <td><input type="password" name="password"></td>
                  </tr>
                  <tr>
                      <td colspan >
                          <button type="submit" name ="submit">Dang nhap</button>
                          <button type="reset">Lam moi</button>
                      </td>
                  </tr>
              </table>      
      </form> 
      
      <form class="sign-up-htm" action="<?php echo $action;?>" method="POST">
      <table>
            <?php
                if($count==0){
					echo '<tr>
                <td>USERNAME :</td>
                <td><input type="text" name="username" value="'.$username.'"></td>
            </tr>
            <tr>
                <td>PASSWORD :</td>
                <td><input type="password" name="password" value="'.$password.'"></td>
            </tr>
            <tr>
                <td>CONFORM PASSWORD :</td>
                <td><input type="password" name="repassword" value="'.$repassword.'"></td>
            </tr>
            <tr>
            <td colspan >
                    <button type="submit" name ="submit">SIGN UP</button>
                    <button type="reset" name="reset">RESET</button>
                </td></tr>';
				}else{ 
					echo ' <tr><td colspan >
                    <button type="submit" name ="submit1">Tiếp tục</button>
                </td></tr>';
				}
			?>	
            
        </table>
      </form>
    </div>
  </div>
</div>
  
</body>
</html>
<?php
ob_start();
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password'])){
    header('location:index.php'); 
}
include_once('../config/database.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Startmin - Bootstrap Admin Theme</title>

        <!-- Bootstrap Core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../css/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
    <?php
if(isset($_POST['submit'])){
    
    $username = $_POST['username']; 
    $password = $_POST['password']; 
        
    // Kiểm tra Tài khoản với các thông tin nhận được ở trên trong CSDL
    $sql = "SELECT * FROM thanhvien WHERE username = '$username' AND password = '$password'";
    $query = mysqli_query($dbConnect, $sql);        
    $totalRows = mysqli_num_rows($query);
    
    // Không ó kết quả thì báo lỗi ngược lại Tạo phiên Đăng nhập cho Tài khoản
    if($totalRows <= 0){
        $error = 'Tài khoản hoặc Mật khẩu không hợp lệ!';   
    }
    else{
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header('location:index.php'); 
    }
    
}
?>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            
                             <h3 style="margin-left: 10px; " class="panel-title"><?php if(isset($error)){echo "<span>$error</span>";}else{echo 'Vui lòng đăng nhập!';}?></h3>
                        </div>

                        <div class="panel-body">
                            <form role="form" method="post">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Username" name="username" type="text" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                        </label>
                                    </div>
                                    <!-- Change this to a button or input when using this as a form -->
                                    <button class="btn btn-lg btn-success btn-block" type="submit" name="submit">Login</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>

    </body>
</html>

<?php
    $act="login";
    if(isset($_GET['act'])){
        $act=$_GET['act'];
    }
    switch($act){
        case 'login':
            include "../../View/back/login.php";
            break;
        case 'login_action':
            if(isset($_POST['email']) && isset($_POST['password'])){
                $email=$_POST['email'];
                $password=$_POST['password'];
                $captcha=$_POST['captcha'];
		        $captcharandom=$_POST['captcha-rand'];
                $adminController=new Admin();
                $check=$adminController->loginAdmin($email,$password);
                if($captcha!=$captcharandom){
                    echo '<script>alert("Mã không hợp lệ");</script>';
                    echo '<meta http-equiv="refresh" content="0; url=./index.php?action=AdminController&act=login"/>';
                }else if($check!=false){
                   $_SESSION['username']=$check['username'];
                   $_SESSION['id']=$check['id'];
                   $_SESSION['email']=$check['email'];
                   $_SESSION['password']=$check['password'];
                   $_SESSION['level']=$check['level'];
                    echo '<script>alert("Đăng nhập thành công");</script>';
                    echo '<meta http-equiv="refresh" content="0; url=./index.php?action=HomeAdminController"/>';
                }else{
                    echo '<script>alert("Đăng nhập không thành công");</script>';
                    echo '<meta http-equiv="refresh" content="0; url=./index.php?action=AdminController&act=login"/>';
                }
            }
            break;
        case 'logout':
            if(isset($_SESSION['id'])){
                unset($_SESSION['username']);
                unset($_SESSION['id']);
                unset($_SESSION['email']);
                unset($_SESSION['password']);
                unset($_SESSION['level']);
                echo '<meta http-equiv="refresh" content="0; url=./index.php?action=AdminController&act=login"/>';
            }
            break;
    }

?>
<?php
// include "Model/connect.php";
// include "Model/hanghoa.php";
// include "Model/loaisanpham.php";
session_start();
include '../../Model/upload.php';
set_include_path(get_include_path().PATH_SEPARATOR.'../../Model/');
spl_autoload_extensions('.php');
spl_autoload_register();
include "../../Config/Connect.php";
?>  
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <link rel="shortcut icon" href="../../Assets/images/logocopy.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <!-- Site Icons -->
    <link rel="shortcut icon" href="Assets/images/logopl.jpg" type="image/x-icon">
    <link rel="apple-touch-icon" href="../../Assets/images/logocopy.png">
 <!-- link đăng nhập -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- link đăng nhập -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../../Assets/back/css/style.css" />
    <!-- end -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="../../Assets/back/css/admin.css" />

    <title>BLUSZA ADMIN</title>
</head>
<style>
body{
    margin:0;
    padding:0;
    max-width:100%;
}
</style>
<body>
<!-- Thanh header tao menu -->
<?php
        if(isset($_SESSION['email']) && isset($_SESSION['password']) )
        {
            include "../../View/back/header.php";
        }
            
        ?>
        <!-- end hinh dong -->
        <!-- phan thân -->
        <div class="container">
        <div class="row">
        <?php
             //load controler
            $ctrl="AdminController";
            if(isset($_GET['action']))
                $ctrl=$_GET['action'];
            include '../../Controller/'.$ctrl.'.php';
            // include 'Controller/'.$ctrl.'.php';

        //end controller
            
        ?>
        </div>
        <!-- end menu right -->
    </div>
    <!-- footer -->
    <?php
    if(isset($_SESSION['email']) && isset($_SESSION['password']))
    {
        include "../../View/back/footer.php";
    }
        
    ?>
    <!-- end footer -->
   
</body>

</html>
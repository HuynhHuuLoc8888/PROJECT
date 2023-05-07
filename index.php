
<?php
// phpinfo();die();
session_start();
// include './Model/uploadimage.php';
set_include_path(get_include_path().PATH_SEPARATOR.'Model/');
spl_autoload_extensions('.php');
spl_autoload_register();
include "./Config/Connect.php";

?>  
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!--Link bootrap icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <!-- end link đăng nhập -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./Assets/front/css/header.css" />
    <link rel="stylesheet" type="text/css" href="./Assets/front/css/menu.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <script type="text/javascript" src="./Assets/front/js/menu.js"></script>
    <link rel="stylesheet" href="./Assets/front/css/header.css">
    <link rel="shortcut icon" href="./Assets/front/images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./Assets/front/css/home.css">
    <title>BLUSZA</title>
</head>
<style>
    body {
        background-image: url('./Assets/front/images/body-bg.jpg');
        background-size: cover;
        background-attachment: fixed;
       
    }
    .margin{
        margin-left: 90px;
        margin-right: 90px;
    }
    .container{
    background: #ffffff;
    display: flex;
    padding-top: 10px;
    padding-right: 0px;
    padding-bottom: 10px;
    flex-flow: wrap;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    max-width: 1170px;
    margin: 0 auto;
    padding-left: 15px;
    }
</style>

<body>

    <!-- header -->
    <?php
    include "./View/front/header.php";
    ?>
    <div class="margin">
        <?php
        include "./View/front/menu.php";
        ?>
        <!-- hiên thi noi dung -->
        <div class="container">
            <div class="row">
                <!-- hien thi noi dung đây -->
                <?php
                $ctrl="HomeFrontController";
                if (isset($_GET["action"])) 
                    $ctrl = $_GET["action"];
                include "Controller/" . $ctrl . ".php";
                ?>
            </div>
        </div>
        <!-- hiên thị footer -->
        <?php
            include "./View/front/footer.php";
        ?>
    </div>
</body>

</html>
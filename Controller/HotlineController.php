<?php
    $act=$_GET['act'];
    if(isset($_GET['act'])){
        $act=$_GET['act'];
    }
    switch($act){
        case 'Hotline':
            include "../../View/back/Hotline/Hotline.php";
            break;
        case 'insert':
            include "../../View/back/Hotline/AddHotline.php";
            break;
        case 'insert_action':
            $name=$_POST['name'];
            $phone=$_POST['phone'];
            $icon=$_POST['icon'];
            $link=$_POST['link'];
            $Hotline=new Hotline();
            $check=$Hotline->insert($name,$phone,$icon,$link);
            if($check!==false){
                echo "<script>alert('Thêm thành công!')</script>";
                include "../../View/back/Hotline/Hotline.php";
            }else{
                echo "<script>alert('Thêm không thành công!')</script>";
                include "../../View/back/Hotline/AddHotline.php";
            }
            break;
        case 'edit':
            include "../../View/back/Hotline/EditHotline.php";
            break;
        case 'edit_action':
            if(isset($_GET['id'])){
                $id=$_GET['id'];
                $name=$_POST['name'];
                $phone=$_POST['phone'];
                $icon=$_POST['icon'];
                $link=$_POST['link'];
                $Hotline=new Hotline();
                $check=$Hotline->update($id,$name,$phone,$icon,$link);
                if($check!==false){
                    echo "<script>alert('Cập nhật thành công!')</script>";
                    include "../../View/back/Hotline/Hotline.php";
                }else{
                    echo "<script>alert('Cập nhật không thành công!')</script>";
                    include "../../View/back/Hotline/EditHotline.php";
                }
            }
            break;
        case 'delete':
            if(isset($_GET['id'])){
                $id=$_GET['id'];
                $Hotline=new Hotline();
                $Hotline->delete($id);
                echo "<script>alert('Xoá thành công!')</script>";
                include "../../View/back/Hotline/Hotline.php";
            }
            break;
    }
?>
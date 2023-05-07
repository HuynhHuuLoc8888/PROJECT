<?php
    $act="PositionController";
    if(isset($_GET['act'])){
        $act=$_GET['act'];
    }
    switch($act){
        case 'positions':
            include '../../View/back/Positions/Position.php';
            break;
        case 'insert':
            include '../../View/back/Positions/AddPosition.php';
            break;
        case 'insert_action':
            $name=$_POST['name'];
            $description=$_POST['description'];
            $Position=new Position();
            $check=$Position->insert($name,$description);
            if($check!=false){
                echo "<script>alert('Thêm thành công!')</script>";
                include "../../View/back/Positions/Position.php";
            }else{
                echo "<script>alert('Thêm không thành công!')</script>";
                include "../../View/back/Positions/AddPosition.php";
            }
            break;
        case 'edit':
            include "../../View/back/Positions/EditPosition.php";
            break;
        case 'edit_action':
            if(isset($_GET['id'])){
                $id=$_GET['id'];
                $name=$_POST['name'];
                $description=$_POST['description'];
                $Position=new Position();
                $check=$Position->update($id,$name,$description);
                if($check!==false){
                    echo "<script>alert('Cập nhật thành công!')</script>";
                    include "../../View/back/Positions/Position.php";
                    }else{
                        echo "<script>alert('Cập nhật không thành công!')</script>";
                        include "../../View/back/Positions/EditPosition.php";
                    }
            }
            break;
        case 'delete':
            if(isset($_GET['id'])){
                $id=$_GET['id'];
                $Position=new Position();
                $Position->delete($id);
                echo "<script>alert('Xoá thành công!')</script>";
                    include "../../View/back/Positions/Position.php";
            }
            break;
            
    }
?>
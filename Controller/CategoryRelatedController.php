<?php
    $act="CategoryRelatedController";
    if(isset($_GET['act'])){
        $act=$_GET['act'];
    }
    switch($act){
        case 'CategoryRelated':
            include "../../View/back/CategoryRelate/CategoryRelated.php";
            break;
        case 'insert':
            include "../../View/back/CategoryRelate/AddCategoryRelated.php";
            break;
        case 'insert_action':
            $name=$_POST['name'];
            $description=$_POST['description'];
            $note=$_POST['note'];
            $url=$_POST['url'];
            $CategoryRelated=new CategoryRelated();
            $check=$CategoryRelated->insert($name,$description,$note,$url);
            if($check!==false){
                echo "<script>alert('Thêm thành công!')</script>";
                include "../../View/back/CategoryRelate/CategoryRelated.php";
            }else{
                echo "<script>alert('Thêm không thành công!')</script>";
                include "../../View/back/CategoryRelate/AddCategoryRelated.php";
            }
            break;
        case 'edit':
            include "../../View/back/CategoryRelate/EditCategoryRelated.php";
            break;
        case 'edit_action':
            if(isset($_GET['id'])){
                $id=$_GET['id'];
                $name=$_POST['name'];
                $description=$_POST['description'];
                $note=$_POST['note'];
                $url=$_POST['url'];
                $CategoryRelated=new CategoryRelated();
                $check=$CategoryRelated->update($id,$name,$description,$note,$url);
                if($check!==false){
                    echo "<script>alert('Cập nhật thành công!')</script>";
                    include "../../View/back/CategoryRelate/CategoryRelated.php";
                }else{
                    echo "<script>alert('Cập nhật không thành công!')</script>";
                    include "../../View/back/CategoryRelate/EditCategoryRelated.php";
                }
            }
            break;
        case 'delete':
            if(isset($_GET['id'])){
                $id=$_GET['id'];
                $CategoryRelated=new CategoryRelated();
                $CategoryRelated->delete($id);
                echo "<script>alert('Xoá thành công!')</script>";
                include "../../View/back/CategoryRelate/CategoryRelated.php";
            }
            break;
        case 'search':
            include "../../View/back/CategoryRelate/CategoryRalated_Search.php";
            break;
    }
?>
<?php
    $act="CategoryController";
    if(isset($_GET['act'])){
        $act=$_GET['act'];
    }
    switch($act){
        case 'Category':
            include "../../View/back/Categories/Category.php";
            break;
        case 'insert':
            include '../../View/back/Categories/AddCategory.php';
            break;
        case 'insert_action':
            $name=$_POST['name'];
            $description=$_POST['description'];
            $phone=$_POST['phone'];
            $email=$_POST['email'];
            $image=$_FILES['image']['name'];
            $url=$_POST['url'];
            $note=$_POST['note'];
            $category=new Category();
            $check=$category->insert($name,$description,$phone,$email,$image,$url,$note);
            if($check!==false){
                uploadimage();
                echo "<script>alert('Thêm thành công!')</script>";
                include "../../View/back/Categories/Category.php";
            }else{
                echo "<script>alert('Thêm không thành công!')</script>";
                include "../../View/back/Categories/AddCategory.php";
            }
            break;
        case "edit":
            include '../../View/back/Categories/EditCategory.php';
            break;
        case "edit_action":
            if(isset($_GET['id'])){
                $id=$_GET['id'];
                $name=$_POST['name'];
                $description=$_POST['description'];
                $phone=$_POST['phone'];
                $email=$_POST['email'];
                $image=$_FILES['image']['name'];
                $url=$_POST['url'];
                $note=$_POST['note'];
                $category=new Category();
                $check=$category->update($id,$name,$description,$phone,$email,$image,$url,$note);
                if($check!==false){
                    uploadimage();
                    echo "<script>alert('Cập nhật thành công!')</script>";
                    include "../../View/back/Categories/Category.php";
                }else{
                    echo "<script>alert('Cập nhật không thành công!')</script>";
                    include "../../View/back/Categories/EditCategory.php";
                }
            }
            break;
        case 'delete':
            if(isset($_GET['id'])){
                $id=$_GET['id'];
                $category=new Category();
                $category->delete($id);
                echo "<script>alert('Xoá thành công!')</script>";
                include "../../View/back/Categories/Category.php";
            }
        break;
        case 'search':
            include "../../View/back/Categories/Category_Search.php";
            break;
    }
?>
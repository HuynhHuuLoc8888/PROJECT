<?php
    $act="StaffController";
    if(isset($_GET['act'])){
        $act=$_GET['act'];
    }
    switch($act){
        case 'Staffs':
            include "../../View/back/Staffs/Staff.php";
            break;
        case 'insert':
            include "../../View/back/Staffs/AddStaff.php";
            break;
        case 'insert_action':
            $image=$_FILES['image']['name'];
            $position_id=$_POST['position_id'];
            $name=$_POST['name'];
            $phone=$_POST['phone'];
            $skype=$_POST['skype'];
            $email=$_POST['email'];
            $description=$_POST['description'];
            $Staff=new Staff();
            $check=$Staff->insert($image,$position_id,$name,$phone,$skype,$email,$description);
            if($check!=false){
                uploadimage();
                echo "<script>alert('Thêm thành công!')</script>";
                include "../../View/back/Staffs/Staff.php";
            }else{
                echo "<script>alert('Thêm không thành công,vui lòng nhập lại!')</script>";
                include "../../View/back/Staffs/AddStaff.php";
            }
            break;
        case 'edit':
            include "../../View/back/Staffs/EditStaff.php";
            break;
        case 'edit_action':
            if(isset($_GET['id'])){
                $id=$_GET['id'];
                $image=$_FILES['image']['name'];
                $position_id=$_POST['position_id'];
                $name=$_POST['name'];
                $phone=$_POST['phone'];
                $skype=$_POST['skype'];
                $email=$_POST['email'];
                $description=$_POST['description'];
                $Staff=new Staff();
                $check=$Staff->update($id,$image,$position_id,$name,$phone,$skype,$email,$description);
                if($check!==false){
                    uploadimage();
                    echo "<script>alert('Cập nhật thành công!')</script>";
                    include "../../View/back/Staffs/Staff.php";
                }else{
                    echo "<script>alert('Cập nhật không thành công,vui lòng nhập lại !')</script>";
                    include "../../View/back/Staffs/EditStaff.php";
                }
            }
            break;
        case 'delete':
            if(isset($_GET['id'])){
                $id=$_GET['id'];
                $Staff=new Staff();
                $Staff->delete($id);
                echo "<script>alert('Xoá thành công!')</script>";
                include "../../View/back/Staffs/Staff.php";
            }
            break;
    }
?>
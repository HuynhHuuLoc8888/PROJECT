<?php
    class CategoryPost{
        public function __construct(){

        }
        public function AllCategoryPost(){
            $db=new Connect();
            $sql="select * from category_posts";
            $result=$db->getList($sql);
            return $result;
        }
        public function AllCategoryPost_pagination($start,$limit){
            $db=new Connect();
            $sql="select * from category_posts limit ".$start.",".$limit;
            $result=$db->getList($sql);
            return $result;
        }
        //danh mục Giới thiệu
        public function showCategoryGT(){
            $db=new Connect();
            $sql="select * from category_posts where description='gioithieu'";
            $result=$db->getList($sql);
            return $result;
        }
        //danh mục doanh nghiệp
        public function showCategoryDN(){
            $db=new Connect();
            $sql="select * from category_posts where description='doanhnghiep'";
            $result=$db->getList($sql);
            return $result;
        }
        //danh mục sở hữu trí tuệ
        public function showCategorySHTT(){
            $db=new Connect();
            $sql="select * from category_posts where description='sohuutritue'";
            $result=$db->getList($sql);
            return $result;
        }
        //danh mục đầu tư
        public function showCategoryDT(){
            $db=new Connect();
            $sql="select * from category_posts where description='dautu'";
            $result=$db->getList($sql);
            return $result;
        }
        //danh mục giấy phép
        public function showCategoryGP(){
            $db=new Connect();
            $sql="select * from category_posts where description='giayphep'";
            $result=$db->getList($sql);
            return $result;
        }
        //danh mục kế toán-thuế
        public function showCategoryKTT(){
            $db=new Connect();
            $sql="select * from category_posts where description='ketoan-thue'";
            $result=$db->getList($sql);
            return $result;
        }
        public function getCategoryPostId($id){
            $db=new Connect();
            $sql="select * from category_posts where id=$id";
            $result=$db->getInstance($sql);
            return $result;
        }
        public function insert($name,$slug,$icon,$description,$title){
            $db=new Connect();
            $date=new DateTime('Asia/Ho_Chi_Minh');
            $datecreate=$date->format('Y-m-d H:i:s');
            // $datetime=date('Y-m-d now',time());
            $sql="insert into category_posts(id,name,slug,icon,description,title,created_at) 
            values(NULL,'$name','$slug','$icon','$description','$title','$datecreate')";
            $result=$db->exec($sql);
            return $result;
        }
        public function update($id,$name,$slug,$icon,$description,$title){
            $db=new Connect();
            $date=new DateTime('Asia/Ho_Chi_Minh');
            $datecreate=$date->format('Y-m-d H:i:s');
            $sql="update category_posts set 
            name='$name',
            slug='$slug',
            icon='$icon',
            description='$description',
            title='$title',
            updated_at='$datecreate' where id=$id";
            $result=$db->exec($sql);
            return $result;
        }
        public function delete($id){
            $db=new Connect();
            $sql="delete from category_posts where id=$id";
            $result=$db->exec($sql);
            return $result;
        }
        public function getsearch($timkiem){
            $db=new Connect();
            $sql="select * from category_posts where name like '%$timkiem%' or 
            description like '%$timkiem%' or icon like '%$timkiem%' or title like '%$timkiem%' ";
            $result=$db->getList($sql);
            return $result;
        }
    }
?>
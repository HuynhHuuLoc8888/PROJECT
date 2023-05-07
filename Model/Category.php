<?php
    class Category{
        public function __Construct(){

        }
        //show tất cả danh mục
        public function CategoryAll(){
            $db=new Connect();
            $sql="select * from category";
            $result=$db->getList($sql);
            return $result;
        }
        //show tất cả danh mục
        public function CategoryAll_pagination($start,$limit){
            $db=new Connect();
            $sql="select * from category limit ".$start.",".$limit;
            $result=$db->getList($sql);
            return $result;
        }
        // show danh mục doanh nghiệp
        public function showCategoryBusiness(){
            $db=new Connect();
            $sql="select * from category where note='doanhnghiep'";
            $result=$db->getList($sql);
            return $result;
        }
        //show danh mục sở hữu trí tuệ
        public function showCategoryIntellectualProperty(){
            $db=new Connect();
            $sql="select * from category where note='sohuutritue'";
            $result=$db->getList($sql);
            return $result;
        }
        //show danh mục đầu tư
        public function showCategoryInvest(){
            $db=new Connect();
            $sql="select * from category where note='dautu'";
            $result=$db->getList($sql);
            return $result;
        }
        //show danh mục vụ việc vụ án
        public function showCategoryVVVA(){
            $db=new Connect();
            $sql="select * from category where note='vuviec-vuan'";
            $result=$db->getList($sql);
            return $result;
        }
        //show danh mục giấy phép
        public function showCategoryLicense(){
            $db=new Connect();
            $sql="select * from category where note='giayphep'";
            $result=$db->getList($sql);
            return $result;
        }
        //show danh mục công ty tại việt nam
        public function showCategoryCTTVN(){
            $db=new Connect();
            $sql="select * from category where note='congtytaivietnam'";
            $result=$db->getList($sql);
            return $result;
        }
        //show danh mục tuyển dụng
        public function showCategoryTuyendung(){
            $db=new Connect();
            $sql="select * from category where note='tuyendung'";
            $result=$db->getList($sql);
            return $result;
        }
        //show danh mục giấy phép lao động (giấy phép)
        public function showCategoryGPLĐ(){
            $db=new Connect();
            $sql="select * from category where note='giaypheplaodong'";
            $result=$db->getList($sql);
            return $result;
        }
        //show danh mục phân trang giấy phép lao động (giấy phép)
        public function GPLĐ_pagination($start,$limit){
            $db=new Connect();
            $sql="select * from category where note='giaypheplaodong' limit ".$start.",".$limit;
            $result=$db->getList($sql);
            return $result;
        }
        //lấy id của danh mục
        public function CategoryId($id){
            $db=new Connect();
            $sql="select * from category where id=$id";
            $result=$db->getInstance($sql);
            return $result;
        }
        //thêm
        public function insert($name,$description,$phone,$email,$image,$url,$note){
            $db=new Connect();
            $date=new DateTime('Asia/Ho_Chi_Minh');
            $datecreate=$date->format('Y-m-d H:i:s');
            $sql="insert into category(id,name,description,phone,email,image,url,note,created_at)
            values (NULL,'$name','$description','$phone','$email','$image','$url','$note','$datecreate')";
            $result=$db->exec($sql);
            return $result;
        }
        //cập nhật
        public function update($id,$name,$description,$phone,$email,$image,$url,$note){
            $db=new Connect();
            $date=new DateTime('Asia/Ho_Chi_Minh');
            $dateupdate=$date->format('Y-m-d H:i:s');
            $sql="update category set 
            name='$name',
            description='$description',
            phone='$phone',
            email='$email',
            image='$image',
            url='$url',
            note='$note',
            updated_at='$dateupdate' where id=$id";
            $result=$db->exec($sql);
            return $result;
        }
        //xoá
        public function delete($id){
            $db=new Connect();
            $sql="delete from category where id=$id";
            $result=$db->exec($sql);
            return $result;
        }
            //show tất cả danh mục
            public function getsearch($timkiem){
                $db=new Connect();
                $sql="select * from category where name like '%$timkiem%' or 
                description like '%$timkiem%' or phone like '%$timkiem%' or email like '%$timkiem%'
                or url like '%$timkiem%' or note like '%$timkiem%'";
                $result=$db->getList($sql);
                return $result;
            }
    }

?>

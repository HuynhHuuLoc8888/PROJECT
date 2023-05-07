<?php
    class Staff{
        public function __Construct(){

        }
        public function StaffAll(){
            $db=new Connect();
            $sql="select staffs.*,positions.name as position_name from staffs,positions where staffs.position_id=positions.id";
            $result=$db->getList($sql);
            return $result;
        }
        public function StaffId($id){
            $db=new Connect();
            $sql="select * from staffs where id=$id";
            $result=$db->getInstance($sql);
            return $result;
        }
        public function insert($image,$position_id,$name,$phone,$skype,$email,$description){
            $db=new Connect();
            $date=new DateTime('Asia/Ho_Chi_Minh');
            $datecreate=$date->format('Y-m-d H:i:s');
            $sql="insert into staffs(id,image,position_id,name,phone,skype,email,description,created_at)
            values (NULL,'$image',$position_id,'$name','$phone','$skype','$email','$description','$datecreate')";
            $result=$db->exec($sql);
            return $result;
        }
        public function update($id,$image,$position_id,$name,$phone,$skype,$email,$description){
            $db=new Connect();
            $date=new DateTime('Asia/Ho_Chi_Minh');
            $datecreate=$date->format('Y-m-d H:i:s');
            $sql="update staffs set 
            image='$image',
            position_id=$position_id,
            name='$name',
            phone='$phone',
            skype='$skype',
            email='$email',
            description='$description',
            created_at='$datecreate' where id=$id";
            $result=$db->exec($sql);
            return $result;
        }
        public function delete($id){
            $db=new Connect();
            $sql="delete from staffs where id=$id";
            $result=$db->exec($sql);
            return $result;
        }
    }
?>

<?php
    class Position{
        public function construct(){

        }
        public function AllPosition(){
            $db=new Connect();
            $sql="select * from positions";
            $result=$db->getList($sql);
            return $result;
        }
        public function PositionId($id){
            $db=new Connect();
            $sql="select * from positions where id=$id";
            $result=$db->getInstance($sql);
            return $result;
        }
        public function insert($name,$description){
            $db=new Connect();
            $date=new DateTime('Asia/Ho_Chi_Minh');
            $datecreate=$date->format('Y-m-d H:i:s');
            // $datetime=date('Y-m-d now',time());
            $sql="insert into positions(id,name,description,created_at) 
            values(NULL,'$name','$description','$datecreate')";
            $result=$db->exec($sql);
            return $result;
        }
        public function update($id,$name,$description){
            $db=new Connect();
            $date=new DateTime('Asia/Ho_Chi_Minh');
            $datecreate=$date->format('Y-m-d H:i:s');
            $sql="update positions set 
            name='$name',
            description='$description',
            created_at='$datacreate' where id=$id";
            $result=$db->exec($sql);
            return $result;
        }
        public function delete($id){
            $db=new Connect();
            $sql="delete from positions where id=$id";
            $result=$db->exec($sql);
            return $result;
        }
    }
?>
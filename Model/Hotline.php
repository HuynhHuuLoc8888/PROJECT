<?php
    class Hotline{
        public function __construct(){

        }
        public function HotlineAll(){
            $db=new Connect();
            $sql="select * from hotline";
            $result=$db->getList($sql);
            return $result;
        }
        public function HotlineId($id){
            $db=new Connect();
            $sql="select * from hotline where id=$id";
            $result=$db->getInstance($sql);
            return $result;
        }
        public function insert($name,$phone,$icon,$link){
            $db=new Connect();
            $sql="insert into hotline(id,name,phone,icon,link) values (NULL,'$name','$phone','$icon','$link')";
            $result=$db->exec($sql);
            return $result;
        }
        public function update($id,$name,$phone,$icon,$link){
            $db=new Connect();
            $sql="update hotline set 
            name='$name',
            phone='$phone',
            icon='$icon',
            link='$link' where id=$id";
            $result=$db->exec($sql);
            return $result;
        }
        public function delete($id){
            $db=new Connect();
            $sql="delete from hotline where id=$id";
            $result=$db->exec($sql);
            return $result;
        }
    }
?>
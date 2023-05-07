<?php
class Admin{
    public function __construct()
    {

    }
    // phương thức loginadmin
    public function loginAdmin($email, $password)
    {
        $db = new Connect();
        $sql="select * from admins where email='$email' and password='$password'";
        $result=$db->getInstance($sql);
        return $result;
    }
}

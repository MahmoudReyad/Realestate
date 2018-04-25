<?php
class Validate extends Database {
    private static  $id ;
    public function checkIfUserExist($email , $password){

        $sql = "SELECT username , id FROM users WHERE email = :email AND password = :password AND users.groupid = 0";
        $query = $this->connectToDatabase()->prepare($sql);

        $query->execute(array(
            'email' => $email ,
            'password' => $password
        ));
        $fetch = $query->fetchAll();
        $count = $query->rowCount();
        if ($count > 0){
            print_r($fetch);
            self::$id = $fetch[0]['id'];

            return true;
        }
        else {
            return false;
        }
    }
    public function getId(){
        return self::$id;
    }
}
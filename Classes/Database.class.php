<?php
class  Database{
    protected $dsn = 'mysql:host=localhost;dbname=realestate';
    protected $dbUserName = 'root';
    protected $dbPassword = '';
    protected static $conn;
    protected static $connected;
    public function connectToDatabase()
    {
        try{
           self::$conn = new PDO($this->dsn , $this->dbUserName , $this->dbPassword);
           echo 'connected';
           return self::$conn;
        }catch (PDOException $e){
            die($e->getMessage());
            echo 'not connected';
        }
    }
    public function selectUser($selector = '*'){
        $sql = "SELECT $selector FROM users";
        $query = $this->connectToDatabase()->prepare($sql);
        $query->execute();
        $count= $query->rowCount();
        if($count > 0){
            return $fetch = $query->fetchAll();
        }
        else {
            return false;
        }

    }
    public function insertUser(users $user){
        $sql = 'INSERT INTO users(firstname, lastname, email, username, password, dob, phone, address, age, country, zipcode ,groupid)
                 VALUES (:firstname , :lastname , :email , :username , :password , :dob , :phone , :address , :age , :country ,:zipcode ,:grouptype )';
        $query = $this->connectToDatabase()->prepare($sql);
        $query->execute(array(
            'firstname' => $user->firstName,
            'lastname' => $user->lastName,
            'email'=> $user->email,
            'username' => $user->userName,
            'password'=>$user->password,
            'dob'=> $user->dob,
            'phone'=>$user->phpne,
            'address'=> $user->adress,
            'age'   => $user->age,
            'country' => $user->country,
            'zipcode'=> $user->zipcode,
            'grouptype' =>$user->groupid,
        ));
        $count = $query->rowCount();

        if ($count >0) {
            self::$connected = true;
            echo 'userhasbeen added';

        }else{

            self::$connected = false;

        }
    }


}
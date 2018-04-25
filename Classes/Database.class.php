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
           return self::$conn;
        }catch (PDOException $e){
            die($e->getMessage());
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
    public function InsertProperty(property $property){
        $sql = 'INSERT INTO property(adresses, describtion, sellerid, availability, statue , image_path , price) VALUES (? , ? , ? , ? , ? , ? ,?) ';
        $query = $this->connectToDatabase()->prepare($sql);
        $query->execute(array($property->address , $property->description , $property->sellerId , $property->avilabilty , $property->statue , $property->imagePath , $property->price ));
        $count = $query->rowCount();
        if ($count > 0){
            return true;
        }else {
            return false;
        }
    }
    public function selectAllProperty($id){
        $sql = "SELECT * FROM property WHERE  sellerid != '$id' AND  availability = 0";
        $query = $this->connectToDatabase()->prepare($sql);
        $query->execute();
        $fetch = $query->fetchAll();
        $count = $query->rowCount();
        if($count > 0 ){

            return $fetch;
        }
        else{
            echo 'this is error';
            return false;

        }

    }
    public function selectProperty($id){

        $sql = "SELECT * FROM property WHERE  id = '$id'";
        $query = $this->connectToDatabase()->prepare($sql);
        $query->execute();
        $fetch = $query->fetchAll();
        $count = $query->rowCount();
        if($count > 0 ){

            return $fetch;
        }
        else{
            echo 'this is error';
            return false;

        }
    }
    public function addCardInformation(Card $card)
    {
        $sql = "INSERT INTO card VALUES (? , ? , ? ,? , ?)";
        $query = $this->connectToDatabase()->prepare($sql);
        $query->execute(array($card->type , $card->number , $card->holderName ,$card->cvn , $card->ownerId ));
        $count = $query->rowCount();
        if($count > 0){
            return true;
        }else {
            echo "ErorInsert";

            return false;
        }

    }
    public function updatePropertystate($proid , $userid){
        $sql = "UPDATE  property SET buyerid = $userid , availability = 1 WHERE id = $proid";
        $query = $this->connectToDatabase()->prepare($sql);
        $query->execute();
        $count = $query->rowCount();
        if ($count >0) {
            return true;
        }else {
            echo "ErorUpdate";
            return false;
        }
    }
    public function selectSpecUser($id){
        $sql = "SELECT * FROM users WHERE  users.id = $id" ;
        $query = $this->connectToDatabase()->prepare($sql);
        $query->execute();
        $fetch = $query->fetchAll();
        $count= $query->rowCount();
        if($count > 0){
            return $fetch;
        }
        else {
            return false;
        }

    }
    public function deleteUser($id){
        $sql = "DELETE FROM users WHERE id = $id";
        $query = $this->connectToDatabase()->prepare($sql);
        $query->execute();
        $count = $query->rowCount();
        if($count > 0 ){
            return true;
        }else{
            return false;
        }
    }


}
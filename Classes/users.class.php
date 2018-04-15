<?php
class users extends  Database
{
 public $firstName;
 public $lastName;
 public $email;
 public $userName;
 public  $password;
 public $dob;
 public $phpne;
 public $adress;
 public $age;
 public $country;
 public $zipcode;
 public $groupid;
 public function __construct($firstName , $lastName , $email , $userName , $password , $dob ,$phone , $address , $age , $country , $zipcode , $groupid = 0)
 {
     $this->firstName = $firstName;
     $this->lastName = $lastName;
     $this->email = $email;
     $this->userName = $userName;
     $this->password = $password;
     $this->dob = $dob;
     $this->phpne = $phone;
     $this->adress = $address;
     $this->age = $age;
     $this->country = $country;
     $this->zipcode = $zipcode;
     $this->groupid = $groupid;
 }
}
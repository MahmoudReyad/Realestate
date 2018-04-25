<?php
/**
 * Created by PhpStorm.
 * User: MahmoudReyad
 * Date: 4/25/2018
 * Time: 10:29 PM
 */
class Card{
    public $type;
    public $number;
    public $holderName;
    public $cvn;
    public $ownerId;
    public function __construct($number , $holdername , $type , $cvn , $ownerId )
    {
        $this->type = $type;
        $this->number = $number;
        $this->holderName = $holdername;
        $this->cvn = $cvn;
        $this->ownerId = $ownerId;
    }

}
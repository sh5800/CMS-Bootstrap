<?php

class Item 
{
    //public CONST MAX_LENGTH = 100;
   public $name;

   protected $code = 1234;  //protected keyword allows us to access the variable in the child class and it cannot be accessed anywhere else
   //public $description = "This is the default";

  // public static $count = 0;

   public function getListingDescription()
   {
    return "Item ".$this->name;
   }

    public function getCode()
    {
        return $this->code;
    }

//    public function getName()
//    {
//     return $this->name;
//    }

//    public function setName($name)
//    {
//     $this->name = $name;
//    }

//    public function getDescription()
//    {
//     return $this->description;
//    }

//    public function setDescription($description)
//    {
//     $this->description = $description;
//    }

//    public function __construct($name, $description)
//    {
//     $this->name = $name;
//     $this->description = $description;

//     static::$count++;
//    }

//    public function sayHello()
//    {
//     echo "Hello";
//    }

//    public function getName()
//    {
//     return $this->name;  // access the current object using this keyword
//    }

//    public static function showCount()
//    {
//     echo static::$count;
//    }
}
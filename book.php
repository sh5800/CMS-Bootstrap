<?php

class Book extends Item
{
    public $author;

    public function getListingDescription()  //method overriding
    {
        return parent::getListingDescription()." by ".$this->author; //to call the method of the parent class we use parent::methodName();
    }

    public function getCode()
    {
        return $this->code;
    }
}
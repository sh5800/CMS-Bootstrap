<?php

require 'item.php';
require 'book.php';

$my_item = new Item();
$my_item->name = "TV";
// $my_item->code = 1234;

echo $my_item->getListingDescription();
// echo $my_item->getCode();

echo "<br>";

$book = new Book();
$book->name = "Hamlet";
$book->author = "Shakespeare";
echo $book->getCode();

// $my_item = new Item("Example","An example object");

// var_dump(Item::$count);  //to access a static variable

// $new_item = new Item("New","New item");

// var_dump(Item::$count);

// Item::showCount(); //to access a static function

// define('MAXIMUM',100);  //using define keyword we declare global constants

// define('COLOUR','red');

// echo COLOUR; 

// echo ITEM::MAX_LENGTH;

// $my_item->name = "A new name";

// echo $my_item->getName();

// $my_item->setName("Example");
// $my_item->setDescription("An example object");

// echo $my_item->getName();
// echo $my_item->getDescription();

 //$my_item->name = "Example";
// $my_item->description = "A new description";
//$my_item->price = 2.99;  //not advisable
//$my_item->sayHello();
//echo $my_item->getName();

// var_dump($my_item);


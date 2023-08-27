<?php

// $message = 'Hello';
// $name = "Dave";

// // echo $message." ".$name;

// $start = "3 o'clock";
// $end = '4 o\'clock';

// // echo $start, $end;

// $days = "Monday\nTuesday\nWednesday";
// // echo $days;

// echo "Hello {$name}"; //variable interpolation

// $articles = [
//     ["title" => "First post", "content" => "This is the first post"],
//     ["title" => "Another post", "content" => "Another post to read here"],
//     ["title" => "Read this", "content" => "You must read this article"]
// ];

// var_dump($articles[1]["title"]);

// var_dump($articles["second"]);

// $values = [
//     "message" => "Hello World",
//     "count" => 150,
//     "pi" => 3.14,
//     "status" => false,
//     "result" => null
// ];

// var_dump($values);

$articles = [ 
   'a' => "First post", 
   'b' => "Another post", 
   'c' => "Read this!" 
];

foreach ($articles as $index => $article) {
    echo $index . ' - ' . $article,", ";
}

// $articles = [
//     'a' => "First post", 
//     'b' => "Another post", 
//     'c' => "Read this!" 
// ];



// if (empty($articles)) {
//     echo "The array is empty";
// } else {
//     echo "The array is not empty";
// }

// var_dump(4 == 4);

// $age = 21;

// if ($age >= 21) {
//     echo "Condition is true";
// } else {
//     echo "Condition is false";
// }

// $month = 1;

// while ($month <= 12) {
//     echo $month . ", ";
//     $month = $month + 1;
// }

// for ($i=1; $i <= 10 ;  $i++) { 
//    echo $i .", ";
// }

// $hour = 11;

// if($hour < 12) {
//     echo "Good Morning";
// } elseif ($hour < 18) {
//     echo "Good Afternoon";
// } elseif ($hour < 22) {
//     echo "Good Evening";
// } else {
//     echo "Good Night";
// }

// $day = "Sun";

// switch ($day) {
//     case "Mon":
//         echo "Monday";
//         break;
//     case "Tue":
//         echo "Tuesday";
//         break;
//     case "Wed":
//         echo "Wednesday";
//         break;
//     case "Thu":
//         echo "Thursday";
//         break;
//     case "Fri":
//         echo "Friday";
//         break;
//     case "Sat":
//         echo "Saturday";
//         break; 
//     case "Sun":
//         echo "Sunday";
//         break;  
//     default:
//         echo "No info available for given day";
//         break;                  
// }
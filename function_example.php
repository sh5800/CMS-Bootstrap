<?php

function getMessage($morning){
    if($morning){
        return "Good morning";
    } else {
        return "Good afternonn";
    }
}

$message = getMessage(false);
echo $message;
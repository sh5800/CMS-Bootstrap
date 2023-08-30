<?php

setcookie('example','hello',time() + 60*60*24,'/'); //first arg=name, second arg = value, third arg = expiry time, fourth arg = access modifier

echo 'Subdirectory cookie set';
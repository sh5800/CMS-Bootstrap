<?php

setcookie('example','hello',time() - 3600);  //first arg = name, second arg = value

echo 'Cookie set.';
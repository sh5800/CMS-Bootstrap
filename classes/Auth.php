<?php

/**
 * Auth
 */
class Auth 
{

/**
 * isLoggedIn
 *
 * @return void
 */
public static function isLoggedIn()
{
    return isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'];
}
}
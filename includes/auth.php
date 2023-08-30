<?php

/**
 * isLoggedIn
 *
 * @return void
 */
function isLoggedIn()
{
    return isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'];
}
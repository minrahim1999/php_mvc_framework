<?php
/**
 * @author MinRahim <minrahim1999@gmail.com>
 * 
 * Please be aware this is for learn how MVC work.
 * Please dont use this for production because of the security reasons.
 * Please learn other framework that been maintenance by developer.
 * You can edit this file and add more security for your own comfort.
 */

/**
 * This file contains the session helper for Log In and Log Out session.
 * Feel free to add your own session function.
 */

session_start();

function isLoggedIn()
{
    if (isset($_SESSION['user_id'])) {
        return true;
    }
    else {
        return false;
    }
}
?>
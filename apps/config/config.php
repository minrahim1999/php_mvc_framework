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
  * This file is a config file for define all the configuration.
  * You can add and define your own CONSTANT.
  */


//Database params
define('DB_HOST', 'localhost'); //Add your db host
define('DB_USER', 'root'); // Add your DB root
define('DB_PASS', ''); //Add your DB pass
define('DB_NAME', 'mvcframework'); //Add your DB Name

//APPROOT
define('APPROOT', dirname(dirname(__FILE__)));

//URLROOT (Dynamic links)
define('URLROOT', 'http://localhost/php_mvc_framework');
define('STATIC_URL', 'http://localhost/php_mvc_framework/public/static');

//Sitename
define('OUR_SITENAME', 'YOUR SITENAME');
define('OUR_COMPANY', 'YOUR COMPANY NAME')
?>
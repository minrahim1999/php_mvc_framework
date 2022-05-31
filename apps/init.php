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
 * This file will call all the require file for run the website.
 */

//Require libraries from folder libraries
require_once 'libraries/Core.php';
require_once 'libraries/Controller.php';
require_once 'libraries/Database.php';

//Require helpers from folder helpers

//Require configuration file from folder config
require_once 'config/config.php';

//Instantiate core class
$init = new Core();
?>
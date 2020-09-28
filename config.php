<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function exception_error_handler($errno, $errstr, $errfile, $errline ) {
    throw new ErrorException($errstr, $errno, 0, $errfile, $errline);
}
set_error_handler("exception_error_handler");
defined('BASE_PATH') || define('BASE_PATH', realpath(dirname(__FILE__)));
define('BASE_URL', 'http://localhost/html/themuja');
define('HOME_URL', BASE_URL.'/home.php');
define('CUSTOMER_URL', BASE_URL.'/customer/home.php');


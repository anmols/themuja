<?php
function exception_error_handler($errno, $errstr, $errfile, $errline ) {
    throw new ErrorException($errstr, $errno, 0, $errfile, $errline);
}
set_error_handler("exception_error_handler");
defined('BASE_PATH') || define('BASE_PATH', realpath(dirname(__FILE__)));
define('BASE_URL', 'http://localhost/html/themuja');
define('HOME_URL', BASE_URL.'/home.php')
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <meta name="description" content="Source code generated using layoutit.com">
        <meta name="author" content="LayoutIt!">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scripts.js"></script>
    </head>
    <body>
       <?php include_once 'header.php';?>
        <div style="padding: 10px;">
            <?php
            if (!empty($_REQUEST['page']))
            {
                try
                {
                    $page= BASE_PATH.'/'. str_replace('_', '/', $_REQUEST['page']).'.php';
                   // echo $page;die;
                    
                    include_once $page;
                }
                catch (ErrorException $ex)
                {
                    echo "Page Not Found";
                }
            }
            ?>
        </div>
    </body>
</html>
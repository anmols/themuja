<?php include_once 'config.php';?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <meta name="description" content="Source code generated using layoutit.com">
        <meta name="author" content="LayoutIt!">
        <link href="<?php echo BASE_URL ?>/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo BASE_URL ?>/css/style.css" rel="stylesheet">
        <script src="<?php echo BASE_URL ?>/js/jquery.min.js"></script>
        <script src="<?php echo BASE_URL ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo BASE_URL ?>/js/scripts.js"></script>
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
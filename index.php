<?php

include "header.php";

if (!empty($_REQUEST['page'])) {
    try {
        include_once $_REQUEST['page'] . '.php';
    } catch (ErrorException $ex) {
        echo "Page Not Found";
    }
}
else
{
    include_once 'home.php';
}

include "footer.php";
<!--side bar css-->
<link rel="stylesheet" href="<?php echo BASE_URL ?>/sidebar/css/normalize.min.css">
<link rel="stylesheet" href="<?php echo BASE_URL ?>/sidebar/css/defaults.min.css">
<link rel="stylesheet" href="<?php echo BASE_URL ?>/sidebar/css/nav-core.css">
<link rel="stylesheet" href="<?php echo BASE_URL ?>/sidebar/css/nav-layout.css">
<!--[if lt IE 9]>
<link rel="stylesheet" href="css/ie8-core.min.css">
<link rel="stylesheet" href="css/ie8-layout.min.css">
<script src="js/html5shiv.min.js"></script>
<![endif]-->
<script src="<?php echo BASE_URL ?>/sidebar/js/rem.min.js"></script>
<!--side bar css-->
<header>
    <h1> <?php echo "FX-ADMIN"; ?></h1>
</header>

<a href="#" class="nav-button">Menu</a>

<nav class="nav">
    <ul>
        <li class="nav-submenu"><a href="#">Customer Management</a>
            <ul>
                <li><a href="<?php echo HOME_URL ?>?page=register">Individual Customer</a></li>
                <li><a href="<?php echo HOME_URL ?>?page=register-comm">Commercial Customer</a></li>
                <li><a href="<?php echo HOME_URL ?>?page=customer_search">Customer Search</a></li>
            </ul>
        </li>
        <li class="nav-submenu"><a href="#">Handle Customer Withdrawal</a>
            <ul>
                <li><a href="#">Search withdraw</a></li>
                <li ><a href="<?php echo HOME_URL ?>?page=customer_withdraw">withdraw</a>
            </ul>
        </li>
        <li class="nav-submenu"><a href="#">Handle Customer Deposit</a>
            <ul>
                <li><a href="#">Search Deposit</a></li>
                <li ><a href="<?php echo HOME_URL ?>?page=customer_deposit">deposit</a>
                <li><a href="#">NON-RMB Deposit Clear</a></li>
                <li><a href="#">RMB Deposit Clear</a></li>
            </ul>
        </li>
        <li class="nav-submenu"><a href="#">Handle Customer Payment</a>
            <ul>
                <li><a href="#">Search Payment</a></li>
                <li><a href="#">Arrange Payment</a></li>
                <li><a href="#">Process NON-RMB Payment</a></li>
            </ul>
        </li>
        <li class="nav-submenu"><a href="#">Report</a>
            <ul>
                <li><a href="#">Transaction Report</a></li>
                <li><a href="#">Customer Deposit Report</a></li>
                <li><a href="#">Customer Withdraw Report </a></li>
                <li><a href="#">Customer Account Balance Report </a></li>
                <li><a href="#">Location Account Journal Report </a></li>
            </ul>
        </li>
        <li class="nav-submenu"><a href="#">Management Settings</a>
            <ul>
                <li><a href="#">Users</a></li>
                <li><a href="#">User Level</a></li>
                <li><a href="#">Company Setting</a></li>
                <li><a href="#">Currency</a></li>
            </ul>
        </li>       
    </ul>
</nav>

<a href="#" class="nav-close">Close Menu</a>
 <!--side bar code-->
<script src="<?php echo BASE_URL ?>/sidebar/js/nav.jquery.min.js"></script>
<script>
    $('.nav').nav();
//            $(document).click(function (e)
//            {
//                var container = $(".nav-button");
//                if ((!container.is(e.target)))     // if the target of the click isn't the TOGGLE BUTTON... 
//                {
//                    // Code to hide the menu
//                    $('.nav-button').toggleClass('button-open');
//                    $('.menu-wrap').toggleClass('menu-show');
//                    $('.content').toggleClass('content-background');
//                }
//            });
</script>
<!--/side bar code-->

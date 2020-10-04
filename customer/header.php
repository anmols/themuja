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
<style>
    .header{
    display: block;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 900;
    padding: 10px 10px 10px 10px;
    background: #88d9f1;
    color: #0e0e0e;
    text-align: center;
    line-height: 1.5rem;
    }
    .cheader{    
    right: 0;
    z-index: 901;
    width: 250px;
     /*background: #88d9f1;*/
    }
</style>


<header class="cheader">
    <h1> <?php echo "FX-ADMIN"; ?></h1>
</header>
<?php include_once BASE_PATH.'/customer/lightProfile.php';?>
<a href="#" class="nav-button">Menu</a>

<nav class="nav">
    <ul>        
        <li class="nav-submenu"><a href="#">Handle Customer Withdrawal</a>
            <ul>
                <li><a href="#">Search withdraw</a></li>
                <li ><a href="<?php echo CUSTOMER_URL ?>?page=withdraw">withdraw</a>
            </ul>
        </li>
        <li class="nav-submenu"><a href="#">Handle Customer Deposit</a>
            <ul>
                <li><a href="#">Search Deposit</a></li>
                <li ><a href="<?php echo CUSTOMER_URL ?>?page=deposit">deposit</a>
                <li><a href="#">NON-RMB Deposit Clear</a></li>
                <li><a href="#">RMB Deposit Clear</a></li>
            </ul>
        </li>
        <li class="nav-submenu"><a href="#">Handle Customer Payment</a>
            <ul>
                <li><a href="#">Search Payment</a></li>
                <li><a href="#">Arrange Payment</a></li>
                <li><a href="#">Process NON-RMB Payment</a></li>
                <li><a href="<?php echo CUSTOMER_URL ?>?page=transaction">Transaction</a></li>
            </ul>
        </li>
        <li class="nav-submenu"><a href="#">Customer History</a>
            <ul>
                <li><a href="#">Account Balance</a></li>
                <li><a href="#">Deposit History</a></li>
                <li><a href="#">Withdraw History</a></li>
                <li><a href="#">Transaction History</a></li>
                <li><a href="#">Account Journal </a></li>
                <li><a href="#">Customer Report </a></li>
            </ul>
        </li>              
    </ul>
</nav>

<a href="#" class="nav-close">Close Menu</a>
 <!--side bar code-->
<script src="<?php echo BASE_URL ?>/sidebar/js/nav.jquery.min.js"></script>
<script>
    $('.nav').nav();
</script>
<!--/side bar code-->

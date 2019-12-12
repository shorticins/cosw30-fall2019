<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <link rel="shortcut icon" href="/img/favicon_ts.png" type="image/png">
    <title>Treat Street</title>
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/carlito" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,700i&display=swap" rel="stylesheet">
    <link href="/styleguide/styles.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b25da52a36.js" crossorigin="anonymous"></script>
</head>


<body>

    
    <header class="site-header container">

        <div class="site-header__top-btn">
            <a href=""><i class="fas fa-dog fa-2x"></i></a>
        </div>
        <div class="site-header__top-btn">
            <a href="/shopping-bag.php"><i class="fas fa-shopping-cart fa-2x"></i></a>
        </div>


        <?php   
            if(!isset($_SESSION['Customer_ID']))
            {
            echo  '<div class="site-header__top-btn">
                    <a href="/login.php"><i class="fas fa-user-circle fa-2x"></i></a>
                </div>';
            } else {

            echo '<div class="site-header__top-btn">
                    <a href="/logout.php"><i class="fas fa-sign-out-alt fa-2x"></i></a>
                </div>';
            }    
        ?>

        <div class="site-header__main-logo">
            <a href="/index.php"><img src="/img/white_background_logo.png" class="site-header__logo" alt="treatstreet logo"></a>
        </div>

        <nav class="row">
            <ul class="site-header__nav">
                <li class="site-header__nav-item">
                    <a href="/index.php" class="btn--sign">doghouse</a>
                </li>
                <li class="site-header__nav-item">
                    <a href="/plp.php?category_id=1" class="btn--sign">barkery blvd</a>
                </li>
                <li class="site-header__nav-item">
                    <a href="/plp.php?category_id=2" class="btn--sign">accessory ave</a>
                </li>
                <li class="site-header__nav-item">
                    <a href="/plp.php?category_id=3" class="btn--sign">rescue road</a>
                </li>
                <li class="site-header__nav-item">
                    <a href="customer_service/contact.php" class="btn--sign">contact us</a>
                </li>
            </ul>
        </nav>

    </header>
<!-- END HEADER -->
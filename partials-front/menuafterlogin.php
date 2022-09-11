<?php include('config/constants.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Food Order System</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="index.php" title="Logo">
                <img src="images/logo.png" alt="RestaurantLogo" class="img-responsive">
                 <h2>Kantipur Restaurant</h2>
                </a>
            </div>
            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="<?php echo SITEURL; ?>hi.php">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>Lcategories.php">Categories</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>Lfoods.php">Foods</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>logout.php">Logout</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->
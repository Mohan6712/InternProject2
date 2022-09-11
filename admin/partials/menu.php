<?php 

    include('../config/constants.php'); 
    include('login-check.php');

?>

<html>
    <head>
        <title>Online Food Order</title>
        <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
      rel="stylesheet"
    />
        <link rel="stylesheet" href="../css/admin.css">
    </head>
    
    <body>
    <div class="container">
      <aside>
        <div class="top">
          <div class="logo">
            <img src="images/logo.png" />
            <h2>Kantipur<span class="danger">Restaurant</span></h2>
          </div>
          <div class="close" id="close-btn">
            <span class="material-icons-sharp">close</span>
          </div>
        </div>
        <div class="sidebar">
          <a href="index.php"  class="active">
            <span class="material-icons-sharp">grid_view</span>
            <h3>Dashboard</h3>
          </a>

          <a href="manage-customer.php">
            <span class="material-icons-sharp">person</span>
            <h3>Customers</h3>
          </a>
          <a href="manage-category.php">
            <span class="material-icons-sharp">menu_book</span>
            <h3>Category</h3>
          </a>

          <a href="manage-food.php">
            <span class="material-icons-sharp">food_bank</span>
            <h3>Food Items</h3>
          </a>
          <a href="manage-order.php">
            <span class="material-icons-sharp">receipt_long</span>
            <h3>Order Section</h3>
          </a>
          <a href="manage-admin.php">
            <span class="material-icons-sharp">admin_panel_settings</span>
            <h3>Manage Admin</h3>
          </a>
          <a href="manage-feedback.php">
            <span class="material-icons-sharp">comment</span>
            <h3>Feedback</h3>
          </a>
          <a href="../logout.php">
            <span class="material-icons-sharp">logout</span>
            <h3>Log out</h3>
          </a>
        </div>
      </aside>
<?php 

    //Include constants.php file here
    include('../config/constants.php');

    // 1. get the ID of Order to be deleted
    $id = $_GET['id'];

    //2. Create SQL Query to Delete Admin
    $sql = "DELETE FROM tbl_order WHERE id=$id";

    //Execute the Query
    $res = mysqli_query($conn, $sql);

    // Check whether the query executed successfully or not
    if($res==true)
    {
        //Query Executed Successully and Order Deleted
        //echo "Order Deleted";
        //Create SEssion Variable to Display Message
        $_SESSION['delete'] = "<div class='success'>Ordered Food Deleted Successfully.</div>";
        //Redirect to Manage Admin Page
        header('location:'.ADMIN_URI.'admin/manage-order.php');
    }
    else
    {
        //Failed to Delete Order
        //echo "Failed to Delete Admin";

        $_SESSION['delete'] = "<div class='error'>Failed to Delete Order. Try Again Later.</div>";
        header('location:'.ADMIN_URI.'admin/manage-order.php');
    }

    //3. Redirect to Manage Order page with message (success/error)

?>
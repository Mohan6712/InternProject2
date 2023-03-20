<?php 

    //Include constants.php file here
    include('../config/constants.php');

    // 1. get the ID of Feedback to be deleted
    $id = $_GET['id'];

    //2. Create SQL Query to Delete feedback
    $sql = "DELETE FROM tbl_feedbacks WHERE id=$id";

    //Execute the Query
    $res = mysqli_query($conn, $sql);

    // Check whether the query executed successfully or not
    if($res==true)
    {
        //Query Executed Successully and FeedBack Deleted
        //echo "Feedback Deleted";
        //Create SEssion Variable to Display Message
        $_SESSION['delete'] = "<div class='success'> Your Choosen Feedback Deleted Successfully.</div>";
        //Redirect to Manage feedback Page
        header('location:'.ADMIN_URI.'admin/manage-feedback.php');
    }
    else
    {
        //Failed to Delete Admin
        //echo "Failed to Delete Admin";

        $_SESSION['delete'] = "<div class='error'>Failed to Delete Feedback. Try Again Later.</div>";
        header('location:'.ADMIN_URI.'admin/manage-feedback.php');
    }

    //3. Redirect to Manage Feedback page with message (success/error)

?>
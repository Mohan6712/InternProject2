<?php
include('partials/menu.php'); 



$server = "localhost";
$user = "root";
$pass = "";
$database = "onlinefoodorder";

$DB = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}
?>

<div class="main-content">
    <div class="wrapper">
        <h1>Manage Customers</h1>

                <br /><br /><br />

                <?php 
                    if(isset($_SESSION['update']))
                    {
                        echo $_SESSION['update'];
                        unset($_SESSION['update']);
                    }
                ?>
                <br><br>

                <table class="tbl-full">
                    <tr>
                        <th width="20%">#</th>
                        <th width="20%">Email</th>
                        <th width="30%">Username</th>
                    </tr>

                    <?php 
                        //Get all the orders from database
                        $sql = "SELECT * FROM users ORDER BY id DESC"; // DIsplay the Latest Order at First
                        //Execute Query
                        $res = mysqli_query($DB, $sql);
                        //Count the Rows
                        $count = mysqli_num_rows($res);

                        $sn = 1; //Create a Serial Number and set its initail value as 1

                        if($count>0)
                        {
                            //Order Available
                            while($row=mysqli_fetch_assoc($res))
                            {
                                //Get all the order details
                                $id = $row['id'];
                                $email = $row['email'];
                                $username = $row['username'];

                                
                                ?>

                                    <tr>
                                        <td><?php echo $sn++; ?> </td>
                                        <td><?php echo $email; ?></td>
                                        <td><?php echo $username; ?></td>
                                       
                                    </tr>

                                <?php

                            }
                        }
                        else
                        {
                            //Order not Available
                            echo "<tr><td colspan='12' class='error'>Orders not Available</td></tr>";
                        }
                    ?>

 
                </table>
    </div>
    
</div>

<?php include('partials/footer.php'); ?>
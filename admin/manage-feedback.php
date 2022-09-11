<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Manage Feedbacks</h1>

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
                        <th width="10%">Sn</th>
                        <th width="30%">Email</th>
                        <th width="40%">Message</th>
                        <th>Actions</th>
                    </tr>

                    <?php 
                        //Get all the orders from database
                        $sql = "SELECT * FROM tbl_feedbacks ORDER BY id DESC"; // DIsplay the Latest Order at First
                        //Execute Query
                        $res = mysqli_query($conn, $sql);
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
                                $message = $row['message'];
                              
                                
                                ?>

                                    <tr>
                                        <td><?php echo $sn++; ?> </td>
                                        <td><?php echo $email; ?></td>
                                        <td><?php echo $message; ?></td>
                                        <td>
                                            <a href="<?php echo ADMIN_URI; ?>admin/delete-feedback.php?id=<?php echo $id; ?>" class="btn-secondary">Delete Feedback</a>
                                        </td>
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
   
   <?php include('partials-front/menu.php'); ?>
    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            
            <form action="<?php echo SITEURL; ?>food-search.php" method="POST">
                <input type="search" name="search" placeholder="Search Foods" required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

    <?php 
        if(isset($_SESSION['order']))
        {
            echo $_SESSION['order'];
            unset($_SESSION['order']);
        }
    ?>

    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Various Food Categories</h2>

            <?php 
                //Create SQL Query to Display CAtegories from Database
                $sql = "SELECT * FROM tbl_category WHERE active='Yes' AND featured='Yes' ORDER BY id DESC LIMIT 3";
                //Execute the Query
                $res = mysqli_query($conn, $sql);
                //Count rows to check whether the category is available or not
                $count = mysqli_num_rows($res);

                if($count>0)
                {
                    //CAtegories Available
                    while($row=mysqli_fetch_assoc($res))
                    {
                        //Get the Values like id, title, image_name
                        $id = $row['id'];
                        $title = $row['title'];
                        $image_name = $row['image_name'];
                        ?>
                        
                        <a href="<?php echo SITEURL; ?>category-foods.php?category_id=<?php echo $id; ?>">
                            <div class="box-3 float-container">
                                <?php 
                                    //Check whether Image is available or not
                                    if($image_name=="")
                                    {
                                        //Display MEssage
                                        echo "<div class='error'>Image not Available</div>";
                                    }
                                    else
                                    {
                                        //Image Available
                                        ?>
                                        <img src="<?php echo SITEURL; ?>images/category/<?php echo $image_name; ?>" alt="Pizza" class="img-responsive img-curve">
                                        <?php
                                    }
                                ?>
                                

                                <h3 class="float-text text-white" ><mark style="background-color:white;"><?php echo $title; ?></mark></h3>
                            </div>
                        </a>

                        <?php
                    }
                }
                else
                {
                    //Categories not Available
                    echo "<div class='error'>Category not Added.</div>";
                }
            ?>


            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->



    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Our Food Menu</h2>

            <?php 
            
            //Getting Foods from Database that are active and featured
            //SQL Query
            $sql2 = "SELECT * FROM tbl_food WHERE active='Yes' AND featured='Yes' LIMIT 6";

            //Execute the Query
            $res2 = mysqli_query($conn, $sql2);

            //Count Rows
            $count2 = mysqli_num_rows($res2);

            //CHeck whether food available or not
            if($count2>0)
            {
                //Food Available
                while($row=mysqli_fetch_assoc($res2))
                {
                    //Get all the values
                    $id = $row['id'];
                    $title = $row['title'];
                    $price = $row['price'];
                    $description = $row['description'];
                    $image_name = $row['image_name'];
                    ?>

                    <div class="food-menu-box">
                        <div class="food-menu-img">
                            <?php 
                                //Check whether image available or not
                                if($image_name=="")
                                {
                                    //Image not Available
                                    echo "<div class='error'>Image not available.</div>";
                                }
                                else
                                {
                                    //Image Available
                                    ?>
                                    <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                                    <?php
                                }
                            ?>
                            
                        </div>

                        <div class="food-menu-desc">
                            <h4><?php echo $title; ?></h4>
                            <p class="food-price">Rs <?php echo $price; ?></p>
                            <p class="food-detail">
                                <?php echo $description; ?>
                            </p>
                            <br>

                            <a href="<?php echo SITEURL; ?>logins.php?food_id=<?php echo $id; ?>" class="btn btn-primary">Order Now</a>
                        </div>
                    </div>

                    <?php
                }
            }
            else
            {
                //Food Not Available 
                echo "<div class='error'>Food not available.</div>";
            }
            
            ?>

            

 

            <div class="clearfix"></div>

            

        </div>



        <p class="text-center">
            <a href="foods.php">See All Foods</a>
        </p>
    </section>


<section id="testim" class="testim">
<!--         <div class="testim-cover"> -->
            <div class="wrap">

                <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
                <span id="left-arrow" class="arrow left fa fa-chevron-left "></span>
                <ul id="testim-dots" class="dots">
                    <li class="dot active"></li><!--
                    --><li class="dot"></li><!--
                    --><li class="dot"></li><!--
                    --><li class="dot"></li><!--
                    --><li class="dot"></li>
                </ul>
                <div id="testim-content" class="cont">
                    
                    <div class="active">
                        <div class="img"><img src="images/su.jpg" alt="sud"></div>
                        <h2>Sudarshan Rai</h2>
                        <p>Awesome Food. Food from some of the finest restaurants in Nepal!</p>                    
                    </div>

                    <div>
                        <div class="img"><img src="images/pra.jpg" alt=""></div>
                        <h2>Prakash Sunuwar</h2>
                        <p>Good Recipes, Nice staff and customer care. A good and quick service. I would be regular customer.</p>                    
                    </div>

                    <div>
                        <div class="img"><img src="images/aayush.jpg" alt=""></div>
                        <h2>Aayush Suryabansi</h2>
                        <p>Excellent Food & in-time delivery of food.</p>                    
                    </div>

                    <div>
                        <div class="img"><img src="images/johnson.jpg" alt=""></div>
                        <h2>Johnson Tamang</h2>
                        <p>The food was incredible. Its taste is great. Love the food. Wanna try more from Kantipur Restaurant.</p>                    
                    </div>

                    <div>
                        <div class="img"><img src="https://i.picsum.photos/id/883/200/300.jpg?hmac=L62LMsIBfvhnxlTirzshbyv6HarwJvd-tSSBcIvbCVw" alt=""></div>
                        <h2>Pawan Silwal </h2>
                        <p>Glad, I ordered from Kantipur Restaurant. The service was very fast. I am impressed.</p>                    
                    </div>

                </div>

            </div>
<!--         </div> -->
    </section>

<script src="https://use.fontawesome.com/1744f3f671.js"></script>


    
    <?php include('partials-front/footer.php'); ?>
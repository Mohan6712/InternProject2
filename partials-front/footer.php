<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Responsive Footer Section</title>
    <link rel="stylesheet" href="css/footstyle.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <footer>
            <div class="main-content">
        <div class="left box">
          <h2>About us</h2>
          <div class="content">
            <p>
              Launched in Kathmandu, Kantipur Restaurant has grown from a home project to one of the largest food aggregators in Kathmandu Valley.
              It has been working in the field of restaurant services since 2005A.D. It is finest eating destination and has been provinding quality 
              of services for a very long period of time.
            </p>
            <div class="social">
              <a href="#"><span class="fab fa-facebook-f"></span></a>
              <a href="#"><span class="fab fa-twitter"></span></a>
              <a href="#"><span class="fab fa-instagram"></span></a>
              <a href="#"><span class="fab fa-youtube"></span></a>
            </div>
          </div>
        </div>

        <div class="center box">
          <h2>Address</h2>
          <div class="content">
            <div class="place">
              <span class="fas fa-map-marker-alt"></span>
              <span class="text">Gaushala, Kathmandu</span>
            </div>
            <div class="phone">
              <span class="fas fa-phone-alt"></span>
              <span class="text">+977 9810394185 , 9841167145 </span>
            </div>
            <div class="email">
              <span class="fas fa-envelope"></span>
              <span class="text">mohanshrestha6712@gmail.com</span>
            </div>
          </div>
        </div>

        <div class="right box">
          <h2>Contact us</h2>
          <div class="content">
            <form method="POST"  action="<?php echo SITEURL;?>feedback.php" >
              <div class="email">
                <div class="text">Email *</div>
                <input type="email" name="email" required placeholder="Email *">
              </div>
              <div class="msg">
                <div class="text">Message *</div>
                <textarea rows="2" name="message" cols="25" required placeholder="Feedback *"></textarea>
              </div>
              <div class="btn">
                <button type="submit">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="bottom">
        <center>
          <span class="credit">Created By Mohan Shrestha | </span>
          <span class="far fa-copyright"></span><span> 2022 All rights reserved.</span>
        </center>
      </div>
    </footer>

    <script src="script/app.js"></script>

  </body>
</html>

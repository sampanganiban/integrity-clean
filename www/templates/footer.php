  </main>
  <!-- Footer -->
  <footer>
    <div class="container text-center">
      <div class="footer-container">
        <div class="footer-div">
          <div class="col-lg-3">
            <h3>Find your way through <em>Integrity Clean</em></h3>
            <ul class="footer-nav">
                <li><a href="index.php?page=about">about us</a></li>
                <li><a href="index.php?page=services">our services</a></li>
                <li><a href="index.php?page=quote">quick quote</a></li>
                <li><a href="index.php?page=testimonials">testimonials</a></li>
                <li><a href="index.php?page=contact">contact us</a></li>
            </ul>
          </div>    
        </div>
        <div class="footer-div">
            <div class="col-lg-6">
                <h3>Copyright &copy; Integrity Clean 2015</h3>
                <div>
                    <img src="./img/footer-icons/security.png">
                    <img src="./img/footer-icons/twenty.png">
                    <img src="./img/footer-icons/hundred.png">
                </div>
            </div>
        </div>
          <?php

            // Display the users username if they are logged it, if not then just display account
            if( isset($_SESSION['username']) ) : ?>
              <h4><a href="index.php?page=account"><?php echo $_SESSION['username']; ?></a></h5>
              <h4><a href="index.php?page=logout">LOGOUT</a></h5>
            <?php else : ?>
                
            <div class="footer-div-with-form">
              <div class="col-lg-3">
                <h3><a href="index.php?page=register">REGISTER AN ACCOUNT</a></h3>
                <h3>OR</h3>
                <h3>Login to your account</h3>
                <form action="index.php?page=<?php echo $_GET['page']; ?>" method="post">

                  <div class="form-group">
                    <input type="text" name="username" id="username" value="<?php echo htmlentities($this->username); ?>" placeholder="username">
                    <?php $this->bootstrapAlert($this->usernameError, 'danger') ?>
                  </div>

                  <div class="form-group">
                    <input type="password" name="password" id="password" placeholder="password">
                    <?php $this->bootstrapAlert($this->passwordError, 'danger') ?>
                  </div>

                  <input type="submit" value="Login" name="login" id="login" class="btn">
                  <?php $this->bootstrapAlert($this->loginError, 'danger') ?>

                </form>
              </div>
            </div>

          <?php endif;
        ?>
      </div>
    </div>
  </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <?php
      if($_GET['page'] == 'contact') : ?>
      <!-- Google Map -->
      <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>
      <script src="js/google-map.js"></script>
    <?php endif; ?>
    <?php
      // If the requested page is the home the header will animate if not then the animated header will turn off and just display the nav bar
      if($_GET['page'] == 'home') : ?>
        <script src="js/grayscale.js"></script>
      <?php endif;
    ?>
    <?php
      // If the requested page was the testimonials the slider will show up
      if($_GET['page'] == 'testimonials') : ?>
        <script src="js/slider.js"></script>
      <?php endif;
    ?>
</body>

</html>
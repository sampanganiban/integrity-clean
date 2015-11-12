   <!-- Welcome Section -->
    <section id="welcome" class="welcome text-center container">
        <div class="row">
        <h1>Register an Account</h1>
        <p>When you register an account with us you can leave your reviews</p>
        <hr>
            <div class="col-lg-6 col-lg-offset-3" id="contact-section">
                <form id="contact-form" method="post" action="index.php?page=register" novalidate>
                    <div class="form-group">
                        <input type="text" value="<?php echo $this->username; ?>" class="form-control" placeholder="Username" name="username">
                        <?php $this->bootstrapAlert($this->usernameError, 'danger') ?>
                    </div>
                    <div class="form-group">
                        <input type="email" value="<?php echo $this->email; ?>" class="form-control" placeholder="Your Email" name="email">
                        <?php $this->bootstrapAlert($this->emailError, 'danger') ?>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Your Password" name="password">
                    </div>
                     <div class="form-group">
                        <input type="password" class="form-control" placeholder="Confirm Your Password" name="confirm-password">
                    </div>
                    <?php $this->bootstrapAlert($this->passwordError, 'danger') ?>
                    <input type="submit" class="btn" name="register" id="register" value="Register Account">   
                </form>
            </div>
        </div>
        <hr>
    </section>
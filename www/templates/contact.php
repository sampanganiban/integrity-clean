   <!-- Welcome Section -->
    <section id="welcome" class="welcome text-center container">
        <div class="row">
        <h1> <img src="./img/logo/logo-no-text.png" alt=""> Contact Us</h1>
        <hr>
            <div class="col-lg-4" id="contact-section">
                <form id="contact-form" method="post" action="index.php?page=contact" novalidate >
                    <div class="form-group">
                        <input type="text" class="form-control" value="<?php echo $this->name; ?>" placeholder="Your Name" name="name">
                        <?php $this->bootstrapAlert( $this->contactNameError ,'danger') ?>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" value="<?php echo $this->email; ?>" placeholder="Your Email" name="email">
                        <?php $this->bootstrapAlert( $this->contactEmailError ,'danger') ?>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control"  placeholder="Your Message" name="message" rows="5"><?php echo $this->message; ?></textarea>
                        <?php $this->bootstrapAlert( $this->contactMessageError ,'danger') ?>
                    </div>
                    <input type="submit" class="btn" name="send-message" id="send-message" value="Send Message"> 
                    <?php $this->bootstrapAlert( $this->contactFail, 'danger') ?>
                    <?php $this->bootstrapAlert( $this->contactSuccess, 'success') ?>  
                </form>
            </div>
            <div class="col-lg-4 col-lg-offset-2">
               <div id="contact-details">
                <h3>Contact Details</h3>
                    <address>
                        Integrity Clean<br>
                        PO Box 10439<br>
                        The Terrace<br>
                        Wellington 6143<br>
                    </address>
                    <address>
                        <strong>Phone: </strong> 04 232 5237<br>
                        <strong>Mobile:</strong> 027 446 8347 or 027 4integrity<br>
                        <strong>Email: </strong>aaron@integrityclean.co.nz                    
                    </address>
               </div> 
            </div>
        </div>
        <hr>
        <h2 class="text-center">Locations</h2>
        <p class="text-center">The marked areas are the places we work</p>
        <hr>
    </section>


    <!-- Map Section -->
    
    <div id="cleaning-location"></div>    
    







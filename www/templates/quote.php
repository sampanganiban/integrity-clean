<!-- Welcome Section -->
    <section id="welcome" class="welcome text-center container">
        <div id="get-quote-form" class="row">
        <h1><img src="./img/logo/logo-no-text.png" alt=""> Get an Online Quote Now!</h1>
        <p></p>
        <hr>
            <div id="quote-image" class="col-lg-6">
                <!-- <img src="img/contact-number.gif" class="img-responsive" alt=""> -->
                <p>This is an online proposal to give you a general idea of the cost of our services. We will need to visit you to confirm this and other details.</p>
            </div>
            <div class="col-lg-6">
            <!-- Make a bit bigger -->
                <h4>To enter the online quotation page, enter your details below</h4>
                <form id="quote-form" method="post" action="index.php?page=quote" novalidate>                
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name" value="<?php echo $this->name; ?>" name="name">
                        <?php $this->bootstrapAlert($this->nameError, 'danger') ?>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Your Email" value="<?php echo $this->email; ?>" name="email">
                        <?php $this->bootstrapAlert($this->emailError, 'danger') ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Company" value="<?php echo $this->company; ?>" name="company">
                        <?php $this->bootstrapAlert($this->companyError, 'danger') ?>
                    </div>
                    <input type="submit" class="btn" name="get-quote" id="get-quote" value="Enter Quote Page">   
                </form>
            </div>
            
        </div>
        <hr>
    </section>

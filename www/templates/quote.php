<!-- Welcome Section -->
    <section id="welcome" class="welcome text-center container">
        <div id="get-quote-form" class="row">
        <h1>Get a Quote</h1>
        <hr>
            <div id="quote-image" class="col-lg-6">
                <img src="img/contact-number.gif" class="img-responsive" alt="">
            </div>
            <div class="col-lg-6">
                <h3>To get your Quote enter your details</h3>
                <form id="quote-form" method="post" action="index.php?page=quote" novalidate>                
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name" name="name">
                        <?php $this->bootstrapAlert($this->nameError, 'danger') ?>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Your Email" name="email">
                        <?php $this->bootstrapAlert($this->emailError, 'danger') ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Company" name="company">
                        <?php $this->bootstrapAlert($this->companyError, 'danger') ?>
                    </div>
                    <input type="submit" class="btn" name="get-quote" id="get-quote" value="Get a Quote">   
                </form>
            </div>
            
        </div>
        <hr>
    </section>

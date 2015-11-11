<!-- Welcome Section -->
    <section id="welcome" class="welcome text-center container">
        <div id="get-quote-form" class="row">
        <h1>Get a Quote</h1>
        <p>Enter your details first before you get your quote</p>
        <hr>
            <div id="quote-image" class="col-lg-6">
                <img src="img/contact-number.gif" class="img-responsive" alt="">
            </div>
            <div class="col-lg-6">
                <form id="quote-form" method="post" action="index.php?page=home" novalidate>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name" name="first-name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Your Email" name="email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Company" name="company">
                    </div>
                    <input type="submit" class="btn" name="get-quote" id="get-quote" value="Get a Quote">   
                </form>
            </div>
            
        </div>
        <hr>
    </section>

   <!-- Welcome Section -->
    <section class="welcome text-center container">
        <div class="row">
        <h1>Contact Us</h1>
        <hr>
            <div class="col-lg-4" id="contact-section">
                <form id="contact-form" method="post" action="contact.html" novalidate >
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name" name="first-name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Your Email" name="email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Company" name="company">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control"  placeholder="Your Message" name="message" rows="5"></textarea>
                    </div>
                    <input type="submit" class="btn" name="send-message" id="send-message" value="Send Message">   
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
                        <strong>Phone: </strong>   04 232 5237<br>
                        <strong>Mobile:</strong> 027 446 8347 or 027 4integrity<br>
                        <strong>Email: </strong>aaron@integrityclean.co.nz                    
                    </address>
               </div> 
            </div>               
        </div>
    </section>


    <!-- Map Section -->
    <div id="cleaning-location" onchange="calcRoute(); "></div>
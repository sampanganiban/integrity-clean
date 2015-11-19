<!-- Welcome Section -->
    <section id="welcome" class="welcome" class="text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h1>Reviews</h1>
                <hr>

                <?php if(isset($_SESSION['username'])) : ?>
				
					<div class="row">

	                	<form action="index.php?page=testimonials" method="post" class="col-lg-8 col-lg-offset-2">

	                		<h3>Leave your Review</h3>
	                		
	                		<div class="form-group">
	                			<input type="text" class="form-control" value="<?php echo $_SESSION['username']; ?>" name="reviewUsername" id="reviewUsername" placeholder="Your Name">
	                			<?php $this->bootstrapAlert( $this->nameError ,'danger') ?>
	                		</div>
	                		<div class="form-group">
	                			<textarea name="reviewMessage" id="reviewMessage" cols="30" rows="5" class="form-control" placeholder="Your Review"><?php echo $this->reviewMessage; ?></textarea>
	                			<?php $this->bootstrapAlert( $this->reviewMessageError ,'danger') ?>
	                		</div>
							<input type="submit" value="Submit Review" class="btn" name="submit-review" id="submit-review">
							<?php $this->bootstrapAlert( $this->submitReviewError ,'danger') ?>
							<?php $this->bootstrapAlert( $this->submitReviewSuccess ,'success') ?>
	                	</form>
					</div>
					<hr>

                <?php endif; ?>

				<h2>Testimonials</h2>
				<p>Have a look at what our clients had to say about our services</p>
				<hr>
                <!-- <div class="wrapper">
					  <p class="next">&gt;</p>
					  <p class="prev">&lt;</p>
					  <article class="slider">
				    	<section style="display: block;"></section>
				    	<section></section>
						    <section></section>
						    <section></section>
						    <section></section>
				  	</article>
				</div> -->

				
            </div>
        </div>
    </section>
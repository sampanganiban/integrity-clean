<!-- Welcome Section -->
    <section id="welcome" class="welcome" class="text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h1>Reviews</h1>
                <hr>
				<?php $this->bootstrapAlert($this->deleteReviewSuccess, 'success') ?>
				<?php $this->bootstrapAlert($this->deleteReviewFail, 'danger') ?>
				<?php
					// Get the results from the database
					$result = $this->model->getAllReviews();
				?>
				<div id="reviews" class="clearfix">
					<!-- This will loop through and display each order made -->
					<?php while($row = $result->fetch_assoc()): ?>
						<div id="review-results">
							<form method="post" action="index.php?page=testimonials">
								<?php if(isset($_SESSION['privilege']) && $_SESSION['privilege'] === 'admin' ) : ?>
									<input type="hidden" value="<?php echo $row['id']; ?>" name="review-id">
	                                <input type="submit" name="delete-review" value="Delete this Review" class="btn">
                            	<?php endif; ?>
								<p id="review-comment"><strong>Review: </strong> <?php echo htmlentities($row['comment']); ?></p>
								<p id="review-name"><strong>Name: </strong><?php echo htmlentities($row['name']); ?></p>
								<small id="time-of-review"><strong>Time Review Made:</strong> <em><?php echo date($row['time_review_added']); ?></em></small>
	                        </form>
						</div>
					<?php endwhile; ?>
				</div>
					
				<hr>
                <?php if(isset($_SESSION['username'])) : ?>
					<div class="row">
	                	<form action="index.php?page=testimonials" method="post" class="col-lg-8 col-lg-offset-2">
	                		<h3>Leave your Review</h3>
	                		<div class="form-group">
	                			<input type="text" class="form-control" value="<?php echo htmlentities($_SESSION['username']); ?>" name="reviewUsername" id="reviewUsername" placeholder="Your Name">
	                			<?php $this->bootstrapAlert( $this->nameError ,'danger') ?>
	                		</div>
	                		<div class="form-group">
	                			<textarea name="reviewMessage" id="reviewMessage" cols="30" rows="5" class="form-control" placeholder="Your Review"><?php echo htmlentities($this->reviewMessage); ?></textarea>
	                			<?php $this->bootstrapAlert( $this->reviewMessageError ,'danger') ?>
	                		</div>
	                		<?php $this->bootstrapAlert( $this->submitReviewError ,'danger') ?>
							<?php $this->bootstrapAlert( $this->submitReviewSuccess ,'success') ?>
							<input type="submit" value="Submit Review" class="btn" name="submit-review" id="submit-review">
	                	</form>
					</div>
					<hr>
                <?php endif; ?>
				<div id="slider-section">
					<h2>Gallery</h2>
					<hr>
	                <div class="wrapper">
	                	<p class="next">&gt;</p>
					    <p class="prev">&lt;</p>	
					    <article class="slider">
					    	<section style="display: block;"></section>
				    		<section></section>
						    <section></section>
						    <section></section>
						    <section></section>
					  	</article>
					</div>
				</div>
            </div>
        </div>
    </section>
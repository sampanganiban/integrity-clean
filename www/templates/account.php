<section id="welcome" class="welcome text-center container">
    <div class="row">
        <h1>Hello <em><?php echo $_SESSION['username']; ?></em></h1>
        <hr>
        <h2>Edit your Password</h2>
        <form action="index.php?page=account" method="post" id="change-password-form">
        	<div class="form-group">
        		<label for="current-password">Current Password: </label>
        		<input type="password" class="form-control" name="current-password" id="current-password">
                <?php $this->bootstrapAlert($this->currentPasswordError, 'danger') ?>
        	</div>
        	<div class="form-group">
        		<label for="new-password">New Password: </label>
        		<input type="password" class="form-control" name="new-password" id="new-password">
                <?php $this->bootstrapAlert($this->newPasswordError, 'danger') ?>
        	</div>
        	<div class="form-group">
        		<label for="confirm-password">Confirm New Password: </label>
        		<input type="password" class="form-control" name="confirm-password" id="confirm-password">
                <?php $this->bootstrapAlert($this->confirmPasswordError, 'danger') ?>
        	</div>
            <?php $this->bootstrapAlert($this->passwordChangeSuccess, 'success') ?>
            <?php $this->bootstrapAlert($this->passwordChangeFail, 'danger') ?>
        	<input type="submit" name="change-password" class="btn" id="change-password" value="Change Password">

        </form>
        <hr>
    </div>
</section>
<div class="container">
<div class="row">
<div class="col-md-12">


			<div class="page-header  text-center">
				<h1><?php echo lang('create_user_heading');?></h1>
                <h4><?php echo lang('create_user_subheading');?></h4>
			</div>
    <?php if (isset($message)){ ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<?= $message; ?>
				</div>
			</div>
		<?php } ?>
    <?php echo form_open("auth/create_user");?>

    <div class="col-md-4 col-lg-offset-4">
    <div class="form-group" >
					<label for="fname">First Name</label>
					<?php echo form_input($first_name);?>
					
    </div>
    <div class="form-group">
					<label for="fname">Last Name</label>
					<?php echo form_input($last_name);?>
					
    </div>
    
     <?php
      if($identity_column!=='email') {
          echo '<div class="form-group">';
          echo '<label for="fname">First Name</label>';
          echo form_error('identity');
          echo form_input($identity);
          echo '<p class="help-block">At least 4 characters, letters or numbers only</p></div>';
      }
      ?>
    <!--
    <div class="form-group">
					<label for="fname">Company</label>
					<?php echo form_input($company);?>
					
    </div> -->
    <div class="form-group">
					<label for="fname">Email (User Name)</label>
					<?php echo form_input($email);?>
					
    </div>
    <!--
    <div class="form-group">
					<label for="fname">Phone No.</label>
					<?php echo form_input($phone);?>
					
					
    </div>-->
    <div class="form-group">
					<label for="fname">Password</label>
					<?php echo form_input($password);?>
					
    </div>
    <div class="form-group">
					<label for="fname">Confirm Password</label>
					<?php echo form_input($password_confirm);?>
					
    </div>
   
    <div class="form-group">
					<input type="submit" class="btn btn-default" value="Create a User">
				</div>
				</div>
			</form>
			
		</div>
	</div><!-- .row -->
</div><!-- .container -->
    
    
  
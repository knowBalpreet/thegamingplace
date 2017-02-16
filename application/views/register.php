<?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
<form method="POST" action="<?php echo base_url();?>users/register">
<div class="form-group">
  <label>First Name*</label>
  <input type="text" name="first_name" class="form-control" placeholder="Enter your first Name">
  <label>Last Name*</label>
  <input type="text" name="last_name" class="form-control" placeholder="Enter your last Name">
  <label>E-mail Address*</label>
  <input type="email" name="email" class="form-control" placeholder="Enter your E-mail Address">
  <label>Choose Username</label>
  <input type="text" name="username" class="form-control" placeholder="Create a  Username">
  <label>Password*</label>
  <input type="password" name="password" class="form-control" placeholder="Enter a Password">
  <label>Confirm Password*</label>
  <input type="password" name="password2" class="form-control" placeholder="Enter Password again">
</div>

<button name="submit" type="submit" class="btn btn-primary">Register</button>

</form>
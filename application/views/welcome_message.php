<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="<?php echo base_url('vendor/twbs/bootstrap/dist/css/bootstrap.css')?>">
	<title>Document</title>
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
			<h1>Validations</h1>

					<?php echo form_open('welcome/sended');?>

				<?php if(form_error('username')): ?>
					<div class="form-group has-error has-feedback">
				<?php else: ?>
					<div class="form-group">
				<?php endif; ?>
						<label for="username">Username</label>
						<input aria-describeby="helpmsgusername" type="text" id="username" name="username" class="form-control" placeholder="Type your username">
						<span class="help-block" id="helpmsgusername">
							<?php echo form_error('username');?>
						</span>
						
					</div>

				<?php if(form_error('password')): ?>
					<div class="form-group has-error">
				<?php else: ?>
					<div class="form-group">
				<?php endif; ?>
						<label for="password">Password</label>
						<input aria-describeby="helpmsgpassword" type="password" id="password" name="password" class="form-control" placeholder="Type your password">
						<span class="help-block" id="helpmsgpassword">
							<?php echo form_error('password');?>
						</span>
					</div>

				<?php if(form_error('name')): ?>
					<div class="form-group has-error">
				<?php else: ?>
					<div class="form-group">
				<?php endif; ?>
						<label for="name">Full Name</label>
						<input aria-describeby="helpmsgname" type="text" id="name" name="name" class="form-control" placeholder="Type your name">
						<span class="help-block" id="helpmsgname">
							<?php echo form_error('name');?>
						</span>
					</div>

				<?php if(form_error('email')): ?>
					<div class="form-group has-error">
				<?php else: ?>
					<div class="form-group">
				<?php endif; ?>
						<label for="email">E-mail</label>
						<input aria-describeby="helpmsgemail" type="email" id="email" name="email" class="form-control" placeholder="Type your email">
						<span class="help-block" id="helpmsgemail">
							<?php echo form_error('email');?>
						</span>
					</div>

					<button class="btn btn-default" type="submit">send</button>
				</form>
			</div>
		</div>
	</div>



<script src="<?php echo base_url('vendor/components/jquery/jquery.js')?>"></script>
<script src="<?php echo base_url('vendor/twbs/bootstrap/dist/js/bootstrap.js')?>"></script>	
</body>
</html>
<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
	<title>Simple Login Form :: w3layouts</title>
	<link rel="stylesheet" href="<?=base_url();?>assets/css/style.css">
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Lambent Login Form Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</head>
<body>
	<h1>Simple Login Form | @idindrakusuma</h1>	
	<div class="main-agileinfo">
		<?php 
			$info = $this->session->flashdata('info');
			//
			if (isset($info)) {
				?>
				<h2> Username & Password Salah!</h2>
			
			<?php 
			}
			//
			else{
				?>
					<h2>Login Now</h2>
				<?php
			}
		?>
		<form action="<?=base_url();?>" method="post">
			<input type="text" name="username" class="name" placeholder="Usename" required="">
			<input type="password" name="password" class="password" placeholder="Password" required="">
			<ul>
				<li>
					<input type="checkbox" id="brand1" value="">
					<label for="brand1"><span></span>Remember me</label>
				</li>
			</ul>
            <a href="#">Forgot Password?</a><br>
			<div class="clear"></div>
			<input type="submit" value="login" name="login">
		</form>
	</div>
	<div class="footer-w3l">
		<p class="agile"> &copy; 2016 Lambent Login Form . All Rights Reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
	</div>
</body>
</html>
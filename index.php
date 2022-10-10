<!DOCTYPE html>
<html>
<head>
	<title>Verification Code Portal</title>
	<!-- Site favicon -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700" rel="stylesheet">
	<!-- Icon Font -->
	<link rel="stylesheet" href="fonts/ionicons/css/ionicons.css">
	<!-- Text Font -->
	<link rel="stylesheet" href="fonts/font.css">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Normal style CSS -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Normal media CSS -->
	<link rel="stylesheet" href="css/media.css">
</head>
<body>

	<!-- Header start -->
	<div class="header-wrap">
		<div class="clearfix">
			<div class="logo">
				<!--<a </a>-->
			</div>
		</div>
	</div>
	<!-- Header end -->
	<main class="cd-main">
		<section class="cd-section index visible ">
			<div class="cd-content style1">
				<div class="login-box d-md-flex align-items-center">
					<h1 class="title">Welcome,</h1>
					<h3 class="subtitle">To get your verification code, enter your <br>Last Name and Student Number <br>(if you're a registered EMU student)</h3>
					<div class="login-form-box">
						<div class="login-form-slider">
							<!-- login slide start -->
							<div class="login-slide slide login-style1">
							<form action="login.php" method='post'>
        						<?php if(isset($_GET['error'])) { ?>
            						<p class='error'> <?php echo $_GET['error']; ?> </p>

        						<?php } ?>
        						<label> Last Name </label><br>
       							<input type='text' name='uname' placeholder='Surname' style="text-transform:uppercase"><br>
								<label> Student Number </label><br>
								<input type='password' name='password' placeholder='eg: 215123987'><br>
								<button type='submit'>Login</button>
							</form>
							</div>
							<!-- login slide end -->
							<!-- signup slide start -->
							<div class="signup-slide slide login-style1">
								<div class="d-flex height-100-percentage">
									<div class="align-self-center width-100-percentage">
										<form>
											<div class="form-group">
												<label class="label">Name</label>
												<input type="text" class="form-control">
											</div>
											<div class="form-group">
												<label class="label">Email</label>
												<input type="email" class="form-control">
											</div>
											<div class="form-group">
												<label class="label">Password</label>
												<input type="password" class="form-control">
											</div>
											<div class="form-group">
												<label class="label">Confirm Password</label>
												<input type="password" class="form-control">
											</div>
											<div class="form-group padding-top-15px">
												<input type="submit" class="submit" value="Sign Up">
											</div>
										</form>
										<div class="sign-up-txt">
											if you have an account? <a href="javascript:;" class="login-click">login</a>
										</div>
									</div>
								</div>
							</div>
							<!-- signup slide end -->
							<!-- forgot password slide start -->
							<div class="forgot-password-slide slide login-style1">
								<div class="d-flex height-100-percentage">
									<div class="align-self-center width-100-percentage">
										<form>
											<div class="form-group">
												<label class="label">Enter your email address to reset your password</label>
												<input type="email" class="form-control">
											</div>
											<div class="form-group">
												<input type="submit" class="submit" value="Submit">
											</div>
										</form>
										<div class="sign-up-txt">
											if you remember your password? <a href="javascript:;" class="login-click">login</a>
										</div>
									</div>
								</div>
							</div>
							<!-- forgot password slide end -->
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
	<div id="cd-loading-bar" data-scale="1"></div>
	<!-- JS File -->
	<script src="js/modernizr.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script src="js/velocity.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</body>
</html>

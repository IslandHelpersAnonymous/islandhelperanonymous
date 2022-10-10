<?php
session_start();

if(isset($_SESSION['VCode']) && isset($_SESSION['user_name'])) {
    ?>
    <!DOCTYPE html.
    <html>
    <head>
        <title>You Login Template</title>
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
    <main class="cd-main">
		<section class="cd-section index visible ">
			<div class="cd-content style1">
				<div class="login-box d-md-flex align-items-center">
					<h1 class="title">Good Morning</h1>
					<h3 class="subtitle">Have a great journey ahead!</h3>
					<div class="login-form-box">
						<div class="login-form-slider">
                            <div class="login-slide slide login-style1">
								<form>
                                    <h1> Your personal Reference Number is: <?php echo $_SESSION['VCode']; ?></h1>
                                    <a href='logout.php'>Logout</a>
                                </form>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</section>
	</main>
    </body>
    </html>
    <?php
}
else {
    header("Location: index.php");
    exit();
}
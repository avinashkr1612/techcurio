<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "techcurio";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
$email = $_POST['email'];
$query = "SELECT `id`, `name`, `email`, `year`, `college`, `class`, `phoneNo`, `password`, `paymentInfo` FROM `techcurio_tb` WHERE email = '$email'";
$result = mysqli_query($conn, $query);
$row = $result->fetch_assoc();
$name = $row['name'];
$year = $row['year'];
$college = $row['college'];
$class = $row['class'];
$phoneNo = $row['phoneNo'];
$paymentInfo = $row['paymentInfo'];
?>


<html lang="en">
<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="css/bulma.css">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<link rel="stylesheet" href="css/master.css">
	<link rel="stylesheet" href="css/team.css">
	 <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
	<link rel="stylesheet" href="css/main.css">
	<!-- <meta http-equiv="refresh" content="3"> -->
	<?php
		if ($paymentInfo == 2) {
			echo '<style> #paytm{ display:none;} .header .content{background: url(img/294.jpg);background-size:cover;  </style>';
		}
	?>
</head>
<body>
	<div id="perspective" >
		<div id="container" class="p-container">
			<div class="header">

				<div class="content">
					<div class="container">
						<div class="hero">
							<div class="hero-body" style="padding:0px;">
								<h1 class="title is-1 has-text-centered" style="font-family:Brush Script MT;color:#fff;">Register</h1>
								<div class="dark-bg hero reg-success">
									<div class="hero-body" style="padding-right:0px;">
										<div class="columns is-centered">
											<div class="column hero is-dark" style="padding:50px 10px;max-width:400px;">
												<div class="is-centered" style="font-family:Comfortaa">
													<p style="font-size:15px;"> <?php echo "<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name :</b> $name"; ?></p>
													<p style="font-size:15px;"> <?php echo "<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email :</b> $email"; ?></p>
													<p style="font-size:15px;"> <?php echo "<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Phone No :</b> $phoneNo"; ?></p>
													<p style="font-size:15px;"> <?php echo "<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Course :</b> $class"; ?></p>
													<p style="font-size:15px;"> <?php echo "<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Year :</b> $year"; ?></p>
													<p style="font-size:15px;"> <?php echo "<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;College :</b> $college"; ?></p>
													<?php
														echo "<p><b>Payment Info :</b> $paymentInfo </p>";
													?>
													<?php
														if ($paymentInfo == 0) {
															echo '<h1 class="subtitle is-6 has-text-danger">You have not paid the participation fees, you can pay it anytime by scanning this QR code by your registered mobile number and submitting the transaction id to complete your participation process.</h1>';
														}
														elseif ($paymentInfo == 1) {
																echo '<h1 class="subtitle is-6 has-text-warning">Your Payment is under process we will verify your transaction satutus within 24 hours of your payment.</h1>';
														}
														elseif ($paymentInfo == 2) {
																echo '<h1 class="subtitle is-6 has-text-success">Your payment is verified and you have successfully completed your registration process.</h1>';
														}
														echo '<br><h1 class="subtitle is-6 has-text-info">for any query regarding payment you can contact 9801975033.</h1>';
													?>
												</div>
											</div>
											<div class="column hero is-white is-narrow" id="paytm" style="padding:50px;">
												<form action="tranasction.php" method="post">
													<figure class="is-centered" style="width:200px">
														<img src="img/qrcode.jpeg" style="width:200px;">
													</figure>
													<div class="has-text-centered" style="font-family:Comfortaa">
														<span> <b> 9801975033  </b> </span><br>
														<span> <b>Raushan Jaiswal</b></span>
													</div>
														<br>

#
#
#													<input type="hidden" value="#change here">
#													
#													
													
													
													<div class="field">
														<div class="control">
															<input class="input is-info" type="text" name="transaction" placeholder="Enter Transaction ID">
														</div>
													</div>
													<input type="submit" name="submit" class="button is-dark" value="SUBMIT">
												</form>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>

			</div><!-- header -->
		</div><!-- /container -->
		<nav id="outer-nav" class="outer-nav">
			<a href="index.html" class="icon-home">Home</a>
			<a href="events.html" class="icon-news">Events</a>
			<!-- <a href="workshop.html" class="icon-lock">Workshop</a> -->
			<!-- <a href="gallery.html" class="icon-image">Gallery</a> -->
			<a href="team.html" class="icon-lock">Team</a>
			<a href="schedule.html" class="icon-lock">Schedule</a>
			<a href="contactUs.html" class="icon-mail">Contact Us</a>
			<!-- <a href="hospitality.html" class="icon-mail">Hospitality</a> -->
		</nav>
	</div>
	<button type="button" id="menu-toggle" class="button is-warning is-large" name="button">&#9776;</button>
	<!-- <script src="js/TweenLite.min.js"></script> -->
	<!-- <script src="js/EasePack.min.js"></script> -->
	<!-- <script src="js/demo-1.js"></script> -->

	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<script src="js/jquery.hover3d.js" ></script>
	<script src="js/JavaScript_Main.js" ></script>

	<script type="text/javascript">
	$(".scrolldown").click(function() {
		$('html,body').animate({
			scrollTop: $(".about").offset().top},
			'slow');
		});

		$("#menu-toggle").click(function() {
			$('#perspective').addClass("perspective");
			$('.p-container').addClass("moveleft");
			$('#menu-toggle').addClass("hidden");
			$('#outer-nav').addClass("animate");
		});

		$("#container").click(function() {
			$('#container').removeClass("moveleft");
			$('#menu-toggle').removeClass("hidden");
			$('#outer-nav').removeClass("animate");
			setTimeout(function() {
				$('#perspective').delay("slow").removeClass("perspective");
			}, 400);
		});
		</script>
	</body>
	</html>

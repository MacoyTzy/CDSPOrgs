<?php 

  session_start();

   if (isset($_SESSION['Access']) && $_SESSION['Access'] == "BSIT") {
  	echo "";
  } else{
  		echo header("location:profile.php");
  }

  require 'connect.php';
  require 'functions.php';

  if(isset($_SESSION['username'], $_SESSION['password'])) {

?>
<!DOCTYPE HTML>
<html>

	<head>
		<title>Choose Org</title>
		<link rel="shortcut icon" type="image/png" href="assets/favicons/cdsp.png">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="main.css" />	
		<link rel="icon" href="images/cdsp.png">
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	
	<body>
		
		<!-- Header -->

			<section id="header">
				<header>

					<span  class="image avatar"><img src="images/cdsp.png" alt="" /></span>
					<h1>Choose an organization</h1>
				</header>
				<nav id="nav">
					<ul>
						<li><a href="#one" class="active">ITSO</a></li>
						<li><a href="#two">SSC</a></li>
						<li><a href="#three">TEATRO BATINGAW</a></li>
						<li><a href="index.php">BACK</a></li>
					</ul>
				</nav>
				
				</footer>
			</section>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">

						<!-- One -->
							<section id="one">
								<div class="container">
									<header class="major">
										<h2>CDSP ITSO</h2>
										
									<p style="text-align:justify">An organization for BSIT students in Colegio de San Pedro, it focuses on its programs especially provides students with opportunities to discuss various IT issues outside the classroom in order to create a greater appreciation for and understanding of technology.  </br><a href="itso.php" target="_blank">View more...</a></p>
								</div>
							</section>

						<!-- Two -->
							<section id="two">
								<div class="container">
									<h3>CDSP SSC (Supreme Student Council)</h3>
									<p style="text-align:justify">The Student Council exists to represent the voice of the students, promote their ideas and advocate their views and interests. It is a fundamentally democratic and non-political institution, with all students given equal opportunity to participate. Its role includes helping the school to serve its students as effectively as possible and making students aware of wider issues, in addition to playing an important role in establishing links with the community.</br><a href="ssc_IT.php" target="_blank">View more...</a></p>
									
								</div>
							</section>

						<!-- Three -->
							<section id="three">
								<div class="container">
									<h3>Teatro Batingaw</h3>
									<p>The Teatro Batingaw is responsible for perfomances in various school programs promoting the school particularly in theater arts. It takes charge of all college activities such as Foundation Week, Buwan ng Wika, and Christmas Celebration. </br><a href="teatro.php" target="_blank">View more...</a></p>
									</div>
							</section>
					</div>

					<!-- Four -->


				<!-- Footer -->
					<section id="footer">
						<div class="container">
							<ul class="copyright">
								<li>&copy; Test</li><li>Design: <a href="http://palusot.com" target="_blank">hello mictest</a></li>
							</ul>
						</div>
					</section>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollzer.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>

<?php


  }  else {
    header("location:index.php");
    exit;
  }

  unset($_SESSION['prompt']);
  mysqli_close($con);

?>
<?php 

  session_start();
 

  require 'connect.php';
  require 'functions.php';

      
  
  if(isset($_SESSION['username'], $_SESSION['password'])) {
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>CDSP SSC</title>
		<link rel="shortcut icon" type="image/png" href="assets/favicons/ssc.png">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="kawa/assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>
		<input type="hidden" name="studentno" value="<?php echo "".$_SESSION['username'];?>" placeholder="student number">
		<!-- Header -->
		
			<section id="header">
				<header>
					<span class="image avatar"><img src="images/ssc.png" alt="" /></span>
					<h1 id="logo"><a href="#">CDSP Supreme Student Council</a></h1>
					<p>The highest governing student body in<br />
					Colegio de San Pedro</p>
				</header>
				<nav id="nav">
					<ul>
						<li><a href="#one" class="active">About</a></li>
						<li><a href="#three">Current Officers</a></li>
						<li><a href="votingformssc_oa.php" >SSC Election</a></li>
					</ul>
				</nav>
				<footer>
					<ul class="icons">
						
						<li><a href="https://www.facebook.com/cdspsupremestudentcouncil/" target="_blank" class="icon fa-facebook"><span class="label">Facebook</span></a></li>

					</ul>
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
										<h2>About CDSP SSC</h2>
										
									<p style="text-align:justify">The CDSP Supreme Student Council is the highest duly constituted student government of the college department which initiates student activities geared towards the holistic development of its student members. As the highest student government in CDSP, the Supreme Student Council is at the forefront of promoting and advancing student rights and welfare. It has slated a range of programs, initiatives and advocacies that do not merely redound to the welfare of the Students of CDSP, but would also impact to the overall well-being of the community and the society in general.</p>
								</div>
							</section>

						<!-- Three -->
							<section id="three">
								<div class="container">
									<h3>Current SSC Officers</h3>
									<p>This is our current CDSP SSC officers for 2020-2021</p>
									<div class="features">
										<article>
											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>
											<div class="inner">
												<h4>President</h4>
												<p>Ms. Donna Jestre</p>
											</div>
										</article>
										<article>
											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>
											<div class="inner">
												<h4>Vice-President</h4>
												<p>Mr. Carlo John Barrios</p>
											</div>
										</article>
										<article>
											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>
											<div class="inner">
												<h4>Secretary</h4>
												<p>Ms. Julie Ann Atienza</p>
											</div>
										</article>
										<article>
											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>
											<div class="inner">
												<h4>Treasurer</h4>
												<p>Ms. Kimberly De Asis</p>
											</div>
										</article>
										<article>
											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>
											<div class="inner">
												<h4>Public Relation Officer</h4>
												<p>Ms. Margie Cama</p>
											</div>
										</article>
										<article>
											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>
											<div class="inner">
												<h4>Sgt. at Arms	</h4>
												<p>Mr. Joshua Custodio</p>
											</div>
										</article>
										<article>
											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>
											<div class="inner">
												<h4>BSOA Representative</h4>
												<p>Ms. Ericka Cayabyab</p>
											</div>
										</article>
										<article>
											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>
											<div class="inner">
												<h4>BSA Representative</h4>
												<p>Ms. Mhay Ann Recomendable</p>
											</div>
										</article>
										<article>
											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>
											<div class="inner">
												<h4>BSIT Representative</h4>
												<p>Mr. John Lester Doctor</p>
											</div>
										</article>

										
												<p></p>
											</div>
										</article>
									</div>
								</div>
							</section>
					</div>

					<!-- Four -->
					<section id="four">
								<div class="container">
									<header class="major">
										<h2>SSC Election</h2>
										<p>
										<a href="votingformssc_oa.php">SSC Election</a>
										</p>
									</header>

				<!-- Footer -->
					<section id="footer">
						<div class="container">
							<ul class="copyright">
								<li>&copy; Test</li><li>Design: <a href="http://palusot.com">hello mictest</a></li>
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


  } else {
    header("location:index.php");
    exit;
  }

  unset($_SESSION['prompt']);
  mysqli_close($con);

?>
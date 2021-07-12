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

		<title>CDSP ITSO</title>

		<link rel="shortcut icon" type="image/png" href="assets/favicons/itso.png">

		<meta charset="utf-8" />

		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->

		<link rel="stylesheet" href="kawa/assets/css/main.css" />

		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->

	</head>

	<body>



		<!-- Header -->

			<section id="header">

				<header>

					<span class="image avatar"><img src="images/itso.jpg" alt="" /></span>

					<h1 id="logo"><a href="#">CDSP Information Technology Society</a></h1>

					<p>An Organization for BSIT students in<br />

					Colegio de San Pedro</p>

				</header>

				<nav id="nav">

					<ul>

						<li><a href="#one" class="active">About</a></li>

						<li><a href="#three">Current Officers</a></li>

						<li><a href="votingformitso.php">ITSO Election</a></li>

					</ul>

				</nav>

				<footer>

					<ul class="icons">

						

						<li><a href="https://www.facebook.com/ITSO.CDSP" target="_blank" class="icon fa-facebook"><span class="label">Facebook</span></a></li>



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

										<h2>About CDSP ITSO</h2>

										

									<p style="text-align:justify">An organization for BSIT students in Colegio de San Pedro, it focuses on its programs especially provides students with opportunities to discuss various IT issues outside the classroom in order to create a greater appreciation for and understanding of technology.</p>

								</div>

							</section>



						<!-- Three -->

							<section id="three">

								<div class="container">

									<h3>Current ITSO Officers</h3>

									<p>This is our current CDSP ITSO officers for 2020-2021</p>

									<div class="features">

										<article>

											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>

											<div class="inner">

												<h4>President</h4>

												<p>Mr. Harvey Tolosa</p>

											</div>

										</article>

										<article>

											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>

											<div class="inner">

												<h4>Vice-President for creatives</h4>

												<p>Mr. Christian Domins</p>

											</div>

										</article>

										<article>

											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>

											<div class="inner">

												<h4>Vice-President for academics</h4>

												<p>Ms. Mary Desiree Mendoza</p>

											</div>

										</article>

										<article>

											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>

											<div class="inner">

												<h4>Secretary</h4>

												<p>Ms. Melrose Almero</p>

											</div>

										</article>

										<article>

											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>

											<div class="inner">

												<h4>Finance</h4>

												<p>Ms. Marisol Parientes</p>

											</div>

										</article>

										<article>

											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>

											<div class="inner">

												<h4>Auditor</h4>

												<p>Ms. Spring Jane Ogayon</p>

											</div>

										</article>

										<article>

											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>

											<div class="inner">

												<h4>Public Relation Officer</h4>

												<p>Mr. Joshua Custodio</p>

											</div>

										</article>

										<article>

											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>

											<div class="inner">

												<h4>4th Year Representative</h4>

												<p>Ms. Lyn Naval Española</p>

											</div>

										</article>

										<article>

											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>

											<div class="inner">

												<h4>3rd Year Representative</h4>

												<p>Ms. Richlyn Odencio</p>

											</div>

										</article>

										<article>

											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>

											<div class="inner">

												<h4>2nd Year Representative</h4>

												<p>Ms. Joliena Cuevas</p>

											</div>

										</article>

										<article>

											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>

											<div class="inner">

												<h4>1st Year Representative</h4>

												<p>Mr. Rhedz Buban</p>

											</div>

										</article>

										<article>

											<div class="inner">

												<h2 style="text-align:right">ITSO Creatives</h2>

											</div>

										</article>

										<article>

											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>

											<div class="inner">

												<h4>Graphic Designer</h4>

												<p>Mr. John Carlo Almuete</p>

											</div>

										</article>

										<article>

											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>

											<div class="inner">

												<h4>Event's Videographer</h4>

												<p>Mr. Steve Valdez</p>

											</div>

										</article>

										<article>

											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>

											<div class="inner">

												<h4>Director for Photography</h4>

												<p>Mr. Ron Ruaya</p>

											</div>

										</article>

										<article>

											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>

											<div class="inner">

												<h4>Video Editor</h4>

												<p>Mr. Ranz Jairo Flores</p>

											</div>

										</article>

										<article>

												<div class="inner">

												<h2 style="text-align:right">ITSO Academics</h2>

											</div>

										</article>

										<article>

											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>

											<div class="inner">

												<h4>Director for Academics</h4>

												<p>Mr. John Lester Doctor</p>

											</div>

										</article>

										<article>

											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>

											<div class="inner">

												<h4>Asst. Director for Academics</h4>

												<p>Mr. Carlo Barrios</p>

											</div>

										</article>

										<article>

											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>

											<div class="inner">

												<h4>System Analyst</h4>

												<p>Ms. Hannah Malapitan	</p>

											</div>

										</article>

										<article>

											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>

											<div class="inner">

												<h4>Project Manager</h4>

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
										<a href="votingformitso.php">ITSO Election</a>
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





  }  else {

    header("location:index.php");

    exit;

  }



  unset($_SESSION['prompt']);

  mysqli_close($con);



?>
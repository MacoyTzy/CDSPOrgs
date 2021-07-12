<?php 



session_start();



 if (isset($_SESSION['Access']) && $_SESSION['Access'] == "ELEM") {

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
		<title>CDSP SPG</title>
		<link rel="shortcut icon" type="image/png" href="assets/favicons/spg.png">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<section id="header">
				<header>
					<span class="image avatar"><img src="images/spg.jpg" alt="" /></span>
					<h1 id="logo"><a href="#">CDSP Supreme Pupil Government</a></h1>
					<p>The highest governing student body for elementary in<br />
					Colegio de San Pedro</p>
				</header>
				<nav id="nav">
					<ul>
						<li><a href="#one" class="active">About</a></li>
						<li><a href="#three">Current Officers</a></li>
						<li><a href="votingformspg.php">SPG Election</a></li>
					</ul>
				</nav>
				<footer>
					<ul class="icons">
						
						<li><a href="" target="_blank" class="icon fa-facebook"><span class="label">Facebook</span></a></li>

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
										<h2>About CDSP SPG</h2>
										
									<p style="text-align:justify">The CDSP Supreme Pupil Government is the highest duly constituted student government of the elementary department which initiates student activities geared towards the holistic development of its student members. As the highest student government in CDSP, the Supreme Pupil Government is at the forefront of promoting and advancing student rights and welfare. It has slated a range of programs, initiatives and advocacies that do not merely redound to the welfare of the Students of CDSP, but would also impact to the overall well-being of the community and the society in general.</p>
								</div>
							</section>

						<!-- Three -->
							<section id="three">
								<div class="container">
									<h3>Current SPG Officers</h3>
									<p>This is our current CDSP SSG officers for 2020-2021</p>
									<div class="features">
										<article>
											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>
											<div class="inner">
												<h4>President</h4>
												<p>Mr. Chales Vincent Cabarles</p>
											</div>
										</article>
										<article>
											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>
											<div class="inner">
												<h4>Vice-President</h4>
												<p>Mr. Sean Rafael Mykell Panzo</p>
											</div>
										</article>
										<article>
											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>
											<div class="inner">
												<h4>Secretary</h4>
												<p>Ms. Ma. Cassandra Samson</p>
											</div>
										</article>
										<article>
											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>
											<div class="inner">
												<h4>Treasurer</h4>
												<p>Ms. Nelisa Mae Lazona</p>
											</div>
										</article>
										<article>
											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>
											<div class="inner">
												<h4>Auditor</h4>
												<p>Ms. Kimmy Mariel Pascua</p>
											</div>
										</article>
										<article>
											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>
											<div class="inner">
												<h4>Public Relation Officer</h4>
												<p>Ms. Wiljo Frances Liwanag</p>
											</div>
										</article>
										<article>
											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>
											<div class="inner">
												<h4>Sgt. at Arms	</h4>
												<p>Mr. Prince Dornier Recalde</p>
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
										<h2>Student Pupil Governement Election</h2>
										<p>
										<a href="votingformspg.php">SPG Election</a>
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
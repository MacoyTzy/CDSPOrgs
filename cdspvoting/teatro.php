<?php 

  session_start();
 

  require 'connect.php';
  require 'functions.php';

      
  
  if(isset($_SESSION['username'], $_SESSION['password'])) {
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>CDSP Teatro Batingaw</title>
		<link rel="shortcut icon" type="image/png" href="assets/favicons/teatro.png">
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
					<span class="image avatar"><img src="images/teatro.jpg" alt="" /></span>
					<h1 id="logo"><a href="#">CDSP Teatro Batingaw</a></h1>
					<p>The theater organization in<br />
					Colegio de San Pedro.</p>
				</header>
				<nav id="nav">
					<ul>
						<li><a href="#one" class="active">About</a></li>
						<li><a href="#three">Current Officers</a></li>
						<li><a href="votingformteatro.php">Teatro Batingaw Election</a></li>
					</ul>
				</nav>
				<footer>
					<ul class="icons">
						
						<li><a href="https://www.facebook.com/CDSP-Teatro-Batingaw-147775985254779" target="_blank" class="icon fa-facebook"><span class="label">Facebook</span></a></li>

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
										<h2>About CDSP Teatro Batingaw</h2>
										
									<p style="text-align:justify">The Teatro Batingaw is responsible for perfomances in various school programs promoting the school particularly in theater arts. It takes charge of all college activities such as Foundation Week, Buwan ng Wika, and Christmas Celebration</p>
								</div>
							</section>
							

						<!-- Three -->
							<section id="three">
								<div class="container">
									<h3>Current Teatro Batingaw Officers</h3>
									<p>This is our current CDSP Teatro Batingaw officers</p>
									<div class="features">
										<article>
											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>
											<div class="inner">
												<h4>President</h4>
												<p>Ms. Krestyl Espenocilla</p>
											</div>
										</article>
										<article>
											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>
											<div class="inner">
												<h4>Vice-President</h4>
												<p>Ms. Maria Fe Perez</p>
											</div>
										</article>
										<article>
											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>
											<div class="inner">
												<h4>Secretary</h4>
												<p>Ms. Christine Joy Maño</p>
											</div>
										</article>
										<article>
											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>
											<div class="inner">
												<h4>Treasurer</h4>
												<p>Ms. Mary Joy Panday</p>
											</div>
										</article>
										<article>
											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>
											<div class="inner">
												<h4>Auditor</h4>
												<p>Mr. Danilo Sta. Maria</p>
											</div>
										</article>
										<article>
											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>
											<div class="inner">
												<h4>Pro Internal	</h4>
												<p>Mr. Jonathan Jara</p>
											</div>
										</article>
										<article>
											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>
											<div class="inner">
												<h4>Pro External</h4>
												<p>Mr. Sergie Ambas</p>
											</div>
										</article>
										<article>
											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>
											<div class="inner">
												<h4>Business Manager</h4>
												<p>Ms. Lalynne Ponaya</p>
											</div>
										</article>
										<article>
											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>
											<div class="inner">
												<h4>Sgt. at Arms</h4>
												<p>Ms. Karen Lindio</p>
											</div>
										</article>
										<article>
											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>
											<div class="inner">
												<h4>Sgt. at Arms</h4>
												<p>Ms. Steve Ronald Valdez</p>
											</div>
										</article>
										<article>
											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>
											<div class="inner">
												<h4>Sgt. at Arms</h4>
												<p>Ms. Margie Cama</p>
											</div>
										</article>
										<article>
											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>
											<div class="inner">
												<h4>Sgt. at Arms</h4>
												<p>Ms. Lorraine Sabroso</p>
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
										<h2>Teatro Election</h2>
										<p>
										<a href="votingformteatro.php">Teatro Batingaw Election</a>
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
<?php 



  session_start();



   if (isset($_SESSION['Access']) && $_SESSION['Access'] == "BSOA") {

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
		<title>CDSP OPS</title>
		<link rel="shortcut icon" type="image/png" href="assets/favicons/ops.png">
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
					<span class="image avatar"><img src="images/ops.jpg" alt="" /></span>
					<h1 id="logo"><a href="#">CDSP Office Professional Society</a></h1>
					<p>School Organization for BSOA in<br />
					Colegio de San Pedro</p>
				</header>
				<nav id="nav">
					<ul>
						<li><a href="#one" class="active">About</a></li>
						<li><a href="#three">Current Officers</a></li>
						<li><a href="votingformops.php">OPS Election</a></li>
					</ul>
				</nav>
				<footer>
					<ul class="icons">
						
						<li><a href="https://www.facebook.com/OPSOFFICIALPAGE/" target="_blank" class="icon fa-facebook"><span class="label">Facebook</span></a></li>

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
										<h2>About CDSP OPS</h2>
										
									<p style="text-align:justify">School Organization for BSOA in Colegio de San Pedro</p>
								</div>
							</section>

						<!-- Three -->
							<section id="three">
								<div class="container">
									<h3>Current OPS Officers</h3>
									<p>This is our current CDSP OPS officers</p>
									<div class="features">
										<article>
											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>
											<div class="inner">
												<h4>President</h4>
												<p>Ms. Karen Lindo</p>
											</div>
										</article>
										<article>
											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>
											<div class="inner">
												<h4>Vice-President Internal</h4>
												<p>Mr. Grace Shiela Castrence</p>
											</div>
										</article>
										<article>
											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>
											<div class="inner">
												<h4>Vice-President Externel</h4>
												<p>Ms. Margie Cama</p>
											</div>
										</article>
										<article>
											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>
											<div class="inner">
												<h4>Secretary</h4>
												<p>Ms. Llynn Ponaya</p>
											</div>
										</article>
										<article>
											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>
											<div class="inner">
												<h4>Asst. Secretary</h4>
												<p>Ms. Teresa Linao</p>
											</div>
										</article>
										<article>
											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>
											<div class="inner">
												<h4>Treasurer	</h4>
												<p>Ms. Rose Ariola</p>
											</div>
										</article>
										<article>
											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>
											<div class="inner">
												<h4>Asst. Treasurer</h4>
												<p>Ms. Bernal</p>
											</div>
										</article>
										<article>
											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>
											<div class="inner">
												<h4>Auditor</h4>
												<p>Ms. Mary Joy Panday</p>
											</div>
										</article>
										<article>
											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>
											<div class="inner">
												<h4>Business Manager</h4>
												<p>Ms. Krestyl Espenocilla</p>
											</div>
										</article>
										<article>
											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>
											<div class="inner">
												<h4>P.R.O.</h4>
												<p>Ms. Sherlyn Abala</p>
											</div>
										</article>
										<article>
											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>
											<div class="inner">
												<h4>Sgt. at Arms</h4>
												<p>Ms. Lorraine Sabroso</p>
											</div>
										</article>
										<article>
											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>
											<div class="inner">
												<h4>Outreach Director</h4>
												<p>Ms. Remelyn Lega</p>
											</div>
										</article>
										<article>
											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>
											<div class="inner">
												<h4>Project Director</h4>
												<p>Ms. Christine Joy Maro</p>
											</div>
										</article>
										<article>
											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>
											<div class="inner">
												<h4>1st Year Representative</h4>
												<p>Ms. Michelle Ann Celestino</p>
											</div>
										</article>
										<article>
											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>
											<div class="inner">
												<h4>2nd Year Representative</h4>
												<p>Ms. Jessa Mae Madrideo</p>
											</div>
										</article>
										<article>
											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>
											<div class="inner">
												<h4>3rd Year Representative</h4>
												<p>Ms. Ma. Carmela Joy Aviso</p>
											</div>
										</article>
										<article>
											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>
											<div class="inner">
												<h4>4th Year Representative</h4>
												<p>Ms. Rowena Ocampo</p>
											</div>
										</article>
										<article>
											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>
											<div class="inner">
												<h4>SC @ Quality Membership</h4>
												<p>Ms. Melanie Greganda</p>
											</div>
										</article>
										<article>
											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>
											<div class="inner">
												<h4>SC @ Quality Membership</h4>
												<p>Ms. Ranny Ann Fermo</p>
											</div>
										</article>
										<article>
											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>
											<div class="inner">
												<h4>SC @ Partnership and External</h4>
												<p>Ms. Olarve, Alexies</p>
											</div>
										</article>
										<article>
											<a href="#" class="image"><img src="images/avatar.png" alt="" /></a>
											<div class="inner">
												<h4>SC @ Waste and Means</h4>
												<p>Ms. Anjanette Andrino</p>
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
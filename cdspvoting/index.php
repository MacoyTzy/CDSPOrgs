<?php 

  session_start();

  require 'connect.php';
  require 'functions.php';

  //$con = 'connect.php';

  if(isset($_POST['login'])) {

    $uname = clean($_POST['username']);
    $pword = clean($_POST['password']);

    $query = "SELECT * FROM students WHERE username = '$uname' AND password = '$pword'";
    $result = mysqli_query($con, $query);
    $user = $con->query($query) or die ($con->error);
    $row = $user->fetch_assoc();
    $total = $user->num_rows;

    if(mysqli_num_rows($result) > 0) {

      
      $_SESSION['userid'] = $row['id'];
      $_SESSION['username'] = $row['username'];
      $_SESSION['password'] = $row['password'];
      $_SESSION['Access'] = $row['access'];
      $_SESSION['Course'] = $row['course'];
      $_SESSION['Studentno'] = $row['studentno'];
      $_SESSION['Status_ssc'] = $row['vote_status_ssc'];
      $_SESSION['Status_teatro'] = $row['vote_status_teatro'];
      $_SESSION['Status_itso'] = $row['vote_status_itso'];
      $_SESSION['Status_jpia'] = $row['vote_status_jpia'];
      $_SESSION['Status_ops'] = $row['vote_status_ops'];
      $_SESSION['Status_shs'] = $row['vote_status_shs'];
      $_SESSION['Status_jhs'] = $row['vote_status_jhs'];
      $_SESSION['Status_elem'] = $row['vote_status_elem'];


      header("location:adminpanel.php");
      exit;

    } else {

      $_SESSION['errprompt'] = "Wrong username or password.";

    }

  }



  if(!isset($_SESSION['username'], $_SESSION['password'])) {

?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>CDSP Orgs</title>

	  
  <link href="assets/css/main.css" rel="stylesheet">
  <link rel="icon" href="assets/favicons/cdsp.png">
  <script src="assets/js/bootstrap.min.js"></script>';
  <script src="assets/js/jasy.js"></script>
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">';

  <style>
    body{
      background-image: url("images/cdspbuilding.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      backdrop-filter: blur(9px);
    }
    strong {
      font-weight: bold;
      color:white
    }
    .field-icon {
  float: right;
  margin-left: -25px;
  margin-top: -25px;
  position: relative;
  z-index: 2;
}

.container{
  padding-top:50px;
  margin: auto;
}

 img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"]{display:none;}

 .modal{
   margin-top:100px;
  }
  .modal-header, h4, .close {
    background-color: #800000;
    color: #fff !important;
    text-align: center;
  }
  .modal-header, .modal-body {
    padding: 10px 10px;
  }
  
  
 
  .modal-header img{
  width:100%;
  height:100%;
  }
  </style>
<script>
    $(document).ready(function(){
        $("#myModal").modal('show');
    });
	
	 $(document).ready(function() {
      // RELOAD PAGE ON BUTTON CLICK EVENT.
        $('#reload_page').click(function () {
            location.reload(true); 
        });
    });
</script>
  
</head>
<body>
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">  Privacy Policy &nbsp; &nbsp; &nbsp; <span class="glyphicon glyphicon-lock"></span></h2>
            </div>
            <div class="modal-body">
                <p style="text-align:justify;">THIS SYSTEM USES COOKIES TO ENSURE YOU GET THE BEST EXPERIENCE WHILE BROWSING THE SITE. By continued use, you agree to our privacy policy and accept our use of such cookies. For further information, click . 
<a href="#demo" data-toggle="collapse">FIND OUT MORE</a> </p>
  <div id="demo" class="collapse">
 
  <hr/>
  <h3>PRIVACY STATEMENT</h3>
  <p style="text-align:justify;">
    This Voting System of Colegio de San Pedro, Inc. is committed to protecting your privacy and developing technology that gives you a powerful but secured and safe online experience. This Privacy Statement (the "Privacy Statement") applies to the CDSP.EDU.PH website (the "Website") and governs data collection and usage. By using the Website, you consent to the data practices described in this Privacy Statement.
<br/><br/>
Colegio de San Pedro, Inc. (the “CDSP”, "we", "us", or "our"), respect and protect the privacy of our data subjects (i.e. employees, learners/students, suppliers, service providers and other stakeholders) in accordance with Republic Act No. 10173, or the Data Privacy Act of 2012, and its Implementing Rules and Regulations.

	</p>

	<h4>Collection of your Personal Information</h4>
 <p style="text-align:justify;">
CDSP collects personally identifiable information, such as your e-mail address, name, parent and guardian name, birthdate and home or work address or telephone number. CDSP also collects anonymous demographic information, which is not unique to you, such as your last school attended, ZIP code, age, gender, and religion. 
<br/>


The Website may contain bulletin board services, chat areas, news groups, forums, communities, personal web pages, calendars, and/or other message or communication facilities designed to enable you to communicate with the public at large or with a group (collectively, "Communication Services"). CDSP has no obligation to monitor the Communication Services. You agree to use the Communication Services only to post, send and receive messages and material that are proper and related to the particular Communication Service. You agree to be responsible for any personally identifiable information or personally sensitive data that you disclose through the Communication Services which may be collected and used by any third party.
<br/>

CDSP encourages you to review the privacy statements of websites you choose to link to from the Website so that you can understand how these websites collect, use and share your information. CDSP is not responsible for the privacy statements or other content on websites outside of the Website. </p>
<br/>


<h4>Use of your Personal Information</h4>


 <p style="text-align:justify;">
The personal information gathered by CDSP about you is used to operate the Website and deliver the services you have requested. CDSP also uses your personally identifiable information to inform you of other products or services available from CDSO, its affiliates, and partners. From time to time, CDSP may also contact you to participate in surveys on your opinion of current services or of potential new services that may be offered by CDSP, its affiliates, or partners. Your participation in the survey is optional and not a condition for the continued use or access to the Website.

<br/>

CDSP does not use or disclose sensitive personal information, such as race, religion, or political affiliations, without your explicit consent.

<br/>

CDSP keeps track of your surfing and browsing of the Website and its linked sites, essentially logging information about the sections and web pages that you visit and the actions you undertake. CDSP monitors your browsing behavior to give you – the customer - the most efficient service that CDSP can provide.

<br/>

The foregoing notwithstanding, CDSP can (and you authorize us to) disclose any information about you to private entities, law enforcement agencies or government officials, as CDSP, in its sole discretion, believe necessary or appropriate to investigate or resolve possible problems or inquiries, or as otherwise required by law, regulation, legal process or governmental request, or to protect the security of other users of the Website, or the public.</p>

<br/>

<h4>Use of Cookies</h4>

 <p style="text-align:justify;">
The Website uses "cookies" to help you personalize your online experience. A cookie is a text file that is placed on your hard disk by a web page server. Cookies cannot be used to run programs or deliver viruses to your computer. Cookies are uniquely assigned to you, and can only be read by a web server in the domain that issued the cookie to you.

<br/>

One of the primary purposes of cookies is to provide a convenience feature to save you time by informing the web server that you have returned to a specific page. For example, if you personalize the Website pages, or register with the Website linked sites or services, a cookie helps the Website to recall your specific information on subsequent visits. This simplifies the process of recording your personal information, such as home address, mobile number, and so on. When you return to the Website, the information you previously provided can be retrieved, so you can easily use the Website features that you customized.

<br/>

You can accept or decline cookies by modifying your browser setting to decline cookies if you prefer. If you choose to decline cookies, you may not be able to fully experience the interactive features of the Website or the linked sites you visit.
</p>

<br/>

<h4>Security of your Personal Information</h4>


 <p style="text-align:justify;">
CDSP secures your personal information from unauthorized access, use or disclosure. CDSP secures the personally identifiable information you provide on computer servers in a controlled, secure environment, protected from unauthorized access, use or disclosure. 
</p>

<br/>

<h4>Changes to this Privacy Statement</h4>

 <p style="text-align:justify;">
CDSP may amend this Privacy Statement at any time in its sole discretion. Any amendments or modifications to this Privacy Statement shall be posted in the Website. It is your duty and responsibility to keep yourself informed of such amendments. Further, your use of the Website after the effective date of any such amendments constitute your agreement to comply and be bound by such amendments.
</p>

<br/>

<h4>Contact Information</h4>


<p>
For any questions and/or concerns about this Privacy Policy, please contact:<br/>
The Data Protection Officer<br/>
Colegio de San Pedro, Inc.<br/>
Pacita Complex 1, City of San Pedro, Laguna<br/>
Tel: (632) 8847-5535<br/>
Email: dpo@cdsp.edu.ph<br/>
</p>

  </div>


            </div>
			<div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
              I AGREE &nbsp; &nbsp; &nbsp; <span class="glyphicon glyphicon-ok-sign"></span>
          </button>
        </div>
      </div>
        </div>
    </div>
</div>


</div>
    <?php /* include 'navbar.php'; */?>

    <section class="center-text">
    <img src="images/cdsp.png" alt="CDSP" width="150" height="150">  <br>
    <strong>CDSP Student Organization Information and Voting System</strong> <br>
    <strong>1.0</strong>
    <div class="login-form box-center">
      <?php 

        if(isset($_SESSION['prompt'])) {
          showPrompt();
        }

        if(isset($_SESSION['errprompt'])) {
          showError();
        }

      ?>
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        
        <div class="form-group">
        
          <label for="username" class="sr-only">Username</label>
          <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
        </div>

        <div class="form-group">
          <label for="password" class="sr-only">Password</label>
          <input type="password" class="form-control" name="password" placeholder="Password" required>
          <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
        </div>
        
        <input class="btn btn-primary" type="submit" name="login" value="Log In">
        <a href="about.html">Quick Guide</a>
        
      </form>
     
    </div>
    <strong>*Check "Quick Guide" first before login*<strong>
    <?php 
    
?>

  </section>
      <section class="center-text">
      <!-- <a class="btn" href="adminlogin.php">Admin</a> -->
      </section>
      
	<script src="assets/js/jquery-3.1.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
  <script type="text/javascript">
    $(window).on('load', function() {
        $('#myModal').modal('show');
    });
</script>
</body>
</html>

<!-- insert code here you fuck! -->

<!-- Messenger Chat Plugin Code -->
<div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v10.0'
          });
        };

        (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
      </script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution="page_inbox"
        page_id="423533631744432">
      </div>


<?php

  } else {
    header("location:adminpanel.php");
    exit;
  }

  unset($_SESSION['prompt']);
  unset($_SESSION['errprompt']);


  mysqli_close($con);

?>

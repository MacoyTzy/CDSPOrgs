
<style>
      .headerFont{
        font-family: 'Ubuntu', sans-serif;
        font-size: 24px;
      }

      .subFont{
        font-family: 'Raleway', sans-serif;
        font-size: 14px;
        
      }
      
      .specialHead{
        font-family: 'Oswald', sans-serif;
      }

      .normalFont{
        font-family: 'Roboto Condensed', sans-serif;

      }

.navbar {
  overflow: hidden;
  background-color: #800000;
  font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}






 </style>
<!DOCTYPE HTML>
<html>



<!-- <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span> -->

  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="page-header">
    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container-fluid">

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
            <div class="collapse navbar-collapse"   id="example-nav-collapse">
                <!-- <a class="glyphicon glyphicon-user" href="profile.php"></a> -->
                <a href=""></a>
                <a href="index.php">Students and Admin</a>
                <a href="candidatepanel.php">Candidates Panel</a>
                <a href="page_ssc.php">Votes Result Panel</a>

                  <ul class="nav navbar-nav navbar-right">
                      <li><a href="logout.php">Log Out <span class="glyphicon glyphicon-off" aria-hidden="true"> </span></a></li>
                 </ul>

      </div> 
    </nav>
</div>

    <!-- Collect the nav links, forms, and other content for toggling --> 
   

    <?php 

      if(isset($_SESSION['username'], $_SESSION['password'])) {

    ?>

      

      <?php 

        } else {
          echo "<span class='not-logged'></span>";
        }

      ?>

      

</html>


  
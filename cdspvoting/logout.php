<?php 

	session_start();
	session_destroy();



        if(isset($_SESSION['prompt'])) {
          showPrompt();
        }

        if(isset($_SESSION['errprompt'])) {
          showError();
        }

    

	header("location:index.php");
	exit;

?>
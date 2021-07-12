<?php 

        if(isset($_SESSION['prompt'])) {
          showPrompt();
          echo("<meta http-equiv='refresh' content='5'>");
        }

        if(isset($_SESSION['errprompt'])) {
          showError();
          echo("<meta http-equiv='refresh' content='5'>");
        }
?>
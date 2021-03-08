<?php 
  session_start();

  $_SESSION["geburtsdatum"] = $_POST["geburtsdatum"];
  $_SESSION["wohnort"] = $_POST["wohnort"];
  $_SESSION["beruf"] = $_POST["beruf"];
    
  // Weiterleitung
  header("location: ../view/umfrage03.php");
?>





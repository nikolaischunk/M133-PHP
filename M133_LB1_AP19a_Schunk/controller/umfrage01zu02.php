<?php 
  session_start();
  
    // Hier die Formulardaten in die Session speichern

	$_SESSION["benutzer"] = $_POST["benutzer"];
	$_SESSION["password"] = $_POST["password"];



	// Pruefe Inhalt von Eingabe  
    if ((strlen($_REQUEST["benutzer"])>0) and (strlen($_REQUEST["password"])>0)) {
        // Weieterleitung
        header("location: ../view/umfrage02.php");
    } else {
    	$html_Output = '<html><head>';
    	$html_Output = '<title>Anmeldung</title>';
    	$html_Output = '<link rel="stylesheet" href="../assets/css/style.css">';
    	$html_Output .= '</head><body>';
    	$html_Output .= '<h1>Uups</h1>';
    	$html_Output .= 'Das war nicht erfolgreich';
    	$html_Output .= '<br><a href=""> < zurück </a>';
    	$html_Output .= '</body></html>';
    	echo $html_Output;
    }
?>





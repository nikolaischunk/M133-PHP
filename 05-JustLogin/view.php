<?php

use controller\LogoutController;

spl_autoload_register(function ($class) {
    require $class . ".php";
});

$controller = new controller\LogoutController();

if (isset($_GET["logout"])) {
    $controller->logOut();
    return;
}
if (!$controller->isLoggedIn()) return;
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titel</title>

</head>

<body>


    <h1>Hello User <?php echo $controller->getUser()->username; ?></h1>
    <h2>Your Password is: <?php echo $controller->getUser()->password; ?></h2>
    <a href="./view.php?logout=true">Logout</a>
</body>

</html>
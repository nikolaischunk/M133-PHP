<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="de">

<head>
    <title>Register</title>

    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Jost:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />

    <!-- fontawesome v5 -->
    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>

</head>

<body>

    <section class="forms">
        <div class="container">
            <!-- logo -->
            <div class="logo">
                <a class="brand-logo" href="index.php">Register</a>
            </div>
            <!-- //logo -->
            <div class="forms-grid">


                <!-- register -->
                <div class="register">
                    <span class="fas fa-user-circle"></span>
                    <strong>Create account!</strong>
                    <form action="./index.php" method="post" class="register-form">
                        <fieldset>
                            <div class="form">
                                <div class="form-row">
                                    <span class="fas fa-user"></span>
                                    <label class="form-label" for="input">Name</label>
                                    <input type="text" class="form-text">
                                </div>
                                <div class="form-row">
                                    <span class="fas fa-envelope"></span>
                                    <label class="form-label" for="input">E-mail</label>
                                    <input type="email" class="form-text">
                                </div>
                                <div class="form-row">
                                    <span class="fas fa-lock"></span>
                                    <label class="form-label" for="input">Password</label>
                                    <input type="password" class="form-text">
                                </div>
                                <div class="form-row button-login">
                                    <button class="btn btn-login">Create <span
                                            class="fas fa-arrow-right"></span></button>
                                </div>
                            </div>
                        </fieldset>
                    </form>

                    <span class="create-account">Already have an Account?<a href="./login.php">Login</a></span>


                </div>
                <!-- //register -->
            </div>

            <!-- copyright -->
            <div class="copy-right">
                <p>&copy; 2020 Nikolai Schunk. All rights reserved</a>
                </p>
            </div>
            <!-- //copyright -->
        </div>
    </section>

</body>

</html>
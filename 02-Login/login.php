<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="de">

<head>
    <title>Login</title>

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
                <a class="brand-logo" href="index.php">Login</a>
            </div>
            <!-- //logo -->
            <div class="forms-grid">

                <!-- login -->
                <div class="login">
                    <span class="fas fa-sign-in-alt"></span>
                    <strong>Welcome!</strong>
                    <span>Sign in to your account</span>

                    <form action="./index.php" method="post" class="login-form">
                        <fieldset>
                            <div class="form">
                                <div class="form-row">
                                    <span class="fas fa-user"></span>
                                    <label class="form-label" for="input">Name</label>
                                    <input type="text" class="form-text">
                                </div>
                                <div class="form-row">
                                    <span class="fas fa-eye"></span>
                                    <label class="form-label" for="input">Password</label>
                                    <input type="password" class="form-text">
                                </div>
                                <div class="form-row bottom">
                                    <div class="form-check">
                                        <input type="checkbox" id="remenber" name="remenber" value="remenber">
                                        <label for="remenber"> remember me?</label>
                                    </div>
                                    <a href="#url" class="forgot">forgot password?</a>
                                </div>
                                <div class="form-row button-login">
                                    <button class="btn btn-login">Login <span
                                            class="fas fa-arrow-right"></span></button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                    <span class="create-account">Don't have an Account?<a href="./register.php">Register</a></span>
                </div>
                <!-- //login -->
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
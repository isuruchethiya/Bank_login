<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Login | Ludiflex - youtube channel</title>
</head>

<body>
    <div class="wrapper">
        <div class="container main">
            <div class="row" id="signInBox">
                <div class="col-md-6 side-image">
                    <!-------Image-------->
                    <img src="images/white.png" alt="">
                    <div class="text">
                        <p>Join the community of developers <i>- ludiflex</i></p>
                    </div>
                </div>
                <div class="col-md-6 right">
                    <div class="input-box">
                        <header>Sign In</header>



                        <span class="text-danger" id="msg2"></span>



                        <?php

                        $email = "";
                        $password = "";

                        if (isset($_COOKIE["email"])) {
                            $email = $_COOKIE["email"];
                        }

                        if (isset($_COOKIE["password"])) {
                            $password = $_COOKIE["password"];
                        }

                        ?>

                        <div class="input-field">
                            <input type="text" class="input" id="email2" value="<?php echo $email; ?>" />
                            <label for="email">Email</label>
                        </div>
                        <div class="input-field">
                            <input type="password" class="input" id="password2" value="<?php echo $password; ?>" />
                            <label for="password">Password</label>
                        </div>
                        <!-- <div class="input-field">
                            <input type="submit" onclick="signIn();" class="submit" value="Sign In">

                        </div> -->

                        <div class="col-12 col-lg-12 d-grid">
                            <button class="btn btn-primary" onclick="signIn();">Sign In</button>
                        </div>
                        <div class="signUp">
                            <span>Already have an account? <a href="signUp.php" onclick="changeView();">Log in here</a></span>
                        </div>
                        <div class="col-12 text-end">
                            <a href="manegerSignin.php" class="text-end text-primary">Maneger</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="login.js"></script>
</body>

</html>
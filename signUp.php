<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Login | HANDSOM-CARE</title>
</head>

<body>
    <div class="wrapper">
        <div class="container main">
            <div class="row">
                <div class="col-md-6 side-image" id="signUpBox">
                    <!-------Image-------->
                    <img src="images/" alt="logo">
                    <div class="text">
                        <p>Join the community of developers <i>- ludiflex</i></p>
                    </div>
                </div>
                <div class="col-md-6 right">
                    <div class="input-box">
                        <header>Create account</header>
                        <div class="col-12 d-none" id="msgdiv">
                            <div class="alert alert-danger" role="alert" id="alertdiv">
                                <i class="bi bi-x-octagon-fill fs-10" id="msg">

                                </i>
                            </div>
                        </div>

                        <div class="input-field">
                            <input type="text" class="input" id="f" required autocomplete="off">
                            <label type="text">First Name</label>
                        </div>
                        <div class="input-field">
                            <input type="text" class="input" id="l" required>
                            <label for="password">Last Name</label>
                        </div>
                        <div class="input-field">
                            <input type="email" class="input" id="e" required>
                            <label for="email">Email</label>
                        </div>
                        <div class="input-field">
                            <input type="password" class="input" id="p" required>
                            <label for="password">Password</label>
                        </div>
                        <div class="input-field">
                            <input type="mobile" class="input" id="m" required>
                            <label for="mobile">Mobile</label>
                        </div>

                        <div class="input-field">

                            <select class="form-select" id="g">
                                <?php

                                require "connection.php";

                                $rs = Database::search("SELECT * FROM `gender`");
                                $n = $rs->num_rows;

                                for ($x = 0; $x < $n; $x++) {
                                    $d = $rs->fetch_assoc();

                                ?>

                                    <option value="<?php echo $d["id"]; ?>"><?php echo $d["gender_name"];?></option>

                                <?php

                                }

                                ?>
                            </select>
                        </div>
                        <div class="input-field">
                            <input type="submit" onclick="signUp();" class="submit" value="Sign Up">

                        </div>
                        <div class="signIn">
                            <span>Already have an account? <a href="signIn.php" onclick="changeView();">Log in here</a></span>
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
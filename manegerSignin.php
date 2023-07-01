<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | eshop</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="maneger.css" />

    <link rel="icon" href="resource/logo.svg" />
</head>

<body style="background-color: #74EBD5;background-image: linear-gradient(90deg,#74EBD5 0%,#9FACE6 100%);">

    <div class="container-fluid justify-content-center" style="margin-top: 100px;">
        <div class="row align-items-center">

            <div class="col-12">
                <div class="row">
                    <div class="col-12 logo"></div>
                    <div class="col-12 ">
                        <p class="text-center title1">Hi, Welcome to E-Banking Maneger.</p>
                    </div>
                </div>
            </div>

            <div class="col-12 p-5">
                <div class="row">
                    <div class="col-6 d-none d-lg-block background"></div>
                    <div class="col-12 col-lg-6 d-block">
                        <div class="row g-3">
                            <div class="col-12">
                                <p class="title2">Sign In to your Account</p>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Email</label>
                                <input type="email" id="e" class="form-control" placeholder="ex : john@gmail.com" />
                            </div>
                            <div class="col-12 col-lg-6 d-grid">
                                <button class="btn btn-primary" onclick="manegerVarification();">Send Varification code</button>
                            </div>
                            <div class="col-12 col-lg-6 d-grid">
                                <a href="signUp.php" class="btn btn-danger">Back to Customer Log In</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--model-->

            <div class="modal" tabindex="-1" id="varificationModel">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Admin Varification</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <label class="form-label">Enter you Varification Code</label>
                            <input type="text" class="form-control" id="vcode">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" onclick="verify();">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>


            <!--model-->


            <div class="col-12 fixed-bottom text-center">
                <p>&copy; 2022 eshop.lk | All Rights Reserved</p>
                <p class="fw-bold">Java Institute&trade;</p>
            </div>

        </div>
    </div>

    <script src="maneger.js"></script>
    <script src="bootstrap.js"></script>
</body>

</html>
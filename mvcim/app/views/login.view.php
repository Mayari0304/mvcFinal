<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LogIn</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="<?=ROOT?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.lineicons.com/4.0/lineicons.css" />
    <link href="<?=ROOT?>/assets/css/LogIn.css" rel="stylesheet">
    <style>
        .form-control {
            border: none;
            border-bottom: 2px solid #ccc;
            border-radius: 0;
            box-shadow: none;
            background-color: white !important;

        }
        .form-control:focus {
            border-bottom: 2px solid #2e353d;
            outline: none;
            box-shadow: none;
            background-color: white !important;

        }
        .form-floating > .form-control {
            padding-left: 0;
        }
        .form-floating > label {
            padding-left: 0;
        }
        .form-floating > .form-control::placeholder {
            color: none;
        }

        .form-floating .position-relative i {
            pointer-events: none;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border bg-white shadow box-area">
            <div class="col-md-5 d-flex justify-content-center align-items-center flex-column left-box" style="background: #2e353d;">
                <div class="featured-image">
                    <img src="assets/images/SSHOA_LOGO_NO_BACKGROUND.png" class="img-fluid" style="width:350px;" />
                </div>
            </div>
            <div class="col-md-7 right-box">
                <div class="row align-items-center mt-5 mb-5">
                    <div class="header-text mb-4 pt-5">
                        <h2>Sign In</h2>
                        <p>Sign in to SSHOA Management System</p>
                    </div>
                    <!-- Form for login -->
                    <form method="post">
                        <div class="form-floating mb-3 position-relative">
                            <input type="text" name="email" id="floatingInput" class="form-control form-control-lg bg-light fs-6" placeholder="Enter Email Address" />
                            <label for="floatingInput">Email Address</label>
                            <i class="lni lni-user position-absolute top-50 end-0 translate-middle-y pe-3"></i>
                        </div>
                        <div class="form-floating mb-5 position-relative">
                            <input type="password" name="password" id="floatingPassword" class="form-control form-control-lg bg-light fs-6" placeholder="Enter Password" />
                            <label for="floatingPassword">Password</label>
                            <i class="lni lni-lock position-absolute top-50 end-0 translate-middle-y pe-3"></i>
                        </div>
                        <div class="input-group mb-3">
                            <button type="submit" class="btn btn-lg btn-primary w-100 fs-6 custom-button" style="background: #2e353d;">Sign In</button>
                        </div>
                    </form>
                    <!-- End of login form -->
                </div>
            </div>
        </div>
    </div>
    <script src="<?=ROOT?>/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>

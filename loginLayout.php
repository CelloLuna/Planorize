<?php 
    session_start();
    error_reporting();

    if (isset($_POST['login'])) {
        //getting username/email and password
        $userName = $_POST['username'];
        $password = $_POST['password'];

        //fetch data from db based on username or email and password
        $sql = "SELECT Username,Email,Password FROM Users WHERE (Username=:uName || Email=:uName)";
        $query = $con -> prepare($sql);
        $query -> bindParam(':uName', $userName, PDO::PARAM_STR);
        $query -> execute();
        $results = $query ->fetchAll(PDO::FETCH_OBJ);

        if($query -> rowCount() > 0){
            foreach ($results as $row) {
                $hashpass = $row -> Password;
            }

            //password verification
            if (password_verify($password, $hashpass)) {
                $_SESSION['userLogin'] = $_POST['username'];
                echo "<script type='text/javascript> document.location = index.php; </script>";
            } else {
                echo "<script>alert('Incorrect Password');</script>";
            }
        } else {
            //if username/email not found in db
            echo 'nothing';
        }
    }
?>
<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12  col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                    </div>
                    <form class="user" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user"
                                id="userOrEmail" name="username"
                                placeholder="Enter Email Address or Username">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-user"
                                id="password" name="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox small">
                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                <label class="custom-control-label" for="customCheck">Remember
                                    Me</label>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-user btn-block" name="login">
                            Login
                        </button>
                        <hr>
                        <a href="index.html" class="btn btn-google btn-user btn-block">
                            <i class="fab fa-google fa-fw"></i> Login with Google
                        </a>
                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                        </a>
                    </form>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                    </div>
                    <div class="text-center">
                        <a class="small" href="register.php">Create an Account!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>
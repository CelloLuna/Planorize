<?php 
    //error_reporting(");
    if (isset($_POST['register'])) {
        //getting post values
        $fName = $_POST['fname'];
        $lName = $_POST['lname'];
        $dOb = $_POST['dob'];
        $Email = $_POST['email'];
        $Phone = $_POST['phone'];
        $userName = $_POST['username'];

        //password hashing
        $password = $_POST['pass'];
        $options = ['cost' => 12];
        $hashedPass = password_hash($password, PASSWORD_BCRYPT, $options);

        //query for user and email validation
        $ret = "SELECT * FROM Users where (Username=:username || Email=:email)";
        $queryt = $con->prepare($ret);
        $queryt -> bindParam(':email', $Email, PDO::PARAM_STR);
        $queryt -> bindParam(':username', $userName, PDO::PARAM_STR);
        $queryt -> execute();
        $results = $queryt->fetchAll(PDO::FETCH_OBJ);
        if ($queryt->rowCount() == 0) {
            //Query for insertion
            $sql = "INSERT INTO Users(FirstName,LastName,Password,Username,Email,PhoneNumber,DateOfBirth) VALUES (:fname,:lname,:pass,:username,:email,:phone,:dob";
            $query = $con->prepare($sql);

            //binding post values
            $query->bindParam(':fname', $fName, PDO::PARAM_STR);
            $query->bindParam(':lName', $lName, PDO::PARAM_STR);
            $query->bindParam(':pass', $hashedPass, PDO::PARAM_STR);
            $query->bindParam(':username', $userName, PDO::PARAM_STR);
            $query->bindParam(':email', $Email, PDO::PARAM_STR);
            $query->bindParam(':phone', $Phone, PDO::PARAM_STR);
            $query->bindParam(':dob', $dOb, PDO::PARAM_STR);
            $lastInsertId = $con->lastInsertId();
            if ($lastInsertId) {
                $msg = "You Have Registered Successfully";
                echo $msg;
                header("Location: index.php?action=success");
            } else {
                $error = "Something Went Wrong. Please Try Again";
                echo $error;
            }
        } else {
            $error = "Username or Email Already Exists. Please Try Again";
            echo $error;
        }
    }
?>
<script>
    // JS for username avaliblity
    function checkUsernameAvalibility() {
        $("#loaderIcon").show();
        jQuery.ajax({
            url:"checkAvailability.php",
            data: 'username='+$("#username").val(),
            type: "POST",
            success:function(data){
                $("#usernameAvailabilityStatus").html(data);
                $("#loaderIcon").hide();
            },
            error:function(){

            }
        });
    }

    function checkEmailAvailability() {
        $("#loaderIcon").show();
        jQuery.ajax({
            url: "check_availability.php",
            data:'email='+$("#email").val(),
            type: "POST",
            success:function(data){
                $("#emailAvailabilityStatus").html(data);
                $("#loaderIcon").hide();
            },
            error:function (){
                event.preventDefault();
            }
        });
    }
</script>

<div class="container">
    <!--Error Message-->
    <?php $error="" ; ?>
    <?php if($error){ ?>
        <div class="errorWrap"> <strong>Error </strong> : <?php echo htmlentities($error);?></div>
    <?php } ?>
    <!--Success Message-->
    <?php $msg="" ; ?>
    <?php if($msg){ ?>
        <div class="succWrap"> <strong>Well Done </strong> : <?php echo htmlentities($msg);?></div>
    <?php } ?>    
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12  col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="p-5">
                <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4"><?php  echo isset($pageTitle) ? $pageTitle : " "; ?></h1>
                        </div>
                        <form class="user" action='' method="post">
                            <!-- Name Inputs -->
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" name="fname" pattern="[a-zA-Z]+" title="Must conatin letters only" id="fname"placeholder="First Name" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" name="lname" pattern="[a-zA-Z]+" title="Must conatin letters only" id="lname"placeholder="Last Name" required>
                                </div>
                            </div>
                            <!-- DOB Input -->
                            <div class="form-group">
                                <div class="col-m-12">
                                    <input type="text" class="form-control form-control-user" name="dob" id="dob" placeholder="Date of Birth" required>
                                </div>
                            </div>
                            <!-- Email and Phone Input -->
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="email" class="form-control form-control-user" onBlur="checkEmailAvailability()" name="email" id="email" placeholder="Email Address" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="phone" class="form-control form-control-user" pattern="[0-9]{10}" maxlength="10"  title="10 numeric digits only" name="phone" id="phone" placeholder="Phone Number">
                                </div>
                            </div>
                            <!-- Username Input -->
                            <div class="form-group">
                                <div class="col-m-12">
                                    <input type="text" class="form-control form-control-user" onBlur="checkEmailAvailability()" pattern="^[a-zA-Z][a-zA-Z0-9-_.]{5,12}$" title="User must be alphanumeric without spaces 6 to 12 chars" name="username" id="username" placeholder="Username" required>
                                </div>
                            </div>
                            
                            <!-- Password Input -->
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" pattern="^\S{4,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 4 characters' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;" name="pass" id="pass" placeholder="Password" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" name="confirmPass" id="confirmPass" pattern="^\S{4,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same Password as above' : '')" placeholder="Confirm Password" required>
                                </div>
                            </div>
                            <!-- Register Buttons -->
                            <button class="btn btn-primary btn-user btn-block" type="submit" name="register">Register Account</button>
                            <hr>
                            <a href="index.html" class="btn btn-google btn-user btn-block">
                                <i class="fab fa-google fa-fw"></i> Register with Google
                            </a>
                            <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                            </a>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="forgot-password.html">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="login.php">Already have an account? Login!</a>
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
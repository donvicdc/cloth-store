<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="assets/jquery.js"></script>
    <script src="assets/bootstrap-5.3.2-dist/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="assets/bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fontawesome-free-6.4.2-web/fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Sign up</title>
</head>
<body class="login-body">

<section>
    <div class="col-sm-6 col-md-6 col-lg-6">
        <div class="wrapper">
            <div class="form-box login">
                <h2>Sign up</h2>
                <form action="includes/./signup.inc.php" <?php htmlspecialchars($_SERVER["PHP_SELF"]) ?> method="post">
                    <div class="input-box">
                        <span class="icon">
                            <i class="fa-solid fa-user"></i>
                        </span>
                        <input type="text" name="name" required>
                        <label>Name</label>
                    </div>
                    <div class="input-box">
                        <span class="icon">
                            <i class="fa-solid fa-envelope"></i>                        
                        </span>
                        <input type="email" name="email" required>
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon">
                            <i class="fa-solid fa-user"></i>
                        </span>
                        <input type="text" name="uid" required>
                        <label>Username</label>
                    </div>
                    <div class="input-box">
                        <span class="icon">
                            <i class="fa-solid fa-lock"></i>
                        </span>
                        <input type="password" name="pwd" required>
                        <label>Password</label>
                    </div>
                    <div class="input-box">
                        <span class="icon">
                            <i class="fa-solid fa-lock"></i>
                        </span>
                        <input type="password" name="pwdrepeat" required>
                        <label>Confirm password</label>
                    </div>
                    <button type="submit" name="submit">Sign up</button>
                    <div class="login-register">
                        <p>Already have an account?<a href="login.php" class="register-link">Login</a></p>
                    </div>
                </form>
             <?php

                if(isset($_GET["error"])){
                    if($_GET["error"] == "emptyinput"){
                        echo"<p>emputyinputs</p>";
                    }
                    elseif($_GET["error"] == "invaliduid"){
                        echo"invalid username";
                    }
                    elseif($_GET["error"] == "invalidemail"){
                        echo"invalid email";
                    }
                    elseif($_GET["error"] == "passwordsdontmatch"){
                        echo"passwords don't match";
                    }
                    elseif($_GET["error"] == "stmtfailed"){
                        echo"try again";
                    }
                    elseif($_GET["error"] == "usernametaken"){
                        echo"username taken";
                    }
                    elseif($_GET["error"] == "none"){
                        header("location: ./login.php");
                    }
                }
            ?>
            </div>
        </div>
    </div>
</section>

</body>
</html>

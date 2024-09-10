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
    <title>Login</title>
</head>
<body class="login-body">

<section>
    <div class="col-sm-6 col-md-6 col-lg-6">
        <div class="wrapper">
            <div class="form-box login">
                <h2>Login</h2>
                <form action="includes/./login.inc.php" <?php htmlspecialchars($_SERVER["PHP_SELF"]) ?> method="post">
                    <div class="input-box">
                        <input type="text" name="uid" required>
                        <label>username</label>
                    </div>
                    <div class="input-box">
                        <span class="icon">
                            <i class="fa-solid fa-lock"></i>
                        </span>
                        <input type="password" name="pwd" required>
                        <label>Password</label>
                    </div>
                    <button type="submit" name="submit">Log in</button>
                    <div class="login-register">
                        <p>Don't have an account?<a href="signup.php" class="register-link">Signup</a></p>
                    </div>
                </form>
                <?php

            if(isset($_GET["error"])){
                if($_GET["error"] == "emptyinput"){
                    echo"<p>emputyinputs</p>";
                }
                elseif($_GET["error"] == "wronglogin"){
                    echo"invalid username/password";
                }
            }
            ?>
            </div>
        </div>
    </div>
</section>

</body>
</html>

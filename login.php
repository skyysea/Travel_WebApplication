<?php 
    include('server.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login / Register</title>
    

    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login-wrap">
        <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
            <div class="login-form">
                <form action="signup_db.php" method="post">
                        <div class="group">
                        <div class="sign-in-htm">
                            <div class="group">
                                <label for="user" class="label">Username</label>
                                <input name="username" type="text" class="input" required>
                            </div>
                            <div class="group">
                                <label for="pass" class="label">Password</label>
                                <input name="password" type="password" class="input" data-type="password" required>
                            </div>
                                <input type="submit" class="button" name="login_user" value="Sign In">
                        </div>
                        <div class="hr"></div>
                    </div>
                </form>

                <form action="signup_db.php" method="post">
                    <div class="sign-up-htm">
                        <div class="group">
                            <label for="user" class="label">Username</label>
                            <input name="username" type="text" class="input" required>
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Password</label>
                            <input name="password_1" type="password" class="input" data-type="password" required>
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Repeat Password</label>
                            <input name="password_2" type="password" class="input" data-type="password" required>
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Email Address</label>
                            <input name="email" type="text" class="input" required>
                        </div>
                        <div class="group">
                            <input type="submit" class="button" name="reg_user" value="Sign Up">
                        </div>
                        <!-- <div class="hr"></div> --> 
                        <div class="foot-lnk">
                            <label for="tab-1">Already Member?</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>
</html>


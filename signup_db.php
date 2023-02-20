<?php
    session_start();
    include('server.php');
    
    $error = array();

    if (isset($_POST['reg_user'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);

        if ($password_1 != $password_2){
            array_push($error, "REPEAT PASSWORD not match, Try again");
            header('location: login.php');
        }

        $user_check_query = "SELECT * FROM `user` WHERE username = '$username' OR email = '$email'";
        $query = mysqli_query($conn, $user_check_query);
        $result = mysqli_fetch_assoc($query);

        if ($result) {
            // user exists
            if ($result['username'] === $username) {
                array_push($error, "User name already exists");
                header('location: login.php');
            }
            // email exists
            if ($result['email'] === $email) {
                array_push($error, "Email already exists");
                header('location: login.php');
            }

        }

        if (count($error) == 0) {
            $password = md5($password_1);

            $sql = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";
            mysqli_query($conn, $sql);

            $_SESSION['username'] = $username;
            header('location: index.php');
        }


    }

    if (isset($_POST['login_user'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        $password = md5($password);

        $user_login_query = "SELECT * FROM `user` WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn, $user_login_query);

        if (mysqli_num_rows($result) == 1){
            $_SESSION['username'] = $username;
            header('location: index.php');
        }else{
            $_SESSION['error'] = "Your password is incorrect or wrong username";
            header('location: login.php');
        }


    }



?>
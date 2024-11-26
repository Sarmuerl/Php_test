<?php
require 'connect.php';
session_start();
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    print_r($_POST);
    $query = "SELECT * FROM users_table WHERE email='$email'";
    $connect=$connection->query($query);
    if ($connect){
    if ($connect->num_rows > 0) {
        $user=$connect->fetch_assoc();
        $userid=$user['user_id'];
        $hashedpassword=$user['password'];

        $passwordverify= password_verify($password, $hashedpassword);
        if ($passwordverify){
            echo '<div class="alert alert-success">Login Successful</div>';
            $_SESSION['user_id'] = $userid;
            echo $_SESSION['user_id'];
            header('Location: dashboard.php');
        }
        else{
            echo '<div class="alert alert-danger">Password is incorrect</div>';
        }
        print_r($user);
    }
    else{
        echo '<div class="alert alert-danger">User does not exist</div>';
    }
    }
    else{
        echo '<div class="alert alert-danger">Query not ran</div>';
    }


    // echo 'email: ' . $email . ' password: ' . $password;
    // echo 'loginpage';
}
else{
    echo 'not login';
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
        <div class="col-6 mx-auto shadow p-3">
            <h2 class="text-center">Login Page</h2>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
    
    <input type="text" class="form-control my-2" placeholder="Email" name="email"><br><br>
    <input type="text" class="form-control my-2" placeholder="Password" name="password"><br><br>
    <input type="submit" class="btn btn-outline-primary w-100" name="submit">
    </form>
            </form>
        </div>
                <div>
</body>
</html>
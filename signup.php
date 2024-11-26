<!DOCTYPE html>
<html lang="en">    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="col-6 mx-auto shadow p-3">
            <h2 class="text-center">Sign Up</h2>
            <form action="signup_process.php" method="POST">
    <input type="text" class="form-control my-2" placeholder="First Name" name="firstname"><br><br>
    <input type="text" class="form-control my-2" placeholder="Last Name" name="lastname"><br><br>
    <input type="text" class="form-control my-2" placeholder="Email" name="email"><br><br>
    <input type="text" class="form-control my-2" placeholder="Address" name="address"><br><br>
    <input type="text" class="form-control my-2" placeholder="Password" name="password"><br><br>
    <!-- <input type="text" class="form-control my-2" placeholder="Confirm Password"><br><br> -->
    <input type="submit" class="btn btn-primary" name="submit">
    </form>
            </form>
        </div>
                <div>
                    <?php
                    session_start();
                    if(isset($_SESSION['msg'])){
                        echo "<div class='alert alert-danger'>".$_SESSION['msg']."</div>";
                    }
                    unset($_SESSION['msg']);
                    ?>
                </div>
    </div>

</body>
</html>
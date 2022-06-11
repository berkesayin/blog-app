<?php
session_start();

$message = ""; 

try 
{
    $connect = new PDO("mysql:host=localhost;dbname=customers;charset=utf8", "root", "Liverpool34!");
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if(isset($_POST["login"])) 
    {

        if(empty($_POST["email"]) || empty($_POST["password"]))  
        {  
            $message = '<label>All fields are required</label>';  
        } 
        else
        {
            $query = "SELECT * FROM customersinfo WHERE email = :email AND password = :password";
            $statement = $connect->prepare($query);
            $statement->execute(array(                   
                'email' => $_POST["email"],  
                'password' => $_POST["password"]  
            ));    
            $count = $statement->rowCount(); 
            if($count > 0)  
            {  
                $_SESSION["email"] = $_POST["email"];  
                header("location:login-success.php");  
            }  
            else  
            {  
                $message = "<p style='margin-left: 650px'; >Wrong Data!</p>";  
            }              
        }
    }
}
catch(PDOException $error)
{
    $message = $error->getMessage();  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>


    <!-- Bootstrap CSS including -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

</head>
<body>

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a style="font-weight: bold;" class="navbar-brand" href="index.html">Blogger / Sign-In</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto py-4 py-lg-0">

                    <!-- Linkleri Düzenle -->
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="../index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="about.html">About</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="../article_detail.php?id=13">Sample Post</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="contact.html">Contact</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="register.php">Register</a></li>

                </ul>
            </div>
        </div>
    </nav>

    
    <div>
        
        <?php
        if(isset($message))  
        {  
            echo '<label class="text-danger">'.$message.'</label>';  
        }
        ?>

        <!-- Form -->
        <div class="row">
            <div class="col-md-8">
                <form method="POST">
                    <!-- Email -->
                    <div class="mb-3" style="margin-left: 450px;">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control" placeholder="Enter Your Email Address..." name="email">
                        <div class="form-text">We'll never share your email with anyone else.</div>
                    </div>

                    <!-- Password -->
                    <div class="mb-3" style="margin-left: 450px;">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" placeholder="Enter Your Password..." name="password">
                    </div>
                    
                    <button style="margin-left: 450px;" type="submit" class="btn btn-primary" name="login">Submit</button>

                  </form>
            </div>
        </div>
        
    </div>

    <!-- Bootstrap Javascript including -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>
</html>
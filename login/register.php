<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration and Login Form</title>

    <!-- Bootstrap CSS including -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a style="font-weight: bold;" class="navbar-brand" href="index.html">Blogger / Register</a>
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
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="login.php">Sign-In</a></li>

                </ul>
            </div>
        </div>
    </nav>

    <div>

        <!-- Form Kontrol -->
        <div class="row">
            <div class="col-md-8">

                <!-- Register formunu oluşturduklatn sonra form elementlerine girilen bilgileri veritabanına kaydetmek için 
                gerekli olan kodu yazalım. Bir formu gönderebilmek için 2 şeye ihtiyazımız vardı. Birincisi metoda.(GET ya da POST)
                İkinicisi de action attribute'u, yani bu formu nereye göndereceğimiz. Ayrıca şimdilik bir tane php dosyası
                oluşturalım. Get metodu ile formda gönderdiğimiz verileri php dosyasında karşılamamız lazım.   -->
                <form method="GET" action="registration.php">
                    <!-- Note: Biz bir formdan PHP'ye form elementlerindeki verileri gönderirken o input elementlerinin name
                    attribute'larını kullanıyorduk. Buradan elementlerin name attribute'larının değerlerini veritabanındaki
                    sütunların isimlerini verelim. -->
                    
                    <!-- Id -->
                    <div class="mb-3" style="margin-left: 450px;">
                        <label class="form-label">Id</label>
                        <input type="text" class="form-control" placeholder="Enter Your Id Number" name="id">
                    </div>

                    <!-- Name -->
                    <div class="mb-3" style="margin-left: 450px;">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" placeholder="Enter Your Name" name="name">
                    </div>

                    <!-- Surname -->
                    <div class="mb-3" style="margin-left: 450px;">
                        <label class="form-label">Lastname</label>
                        <input type="text" class="form-control" placeholder="Enter Your Last Name" name="surname">
                    </div>

                    <!-- City -->
                    <div class="mb-3" style="margin-left: 450px;">
                        <label  class="form-label">City</label>
                        <input type="text" class="form-control" placeholder="Enter Your City" name="city">
                    </div>

                    <!-- Birthdate -->
                    <div class="mb-3" style="margin-left: 450px;">
                        <label class="form-label">Birthdate</label>
                        <input type="date" class="form-control" placeholder="Enter Your Birthday" name="birthdate">
                    </div>

                    <!-- Email -->
                    <div class="mb-3" style="margin-left: 450px;">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" placeholder="Enter Your Email" name="email">
                    </div>

                    <!-- Password -->
                    <div class="mb-3" style="margin-left: 450px;">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" placeholder="Enter Your Password" name="password">
                    </div>

                    <!-- Gender -->
                    <div class="mb-3" style="margin-left: 450px;">
                        <label class="form-label">Gender</label>
                        <input type="text" class="form-control" placeholder="Enter Your Gender" name="gender">
                    </div>

                    
                    <button style="margin-left: 450px; margin-bottom: 50px;" type="submit" class="btn btn-primary">Sign Up</button>

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
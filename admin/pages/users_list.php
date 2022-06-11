<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers List</title>

    <!-- Bootstrapi dahil edelim: Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    
<?php

//database name = customers
//table name = customersinfo

//Listeleme İşlemi: Database'de tutulan kayıtlar listelenecek. Ve bu verileri PDO ile alacağız.

//php'de pdo ile mysql veritabanı bağlantısı
try {
    $db = new PDO("mysql:host=localhost;dbname=customers;charset=utf8", "root", "Liverpool34!");
}catch(PDOException $e){
    echo $e->getMessage();
}

//Listeleme için verileri çekme: SELECT
$rows = $db->query("SELECT * FROM customersinfo", PDO::FETCH_ASSOC);


?>

<!-- Bootstrap Customers Table -->
<div class="container">

    <div class="row">
        <div class="col-md-12">
            <h2 style="margin-top: 25px; margin-bottom: 20px;">Users List  
                <a href="../../login/register.html"><img src="../../assets/icons/plus-square.svg"></a> 
            </h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <!-- Bootstrap Table -->
            <table class="table table-bordered table-striped table-hover">
                <!-- Başlık - Columns -->
                <thead>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>City</th>
                    <th>Birthdate</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Gender</th>
                </thead>


                <!-- Tablonun içindeki bilgiler. yani veritabanına eklediğimiz veriler buraya gelsin -->
                <tbody>
                    <?php foreach($rows as $row) { ;  ?>
                        <tr>
                            <td> <?php echo $row["id"]; ?></td>
                            <td> <?php echo $row["name"]; ?></td>
                            <td> <?php echo $row["surname"]; ?></td>
                            <td> <?php echo $row["city"]; ?></td>
                            <td> <?php echo $row["birthdate"]; ?></td>
                            <td> <?php echo $row["email"]; ?></td>
                            <td> <?php echo $row["password"]; ?></td>
                            <td> <?php echo $row["gender"]; ?></td>
                        </tr>
                    <?php }    ?>
                </tbody>        

            </table>
        </div>
    </div>
</div>

     <!-- Bootstrap Javascript -->
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" 
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" 
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
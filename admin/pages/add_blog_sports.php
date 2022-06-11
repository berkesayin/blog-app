<?php
require_once 'inc-functions.php'; 
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin | Add Sports Articles</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<?php

if(@$_POST["submit"]){
    //Türkçe karakter sorunu yaşamamak için htmlspecialchars() kullanırız
    $baslik = htmlspecialchars($_POST["baslik"], ENT_QUOTES, 'UTF-8');
    $alt_baslik = htmlspecialchars($_POST["alt_baslik"], ENT_QUOTES, 'UTF-8');
    $aciklama = htmlspecialchars($_POST["aciklama"], ENT_QUOTES, 'UTF-8');
    $aktif = htmlspecialchars($_POST["aktif"], ENT_QUOTES, 'UTF-8');

    $ekle = $db->prepare("INSERT INTO `sports` (`baslik`, `alt_baslik`, `aciklama`, `aktif`) VALUES
    (:baslik, :alt_baslik, :aciklama, :aktif) ");
    $ekle->bindValue(":baslik", $baslik, PDO::PARAM_STR);  //string
    $ekle->bindValue(":alt_baslik", $alt_baslik, PDO::PARAM_STR);  //string
    $ekle->bindValue(":aciklama", $aciklama, PDO::PARAM_STR);  //string
    $ekle->bindValue(":aktif", $aktif, PDO::PARAM_INT);  //int

    if($ekle->execute()) {
        //execute ile çalışıp çalışmadığını kontrol ederiz
        //eğer düzgün çalışırsa header ile blog_sports.php sayfasına yönlendiririz
        header("Location: blog_sports.php?i=ekle");  //i ile bir değişken yollayalım.
    }
    else {
        //print_r($ekle->errorInfo());  //hata varsa bize bilgi verir
        header("Location: blog_sports.php?i=hata"); // eğer hata varsa blog_sports.php sayfasında bar kısmında i=hata yazar
    }
    //Bu şekilde çalıştırınca veri tabanına eklendi.
}
        
?>

    <div id="wrapper">

        <?php require_once 'inc-menu.php'; ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add New Sports Article</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="blog_sports.php" class="btn btn-primary"> < Go Back to the List!</a>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="" method="POST" enctype="multipart/form-data">
    
                                        <div class="form-group">
                                            <label>Başlık</label>
                                            <input class="form-control" name="baslik" placeholder="Başlık Giriniz">
                                        </div>

                                        <div class="form-group">
                                            <label>Alt Başlık</label>
                                            <input class="form-control" name="alt_baslik" placeholder="Alt Başlık Giriniz">
                                        </div>


                                        
                                        <div class="form-group">
                                            <label>Açıklama</label>
                                            <textarea class="form-control" name="aciklama" id="mytextarea" rows="3"></textarea>
                                        </div>

                                        
                                        
                                        <div class="form-group">
                                            <label>Durum</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="aktif"  value="1" checked>Aktif
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="aktif"  value="0">Pasif
                                                </label>
                                            </div>
                                    
                                        </div>

                                        <input type="submit" name="submit" value="Kaydet" class="btn btn-default">
                                        <button type="reset" class="btn btn-default">Temizle</button>
                                    </form>
                                </div>
                                
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <script src='../js/tinymce.min.js'></script>

    
    <script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>

</body>

</html>

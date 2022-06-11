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

    <title>Admin | Update Sports Articles</title>

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

//blog düzenleme işlmei için id'yi çekicez
@$id = $_GET["id"];

//düzenle butonuna basılınca id'si seçili olan verinin bilgileri düzenleme ekranındaki tabloda görülmeli

$cek = $db->prepare("SELECT * FROM `sports` WHERE `id` = :id");
$cek->bindValue(":id", $id, PDO::PARAM_INT);
$cek->execute();
$row = $cek->fetch(PDO::FETCH_ASSOC); //row değişkeni ile tablodan gelen verileri eilimize alıyoruz

if(@$_POST["submit"]){
    //Türkçe karakter sorunu yaşamamak için htmlspecialchars() kullanırız
    $baslik = htmlspecialchars($_POST["baslik"], ENT_QUOTES, 'UTF-8');
    $alt_baslik = htmlspecialchars($_POST["alt_baslik"], ENT_QUOTES, 'UTF-8');
    $aciklama = htmlspecialchars($_POST["aciklama"], ENT_QUOTES, 'UTF-8');
    $aktif = htmlspecialchars($_POST["aktif"], ENT_QUOTES, 'UTF-8');

    $guncelle = $db->prepare("UPDATE `sports` SET `baslik` = :baslik, `alt_baslik` = :alt, `aciklama` = :aciklama, `aktif` = :aktif
    WHERE `id` = :id");
    $guncelle->bindValue(":baslik", $baslik, PDO::PARAM_STR);
    $guncelle->bindValue(":alt", $alt_baslik, PDO::PARAM_STR);
    $guncelle->bindValue(":aciklama", $aciklama, PDO::PARAM_STR);
    $guncelle->bindValue(":aktif", $aktif, PDO::PARAM_INT); //1(aktif) ya da 0(pasif)
    $guncelle->bindValue(":id", $id, PDO::PARAM_INT);


    if($guncelle->execute()) {
        //execute ile çalışıp çalışmadığını kontrol ederiz
        //eğer düzgün çalışırsa header ile blog.php sayfasına yönlendiririz
        header("Location: blog_sports.php?i=ekle");  //i ile bir değişken yollayalım.
    }
    else {
        //print_r($ekle->errorInfo());  //hata varsa bize bilgi verir
        header("Location: blog_sports.php?i=hata"); // eğer hata varsa blog.php sayfasında bar kısmında i=hata yazar
    }
    //Bu şekilde çalıştırınca veri tabanına eklendi.
}
        
?>


    <div id="wrapper">

        <?php require_once 'inc-menu.php'; ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Update Record (<?= $id ?>) </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="blog_sports.php"> < Sports Blog Lists </a>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="" method="POST" enctype="mutipart/form-data">

                                        <div class="form-group">
                                            <label>Başlık</label>
                                            <input class="form-control" name="baslik" value="<?= $row["baslik"] ?>" 
                                                placeholder="Başlık Giriniz...">
                                        </div>

                                        <div class="form-group">
                                            <label>Altbaşlık</label>
                                            <input class="form-control" name="alt_baslik" value="<?= $row["alt_baslik"] ?>" 
                                                placeholder="Alt başlık Giriniz...">
                                        </div>


                                        <div class="form-group">
                                            <label>Açıklama</label>
                                            <textarea class="form-control" id="mytextarea" rows="3"  name="aciklama"> 
                                                <?= $row["aciklama"] ?> 
                                            </textarea>
                                        </div>

                                        
                                        <div class="form-group">
                                            <label>Durum</label>

                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="aktif"  value="1" 
                                                    <?php
                                                    //kısa if-else kullanımı
                                                    echo ($row["aktif"] == 1) ? 'checked' : '';
                                                    ?>
                                                    >Aktif
                                                </label>
                                            </div>

                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="aktif"  value="0"
                                                    <?php
                                                    //kısa if-else kullanımı
                                                    echo ($row["aktif"] == 0) ? 'checked' : '';
                                                    ?>
                                                    >Pasif
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


    <!-- Tiny text editör için link -->
    <script src="../js/tinymce.min.js" referrerpolicy="origin"></script>

    <!-- Tiny text editör text area için link -->
    <script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>

</body>

</html>
<?php 
// Veri tabanı bağlantısı ve bazı fonksiyonları burada bulunduracağız.

// Türkçe karakter hatalarının önüne geçmek için gerekli olan kod:  
header("Content-Type: text/html; charset=utf-8");

// Türkçe dil desteği
setlocale(LC_ALL, 'tr_TR.UTF-8', 'tr_TR', 'tr', 'turkish');

// Database bağlantı: 

$DBhost = "localhost";
$DBuser = "root";
$DBpass = "Liverpool34!";
$DBname = "info";   // hakkımızda yazısının bulunduğu database

try{
    $db = new PDO("mysql:host=$DBhost;dbname=$DBname", $DBuser, $DBpass);
} catch(PDOException $e) {
    echo $e->getMessage();
}

// Türkçe karakter sorununa karşı
$db->exec("SET NAMES 'utf8'; SET CHARSET 'utf8'");


// define("_URL", "http://localhost:8080/php/blogger/");

?>


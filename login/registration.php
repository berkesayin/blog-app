<?php

/*Kişi ekleme formunu oluşturduklatn sonra form elementlerine girilen bilgileri veritabanına kaydetmek için 
gerekli olan kodu yazalım. Bir formu gönderebilmek için 2 şeye ihtiyacımız vardı. Birincisi metoda.(GET ya da POST)
İkinicisi de action attribute'u, yani bu formu nereye göndereceğimiz.*/ 

if($_GET) {
    //GET ile çektiğimiz verileri birer değişkene atayalım
    $id = $_GET["id"];
    $name = $_GET["name"];
    $surname = $_GET["surname"];
    $city = $_GET["city"];
    $birthdate = $_GET["birthdate"];
    $email = $_GET["email"];
    $password = $_GET["password"];
    $gender = $_GET["gender"];

    try {
        $db = new PDO("mysql:host=localhost;dbname=customers;charset=utf8", "root", "Liverpool34!");
    }catch(PDOException $e){
        echo e->getMessage();
    }

    $data = array(
        "id" => $id,
        "name" => $name,
        "surname" => $surname,
        "city" => $city,
        "birthdate" => $birthdate,
        "email" => $email,
        "password" => $password,
        "gender" => $gender,        
    );
    //şu anda GET metodu ile çektiğimiz verileri data isimli arrayin içerisine attık

    $insert = $db->prepare("INSERT INTO customersinfo SET
        id=:id,
        name=:name,
        surname=:surname,
        city=:city,
        birthdate=:birthdate,
        email=:email,
        password=:password,
        gender=:gender  
    ");

    //data arrayininin içindeki verileri insert ile atalım
    $result = $insert->execute($data);

    if($result) {
        echo "Kayıt işlemi başarılıdır.";
    }
    else{
        echo "Kayıt işlemi başarılı değildir.";
    }
}


?>
<?php
// Pertemuan 2 - PHP Dasar
// Sintaks PHP

// Standar Output
// echo, print
// print_r untuk mencetak array
// var_dump untuk melihat isi variabel dan untuk debbuging

// Penulisan Sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// Variabel dan Tipe Data
// Variabel
// Variabel tidak boleh diawali dengan angka, namun boleh mengandukng angka
// $nama = "Wangsit Hardianto";
// echo "Hallo, nama saya $nama";

// Operator
// aritmatika (+ - * / %)
// $x = 10;
// $y = 5;
// echo $x * $y;

// Penggabung String / concatenation / concat
// .
// $nama_depan = "Wangsit";
// $nama_belakang = "Hardianto";
// echo $nama_depan . " " . $nama_belakang;

// Assignment
// =, +=, -=, *=, /=, %=, .=
// $x = 1;
// $x -= 5;
// echo $x;
// $nama = "Wangsit";
// $nama .= " ";
// $nama .= "Hardianto";
// echo $nama;

// Perbandingan 
// <, >, <=, >=, ==, !=
// var_dump(1 > 5);
// var_dump(1 == "1");

// Identitas
// ===, !==
// var_dump(1 === "1");

// Logika
// && (dan), ||(atau), !(tidak)
$x = 10;
var_dump ($x < 20 && $x % 2 == 0);
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Hallo, Selamat Datang <?php echo $nama; ?> </h1>
    <p><?php echo "Ini adalah paragraf"; ?> </p>
</body>
</html> -->
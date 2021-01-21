<?php 

// membuat data menjadi null / kosong

$name = "Rizki";
$name = null;

$age = null;

echo "Name : ";
echo $name;
echo "<br>";

echo "Age : ";
echo $age;
echo "<br>";

// mengecek data null
echo "Is Name Null? : ";
echo var_dump(is_null($name));
echo "<br>";

// menghapus variable dgn unset


$contoh = "Rizki";
unset($contoh);

$contoh = " Agung";
$contoh = null;

// isset untuk mengecek variabel ada / tidak
var_dump(isset($contoh));










 ?>
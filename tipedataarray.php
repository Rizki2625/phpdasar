<?php 

$values = array( 10, 9, 8, 7.5 );
var_dump($values);
echo "<br>";

$names = ["Eko", "Kurniawan", "Khenedy"];
var_dump($names);
echo "<br>";

// mengakses data diarray pd nomor index
var_dump($names[0]);
echo "<br>";

// mengubah data pd nomor index dgn value baru
$names[0] = "budi";
var_dump($names);
echo "<br>";

// menghapus data di array
unset($names[1]);
var_dump($names);
echo "<br>";

// menambah data di array pd posisi plng belakang
$names[] = "Joko";
var_dump($names);
echo "<br>";

// mengambil total data di array
var_dump(count($names));
echo "<br>";


// Kode membuat MAP
$eko = array(
	"id" => "eko",
	"name" => "Eko Kurniawan",
	"age" => 30
);
var_dump($eko);
echo "<br>";

var_dump($eko["age"]);
echo "<br>";

$budi = [
	"id" => "budi",
	"name" => "Budi Nugraha",
	"age" => 25

];
var_dump($budi);
echo "<br>";


// Kode Array didalam Array
$eko2 = array(
	"id" => "eko",
	"name" => "Eko Kurniawan",
	"age" => 30,
	"address" => [
		"city" => "Jakarta",
		"country" => "Indonesia"
	]
);
var_dump($eko2);
echo "<br>";

var_dump($eko2["name"]);
echo "<br>";
var_dump($eko2["address"]["country"]);










 ?>
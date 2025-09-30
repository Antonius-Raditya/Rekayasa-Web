<?php
// Membuat array
$Buah = array(
    "Apel"    => ["Merah","Hijau"],
    "Anggur"  => "Ungu",
    "Pisang"  => "Kuning"
);

//encode ke JSON
echo "Hasil JSON Encode:<br>";
echo json_encode($Buah);
echo "<br><br>";


//Variabel JSON string
$json_string = '{"Apel":["Merah","Hijau"],"Anggur":"Ungu","Pisang":"Kuning"}';

// Decode ke bentuk PHP Object
$obj = json_decode($json_string);
echo "PHP Object:<br>";
echo "Apel: " . $obj->Apel[0] . "<br>";
echo "Anggur: " . $obj->Anggur . "<br>";
echo "Pisang: " . $obj->Pisang . "<br><br>";

// Decode ke bentuk PHP Array
$arr = json_decode($json_string, true);
echo "PHP Array:<br>";
echo "Apel: " . $arr["Apel"][1] . "<br>";
echo "Anggur: " . $arr["Anggur"] . "<br>";
echo "Pisang: " . $arr["Pisang"] . "<br>";
?>
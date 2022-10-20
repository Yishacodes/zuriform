<?php
$name=$_POST['name'];
$email=$_POST['email'];
$date=$_POST['date'];
$gender=$_POST['gender'];
$country=$_POST['country'];


echo "NAME: " . $name  ." <br>";

echo "EMAIL: " . $email  ." <br>";

echo "DATE: " . $date  ." <br>";

echo "GENDER: " . $gender  ." <br>";

echo "COUNTRY: " . $country ." <br>";

$filename="./user_data.csv";
$handle=fopen($filename,"w");
fwrite($handle, '$name');
fclose($handle)


?>



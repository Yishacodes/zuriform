<?php
$name=$_POST['name'];
$email=$_POST['email'];
$date=$_POST['date'];
$gender=$_POST['gender'];
$country=$_POST['country'];

echo print_r($_POST)

/*
echo "NAME: " . $name  ." <br>";

echo "EMAIL: " . $email  ." <br>";

echo "DATE: " . $date  ." <br>";

echo "GENDER: " . $gender  ." <br>";

echo "COUNTRY: " . $country ." <br>";
*/


$_POST="./user_data.csv";
$handle=fopen($_POST,"w");
fwrite($handle, '$_POST[name,);
fclose($handle)


?>



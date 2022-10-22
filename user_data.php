<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $gender= $_POST['gender'];
    $country= $_POST['country'];


registerUser($name, $email, $date, $gender, $country);
}

function registerUser($name, $email, $date, $gender,$country){

$file=('user_data.csv');
$handle=fopen($file, 'w');
 fwrite($handle, 'registerUser');
fclose($handle);
}
 

echo print_r($_POST);
?>





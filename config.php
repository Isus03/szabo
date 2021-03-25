<?php

$dbServername = "portfolio2003.database.windows.net";
$dbUsername = "luka";
$dbPassword = "Luka2003.";
$dbName = "klijenti";
$posao = $_POST['posao'];
$potreba = $_POST['potreba'];
$kvadratura = $_POST['kvadratura']; 

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
if (mysqli_connect_error()) {
  die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
} else {

}


if (!empty($posao) || !empty($potreba) || !empty($kvadratura)) {
  #code...
} else {
  echo "All field are required";
  die();
}
$INSERT = "INSERT Into Kontakti (Posao, Podaci, kvadratura) values(?, ?, ?)";


?>
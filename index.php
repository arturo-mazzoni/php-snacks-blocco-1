<?php
$name = $_GET["name"];
$email = $_GET["email"];
$age = $_GET["age"];

if (strlen($name) > 3 && !empty($email) && strpos($email, "@") && strpos($email, ".") && is_numeric($age)){
  echo "Accesso riuscito";
} else {
  echo "Accesso negato";
}
?>

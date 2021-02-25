<?php
  $matches = [
    [
      "casa" => "Fortitudo",
      "ospite" => "Virtus",
      "puntiCasa" => "54",
      "puntiOspite" => "43"
    ],
    [
      "casa" => "Olimpia Milano",
      "ospite" => "Cantu",
      "puntiCasa" => "55",
      "puntiOspite" => "60",
    ]
  ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  <?php for ($i = 0; $i < count($matches); $i++) { ?>
    <h1> <?php echo $matches[$i]["casa"] . " - " .$matches[$i]["ospite"] ."  |  " .$matches[$i]["puntiCasa"] . " - " .$matches[$i]["puntiOspite"] ?> </h1>
  <?php } ?>


</body>
</html>

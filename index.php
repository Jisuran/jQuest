<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>demoPHP</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
  <script src="main.js"></script>
</head>
<body>
  <?php
    require 'Autoloader.php';
    Autoloader::register();
    $fesse = new Arcaniste('Fesse');
    $cravache = new Arcaniste('Cravache');
    $fesse->attaque($cravache);
    $fesse->attaque($cravache);
    $cravache->attaque($fesse);
    $fesse->attaque($cravache);
    $fesse->attaque($cravache);
    $cravache->attaque($fesse);
    $fesse->attaque($cravache);
    $fesse->attaque($cravache);
    $cravache->attaque($fesse);
    $fesse->attaque($cravache);
    $fesse->attaque($cravache);
    $cravache->attaque($fesse);
    $fesse->attaque($cravache);
    echo $fesse->mort();
    var_dump($fesse,$cravache);
    FichePersonnage::personnageForm($fesse);
    FichePersonnage::personnageForm($cravache);
	
  ?>
</body>
</html>
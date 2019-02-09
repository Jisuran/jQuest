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
    if(isset($_GET['combat'])){
      include_once 'vues/combat.php';
    }else{
      include_once 'vues/creation.php';
    }
  ?>
</body>
</html>
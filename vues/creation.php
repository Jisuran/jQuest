<?php
  require 'class\ClassAutoloader.php';
  ClassAutoloader::register();

  $jisuran = new Arcaniste('jisuran');
  $nemesis = new Titan('nemesis');
  // $jisuran = isset($_SESSION['jisuran']) ? $_SESSION['jisuran'] : $_SESSION['jisuran'] = new Arcaniste('jisuran');
  // $nemesis = isset($_SESSION['nemesis']) ? $_SESSION['nemesis'] : $_SESSION['nemesis'] = new Titan('nemesis');

  include_once 'vues/combat.php';
?>
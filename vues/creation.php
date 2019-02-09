<?php
  require 'class\ClassAutoloader.php';
  ClassAutoloader::register();

  $jisuran = new Arcaniste('jisuran');
  $nemesis = new Titan('nemesis');

  include_once 'vues/combat.php';
?>
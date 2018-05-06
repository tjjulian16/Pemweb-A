<?php

require_once("kutu.class.php");
require_once("binatang.class.php");
require_once("kucing.class.php");

$anggora = new Kucing;

$kutu1 = new Kutu;
$kutu2 = new Kutu;

$anggora->garukGaruk(); echo "<br>";
$anggora->bicara();echo "<br>";

$anggora->tambahKutu($kutu1);
$anggora->tambahKutu($kutu2);
$anggora->tambahKutu($kutu1);

$anggora->makan();


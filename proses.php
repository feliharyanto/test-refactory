<?php

if(!isset($_POST['angka1']))
  die();

$a= array(
  $_POST["angka1"],
  $_POST["angka2"],
  $_POST["angka3"],
  $_POST["angka4"],
  $_POST["angka5"],
);
echo "Angka yang dimasukan ";
$angka= implode(", ", $a);
echo ($angka);
echo " <br> Nilai Min : ".min($a);
echo "<br> Nilai Max : ".max($a);
echo "<br> Nilai Rata-rata : ".array_sum($a)/count($a);

?>
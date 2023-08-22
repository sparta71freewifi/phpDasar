<?php

$jam;
$menit;
$detik;
$totaldetik;

$totaldetik = 5440;

$jam = floor($totaldetik / 3600);

$sisadetik = $totaldetik % 3600;

$menit = floor($sisadetik / 60);

$detik = $sisadetik % 60;

echo "total detik: $totaldetik detik/n "
;

echo "hasil konversi: $jam jam, $menit menit, $detik detik/n "
;
?>
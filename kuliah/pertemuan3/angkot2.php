<?php 
$jumlah_angkot = 10;
$no_angkot = 1;
$angkot_rusak = 4;
while($no_angkot <= $jumlah_angkot - $angkot_rusak) {
  echo "Angkot no.$no_angkot beroperasi dengan baik.<br>";
  $no_angkot++;
}
for($no_angkot; $no_angkot <= $jumlah_angkot; $no_angkot++) {
  echo "Angkot no.$no_angkot sedang rusak. <br>";
}
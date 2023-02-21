<?php 
echo "Mulai. <br>";
// 1. Inisialisasi / nilai awal
// 2. kondisi terminasi / kapan pengulanganya berhenti
// 3. increment / decrement
$nilai_awal = 1; // inisialisasi
while($nilai_awal <= 10) { // kondisi terminasi
  echo "Hello World $nilai_awal x<br>";
  $nilai_awal++; // increment
}
echo "Selesai. <br>";

echo "<hr>";

echo "Mulai. <br>";
for($i = 1; $i <= 5; $i++) {
  echo "Hello World $i x. <br>";
}
echo "Selesai. <br>";
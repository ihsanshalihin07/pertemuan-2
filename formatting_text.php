<?php

$txt = "kampus";
printf("Aku belajar pemrograman PHP di %s <br>", $txt);

// %d untuk bilangan desimal (integer);
// %f untuk pecahan (float);
// %b untuk boolean.

$harga = 100000;
// jika kita cetak dengan echo:
echo "Harga  barangnya adalah Rp $harga";

// jika kita cetak dengan printf
printf("Harga barangnya adalah Rp %.2f", $harga);


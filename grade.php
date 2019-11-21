<?php

$angka = $_POST['angka'];

function cekgenap($value) {
    $hasil = $value % 2;

    if ($value >= 90 && $value ) {
        if ($hasil == 0) {
            $angka = 'Genap'; {
                $angka = $value.' A & Bilangan Genap';
            }
        } else {
            $angka = $value.' A & Bilangan Ganjil';
        }
    }

if ($value >= 80 && $value<=89) {
        if ($hasil == 0) {
            $angka = 'Genap'; {
                $angka = $value.' B & Bilangan Genap';
            }
        } else {
            $angka = $value.' B & Bilangan Ganjil';
        }
    }
    if ($value >= 70 && $value<=79) {
        if ($hasil == 0) {
            $angka = 'Genap'; {
                $angka = $value.' C & Bilangan Genap';
            }
        } else {
            $angka = $value.' C & Bilangan Ganjil';
        }
    }
    if ($value >= 60 && $value<=69) {
        if ($hasil == 0) {
            $angka = 'Genap'; {
                $angka = $value.' D & Bilangan Genap';
            }
        } else {
            $angka = $value.' D & Bilangan Ganjil';
        }
    }
    if ($value >= 0 && $value<=59) {
        if ($hasil == 0) {
            $angka = 'Genap'; {
                $angka = $value.' E & Bilangan Genap';
            }
        } else {
            $angka = $value.' E & Bilangan Ganjil';
        }
    }

         return $angka;
}

echo cekgenap($angka);
?>
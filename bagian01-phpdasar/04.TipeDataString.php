<?php

echo 'Nama : ';
echo 'Ayunda Novani';
echo "\n";

echo "Nama : ";
echo "Ayunda\t Novani\n";

echo <<<AYUNDA
Selamat Belajar PHP
sekarang, kita belajar tipe data string
ini adalah cara ke-3 membuat string
bisa menggunakan heredoc
AYUNDA;

echo <<<'AYUNDA'
Selamat Belajar PHP
sekarang, kita belajar tipe data string
ini adalah cara ke-4 membuat string
bisa menggunakan Nowdoc
AYUNDA;
?>
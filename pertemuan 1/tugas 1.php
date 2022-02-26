<?php
    $nama = 'farhan';
    $umur = 19;
    $berat = 52;

    echo 'Nama saya '.$nama.' umur saya '.$umur.' berat saya '.$berat;
    echo " <br ?>";
    echo "Nama saya $nama, umur saya $umur, berat saya $berat";
    echo " <br ?>";

    // Variabel sistem
    // variabel built in PHP
    echo 'Dokumen Root '.$_SERVER["DOCUMENT_ROOT"];
    echo " <br ?>";

    // Variabel Constan
    // adalah variable yang tidak bisa diubah nilainya
    define('makanan', 'sushi');
    // define('makanan', 'jambu');
    echo makanan;
?>
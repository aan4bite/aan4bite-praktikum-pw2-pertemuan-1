<?php

    $mahasiswa = ['farhan', 'hanfi', 'dea'];

    echo $mahasiswa[0];
    echo "<br>";
    echo $mahasiswa[1];
    echo "<br>";
    echo $mahasiswa[2];
    echo "<br>";
    // var-damp($mahasiswa)
    // perulangan
    foreach ($mahasiswa as $mhs) {
        echo $mhs;
        echo "<br>";
    }

    // array multi dimensi
    $mahasiswa = [
        ["nama" => "farhan", "nim" => "0110121280", "uts" => 100, "uas" => 100],
        ["nama" => "lala", "nim" => "0110121261", "uts" => 10, "uas" => 10],
    ];

    foreach ($mahasiswa as $mhs) {
        echo $mhs ["nama"];
        echo "<br>";
        }
    ?>
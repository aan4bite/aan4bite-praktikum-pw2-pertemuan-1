<?php $mahasiswa = [
        ["id" => 1, "nama" => "farhan", "nim" => "0110121280", "uts" => 100, "uas" => 100],
        ["id" => 2, "nama" => "lala", "nim" => "0110121261", "uts" => 10, "uas" => 10],
    ];
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <th>ID</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>UTS</th>
            <th>UAS</th>
        </thead>

        <tbody>
            <?php foreach ($mahasiswa as $mhs): ?>
                <tr>
                    <td><?= $mhs["id"] ?></td>
                    <td><?= $mhs["nama"] ?></td>
                    <td><?= $mhs["nim"] ?></td>
                    <td><?= $mhs["uts"] ?></td>
                    <td><?= $mhs["uas"] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
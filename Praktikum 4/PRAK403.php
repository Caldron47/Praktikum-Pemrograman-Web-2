<?php 
    $data = 
    [
        [
            "no" => 1,
            "nama" => "Ridho",
            "matkul" => ["Pemrograman I", "Praktikum Pemrograman I", "Pengantar Lingkungan Lahan Basah", "Arsitektur Komputer"],
            "sks" => [2, 1, 2, 3]
        ],
        [
            "no" => 2,
            "nama" => "Ratna",
            "matkul" => ["Basis Data I", "Praktikum Basis Data I", "Kalkulus"],
            "sks" => [2, 1, 3]
        ],
        [
            "no" => 3,
            "nama" => "Tono",
            "matkul" => ["Rekayasa Perangkat Lunak", "Analisis dan Perancangan Sistem", "Komputasi Awan", "Kecerdasan Bisnis"],
            "sks" => [3, 3, 3, 3]
        ]
    ];

    for ($i=0; $i < count($data); $i++) { 
        $data[$i]["total_sks"] = array_sum($data[$i]["sks"]);
        if ($data[$i]["total_sks"] < 7) {
            $data[$i]["keterangan"] = "Revisi KRS";
        } else {
            $data[$i]["keterangan"] = "Tidak Revisi";
        }
    }    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAKTIKUM 403</title>
    <style>
        table, th, td{
            border: 1px solid;
            border-collapse: collapse;
            margin-top: 15px;
            padding: 5px 20px 10px 5px;
        }
        th {text-align: left; background-color: #CCCDCC;}
        .merah {background-color: red;}
        .hijau {background-color: green;}
    </style>
</head>
<body>
    <table>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Mata Kuliah diambil</th>
        <th>SKS</th>
        <th>Total SKS</th>
        <th>Keterangan</th>
    </tr>
    <?php 
        for ($i = 0; $i < count($data); $i++) { 
    ?>
            <tr>
                <td><?php echo $data[$i]["no"] ?></td>
                <td><?php echo $data[$i]["nama"] ?></td>
                <td><?php echo $data[$i]["matkul"][0] ?></td>
                <td><?php echo $data[$i]["sks"][0] ?></td>
                <td><?php echo $data[$i]["total_sks"] ?></td>
                <?php 
                    if ($data[$i]["keterangan"] == "Revisi KRS") {
                        echo "<td class = 'merah'>" . $data[$i]["keterangan"] . "</td>";
                    } else {
                        echo "<td class = 'hijau'>" . $data[$i]["keterangan"] . "</td>" ;
                    }
                ?>
            </tr>
    <?php
            if (count($data[$i]["matkul"]) > 1) {
                for ($j=1; $j < count($data[$i]["matkul"]); $j++) {  
    ?>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><?php echo $data[$i]["matkul"][$j] ?></td>
                        <td><?php echo $data[$i]["sks"][$j] ?></td>
                        <td></td>
                        <td></td>
                    </tr>
    <?php        
                }
            } 
        } 
    ?>
    </table>
</body>
</html>
<?php 
    $data =
    [
        [
            "nama" => "Andi",
            "nim" => "2101001",
            "uts" => 87,
            "uas" => 65
        ],
        [
            "nama" => "Budi",
            "nim" => "2101002",
            "uts" => 76,
            "uas" => 79
        ],
        [
            "nama" => "Tono",
            "nim" => "2101003",
            "uts" => 50,
            "uas" => 41
        ],
        [
            "nama" => "Jessica",
            "nim" => "2101004",
            "uts" => 60,
            "uas" => 75
        ],
    ];

    for ($i=0; $i < count($data); $i++) { 
        $data[$i]["nilai_akhir"] = $data[$i]["uts"] * (40/100) + (60/100) * $data[$i]["uas"];
    }
    
    for ($i=0; $i < count($data); $i++) { 
        if ($data[$i]["nilai_akhir"] >= 80) {
            $data[$i]["huruf"] = "A";
        } elseif ($data[$i]["nilai_akhir"] >= 70 && $data[$i]["nilai_akhir"] <= 79) {
            $data[$i]["huruf"] = "B";
        } elseif ($data[$i]["nilai_akhir"] >= 60 && $data[$i]["nilai_akhir"] <= 69) {
            $data[$i]["huruf"] = "C";
        } elseif ($data[$i]["nilai_akhir"] >= 50 && $data[$i]["nilai_akhir"] <= 59) {
            $data[$i]["huruf"] = "D";
        } elseif ($data[$i]["nilai_akhir"] < 50) {
            $data[$i]["huruf"] = "E";
        } 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAKTIKUM 401</title>
    <style>
        table, th, td{
            border: 1px solid;
            border-collapse: collapse;
            margin-top: 15px;
            padding: 5px 30px 10px 5px;
        }
        th {text-align: left; background-color: #CCCDCC;}
    </style>
</head>
<body>
    <table>
    <tr>
        <th>Nama</th>
        <th>NIM</th>
        <th>UTS</th>
        <th>UAS</th>
        <th>Nilai Akhir</th>
        <th>Nilai Huruf</th>
    </tr>
    <?php for ($i = 0; $i < count($data); $i++) { ?>
    <tr>
        <td><?php echo $data[$i]["nama"] ?></td>
        <td><?php echo $data[$i]["nim"] ?></td>
        <td><?php echo $data[$i]["uts"] ?></td>
        <td><?php echo $data[$i]["uas"] ?></td>
        <td><?php echo $data[$i]["nilai_akhir"] ?></td>
        <td><?php echo $data[$i]["huruf"] ?></td>
    </tr>
    <?php } ?>
    </table>
</body>
</html>
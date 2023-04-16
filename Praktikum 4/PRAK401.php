<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAKTIKUM 401</title>
    <style>
        table, td{text-align : center; border-collapse : collapse;}
    </style>
</head>
<body>
    <form action="" method="post">
        <label for="angka1">Panjang</label>
        <input type="number" name="angka1" required value="<?php echo isset($_POST['angka1']) ? $_POST['angka1'] : ''; ?>">
        <br>
        <label for="angka2">Lebar</label>
        <input type="number" name="angka2" required value="<?php echo isset($_POST['angka2']) ? $_POST['angka2'] : ''; ?>">
        <br>
        <label for="data">Nilai</label>
        <input type="text" name="data" required value="<?php echo isset($_POST['data']) ? $_POST['data'] : ''; ?>">
        <br>
        <button type="submit" name="cetak" >Cetak</button>
    </form>
    <?php 
        if (isset($_POST['cetak'])) {
            $data = $_POST['data'];
            $panjang = $_POST['angka1'];
            $lebar = $_POST['angka2'];
            $dataBaru = explode(" ", $data);
            $arrBaru = array_chunk($dataBaru, $lebar);

            if ($panjang * $lebar == count($dataBaru)) {
                echo "<table border=1>";
                for ($i=0; $i < $panjang; $i++) { 
                    echo "<tr>";
                    for ($j=0; $j < $lebar; $j++) { 
                        echo "<td width=25px height=25px>" . $arrBaru[$i][$j] . "</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "Panjang nilai tidak sesuai dengan ukuran matriks";
            }
        }
    ?>
</body>
</html>
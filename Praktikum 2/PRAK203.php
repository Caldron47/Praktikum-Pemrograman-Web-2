<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>PRAK203</title>
  </head>
  <body>
  <form action="" method="get">
        <div>
            <label for="suhu">Suhu</label>
            <input type="text" id="suhu" name="suhuinput" value="<?php echo isset($_GET['suhuinput']) ? $_GET['suhuinput'] : ''; ?>">
            Dari : <br>
            <input type="radio" name="suhuAsal" id="suhuAsalc" value="c" <?php if(isset($_GET['suhuAsal']) && $_GET['suhuAsal'] == 'c') echo 'checked'; ?>>
            <label for="suhuAsalc">Celcius</label>
            <br>
            <input type="radio" name="suhuAsal" id="suhuAsalf" value="f" <?php if(isset($_GET['suhuAsal']) && $_GET['suhuAsal'] == 'f') echo 'checked'; ?>>
            <label for="suhuAsalf">Fahrenheit</label>
            <br>
            <input type="radio" name="suhuAsal" id="suhuAsalr" value="r" <?php if(isset($_GET['suhuAsal']) && $_GET['suhuAsal'] == 'r') echo 'checked'; ?>>
            <label for="suhuAsalr">Reamur</label>
            <br>
            <input type="radio" name="suhuAsal" id="suhuAsalk" value="k" <?php if(isset($_GET['suhuAsal']) && $_GET['suhuAsal'] == 'k') echo 'checked'; ?>>
            <label for="suhuAsalk">Kelvin</label>
            <br>
            Ke : <br>
            <input type="radio" name="suhuTujuan" id="suhuTujuanc" value="c" <?php if(isset($_GET['suhuTujuan']) && $_GET['suhuTujuan'] == 'c') echo 'checked'; ?>>
            <label for="suhuTujuanc">Celcius</label>
            <br>
            <input type="radio" name="suhuTujuan" id="suhuTujuanf" value="f" <?php if(isset($_GET['suhuTujuan']) && $_GET['suhuTujuan'] == 'f') echo 'checked'; ?>>
            <label for="suhuTujuanf">Fahrenheit</label>
            <br>
            <input type="radio" name="suhuTujuan" id="suhuTujuanr" value="r" <?php if(isset($_GET['suhuTujuan']) && $_GET['suhuTujuan'] == 'r') echo 'checked'; ?>>
            <label for="suhuTujuanr">Reamur</label>
            <br>
            <input type="radio" name="suhuTujuan" id="suhuTujuank" value="k" <?php if(isset($_GET['suhuTujuan']) && $_GET['suhuTujuan'] == 'k') echo 'checked'; ?>>
            <label for="suhuTujuank">Kelvin</label>
        </div>

        <div> 
            <button type="submit" name="sb">Konversi</button>
        </div>

    </form>
    <?php 
        if(isset($_GET['sb']) && isset($_GET['suhuinput']) && isset($_GET['suhuAsal']) && isset($_GET['suhuTujuan'])){
            $suhu = $_GET['suhuinput'];
            $suhuAsal = $_GET['suhuAsal'];
            $suhuTujuan = $_GET['suhuTujuan'];
            echo '<h2>Hasil Konversi: ';
            if($suhuAsal == "c" && $suhuTujuan == "r"){
                $hasil = $suhu * 4/5;
                echo "Hasil : $hasil °R";
            }else if($suhuAsal == "c" && $suhuTujuan == "f"){
                $hasil = $suhu * 9/5 + 32;
                echo "Hasil : $hasil °F";
            }else if($suhuAsal == "c" && $suhuTujuan == "k"){
                $hasil = $suhu + 273.15;
                echo "Hasil : $hasil °K";
            }else if($suhuAsal == "f" && $suhuTujuan == "c"){
                $hasil = 5/9 * ($suhu - 32);
                echo "Hasil : $hasil °C";
            }else if($suhuAsal == "f" && $suhuTujuan == "r"){
                $hasil = 4/9 * ($suhu - 32);
                echo "Hasil : $hasil °R";
            }else if($suhuAsal == "f" && $suhuTujuan == "k"){
                $hasil = 5/9 * ($suhu - 32) + 273.15;
                echo "Hasil : $hasil °K";
            }else if($suhuAsal == "r" && $suhuTujuan == "c"){
                $hasil = $suhu * 5/4;
                echo "Hasil : $hasil °C";
            }else if($suhuAsal == "r" && $suhuTujuan == "f"){
                $hasil = 9/4 * $suhu + 32;
                echo "Hasil : $hasil °F";
            }else if($suhuAsal == "r" && $suhuTujuan == "k"){
                $hasil = 5/4 * $suhu + 273.15;
                echo "Hasil : $hasil °K";
            }else if($suhuAsal == "k" && $suhuTujuan == "c"){
                $hasil = $suhu - 273.15;
                echo "Hasil : $hasil °C";
            }else if($suhuAsal == "k" && $suhuTujuan == "f"){
                $hasil = 9/5 * ($suhu - 273.15) + 32;
                echo "Hasil : $hasil °F";
            }else if($suhuAsal == "k" && $suhuTujuan == "r"){
                $hasil = 4/5 * ($suhu - 273.15);
                echo "Hasil : $hasil °R";
            }else{
                echo "Hasil : $suhu °" . strtoupper($suhuTujuan);
            }
            echo "</h2>";
        }
    ?>
  </body>
</html>

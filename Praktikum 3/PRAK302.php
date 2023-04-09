<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>PRAK302</title>
  </head>
  <body>
    <form method="post">
        <div>
            <label for="tinggi">Tinggi : </label>
            <input type="text" id="tinggi" name="tinggi" required value="<?php echo isset($_POST['tinggi']) ? $_POST['tinggi'] : ''; ?>">
        </div>
        <div>
            <label for="alamat">Alamat Gambar : </label>
            <input type="text" id="alamat" name="alamat" required value="<?php echo isset($_POST['alamat']) ? $_POST['alamat'] : ''; ?>">
        </div>
        <div>
            <button type="submit">Cetak</button>  
        </div>    
    </form>

    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {        
            $tinggi = $_POST["tinggi"];
            $alamat = $_POST["alamat"];
            $i = $tinggi;
            $spasi = 0;
            $j = 0;
            while ($tinggi >= 0) { 
                $tinggi--;
                $i = $tinggi;
                while ($i >= 0) {
                    $i--;
                    echo "<img src='$alamat' width='20' height='20' />";
                }
                echo "<br>";
                while ($j <= $spasi) {
                    $j++;
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                }
                $spasi++;
                $j = 0;
            }   
        } 
    ?>
  </body>
</html>

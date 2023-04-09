<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>PRAK304</title>
  </head>
  <body>
    <?php 
        $jumlah = 0;
        if (isset($_POST['jumlah'])) {
            $jumlah = $_POST['jumlah'];
        } 
        
        if (isset($_POST['tambah'])) {
            $jumlah++;
        } elseif (isset($_POST['kurang'])) {
            $jumlah--;
        }

        if ($jumlah <= 0):
    ?>
        <form method="post">
            <div>
                <label for="jumlah">Jumlah Bintang </label>
                <input type="text" id="jumlah" name="jumlah" required value=<?php echo isset($_POST['jumlah']) ? $jumlah : ''; ?>>
            </div>
            <div>
                <button type="submit">Submit</button>  
            </div>    
        </form>
    <?php 
        elseif ($jumlah > 0):
            echo "Jumlah Bintang : $jumlah<br><br><br>";
            for ($i=0; $i < $jumlah; $i++) { 
                echo "<img src='images/star-images-9441.png' width='50' height='50'>";
            }
    ?>
        <form method="post">
            <div>
                <input type="hidden" name="jumlah" value=<?php echo $jumlah; ?>>
                <button type="submit" name="tambah">Tambah</button>  
                <button type="submit" name="kurang">Kurang</button>  
            </div>
        </form>
    <?php
        endif;
    ?>
  </body>
</html>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>PRAK303</title>
  </head>
  <body>
    <form method="post">
        <div>
            <label for="batasbawah">Batas Bawah : </label>
            <input type="text" id="batasbawah" name="batasbawah" required value="<?php echo isset($_POST['batasbawah']) ? $_POST['batasbawah'] : ''; ?>">
        </div>
        <div>
            <label for="batasatas">Batas Atas : </label>
            <input type="text" id="batasatas" name="batasatas" required value="<?php echo isset($_POST['batasatas']) ? $_POST['batasatas'] : ''; ?>">
        </div>
        <div>
            <button type="submit">Cetak</button>  
        </div>    
    </form>

    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {        
            $bb = $_POST["batasbawah"];
            $ba = $_POST["batasatas"];
            do {
                if (($bb + 7) % 5 == 0) {
                    echo "<img src='images/star-images-9441.png' width='15' height='15'> ";
                } else {
                    echo $bb . " ";
                }
                $bb++;
            } while ($bb <= $ba); 
        } 
    ?>
  </body>
</html>

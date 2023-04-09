<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>PRAK301</title>
    <style>
        .merah{
            color: red;
        }

        .hijau{
            color: green;
        }
    </style>
  </head>
  <body>
    <form method="post">
        <div>
            <label for="jmlpeserta">Jumlah Peserta : </label>
            <input type="text" id="jmlpeserta" name="jmlpeserta" required value="<?php echo isset($_POST['jmlpeserta']) ? $_POST['jmlpeserta'] : ''; ?>">
        </div>
        <div>
            <button type="submit">Cetak</button>  
        </div>    
    </form>

    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {        
            $jp = $_POST["jmlpeserta"];
            $i = 0;
            while ($i < $jp) { 
                $i++;
                if ($i %2 ==0) {
                    echo "<h2 class='hijau'>Peserta ke-$i</h2>";    
                }else{
                    echo "<h2 class='merah'>Peserta ke-$i</h2>";
                }
            }   
        } 
    ?>
  </body>
</html>

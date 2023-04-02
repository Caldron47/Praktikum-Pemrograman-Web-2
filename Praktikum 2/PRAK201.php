<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>PRAK201</title>
  </head>
  <body>
    <form action="" method="get">
        <div> 
            <label for="name1">Nama 1</label>
            <input type="text" id="name1" name="name1" value="<?php echo isset($_GET['name1']) ? $_GET['name1'] : ''; ?>">
        </div>

        <div> 
            <label for="name2">Nama 2</label>
            <input type="text" id="name2" name="name2" value="<?php echo isset($_GET['name2']) ? $_GET['name2'] : ''; ?>">
        </div>

        <div> 
            <label for="name3">Nama 3</label>
            <input type="text" id="name3" name="name3" value="<?php echo isset($_GET['name3']) ? $_GET['name3'] : ''; ?>">
        </div>

        <div> 
            <button type="submit">Urutkan</button>
        </div>
    </form>

    <?php   
        if(isset($_GET['name1']) && isset($_GET['name2']) && isset($_GET['name3'])){
            $arrName = array($_GET['name1'], $_GET['name2'], $_GET['name3']);
            echo "<h2>Hasil</h2>";
            if($arrName[0] < $arrName[1] && $arrName[0] < $arrName[2]){
                if($arrName[1] < $arrName[2]){
                    echo $arrName[0] . "<br>";
                    echo $arrName[1] . "<br>";
                    echo $arrName[2] . "<br>";
                }else{
                    echo $arrName[0] . "<br>";
                    echo $arrName[2] . "<br>";
                    echo $arrName[1] . "<br>";
                }
            }else if($arrName[1] < $arrName[0] && $arrName[1] < $arrName[2]){
                if($arrName[0] < $arrName[2]){
                    echo $arrName[1] . "<br>";
                    echo $arrName[0] . "<br>";
                    echo $arrName[2] . "<br>";
                }else{
                    echo $arrName[1] . "<br>";
                    echo $arrName[2] . "<br>";
                    echo $arrName[0] . "<br>";
                }
            }else{
                if($arrName[0] < $arrName[1]){
                    echo $arrName[2] . "<br>";
                    echo $arrName[0] . "<br>";
                    echo $arrName[1] . "<br>";
                }else{
                    echo $arrName[2] . "<br>";
                    echo $arrName[1] . "<br>";
                    echo $arrName[0] . "<br>";
                }
            }
        }
    ?>
  </body>
</html>

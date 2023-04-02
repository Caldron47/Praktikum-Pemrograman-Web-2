<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>PRAK202</title>
    <style>
      .text-danger {
        color: red;
      }
    </style>
  </head>
  <body>
    <form action="" method="get">
      <div> 
        <label for="name">Nama </label>
        <input type="text" id="name" name="name" value="<?php echo isset($_GET['name']) ? $_GET['name'] : ''; ?>">
        <span class="text-danger">* <?php if (isset($_GET['sb']) && $_GET['name'] == "") 
            echo "nama tidak boleh kosong";
        ?></span>
      </div>

      <div> 
        <label for="nim">NIM</label>
        <input type="text" id="nim" name="nim" value="<?php echo isset($_GET['nim']) ? $_GET['nim'] : ''; ?>"> 
        <span class="text-danger">* <?php if (isset($_GET['sb']) && $_GET['nim'] == "") 
            echo "nim tidak boleh kosong";
        ?></span>
      </div>
      
      <div>
        Jenis Kelamin : <span class="text-danger">* <?php if (isset($_GET['sb']) && empty($_GET['jk'])) 
            echo "jenis kelamin tidak boleh kosong";
        ?> <br></span>
        <input type="radio" name="jk" id="jkp" value="Laki-Laki" <?php if(isset($_GET['jk']) && $_GET['jk'] == 'Laki-Laki') echo 'checked'; ?>>
        <label for="jkp">Laki-Laki <br></label>
        <input type="radio" name="jk" id="jkw" value="Perempuan" <?php if(isset($_GET['jk']) && $_GET['jk'] == 'Perempuan') echo 'checked'; ?>>
        <label for="jkw">Perempuan <br></label>
      </div>

      <div> 
        <button type="submit" name="sb">Submit</button>
      </div>
    </form>

    <?php
        if (isset($_GET['name']) && isset($_GET['nim']) && isset($_GET['jk']) && $_GET['name'] != "" && $_GET['nim'] != "" && !empty($_GET['jk'])) {      
            echo "<h2>Output</h2>" . $_GET['name'] . "<br>" . $_GET['nim'] . "<br>" . $_GET['jk'] . "<br>";
        }
    ?>
  </body>
</html>

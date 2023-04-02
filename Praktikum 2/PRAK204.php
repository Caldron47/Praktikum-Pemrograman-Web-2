<!DOCTYPE html>
<html>
  <head>
    <title>PRAK204</title>
  </head>
  <body>
	<form method="post">
    <div>
      <label for="number">Nilai : </label>
      <input type="text" id="number" name="number" required value="<?php echo isset($_POST['number']) ? $_POST['number'] : ''; ?>">
    </div>
    <div>
      <button type="submit">Konversi</button>  
    </div>    
	</form>

	<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {        
      echo '<h2>Hasil: ';
			$number = $_POST["number"];
			if ($number > 999) {
				echo "Anda Menginput Melebihi Limit Bilangan";
			} else if ($number == 0) {
        echo "Nol";
      } else if ($number > 0 && $number < 10) {
        echo "Satuan";
      } else if ($number > 10 && $number < 20) {
        echo "Belasan";
      } else if ($number > 9 && $number < 100) {
        echo "Puluhan";
      } else if ($number > 99 && $number < 1000) {
        echo "Ratusan";
      } else {
        echo "Input yang Anda Masukkan Bukanlah Bilangan Cacah";
      }
		}
	?>
</body>
</html>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>PRAK305</title>
  </head>
  <body>
    <form method="post">
        <div>
            <input type="text" id="strinput" name="strinput" required>
            <button type="submit">Submit</button>  
        </div>    
    </form>

    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {        
            $textArr = str_split($_POST["strinput"]);
            echo "<h2>Input</h2>";
            echo $_POST["strinput"];
            echo "<h2>Output</h2>";
            foreach ($textArr as $value) {
                for ($i=0; $i < count($textArr); $i++) { 
                    if ($i == 0) {
                        echo strtoupper($value);
                    } else {
                        echo strtolower($value);
                    }
                }
            }
        } 
    ?>
  </body>
</html>

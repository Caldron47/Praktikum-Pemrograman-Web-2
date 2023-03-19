<!DOCTYPE html>
<html>
    <head>
        <style>
            table, td, tr{
                border: 1px solid black;
            }
            .text {
                font-weight: bold;
                background-color: red;
                height: 70px;
                font-size: 24px;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <td class = text>
                    <?php 
                        $arr = array("s22" => "Samsung Galaxy S22", "s22+" => "Samsung Galaxy S22+", "a3" => "Samsung Galaxy A3", "xcover5" => "Samsung Galaxy Xcover 5");
                        echo "Daftar Smartphone Samsung";
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                        echo $arr["s22"];
                    ?> 
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                        echo $arr["s22+"];
                    ?> 
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                        echo $arr["a3"];
                    ?> 
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                        echo $arr["xcover5"];
                    ?> 
                </td>
            </tr>
        </table>
    </body>
</html>

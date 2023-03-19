<!DOCTYPE html>
<html>
    <head>
        <style>
            table, td, tr{
                border: 1px solid black;
            }
            text{
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <td>
                    <text>
                        <?php 
                            $arr = array("Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy A3", "Samsung Galaxy Xcover 5");
                            echo "Daftar Smartphone Samsung";
                        ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                        echo $arr[0];
                    ?> 
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                        echo $arr[1];
                    ?> 
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                        echo $arr[2];
                    ?> 
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                        echo $arr[3];
                    ?> 
                </td>
            </tr>
        </table>
    </body>
</html>

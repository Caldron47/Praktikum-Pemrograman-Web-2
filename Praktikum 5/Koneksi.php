<?php
function connect()
{
    try {
        $connect = new PDO(
            'mysql:host=localhost;dbname=perpustakaan','root','',
            array(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION, PDO::ATTR_PERSISTENT => true)
        );
    } catch (PDOException $e) {
        print "Koneksi ke Database tidak berhasil: " . $e->getMessage() . "<br/>";
        die();
    }
    return $connect;
}
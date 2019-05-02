<?php
    try {
        $dbh = new PDO('mysql:host=mysql;port=3306;', 'root', 'root');
        echo '<pre>';
        var_dump($dbh, [1,2,3]);
        echo '</pre>';
    } catch (PDOException $e) {
        echo "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
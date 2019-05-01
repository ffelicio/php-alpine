<?php
    try {
        $dbh = new PDO('mysql:host=mysql;port=3306;', 'root', 'root');
        print_r($dbh);
        $dbh = null;
    } catch (PDOException $e) {
        echo "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
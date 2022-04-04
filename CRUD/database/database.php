<?php
$hostname = 'localhost';
        $db_name = 'library';
        $username = 'root';
        $password = '';
        $dsn = "mysql:host=$hostname; dbname=$db_name";

        try {
            $connect = new PDO($dsn, $username, $password);
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo 'kết nối thành công';
            return $connect;
        } catch (PDOException $e) {
            echo 'Kết nối thất bại: ' . $e->getMessage();
        }
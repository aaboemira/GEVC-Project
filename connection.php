<?php
try{
    $pdo = new PDO('mysql:host=localhost;port=3306;dbname=gevc', 
        'gevc', '12345678');

} catch (Exception $e) {
echo($e->getMessage());
    die("You need to create the database and table for this application:
");
}

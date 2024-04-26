<?php
try {
     $db = new PDO("mysql:host=localhost;dbname=kasa", "root", "");
} catch ( PDOException $e ){
     print $e->getMessage();

}
?>
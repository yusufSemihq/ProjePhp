<?php 
$deneme=$_GET['id'];
if (isset($_GET['id'])) {
    include "baglan.php";
    $sorgu =$db->prepare('DELETE FROM urunler WHERE id=?');
    $sonuc =$sorgu->execute([$_GET['id']]);
    if ($sonuc) {
        header("Location:index.php");
    }
    else {
        echo   "Başarısız.";
    }
}




 ?>
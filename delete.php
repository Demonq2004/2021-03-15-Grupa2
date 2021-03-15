<?php
include_once("polaczenia.php");

if(isset($_GET['idnazwa'])){
        $id=$_GET['idnazwa'];

        $zapytanie_delete = $polaczenie->query("DELETE FROM uzytkownicy WHERE idu=$id");

        echo("Usunęto rekord z bazy danych<br>
        ");
    }

 $polaczenie->close();
?>
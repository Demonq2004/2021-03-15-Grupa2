<?php
include_once("polaczenia.php");

if(isset($_GET['idnazwa'])){
        $id=$_GET['idnazwa'];

        $zapytanie_id = $polaczenie->query("SELECT imie,nazwisko,adres,email,telefon FROM uzytkownicy WHERE idu=$id limit 1");
    
        list($imie,$nazwisko,$adres,$email,$telefon)=mysqli_fetch_array($zapytanie_id);
    
    
        echo("
            <form action='update.php' method='post'>
            Imie: <input type='text' name='imie' value='$imie'><br>
            Nazwisko: <input type='text' name='nazwisko' value='$nazwisko'><br>
            Adres: <input type='text' name='adres' value='$adres'><br>
            Email: <input type='email' name='email' value='$email'><br>
            Telefon: <input type='number' name='telefon' value='$telefon'><br>
            
            <input type='hidden' name='idnazwa' value='$id'>
            <input type='submit' value='Aktualizuj' name='submit'>
        ");
    

        
    }
if(isset($_POST['imie']) && isset($_POST['nazwisko']) && isset($_POST['adres']) && isset($_POST['email']) && isset($_POST['telefon']) && isset($_POST['idnazwa'])){
        $id = $_POST['idnazwa'];
        $imie = $_POST['imie']; 
        $nazwisko = $_POST['nazwisko'];
        $adres = $_POST['adres'];
        $email = $_POST['email'];
        $telefon = $_POST['telefon'];
    
    $zapytanie_update = $polaczenie->query("UPDATE uzytkownicy SET Imie='$imie', Nazwisko='$nazwisko', Adres='$adres', Email='$email', Telefon='$telefon' where idu=$id");
    
    echo("<a href='logowanie.php'>Logowanie</a>");
}
 $polaczenie->close();
?>
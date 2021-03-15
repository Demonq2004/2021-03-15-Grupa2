<?php
include_once("polaczenia.php");
            $imie = $_POST['imie']; 
            $nazwisko = $_POST['nazwisko'];
            $adres = $_POST['adres'];
            $email = $_POST['email'];
            $telefon = $_POST['telefon'];
            $haslo1 = $_POST['haslo1'];
            $haslo2 = $_POST['haslo2'];
        
        
            if($_POST['haslo1'] == $_POST['haslo2']){
                $zapytanie_insert = $polaczenie->query("INSERT INTO uzytkownicy(Imie,Nazwisko,Adres, Email, Telefon, haslo1, haslo2) VALUES ('$imie','$nazwisko','$adres','$email','$telefon','$haslo1','$haslo2')");
                
                echo "Dodano użytkownika";
                
                 echo "<br><a href='logowanie.php'>Logowanie do konta</a>";
            }else{
                echo "Hasła nie są takie same";
                 echo "<br><a href='rejestracja.php'>Zarejestruj sie ponownie</a>";
            }

$polaczenie->close();
        ?>

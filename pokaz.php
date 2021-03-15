 <?php
include_once("polaczenia.php");

if(isset($_POST['login']) and isset($_POST['haslo'])){
 
    $login = $_POST['login'];
    $haslo = $_POST['haslo'];


    $zapytanie_logowania = $polaczenie->query("SELECT imie,nazwisko,adres,email,telefon FROM uzytkownicy WHERE email='$login' and haslo1 = '$haslo' limit 1;");
    
    if(mysqli_num_rows($zapytanie_logowania)==1){
      
        list($imie, $nazwisko, $adres, $email, $telefon)=mysqli_fetch_array($zapytanie_logowania);
        echo "Imie: $imie<br>
                    Nazwisko: $nazwisko<br>
                    Adres: $adres<br>
                    Email: $email<br>
                    Telefon: $telefon<br>
                    <a href='logowanie.php'>Wróć</a>";
        
    }else {
        echo "nie ma takiego usera<br>
                    <a href='logowanie.php'>Wróć</a>";
    }    
}
        
$polaczenie->close();

/*


        
        while(list($imie,$nazwisko,$adres,$email,$telefon, $haslo1,$haslo2) = mysqli_fetch_array($zapytanie_logowania)) {
      
          echo "<p>
                    Imie: $imie<br>
                    Nazwisko: $nazwisko<br>
                    Adres: $adres<br>
                    Email: $email<br>
                    Telefon: $telefon<br></p>"; 
        }
        
        
    */
    ?>
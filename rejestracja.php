<?php include_once("polaczenia.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Rejestracja</title>
        <meta charset="utf-8">
    </head>
    <body>
    <fieldset>
        <legend>
           Rejestracja konta
        </legend>
        <form action="dodaj.php" method="post">
            Imie: <input type="text" name='imie'><br>
            Nazwisko: <input type="text" name='nazwisko'><br>
            Adres: <input type="text" name='adres'><br>
            Email: <input type="email" name='email'><br>
            Telefon: <input type="number" name='telefon'><br>
            Hasło: <input type="password" name='haslo1'><br>
            Powtórz Hasło: <input type="password" name='haslo2'><br>
            
            <input type="submit" value="Rejestruj" name="submit">
        </form>
    </fieldset>
    </body>
</html>
<?php $polaczenie->close()?>
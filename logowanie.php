<?php
include_once("polaczenia.php");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
</head>
<body>
        <fieldset>
            <legend>Formularz Logowania</legend>
            <table>
                <form action="pokaz.php" method="post">
                    <tr>
                        <td>Email: </td><td><input type="text" name="login" required /></td>
                    </tr>
                    <tr>
                        <td>Hasło: </td><td><input type="password" name="haslo" required /></td>
                    </tr>
                    <tr>
                        <td></td><td><input type="submit" name="submit" value="ZALOGUJ" /></td>
                    </tr>
                </form>
                
            </table>
    </fieldset>
     <a href='index.html'>Wróć</a>
</body>
</html>
<?php $polaczenie->close(); ?>
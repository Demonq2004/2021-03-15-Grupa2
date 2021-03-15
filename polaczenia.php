<?php
    $host = 'localhost';
    $dbname = 'Uzytkownicy';
    $username = 'root';
    $password = '';
    $post = 3306;

    $polaczenie = @new Mysqli($host,$dbname,$username,$password,$port);

    if(Mysql_connect_errno()!=0){
        echo "Błąd polaczenia z bazą danych".Mysqli_connect_error();
    }

?>
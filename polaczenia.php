<?php
    $host = "localhost";
    $username = 'root';
    $password = '';
    $dbname = 'grupa2';
    $post = 3306;

    $polaczenie = @new Mysqli($host,$username,$password,$dbname,$port);

    if(Mysqli_connect_errno()!=0){
        echo "Błąd polaczenia z bazą danych".Mysqli_connect_error();
    }

?>
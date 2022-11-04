<?php
     require_once 'login.php';
    $conn = new mysqli($hn, $un, $pw, $db);
    if($conn ->connect_error) die($conn->connect_error);

     $query = "SELECT * FROM komedie";
    $result = $conn->query($query);
    if(!$result) die($conn->error);

    $rows = $result->num_rows;
    for($j =0; $j < $rows; ++$j)
    {
        $result->data_seek($j);
        $row = $result->fetch_array(MYSQLI_ASSOC);
        echo 'Nazwa: ' .$row['Nazwa'] .'<br>';
        echo 'Autor: ' .$row['Autor'] .'<br>';
        echo 'Rok: ' .$row['Rok'] .'<br><br>';
    }
    $result -> close();
    $conn -> close();
?>
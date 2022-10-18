<?php
//header("Location: index.php");
include "config.php";

if (isset($_GET['ID'])) {
    $userId = $_GET['ID'];
    $sql = "DELETE FROM infoperson WHERE ID=" . $userId;
    $result = $connection->query($sql);
    $connection->close();

    if ($result == TRUE) {
        //echo  "Successfull to insert information<br/>";
        header("Location: index.php");
    } else {
        echo $connection->error;
    }
    
}

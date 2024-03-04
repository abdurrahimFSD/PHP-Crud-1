<?php
if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $serverName = "localhost";
    $username = "root";
    $password = "";
    $database = "crud-1";
    
    // Create Connection
    $connection = new mysqli($serverName, $username, $password, $database);

    $sql = "DELETE FROM clients WHERE id=$id";
    $connection->query($sql);
}

header("location: ./index.php");
exit;
?>
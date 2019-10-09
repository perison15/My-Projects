<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "phpmyadmin";

    try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "DELETE FROM myguests WHERE id=23";
    $conn->exec($sql);
    echo "Value deleted successfully!";
    }
    catch(PDOException $e) {
        echo $sql."<br>".$e->getMessage();
    }
    $conn = null;


    //UPDATING TABLE
    // try {
    //     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //     $sql = "UPDATE myguests SET lastname='Nasty' WHERE id = 22";
    //     $stmt = $conn->prepare($sql);
    //     $stmt->execute();
    //     echo $stmt->rowCount()."records updated succefully!";
    // }
    // catch(PDOException $e){
    //     echo $sql."<br>".$e->getMessage();
    // }
    // $conn = null;
?>
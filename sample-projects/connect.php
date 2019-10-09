<?php
// $servername = "localhost";
// $username = "root";
// $password = "";

// try {
//     $conn = new PDO("mysql:host=$servername;dbname=tachidentity", $username, $password);
//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Connected successfully";
//     }
// catch(PDOException $e)
//     {
//     echo "Connection failed: " . $e->getMessage();
//     }



// $servername = "localhost";
// $username = "root";
// $password = "";

// try {
//     $conn = new PDO("mysql:host = $servername; dbname = tachidentity",$username,$password);
//     $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "connected successfully";
// }
// catch(PDOException $e)
// {
//     echo "connection failed: " .$e->getMessage();
// }


    //CREATING A DATABASE!!
// $servername = "localhost";
// $username = "root";
// $password = "";

// try {
//     $conn = new PDO("mysql:host = $servername;", $username, $password);
//     $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     $sql = "CREATE DATABASE PBI";
//     echo "database created successfully";
// }catch(PDOException $e)
// {
//     echo "Connection failed: ".$e->getMessage();
// }
// $conn = null;

    //CREATING TABLES!!


?>
<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "phpmyadmin";

// try {
//     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     // sql to create table
//     $sql = "CREATE TABLE MyGuests (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     firstname VARCHAR(30) NOT NULL,
//     lastname VARCHAR(30) NOT NULL,
//     email VARCHAR(50),
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//     )";

//     // use exec() because no results are returned
//     $conn->exec($sql);
//     echo "Table MyGuests created successfully";
//     }
// catch(PDOException $e)
//     {
//     echo $sql . "<br>" . $e->getMessage();
//     }

// $conn = null;

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "phpmyadmin";

// try{
//     $conn = new PDO("mysql:host = $servername; dbname=$dbname", $username, $password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     $sql = "INSERT INTO MyGuests (
//         firstname,lastname,email
//         ) VALUES (
//             'tonde','maduve','tm@yahoo.com'
//         )";
//     $conn->exec($sql);
//     $last_id = $conn->lastInsertId();
//         echo "New record created successfully. Last inserted ID is: " . $last_id;
//     }
// catch(PDOException $e)
// {
//         echo $sql. "<br>" . $e->getMessage();
// }

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "phpmyadmin";

// try{
//     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     // $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//     // // set the PDO error mode to exception
//     // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     $stmt = $conn->prepare("INSERT INTO MyGuests(
//             firstname,lastname,email
//         )VALUES(
//             :firstname, :lastname, :email
//         )");
//     $stmt->bindparam(':firstname', $firstname);
//     $stmt->bindparam(':lastname', $lastname);
//     $stmt->bindparam(':email', $email);

//     //INSERTING PREPARED VALUES
//     $firstname = "chiko";
//     $lastname = "matara";
//     $email = "chikomatara@yahoo.com";
//     $stmt->execute();

//     $firstname = "mary";
//     $lastname = "mapara";
//     $email = "mapara@hotmail.com";
//     $stmt->execute();

//     $firstname = "john";
//     $lastname = "mangudya";
//     $email = "mangudya@yahoo.com";
//     $stmt->execute();

//             echo"Values added successfully!!";
// }
// catch(PDOException $e)
// {
//     echo "Error".$e->getMessage();
// }
// $conn = null;
 ?>


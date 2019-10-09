<?php

echo "<table style = 'border: solid 1px black>";
echo "<tr><th>id</th><th>firtname</th><th>lastname</th></tr>";

class tablerows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }
    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }
    function beginchild() {
        echo "<tr>";
    }
    function endchild() {
        echo "</tr>"."\n";
    }
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpmyadmin";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname ",$username, $password);
    $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT id,firstname,secondname FROM myguests");
    $stmt->execute;

    //setiing the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach (new TableRows(new RecursiveArrayIterator($stmt->FetchAll())) as $k=>$v) {
        echo $v;
    }
}
catch (PDOException $e) {
    echo "error".$e->getMessage();
}
$conn = null;
echo "</table>";

?>
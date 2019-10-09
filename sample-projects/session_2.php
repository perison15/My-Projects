<!DOCTYPE html>
<html>

    
    
<head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}
</style>
</head>
<body>

<table>
  <tr>
    <td>Filter Name</td>
    <td>Filter ID</td>
  </tr>
  <?php
  foreach (filter_list() as $id =>$filter) {
      echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
  }
  ?>
</table>

            // session_unset();
            // session_destroy();
            // echo "the favourite color is ".$_SESSION["favcolor"].".<br>";
            // echo "the favourite animal is ".$_SESSION["favanimal"].".";
            // print_r($_SESSION);

        ?>
    </body>

</html>
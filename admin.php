<?php 
include("C:\Users\BROTHERS\Desktop\assignment4\server.php");

$id=$_SESSION["registerId"];

print_r($id);


$queryPlus="select * from orders where user= '$id'";

$queryPlusSql=$connection->prepare($queryPlus);
$queryPlusSql->execute();
$fetchedPlus=$queryPlusSql->fetch(PDO::FETCH_ASSOC);

if (isset($_POST["delete"])) {
  $queryDelete="delete from orders where id = '$id'";
  $queryDeleteSql=$connection->prepare($queryDelete);
  $queryDeleteSql->execute();
}










?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
 
<table class="table">
  <thead>
    <tr>
    <?php
      echo "<th>"."id"."</th>";
      echo "<th>"."dish"."</th>";
      echo "<th>"."amount"."</th>";
      echo "<th>"."price"."</th>";
      echo "<th>"."total"."</th>";
      echo "<th>"."user"."</th>";
  
      ?>
    </tr>
  </thead>
  <tbody>
  <?php
     echo "<tr>";
     echo "<td>".$fetchedPlus["id"]."</td>";
     echo "<td>".$fetchedPlus["dish"]."</td>";
     echo "<td>".$fetchedPlus["amount"]."</td>";
     echo "<td>".$fetchedPlus["price"]."</td>";
     echo "<td>".$fetchedPlus["total"]."</td>";
     echo "<td>".$fetchedPlus["user"]."</td>";
     echo "<td>";
     echo "<form method='post'>";
     echo "<input type='hidden' name='id' value='".$fetchedPlus["id"]."'>"; // Unique identifier for the record
     echo "<button type='submit' name='delete'>Delete</button>";
     echo "</form>";
     echo "</td>";
     echo "</tr>";
     
        
      ?>
    

  </tbody>
</table>



</body>
</html>
<?php

  //set connection variables 
  $db_host = 'localhost';
  $db_user = 'root';
  $db_password = '';
  $db_db = 'movedb1';
  
//connection to server & database 
$connection = mysqli_connect($db_host, $db_user, $db_password, $db_db );

//check connection 
if(mysqli_connect_errno()):
  printf("Connect failed: %s\n", mysqli_connect_errno());
  exit();
endif;

$result = mysqli_query($connection,"SELECT * FROM move_tabl ORDER BY movement DESC  LIMIT 1");

echo "<table border='1'>
<tr>
<th>Movement</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['movement'] . "</td>";
echo "</tr>";
}
echo "</table>";
mysqli_close($connection);
?>

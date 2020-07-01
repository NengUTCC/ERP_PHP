<html>
<head>
<title>ThaiCreate.Com PHP & MySQL Tutorial</title>
</head>
<body>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dberp";

// Create Connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

$query = "SELECT * FROM user";
$result = mysqli_query($conn, $query);

echo "<table border='1' align='center' width='500'>";
//หัวข้อตาราง
echo "<tr align='center' bgcolor='#CCCCCC'><td>id</td><td>uername</td><td>password</td><td>email</td><td>แก้ไข</td><td>ลบ</td></tr>";
while($row = mysqli_fetch_array($result)) { 
  echo "<tr>";
  echo "<td>" .$row["id"] .  "</td> "; 
  echo "<td>" .$row["username"] .  "</td> ";  
  echo "<td>" .$row["password"] .  "</td> ";
  echo "<td>" .$row["email"] .  "</td> ";

  //แก้ไขข้อมูล
  echo "<td><a href='UserUpdateForm.php?ID=$row[0]'>edit</a></td> ";
  
  //ลบข้อมูล
  echo "<td><a href='UserDelete.php?ID=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\">del</a></td> ";
  echo "</tr>";
}
echo "</table>";
//5. close connection
mysqli_close($conn);
?>
</body>
</html>
<?php
/*$mysqli = new mysqli("localhost","root","","blood");
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$sqli = "DELETE FROM total";
if($rslt = $mysqli -> query($sqli)){
  //header("Location: index.php");
  echo "SUBMITTED SUCCESSFULLY..";
  //return true;
}
//$rslt = $mysqli -> query($sqli);

$sql= "Insert into total select * from donate natural join address";

if($result = $mysqli -> query($sql)){
  //header("Location: index.php");
  //echo "SUBMITTED SUCCESSFULLY..";
  //return true;
}
else{
    echo "errorrrrr";
    exit();
}*/
?>





<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 15px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>Id</th>
<th>Name</th>
<th>Gender</th>
<th>Age</th>
<th>Mobile</th>
<th>Blood Gr</th>
<th>Email</th>
<th>Country</th>
<th>State</th>
<th>City</th>
<th>Address</th>
<th>Locality</th>
<th>Pincode</th>
<th>Landmark</th>
</tr>
<?php
  include_once 'db/blood.php';
  /*$mysqli = new mysqli("localhost","root","","blood");
  if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }*/
//$sql = "SELECT id, username, password FROM login";
//$result = $conn->query($sql);
$sqli = "DELETE FROM totalneed";
$rslt = $mysqli -> query($sqli);

$sq = "ALTER TABLE totalneed AUTO_INCREMENT = 1";
$res = $mysqli -> query($sq);

$sqlii= "Insert into totalneed select * from donate natural join address";
$reslt = $mysqli -> query($sqlii);

$sql = "SELECT * FROM totalneed";
$result = $mysqli -> query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["ID1"]. "</td><td>" . $row["name"] . "</td><td>"
. $row["gender"]. "</td><td>" . $row["age"]. "</td><td>" . $row["mobile"]. "</td><td>" . $row["blood"]. "</td><td>" . $row["email1"]. "</td><td>" . $row["country"]. "</td><td>"
. $row["state"]. "</td><td>" . $row["city"]. "</td><td>" . $row["address"]. "</td><td>" . $row["locality"]. "</td><td>" . $row["pincode"]. "</td><td>" . $row["landmark"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
//$conn->close();
?>
</table>
</body>
</html>

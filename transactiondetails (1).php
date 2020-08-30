<!DOCTYPE html>
<html>
<head>
	<style>
		body{
            background-color: hsla(89, 43%, 51%, 0.3);
			letter-spacing: 3px;
			font-family: Times New Roman;
		}
		h1{
			background-color: black;
			color:white;
			font-style: italic;
			font-family: Times New Roman;
		} 
		a{
			background-color: DodgerBlue;
			color:white;
			text-shadow: none;
			letter-spacing: 2px;
		}
		table {
  font-family: Times New Roman;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
	</style>
<body>
<h1>TRANSACTION DETAILS:</h1>
<?php
$servername = "sql110.epizy.com";
$username = "epiz_26602254";
$password = "MZBOmFaprcFtR";
$dbname = "epiz_26602254_creditmgmt03";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$sql = "SELECT * FROM transactions";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    // output data of each row 
     echo "<table>";
    echo "<tr>"; 
    echo "<th>SENDER</th> <th>RECEIVER</th> <th>AMOUNT</th>";
    echo "</tr>";
    while($row = $result->fetch_assoc()) {
    echo"<tr>";
        echo "<td>".$row["sender"]."</td>"."<td>".$row["receiver"]."</td>"."<td>".$row["amount"]."</td>";
    echo"</tr>";
    }
     echo "</table>";
} 
else {
    echo "0 results";
}
//$conn->close();
?>
<a href = "index.php"><p style = "text-align: right; color:black;"><b>HOME</b></p></a>

</body>
</html>
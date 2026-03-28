Employee Database Using PHP


<?php
$conn = mysqli_connect("localhost","root","","company");
if(!$conn) {
die("Connection Failed");
}
$result = mysqli_query($conn,"SELECT * FROM employee");
?>
<html>
<head>
<title>Employee Details</title>
</head>
<body>
<h2>Employee Details</h2>
<table border="1" cellpadding="10">
<tr>
<th>ID</th><th>Name</th>
<th>Designation</th>
<th>Salary</th>
</tr>
<?php while($row =
mysqli_fetch_assoc($result))
{ echo "<tr>"; echo
"<td>".$row['id']."</td>"; echo
"<td>".$row['name']."</td>"; echo
"<td>".$row['designation']."</td>";
echo "<td>".$row['salary']."</td>"; echo
"</tr>";
}
?>
</table>
</body>
</html>
<?php
mysqli_close($conn);
?>

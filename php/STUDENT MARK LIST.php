STUDENT MARK LIST

<?php
$conn = mysqli_connect("localhost","root","","college");
if(!$conn) {
die("Connection Failed");
}
$result = "";
if(isset($_POST['submit']))
{
$regno = $_POST['regno'];
$sql = "SELECT * FROM student_marks WHERE reg_no='$regno'";
$query = mysqli_query($conn,$sql);
if(mysqli_num_rows($query) > 0)
{
$row = mysqli_fetch_assoc($query);
$result = "
<h2>Student Mark List</h2>Register No: ".$row['reg_no']."<br>
Name: ".$row['name']."<br><br>
Tamil: ".$row['tamil']."<br>
English: ".$row['english']."<br>
Maths: ".$row['maths']."<br>
Science: ".$row['science']."<br>
Social: ".$row['social']."<br>
";
}
else
{
$result = "No Record Found";
}
}
mysqli_close($conn);
?>
<html>
<head>
<title>Mark List</title>
</head>
<body>
<h2>Enter Register Number</h2>
<form method="POST"> Register
No:
<input type="text" name="regno" required>
<br><br>
<input type="submit" name="submit" value="Show Marks">
</form>
<br>
<?php echo
$result;
?></body>
</html>

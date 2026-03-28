PHP PROGRAM TO $_POST - USED TO COLLECT FORM
DATA AFTER SUBMIT


<?php
$name = "";
$email = "";
$age = "";
if(isset($_POST['submit']))
{
$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];
}
?>
<html>
<head><title>POST Method Example</title>
</head>
<body>
<h2>User Form</h2>
<form method="POST"> Name:
<input type="text" name="name" required>
<br><br>
Email:
<input type="email" name="email" required>
<br><br>
Age:
<input type="number" name="age" required>
<br><br>
<input type="submit" name="submit" value="Submit">
</form>
<br>
<?php if($name != "") {
echo
"<h3>User Details</h3>";
echo "Name: ".$name."<br>";
echo "Email: ".$email."<br>";
echo "Age: ".$age;
}
?></body>
</html>

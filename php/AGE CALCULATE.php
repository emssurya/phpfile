AGE CALCULATE


<?php
$result = "";
if(isset($_POST['submit']))
{
$dob = $_POST['dob'];
$birthdate = new DateTime($dob);
$today = new DateTime();
$diff = $today->diff($birthdate);
$result = $diff->y . " Years " . $diff->m . " Months " . $diff->d . " Days"; }
?>
<html>
<head>
<title>Age Calculator</title>
</head>
<body>
<h2>Age Calculator</h2>
<form method="POST">
Enter Date of Birth:
<input type="date" name="dob" required><br><br>
<input type="submit" name="submit" value="Calculate Age">
</form>
<br>
<?php
if($result != "")
{ echo "<h3>Your Age is:
$result</h3>";
}
?>
</body>
</html>

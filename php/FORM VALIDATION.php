FORM VALIDATION

<?php
$error = "";
if($_POST){
$name = $_POST["name"];
$age = $_POST["age"];
$address = $_POST["address"];
$email = $_POST["email"];
$phone = $_POST["phone"];
if($name=="" || $age=="" || $address=="" || $email=="" || $phone==""){
$error = "Please fill all fields!";
} else {echo "<h2>Entered
Details</h2>";echo "Name:$name <br>";
echo "Age: $age
<br>";
echo "Address: $address <br>";
echo "Email: $email <br>";
echo "Phone: $phone <br>";
exit();
}
}
?>
<html>
<body>
<h2>Form Validation</h2>
<p style="color:red"><?php echo $error; ?></p>
<form method="post">
Name: <input type="text" name="name"><br><br>
Age: <input type="text" name="age"><br><br>
Address: <input type="text" name="address"><br><br>
Email: <input type="text" name="email"><br><br>
Phone: <input type="text" name="phone"><br><br>
<input type="submit" value="Submit">
</form></body>
</html>

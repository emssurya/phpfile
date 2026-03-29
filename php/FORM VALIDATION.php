<?php
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST["name"]);
    $age = trim($_POST["age"]);
    $address = trim($_POST["address"]);
    $email = trim($_POST["email"]);
    $phone = trim($_POST["phone"]);

    // Check empty fields
    if ($name == "" || $age == "" || $address == "" || $email == "" || $phone == "") {
        $error = "Please fill all fields!";
    }
    // Validate email
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format!";
    }
    // Validate age (only numbers)
    elseif (!is_numeric($age)) {
        $error = "Age must be a number!";
    }
    // Validate phone (10 digits)
    elseif (!preg_match("/^[0-9]{10}$/", $phone)) {
        $error = "Phone must be 10 digits!";
    }
    else {
        echo "<h2>Entered Details</h2>";
        echo "Name: " . htmlspecialchars($name) . "<br>";
        echo "Age: " . htmlspecialchars($age) . "<br>";
        echo "Address: " . htmlspecialchars($address) . "<br>";
        echo "Email: " . htmlspecialchars($email) . "<br>";
        echo "Phone: " . htmlspecialchars($phone) . "<br>";
        exit();
    }
}
?>

<html>
<body>
<h2>Form Validation</h2>

<p style="color:red;"><?php echo $error; ?></p>

<form method="post">
Name: <input type="text" name="name"><br><br>
Age: <input type="text" name="age"><br><br>
Address: <input type="text" name="address"><br><br>
Email: <input type="text" name="email"><br><br>
Phone: <input type="text" name="phone"><br><br>
<input type="submit" value="Submit">
</form>

</body>
</html>

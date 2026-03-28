CALCULATOR PROGRAM IN PHP USING
SWITCH CASE


<?php
$result = "";
if(isset($_POST['submit']))
{
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$op = $_POST['operator'];
switch($op)
{
"+":
case
$result = $num1 + $num2;
break;
case "-
":
$result = $num1 - $num2;
break;
case "*":
$result = $num1 * $num2;
break;
case
"/":
if($num2 != 0)$result = $num1 / $num2;
else
$result = "Division by zero not allowed";
break;
default:
$result = "Invalid Operator";
}
}
?>
<html>
<head>
<title>Calculator</title>
</head>
<body>
<h2>Simple Calculator</h2>
<form method="POST"> Number
1:
<input type="number" name="num1" required>
<br><br>
Number 2:
<input type="number" name="num2" required>
<br><br>
Operator:
<select name="operator">
<option value="+">Addition (+)</option>
<option value="-">Subtraction (-)</option>
<option value="*">Multiplication (*)</option>
<option value="/">Division (/)</option>
</select>
<br><br>
<input type="submit" name="submit" value="Calculate">
</form><br>
<?php
if($result != "") {
echo "<h3>Result: $result</h3>";
}
?>
</body>
</html>

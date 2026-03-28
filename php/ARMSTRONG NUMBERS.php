ARMSTRONG NUMBERS

<?php
$n = 1000;
echo "<h2>Armstrong Numbers between 1 and $n</h2>";
for($i = 1; $i <= $n; $i++)
{
$num = $i;
$sum = 0;
while($num > 0)
{
$rem = $num % 10;
$sum = $sum + ($rem * $rem * $rem);
$num = (int)($num / 10);
}
if($sum == $i)
{
echo
$i."<br>";
}}
?>

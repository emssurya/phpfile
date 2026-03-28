TRANSPOSE OF
MATRIX IN PHP


<?php
$matrix = array(
array(1, 2, 3),
array(4, 5, 6),
array(7, 8, 9)
);
$rows = count($matrix);
$cols = count($matrix[0]);
echo "<h3>Original Matrix</h3>";
for($i = 0; $i < $rows; $i++)
{ for($j = 0; $j < $cols;
$j++)
{
echo
$matrix[$i][$j]." ";
}
echo "<br>";
}
echo "<h3>Transpose Matrix</h3>";for($i = 0; $i < $cols; $i++)
{ for($j = 0; $j < $rows;
$j++)
{
echo
$matrix[$j][$i]." ";
}
echo "<br>";
}
?>

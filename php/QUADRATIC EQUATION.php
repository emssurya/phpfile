<?php
$a = 1;
$b = -3;
$c = 2;

$D = ($b * $b) - (4 * $a * $c);

echo "<h2>Roots of Quadratic Equation</h2>";

if ($D > 0) {
    $r1 = (-$b + sqrt($D)) / (2 * $a);
    $r2 = (-$b - sqrt($D)) / (2 * $a);

    echo "Roots are Real and Distinct<br>";
    echo "Root 1 = " . $r1 . "<br>";
    echo "Root 2 = " . $r2;

} elseif ($D == 0) {
    $r = (-$b) / (2 * $a);

    echo "Roots are Real and Equal<br>";
    echo "Root = " . $r;

} else {
    echo "Roots are Complex (Imaginary)";
}
?>

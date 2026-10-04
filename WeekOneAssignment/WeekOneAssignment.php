<?php

// QUATION ONE

$a = 12;
$b = 7;
$c = 20;

$greatest = $a;
$smallest = $a;

if ($b > $greatest) $greatest = $b;
if ($c > $greatest) $greatest = $c;

if ($b < $smallest) $smallest = $b;
if ($c < $smallest) $smallest = $c;

echo "1. Greatest: $greatest <br>";
echo "Smallest: $smallest <br><br>";


// QUATION 2

$n = 15;

if ($n % 3 == 0 && $n % 5 == 0)
    echo "2. Divisible by Both<br><br>";
elseif ($n % 3 == 0)
    echo "2. Divisible by 3<br><br>";
elseif ($n % 5 == 0)
    echo "2. Divisible by 5<br><br>";
else
    echo "2. Divisible by None<br><br>";


// QUATION 3

echo "3. Odd Numbers: ";
for ($i = 3; $i <= 20; $i += 2) {
    echo $i . " ";
}

echo "<br>Even Numbers 35 to 7: ";
for ($i = 34; $i >= 7; $i -= 2) {
    echo $i . " ";
}
echo "<br><br>";


// QUATION 4

echo "4. Numbers: ";
for ($i = 50; $i >= 2; $i--) {
    if ($i % 2 == 0 && $i % 5 == 0) {
        echo $i . " ";
    }
}
echo "<br><br>";


// QUATION 5

$n = 12345;
$reverse = 0;

while ($n > 0) {
    $digit = $n % 10;
    $reverse = $reverse * 10 + $digit;
    $n = (int)($n / 10);
}

echo "5. Reverse: $reverse <br><br>";


// QUATION 6

$a = 8;
$b = 12;
$lcm = ($a > $b) ? $a : $b;

while ($lcm % $a != 0 || $lcm % $b != 0) {
    $lcm++;
}

echo "6. LCM: $lcm <br><br>";


// QUATION 7

$a = 18;
$b = 24;

$x = abs($a);
$y = abs($b);

while ($y != 0) {
    $temp = $y;
    $y = $x % $y;
    $x = $temp;
}

echo "7. HCF: $x <br><br>";


// QUATION 8

echo "8. Multiplication Table<br>";

echo "<table border='1' cellpadding='4'>";

for ($i = 1; $i <= 12; $i++) {
    echo "<tr>";

    for ($j = 1; $j <= 12; $j++) {
        echo "<td>" . ($i * $j) . "</td>";
    }

    echo "</tr>";
}

echo "</table><br>";


// QUATION 9

$n = 17;
$prime = true;

if ($n < 2) {
    $prime = false;
}

for ($i = 2; $i * $i <= $n; $i++) {
    if ($n % $i == 0) {
        $prime = false;
        break;
    }
}

if ($prime)
    echo "9. Prime Number<br><br>";
else
    echo "9. Non-Prime Number<br><br>";


// QUATION 10

echo "10. Prime Numbers: ";

for ($n = 10; $n <= 50; $n++) {
    $prime = true;

    for ($i = 2; $i * $i <= $n; $i++) {
        if ($n % $i == 0) {
            $prime = false;
            break;
        }
    }

    if ($prime) {
        echo $n . " ";
    }
}

?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP & MySQL Assignment</title>
<style>
    body { font-family: "Times New Roman", serif; margin: 30px; }
    table { border-collapse: collapse; margin: 10px 0; }
    td, th { border: 1px solid #333; padding: 5px 12px; text-align: center; }
    .head { background: #d9d9d9; font-weight: bold; }
    .shade { background: #808080; color: #fff; }
    .info { text-align: center; }
</style>
</head>
<body>

<?php

echo "<h2>Q1: Dimensional Array</h2>";

$arr = array(5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9);

echo "<b>Array elements:</b> " . implode(", ", $arr) . "<br>";

$total = 0; $evenTotal = 0; $oddTotal = 0;
foreach ($arr as $v) {
    $total += $v;
    if ($v % 2 == 0) { $evenTotal += $v; } else { $oddTotal += $v; }
}
echo "Total of all elements = $total<br>";           // 3
echo "Total of even elements = $evenTotal<br>";       // 4
echo "Total of odd elements = $oddTotal<br>";         // 5

$min = min($arr);
$minPos = array_keys($arr, $min);
echo "Minimum element is: $min in " . count($minPos) . " positions: ";
foreach ($minPos as $p) { echo "[$p] "; }
echo "<br>";

$max = max($arr);
$maxPos = array_keys($arr, $max);
echo "Maximum element is: $max in " . count($maxPos) . " positions: ";
foreach ($maxPos as $p) { echo "[$p] "; }
echo "<br>";

echo "<h2>Q2: Associative Array (Colors)</h2>";

$colors = array(
    "Light"  => array("Red" => "Light Red",  "Green" => "Light Green",  "Blue" => "Light Blue"),
    "Normal" => array("Red" => "Normal Red", "Green" => "Normal Green", "Blue" => "Normal Blue"),
    "Dark"   => array("Red" => "Dark Red",   "Green" => "Dark Green",   "Blue" => "Dark Blue"),
);

echo "<table><tr class='head'><td></td>";
foreach (array_keys($colors["Light"]) as $col) { echo "<td>$col</td>"; }
echo "</tr>";
foreach ($colors as $rowName => $row) {
    echo "<tr><td class='head'>$rowName</td>";
    foreach ($row as $value) { echo "<td>$value</td>"; }
    echo "</tr>";
}
echo "</table>";

echo "<h2>Q3: Two-Dimensional Square Array</h2>";

$m = array(
    array(2, -6, 8),
    array(-6, 1, 6),
    array(7, 8, -6),
);
$n = count($m);

$oddSum = 0; $evenSum = 0; $all = 0;
$rowSum = array_fill(0, $n, 0);
$colSum = array_fill(0, $n, 0);
$diag1 = 0; // main diagonal
$diag2 = 0; // anti-diagonal
$all_values = array();

for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        $v = $m[$i][$j];
        $all += $v;
        if ($v % 2 == 0) { $evenSum += $v; } else { $oddSum += $v; }
        $rowSum[$i] += $v;
        $colSum[$j] += $v;
        if ($i == $j) { $diag1 += $v; }
        if ($i + $j == $n - 1) { $diag2 += $v; }
    }
}


$minV = $m[0][0]; $maxV = $m[0][0];
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        if ($m[$i][$j] < $minV) { $minV = $m[$i][$j]; }
        if ($m[$i][$j] > $maxV) { $maxV = $m[$i][$j]; }
    }
}
$minPositions = array(); $maxPositions = array();
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        if ($m[$i][$j] == $minV) { $minPositions[] = "[$i,$j]"; }
        if ($m[$i][$j] == $maxV) { $maxPositions[] = "[$i,$j]"; }
    }
}

$span = $n + 2;
echo "<table>";
echo "<tr><td colspan='$span' class='info'>Total odd elements = $oddSum</td></tr>";
echo "<tr><td colspan='$span' class='info'>Total even elements = $evenSum</td></tr>";

echo "<tr class='shade'><td>$diag1</td>";
foreach ($colSum as $c) { echo "<td>$c</td>"; }
echo "<td>$diag2</td></tr>";

for ($i = 0; $i < $n; $i++) {
    echo "<tr><td>{$rowSum[$i]}</td>";
    for ($j = 0; $j < $n; $j++) { echo "<td>{$m[$i][$j]}</td>"; }
    echo "<td>{$rowSum[$i]}</td></tr>";
}

echo "<tr class='shade'><td>$diag2</td>";
foreach ($colSum as $c) { echo "<td>$c</td>"; }
echo "<td>$diag1</td></tr>";

echo "<tr><td colspan='$span' class='info'>Total all elements = $all</td></tr>";
echo "<tr><td colspan='$span' class='info'>Min element is: $minV in " . count($minPositions)
     . " positions:<br>" . implode(", ", $minPositions) . "</td></tr>";
echo "<tr><td colspan='$span' class='info'>Maximum element is: $maxV in " . count($maxPositions)
     . " positions:<br>" . implode(", ", $maxPositions) . "</td></tr>";
echo "</table>";



echo "<h2>Q4: Associative Array (Students)</h2>";

$students = array(
    "CA221" => array("Name" => "Mohamed Ahmed Ali", "Phone" => "0648440403", "Address" => "Laba Dhagax, Wardhiigley"),
    "CA223" => array("Name" => "Ahmed Abdi Jama",   "Phone" => "0647223201", "Address" => "Taleex, Hodan"),
    "CA225" => array("Name" => "Amina Nur Adan",    "Phone" => "0646990276", "Address" => "Macmacaanka, Dharkeynley"),
);

echo "<table><tr class='head'><td></td>";
foreach (array_keys($students["CA221"]) as $col) { echo "<td>$col</td>"; }
echo "</tr>";
foreach ($students as $id => $info) {
    echo "<tr><td class='head'>$id</td>";
    foreach ($info as $value) { echo "<td>$value</td>"; }
    echo "</tr>";
}
echo "</table>";
 

echo "<h2>Q5: Student Transcript</h2>";

$transcript = array(
    "Semester 1" => array(
        array("course" => "subject1", "cw1" => 9, "mid" => 26, "cw2" => 10, "final" => 40),
        array("course" => "subject2", "cw1" => 9, "mid" => 26, "cw2" => 10, "final" => 40),
        array("course" => "subject3", "cw1" => 9, "mid" => 26, "cw2" => 10, "final" => 40),
    ),
    "Semester 2" => array(
        array("course" => "subject1", "cw1" => 9, "mid" => 26, "cw2" => 10, "final" => 0),
        array("course" => "subject2", "cw1" => 9, "mid" => 26, "cw2" => 10, "final" => 40),
        array("course" => "subject3", "cw1" => 9, "mid" => 26, "cw2" => 10, "final" => 40),
    ),
);

echo "<table>";
echo "<tr class='head'><td>Semester</td><td>Course</td><td>CW1</td><td>MidTerm</td>"
   . "<td>CW2</td><td>Final</td><td>Total</td><td>Status</td></tr>";
foreach ($transcript as $semester => $courses) {
    $first = true;
    foreach ($courses as $c) {
        $totalMarks = $c["cw1"] + $c["mid"] + $c["cw2"] + $c["final"];
        $status = ($totalMarks >= 50) ? "Pass" : "Fail";
        echo "<tr>";
        if ($first) {
            echo "<td rowspan='" . count($courses) . "'>$semester</td>";
            $first = false;
        }
        echo "<td>{$c['course']}</td><td>{$c['cw1']}</td><td>{$c['mid']}</td>"
           . "<td>{$c['cw2']}</td><td>{$c['final']}</td><td>$totalMarks</td><td>$status</td>";
        echo "</tr>";
    }
}
echo "</table>";
?>

</body>
</html>
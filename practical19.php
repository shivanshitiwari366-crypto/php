<?php
$name = "Shivanshi Tiwari";

// Subjects and marks
$subjects = [
    "Operating System" => 40,
    "Java" => 30,
    "DBMS" => 45,
    "E-Commerce" => 48,
    "Energy Conservation" => 34
];

$max_marks = 50;
$total_max = $max_marks * count($subjects);
$total_obtained = array_sum($subjects);
$percentage = ($total_obtained / $total_max) * 100;

// Result logic
if ($percentage >= 75) {
    $result = "With Distinction";
} elseif ($percentage >= 60) {
    $result = "First Division";
} elseif ($percentage >= 45) {
    $result = "Second Division";
} elseif ($percentage >= 33) {
    $result = "Pass";
} else {
    $result = "Fail";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Marksheet</title>
    <style>
        table { border-collapse: collapse; width: 50%; text-align: center; }
        th, td { border: 1px solid black; padding: 8px; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2 align="center">Name : <?php echo $name; ?></h2>
    <table align="center">
        <tr>
            <th>Subject Name</th>
            <th>Max Marks</th>
            <th>Obtained Marks</th>
        </tr>
        <?php foreach($subjects as $sub => $marks) { ?>
        <tr>
            <td><?php echo $sub; ?></td>
            <td><?php echo $max_marks; ?></td>
            <td><?php echo $marks; ?></td>
        </tr>
        <?php } ?>
        <tr>
            <th>Total</th>
            <th><?php echo $total_max; ?></th>
            <th><?php echo $total_obtained; ?></th>
        </tr>
        <tr>
            <th colspan="2">Percentage</th>
            <td><?php echo round($percentage,1); ?></td>
        </tr>
        <tr>
            <th colspan="2">Result</th>
            <td><?php echo $result; ?></td>
        </tr>
    </table>
</body>
</html>

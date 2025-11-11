<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Operator PHP</title>
</head>
<body>
<div class="container">
<h2>Operator</h2>
<?php
    $gaji = 1000000;
    $pajak = 0.1;
    $thp = $gaji - ($gaji * $pajak);
    echo "Gaji sebelum pajak = Rp. $gaji <br>";
    echo "Gaji dibawa pulang = Rp. $thp";
?>
</div>
</body>
</html>

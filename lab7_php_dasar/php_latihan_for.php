<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Perulangan For</title>
</head>
<body>
<div class="container">
<h2>Perulangan For</h2>
<?php
    echo "Perulangan naik 1 sampai 10:<br>";
    for ($i = 1; $i <= 10; $i++) {
        echo "Perulangan ke-$i <br>";
    }

    echo "<br>Perulangan turun dari 10 ke 1:<br>";
    for ($i = 10; $i >= 1; $i--) {
        echo "Perulangan ke-$i <br>";
}
?>
</div>
</body>
</html>

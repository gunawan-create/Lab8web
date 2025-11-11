<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kondisi IF</title>
</head>
<body>
<div class="container">
<h2>Kondisi IF</h2>
<?php
$nama_hari = date("l");
    if ($nama_hari == "Sunday") {
        echo "Minggu";
    } elseif ($nama_hari == "Monday") {
        echo "Senin";
    } else {
        echo "Hari ini bukan Minggu atau Senin";
}
?>
</div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kondisi Switch</title>
</head>
<body>
<div class="container">
<h2>Kondisi Switch</h2>
<?php
$nama_hari = date("l");
    switch ($nama_hari) {
        case "Sunday": echo "Minggu"; break;
        case "Monday": echo "Senin"; break;
        case "Tuesday": echo "Selasa"; break;
        default: echo "Hari lainnya";
}
?>
</div>
</body>
</html>

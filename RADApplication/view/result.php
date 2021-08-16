<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h1>Results</h1></center>
    
<table border="1" cellpadding="15" align="center">
    <tr>
        <td>Index</td>
        <td>Name</td>
        <td>Age</td>
        <td>Mobile</td>
    </tr>
<?php
include '../controller/controller.php';
    while($row = mysqli_fetch_array($select)):
        $index = $row['INDEX_NO'];
        $name = $row['NAME'];
        $age = $row['AGE'];
        $tel = $row['MOBILE_NO'];
?>
    <tr>
        <td><?php echo "$index"; ?></td>
        <td><?php echo "$name"; ?></td>
        <td><?php echo "$age"; ?></td>
        <td><?php echo "$tel"; ?></td>
    </tr>
<?php endwhile; ?>
</body>
</html>

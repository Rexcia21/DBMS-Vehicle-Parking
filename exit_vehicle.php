<?php include 'config.php'; ?>

<?php
$id = $_GET['id'];

$exit_time = date("Y-m-d H:i:s");

$res = mysqli_query($conn, "SELECT entry_time FROM vehicles WHERE id=$id");
$row = mysqli_fetch_assoc($res);

$entry = strtotime($row['entry_time']);
$exit = strtotime($exit_time);

$hours = ceil(($exit - $entry) / 3600);
$fee = $hours * 20;

mysqli_query($conn, "UPDATE vehicles 
                     SET exit_time='$exit_time', fee='$fee'
                     WHERE id=$id");

header("Location: index.php");
?>

<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Vehicle Parking</title>
</head>
<body>

<h2>Vehicle Parking System</h2>

<a href="add_vehicle.php">Add Vehicle</a>

<table border="1">
<tr>
    <th>ID</th>
    <th>Vehicle No</th>
    <th>Entry</th>
    <th>Exit</th>
    <th>Fee</th>
    <th>Action</th>
</tr>

<?php
$result = mysqli_query($conn, "SELECT * FROM vehicles");

while($row = mysqli_fetch_assoc($result)) {
?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['vehicle_no']; ?></td>
    <td><?php echo $row['entry_time']; ?></td>
    <td><?php echo $row['exit_time']; ?></td>
    <td><?php echo $row['fee']; ?></td>
    <td>
        <?php if (!$row['exit_time']) { ?>
            <a href="exit_vehicle.php?id=<?php echo $row['id']; ?>">Exit</a>
        <?php } ?>
    </td>
</tr>
<?php } ?>

</table>

</body>
</html>

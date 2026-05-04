<?php include 'config.php'; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $vehicle_no = $_POST['vehicle_no'];
    $entry_time = date("Y-m-d H:i:s");

    mysqli_query($conn, "INSERT INTO vehicles (vehicle_no, entry_time)
                         VALUES ('$vehicle_no', '$entry_time')");

    header("Location: index.php");
}
?>

<form method="post">
    Vehicle No:
    <input type="text" name="vehicle_no" required>
    <button type="submit">Add</button>
</form>

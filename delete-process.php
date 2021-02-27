<?php
include_once 'database.php';
$sql = "DELETE FROM info WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
 echo "Record deleted successfully";
 header("location:update.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
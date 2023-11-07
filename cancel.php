<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET')
{
    $id = $_GET["id"];

    $conn = mysqli_connect("localhost","root","","website");
    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }

    $que = "INSERT INTO tbl_cancel (numberOfCancel) VALUES('$id')";
    $result = mysqli_query($conn, $que);

    $sql = "delete from reserve where id = '$id'";

    if (mysqli_query($conn, $sql)) {
        header("Location:myReserve.php");
        exit;
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    
        mysqli_close($conn);
}
?>
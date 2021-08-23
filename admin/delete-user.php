<?php
require("../connect.php");
?>
<?php
if (isset($_GET["id"])) {
    $id = $_GET["id"];
}
?>
<?php
$sql="delete from user where id=$id";
$qr = mysqli_query($conn,$sql);
header("location: index.php");
?>
<?php
require("../header.php");
require("../connect.php");
?>

<?php
if (isset($_GET["id"])) {
    $id = $_GET["id"];
}
?>
<?php
if (isset($_POST["sua"])) {
    $username = $_POST["username"];
    $pass = $_POST["pass"];
    $permit = $_POST["permit"];

    if ($username == "") {
        echo "vui lòng nhập username! <br>";
    }
    if ($pass == "") {
        echo "vui lòng nhập pass! <br>";
    }
    if ($permit == "") {
        echo "vui lòng nhập permit! <br>";
    }

    if ($username != "" && $pass != "" && $permit != "") {
        $sql = "update user set username='$username',pass='$pass', permit='$permit'where id=$id ";
        $qr = mysqli_query($conn, $sql);
        header("location: index.php");
    }
}
?>
<?php
$sql = "select * from user where id = $id";
$qr = mysqli_query($conn, $sql);
$rows = mysqli_fetch_array($qr);

?>
<form method="POST" action="">
    <label>
        <h4>username</h4>
    </label><input type="text" name="username" value="<?php echo $rows['username']; ?>"><br><br>
    <label>
        <h4>pass</h4>
    </label><input type="text" name="pass" value="<?php echo $rows['pass']; ?>"><br><br>
    <label>
        <h4>permit</h4>
    </label><input type="text" name="permit" value="<?php echo $rows['permit']; ?>"><br><br>
    <input type="submit" name="sua" value="Sửa">
</form>
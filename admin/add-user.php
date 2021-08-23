<?php
require("../header.php");
require("../connect.php");
?>
<div class="container">
    <?php
    if (isset($_POST["them"])) {
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
            $sql = "insert into user(username,pass,permit) values ('$username','$pass','$permit')";
            $qr = mysqli_query($conn, $sql);
            header("location: index.php");
        }
    }
    ?>
    <form method="POST" action="">
        <label>
            <h4>username</h4>
        </label><input type="text" name="username"><br><br>
        <label>
            <h4>pass</h4>
        </label><input type="text" name="pass"><br><br>
        <label>
            <h4>permit</h4>
        </label><input type="text" name="permit"><br><br>
        <input type="submit" name="them" value="thêm">
    </form>
</div>
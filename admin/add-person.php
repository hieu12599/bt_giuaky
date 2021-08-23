<?php
require("../header.php");
require("../connect.php");
?>
<?php
    if (isset($_POST["them"])) {
        $name = $_POST["name"];
        $phone = $_POST["phone"];
        $chucvu = $_POST["chucvu"];
        $email = $_POST["email"];
        $id_donvi = $_POST["id_donvi"];

        if ($name == "") {
            echo "vui lòng nhập name! <br>";
        }
        if ($phone == "") {
            echo "vui lòng nhập số điện thoại! <br>";
        }
        if ($chucvu == "") {
            echo "vui lòng nhập chức vụ! <br>";
        }
        if ($email == "") {
            echo "vui lòng nhập email! <br>";
        }
        if ($id_donvi == "") {
            echo "vui lòng nhập id đơn vị! <br>";
        }


        if ($name != "" && $phone != "" && $chucvu != "" && $email != "") {
            $sql = "insert into person(name,phone,chucvu,email,id_donvi) values ('$name','$phone','$chucvu','$email','$id_donvi')";
            $qr = mysqli_query($conn, $sql) or die("sai câu truy vấn");
            header("location: index.php");
        }
    }
    ?>
<form method="POST" action="">
        <label>
            <h3>họ tên</h3>
        </label><input type="text" name="name"><br><br>
        <label>
            <h3>điện thoại</h3>
        </label><input type="text" name="phone"><br><br>
        <label>
            <h3>chức vụ</h3>
        </label><input type="text" name="chucvu"><br><br>
        <label>
            <h3>email</h3>
        </label><input type="text" name="email"><br><br>
        <label>
            <h3>id đơn vị</h3>
        </label><input type="text" name="id_donvi"><br><br>
        
        <input type="submit" name="them" value="thêm">
    </form>
<?php
session_start();

?>
<?php
if (isset($_POST['btnlogin'])) {
    $username = trim($_POST['username']);
    $pass = trim($_POST['pass']);

    require("connect.php");

    $sql = "select * from user where username = '$username'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if ($pass == $row['pass']) {
            $_SESSION['role'] = $row['permit'];
            
            if ($_SESSION['role'] == true) {
                header('Location: admin/index.php');
            } else {
                    
                    header('Location: user/index.php');

                } 
            
        } else {
            echo '<script language="javascript">';
            echo 'alert("Sai Mật Khẩu")';
            echo '</script>';
            echo "<a href='index.php'> Click để về lại trang chủ</a>";
        }
    } else {
        echo 'Email sai';
        header('Location: index.php');
    }
    mysqli_close($conn);
    exit();
}
?>

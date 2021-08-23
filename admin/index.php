<?php
require("../header.php");
require("../connect.php");
?>



<div class="container">
  <h3>Quản lý user</h3>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">username</th>
        <th scope="col">pass</th>
        <th scope="col">permit</th>
        <th scope="col">
          <a href="add-user.php">thêm</a>
        </th>

      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "select * from user";
      $query = mysqli_query($conn, $sql);
      ?>
      <?php
      while ($row = mysqli_fetch_assoc($query)) { ?>
        <tr>
          <td><?php echo $row['username']; ?></td>
          <td><?php echo $row['pass']; ?></td>
          <td><?php echo $row['permit']; ?></td>
          <td><a href="edit-user.php?id=<?php echo $row['id']; ?>">sửa</a></td>
          <td> <a href="delete-user.php?id=<?php echo $row['id']; ?>">xóa</a></td>
        <?php } ?>
    </tbody>
  </table>
</div>


<div class="container">
  <h3>Quản lý cán bộ</h3>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">tên</th>
        <th scope="col">chức vụ</th>
        <th scope="col">email</th>
        <th scope="col">số điện thoại</th>
        <th scope="col">id đơn vị</th>
        <th scope="col">
          <a href="add-person.php">thêm</a>
        </th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql2 = "select * from person";
      $query = mysqli_query($conn, $sql2);
      ?>
      <?php
      while ($row = mysqli_fetch_assoc($query)) { ?>
        <tr>
          <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['phone']; ?></td>
          <td><?php echo $row['chucvu']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['id_donvi']; ?></td>
          <td><a href="edit-person.php?id=<?php echo $row['id']; ?>">sửa</a></td>
          <td> <a href="delete-person.php?id=<?php echo $row['id']; ?>">xóa</a></td>
        <?php } ?>
    </tbody>
  </table>
</div>
<?php
require("../footer.php");
?>
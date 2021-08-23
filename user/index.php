<?php
require("../header.php");
?>
        <div class="body">

        <h1>Danh sách giảng viên</h1>
        <hr></hr>
                  <?php
                  $i=1;

                  if(mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_assoc($result)){
                      if($i%2==1){
                        echo'<div class="row">';
                        echo '<div class="col-md-6 col-sm-6">';
                        echo'<table>';
                          echo '<tr>';
                          echo'<th class="pdr">Tên</th> ';
                          echo'<td>'.$row['name'] .'</td>';
                          echo'</tr>';
                          echo'<tr>';
                          echo'<th class="pdr">SĐT</th>';
                          echo'<td>'.$row['phone'].'</td>';
                          echo'</tr>';
                          echo'<tr>';
                            echo'<th class="pdr">Chức vụ</th>';
                            echo'<td>'.$row['chucvu'].'</td>';
                          echo'</tr>';
                          echo'<tr>';
                          echo'<th class="pdr">Email</th>';
                          echo'<td>'.$row['email'].'</td>';
                          echo'</tr>';
                  
                       echo'</table>';
                       echo '</div>';
                       
                      }
                      else{
                        echo '<div class="col-md-6 col-sm-6">';
                        echo'<table>';
                          echo '<tr>';
                          echo'<th class="pdr">Tên</th> ';
                          echo'<td>'.$row['name'] .'</td>';
                          echo'</tr>';
                          echo'<tr>';
                          echo'<th class="pdr">SĐT</th>';
                          echo'<td>'.$row['phone'].'</td>';
                          echo'</tr>';
                          echo'<tr>';
                            echo'<th class="pdr">Chức vụ</th>';
                            echo'<td>'.$row['chucvu'].'</td>';
                          echo'</tr>';
                          echo'<tr>';
                          echo'<th class="pdr">Email</th>';
                          echo'<td>'.$row['email'].'</td>';
                          echo'</tr>';
                  
                       echo'</table>';
                       echo '</div>';
                       echo'<hr></hr>';
                      }
                      $i++;
                    }
                    
                  }
                  
                 
              ?>
            
          </div> <!-- CLOSE BODY-->
 <?php 
 require("../footer.php");
 ?>

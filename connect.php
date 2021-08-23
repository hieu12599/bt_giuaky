<?php
     $conn = mysqli_connect('localhost','root','','giuaky');
     if($conn){
         mysqli_query($conn, "SET NAME 'UTF8'");
        
     } else {
         echo "ket noi that bai";
        }
?>
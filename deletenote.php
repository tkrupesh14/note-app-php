<?php
include './dbconn.php';
$id = $_GET['id'];
$del = "delete from note_data where id = $id";
$query = mysqli_query($conn, $del);
if($conn->query($del)=== TRUE){
  echo "<script>alert('Note deleted');
   </script>";
  header('location: allnote.php');
    
    
}else{
    echo "<script>alert('not deleted');</script><br>";
}
?>
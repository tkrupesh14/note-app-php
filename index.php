<?php
include './header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AK Notes Saver</title>
    <link rel="stylesheet" href="./css/style.css?v=<?php echo time(); ?>">
</head>
<body>
        <div class="form">
            <form action="" method="post">
                <input type="text" value="" name="title" placeholder="Enter your note title" required><br><br>
                <textarea name="desc" id="" cols="100" rows="5" placeholder="Enter your note Description" required></textarea><br><br>
              <center> <input type="submit" value="Add Note" name="submit"></center> <br><br>
            </form>
        </div>
    
</body>
</html>

<?php
include 'dbconn.php';
if(isset($_POST['submit']))
{
    $title = $_POST['title'];
    $desc = $_POST ['desc'];
  
    $ins = "INSERT INTO note_data (title, details) value ('$title', '$desc')";
    if($conn->query($ins)=== TRUE){
        echo "<script>alert('Note Added Sucessfully');
         </script>";
        
          
          
      }else{
          echo "<script>alert('note not added');</script><br>";
      }
      echo "<center><button href='allnote.php' class ='all-btn' ><a href='allnote.php'>All Notes</a></button></center>";
   
}

    
?>
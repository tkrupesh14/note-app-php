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
</head>
<body>
        <div class="form">
        <?php
include 'dbconn.php';
$id = $_GET['id'];
$select = "select * from note_data  where id = $id";
$query = mysqli_query($conn, $select);
$result = mysqli_fetch_assoc($query);

if(isset($_POST['submit']))
{
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $upe = "UPDATE note_data SET id = '$id', title = '$title', details = '$desc
    <?php
                    
    ?>' where id = $id ";
}
?>
            <form action="" method="post">
                <input type="text" value="<?php echo $result['title'];?>" name="title" placeholder="Enter your note title" required><br><br>
                <textarea name="desc" id="" cols="100" rows="10" placeholder="Enter your note Description"  required><?php echo $result['details'];?></textarea><br><br>
                <input type="submit" value="Update Note" name="submit"><br><br>
            </form>
            <?php
                if(isset($_POST['submit'])){
                    if($conn->query($upe)=== TRUE){
                       echo "<script>alert('note updated');</script><br>";
                       echo "<button><a href='select.php' style='text-decoration:none;'>Check Data</a></button>";
                       header('location: allnote.php');
                   }else{
                       echo "error: ". $upe. "<br>". $conn->error;
                   }
                   }
            ?>
        </div>
    
</body>
</html>


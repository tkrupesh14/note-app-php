<?php
include './header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>

<div class="notes-title">
    <h3>All Notes</h3>
</div>
<table style="width: 100%; text-align:center;">
    <thead bgcolor="#009078" style="color: white;">
        <tr>
            <td>No.</td>
            <td>Title</td>
            <td>Description</td>
            <td colspan="2">Actions</td>
        </tr>
    </thead>
    <?php
    $no=0;
        include 'dbconn.php';
        $select = "select * from note_data";
        $query = mysqli_query($conn, $select);
       
        while ($result = mysqli_fetch_assoc($query)) {
            
            $no++;
        ?>
        <div style="background: blue;">
    <tbody>
        <tr>
            <td><?php  echo $no ?></td>
            <td><?php echo $result['title'] ?></td>
            <td><?php echo $result['details'] ?></td>
            <td><?php echo "<a href='editnote.php?id=$result[id]' style='color:blue;'><i class='fas fa-edit'></i></a>"; ?></td>
            <td><?php echo "<a href='deletenote.php?id=$result[id]' style='color:red;'><i class='fas fa-trash-alt'></i></a>"; ?></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
    </div>
</table>
</div>
<center> <button class="all-btn-all-page"><a href="./index.php">Add A new Note</a></button></center>
    
</body>
</html>
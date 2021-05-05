<?php
include './header.php';
?>

<div class="notes-title">
    <h3>All Notes</h3>
</div>
<table style="width: 100%; text-align:center;">
    <thead bgcolor="yellow">
        <tr>
            <td>ID</td>
            <td>TITLE</td>
            <td>Description</td>
            <td colspan="2">Actions</td>
        </tr>
    </thead>
    <?php
        include 'dbconn.php';
        $select = "select * from note_data";
        $query = mysqli_query($conn, $select);

        while ($result = mysqli_fetch_assoc($query)) {

        ?>
    <tbody>
        <tr>
            <td><?php echo $result['id'] ?></td>
            <td><?php echo $result['title'] ?></td>
            <td><?php echo $result['details'] ?></td>
            <td><?php echo "<a href='editnote.php?id=$result[id]'>Edit</a>"; ?></td>
            <td><?php echo "<a href='deletenote.php?id=$result[id]'>Delete</a>"; ?></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>
</div>
<button><a href="./index.php">Add A new Note</a></button>
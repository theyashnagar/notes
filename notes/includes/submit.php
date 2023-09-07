<?php
include('_config.php');

// Create New Note
if (isset($_POST['savenote']) && isset($_POST['takenote'])) {
    $query = "INSERT INTO `note`(`text`) VALUES('$_POST[takenote]')";
    $query_db = mysqli_query($con,$query);

    if($query_db)
    {
        header('location: http://localhost/notes');
    }
    else
    {
        echo "<script>alert('Failed!!, Error saving query!!'); </script>";
    }
}

// Update Existing Note
if (isset($_POST['noteupdate']) && isset($_POST['idupdate'])) {
    $fetch_query = "SELECT * FROM `note` ORDER BY `id` DESC";
    $fetch_sql = mysqli_query($con,$fetch_query);
    $row = mysqli_fetch_array($fetch_sql);
    $id = $row['id']+1;

    $sql = "UPDATE `note` SET `id`=$id,`text`='$_POST[noteupdate]' WHERE `id`='$_POST[idupdate]'";
    $update_query_db = mysqli_query($con,$sql);

    if($update_query_db)
    {
        header('location: http://localhost/notes');
    }
    else
    {
        echo "<script>alert('Failed!!, Error saving query!!'); </script>";
    }
}

// Delete Note
if (isset($_POST['id']) && isset($_POST['delete'])) {
    $delete_query = "DELETE FROM `note` WHERE `id`='$_POST[id]'";
    $query_db = mysqli_query($con,$delete_query);

    if($query_db)
    {
        header('location: http://localhost/notes');
    }
    else
    {
        echo "<script>alert('Failed!!, Error saving query!!'); </script>";
    }
}
?>
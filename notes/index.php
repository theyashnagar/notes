<?php
include_once 'includes/_header.php';
?>

<section class="container">
    <div class="box">
        <form action="includes/submit.php" method="POST" class="takenote">
            <textarea name="takenote" id="takenote" class="textbox" placeholder="Take a note..." rows="1"></textarea>
            <button type="submit" id="savenote" name="savenote">
                <img src="assets/img/tick.svg" alt="" width="25px">
            </button>
        </form>
    </div>
</section>

<section class="section2">
    <?php 
        $fetch_query = "SELECT * FROM `note` ORDER BY `id` DESC";
        $fetch_sql = mysqli_query($con,$fetch_query);
        while($row = mysqli_fetch_array($fetch_sql))
        {
            $id = $row['id'];
            $note = $row['text'];
        
    ?>
    <div class="note-result">
        <p class="note" onblur="updateNote(this,<?php echo $id; ?>)" contenteditable><?php echo $note; ?></p>
        <div class="options">
            <form action="includes/submit.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <button type="submit" name="delete"><img src="assets/img/delete.svg"></button>
            </form>
        </div>
    </div>
    <?php
        }
    ?>
</section>

<form id="noteupdateform" action="includes/submit.php" method="post">
    <input type="hidden" name="noteupdate" id="noteupdate" readonly>
    <input type="hidden" name="idupdate" id="idupdate" readonly>
</form>

<script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>
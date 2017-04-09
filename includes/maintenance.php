    <form action="" method="post">
        <input type="submit" name="submit" value="Share This" width="30" height="25"/>       
    </form>
<?php 
    if (isset($_POST['submit']) ? $_POST['submit'] : NULL){
        echo "Maintenance";
    }
?>

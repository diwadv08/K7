<?php
    include 'db/connection.php';
?>
<?php
    $upd=mysqli_query($conn,"UPDATE maintainance set ate=1 where id='".$_GET['id']."' && ate=0");
    if($upd){
        ?>
        <script>location.href="maintainance.php"</script>
    <?php
    } 
?>


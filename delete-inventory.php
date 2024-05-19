<?php
    include 'db/connection.php';
?>
<?php
    $del=mysqli_query($conn,"DELETE FROM inventory where id='".$_GET['id']."'");
    if($del){
        ?>
        <script>location.href="inventory.php"</script>
    <?php
    } 
?>
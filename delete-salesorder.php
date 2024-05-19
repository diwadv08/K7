<?php
    include 'db/connection.php';
?>
<?php
    $del=mysqli_query($conn,"DELETE FROM salesorder where id='".$_GET['id']."'");
    if($del){
        ?>
        <script>location.href="salesorder.php"</script>
    <?php
    } 
?>
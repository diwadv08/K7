<?php
    include 'db/connection.php';
?>
<?php
    $del=mysqli_query($conn,"DELETE FROM maintainance where id='".$_GET['id']."'");
    if($del){
        ?>
        <script>location.href="maintainance.php"</script>
    <?php
    } 
?>
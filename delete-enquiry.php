<?php
    include 'db/connection.php';
?>
<?php
    $del=mysqli_query($conn,"DELETE FROM enquiry where id='".$_GET['id']."'");
    if($del){
        ?>
        <script>location.href="enquiry.php"</script>
    <?php
    } 
?>
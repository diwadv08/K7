<?php
    include 'db/connection.php';
?>
<?php
    $del2=mysqli_query($conn,"DELETE FROM user_details where uid='".$_GET['id']."'");
    $del=mysqli_query($conn,"DELETE FROM billing where id='".$_GET['id']."'");

    if($del){
        ?>
        <script>location.href="customer.php"</script>
    <?php
    }
    if($del2){
        ?>
        <script>location.href="customer.php"</script>
    <?php
    }  
?>
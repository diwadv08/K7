<?php
    include 'db/connection.php';
?>
<?php
    $sel=mysqli_query($conn,"SELECT * from templates where template='".$_POST['id']."'");
    $fe=mysqli_fetch_assoc($sel);
    echo json_encode($fe); 
?>
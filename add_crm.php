<?php
include 'db/connection.php';
include 'db/session.php';
?>

<?php
$sel=mysqli_query($conn,"SELECT * FROM enquiry where id='".$_GET['id']."'");
if(mysqli_num_rows($sel)>0){
    while($fe=mysqli_fetch_assoc($sel)){
        $ins=mysqli_query($conn,"INSERT INTO billing(name,date,status,remarks,mobile_num,address,array_price)values('".$fe['name']."','".$fe['date']."','".$fe['b_type']."','".$fe['remarks']."','".$fe['mobile']."','".$fe['address']."','0,0,0,0')");
        $upd=mysqli_query($conn,"UPDATE enquiry set status=1 where id='".$_GET['id']."'");
        if($ins){
            header("location:enquiry.php");
        }
    }
}
?>
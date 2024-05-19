<?php
include 'db/connection.php';
include 'db/session.php';
?>

<?php
$sel=mysqli_query($conn,"SELECT * FROM enquiry where id='".$_GET['id']."'");
if(mysqli_num_rows($sel)>0){
    while($fe=mysqli_fetch_assoc($sel)){
        $ins=mysqli_query($conn,"DELETE FROM user_details where name='".$fe['name']."' and address='".$fe['address']."' and mobile_num='".$fe['mobile']."'");
        $ins1=mysqli_query($conn,"DELETE FROM billing where name='".$fe['name']."' and address='".$fe['address']."' and mobile_num='".$fe['mobile']."'");

        $upd=mysqli_query($conn,"UPDATE enquiry set status=0 where id='".$_GET['id']."'");

        if($ins){
            header("location:enquiry.php");
        }
        if($ins1){
            header("location:enquiry.php");
        }
        if($upd){
            header("location:enquiry.php");
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
<!-- <form method="post">        
    <input type="" value="" id="time1" name="time1"/>
    <input type="" value="" id="date1" name="date1"/>
</form> -->
</body>
</html>




<?php
    session_start();
?>

<?php
    include 'db/connection.php';
    $ins=mysqli_query($conn,"UPDATE users set date1='".$_POST['date1']."',time1='".$_POST['time1']."' where id='".$_SESSION['user_id']."'");
    echo "UPDATE users set date1='".$_POST['date1']."',time1='".$_POST['time1']."' where id='".$_SESSION['user_id']."'";
    // die;
    session_unset();
    header("Location: index.php");
?>

<!-- <script>
    var c1=new Date().getMonth();
    var d1=c1+1;
    alert("hi")
    $(document).ready(function(){
        var c1=new Date().getMonth();
        var d1=c1+1;

        $("#time1").val(new Date().getHours()+":"+new Date().getMinutes()+":"+new Date().getSeconds());
        $("#date1").val(new Date().getDate()+"/"+d1+"/"+new Date().getFullYear());
    })
</script> -->


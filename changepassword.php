<?php include 'sidebar.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"><meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>K7 Groups</title>
    <link rel="shortcut icon" href="images/title.png">
    <link rel="stylesheet" href="assets/css/style20d4.css?v1.1.2">
</head>
<body class="nk-body" data-sidebar-collapse="lg" data-navbar-collapse="lg" style="margin-top:40px">
<div class="nk-content">
    <div class="container">
    <div class="nk-content-inner">
    <div class="nk-content-body">
    <div class="nk-block-head">
    <div class="nk-block-head-between flex-wrap gap g-2">
    <div class="nk-block-head-content">
        <h2 class="nk-block-title">Change Password</h1>
        </div>
<div class="nk-block-head-content"><ul class="d-flex">
    <li>&nbsp;&nbsp;<button onclick="history.go(-1)" class="btn btn-danger ">Back</button></li></ul></div></div></div>
<div class="nk-block">
    <div class="tab-content" id="myTabContent">
    <div class="tab-pane show active w-50" id="tab-1" tabindex="0">
    <div class="card card-gutter-md">
    <div class="card-body">
    <div class="bio-block">
<form method="post">
<div class="row">
    <div class="col-lg-12">
    <div class="form-group">
        <label for="password" class="form-label">Old Password</label>
<div class="form-control-wrap">
    <input type="password" class="form-control" id="password" name="oldpassword" placeholder="Enter your old password">
</div></div></div></div>
<div class="row">
    <div class="col-lg-12 mt-3">
    <div class="form-group">
        <label for="password" class="form-label">New Password</label>
<div class="form-control-wrap">
    <input type="password" class="form-control" id="password" name="newpassword" placeholder="Enter your New password">
</div></div></div></div>
<div class="row">
    <div class="col-lg-12 mt-3">
    <div class="form-group">
        <label for="password" class="form-label">Confirm Password</label>
<div class="form-control-wrap">
    <input type="password" class="form-control" id="password" name="confirmpassword" placeholder="Confirm your password">
    <div class="row">
    <div class="col-lg-6 mt-4">
    <div class="form-group">
<div class="form-control-wrap">
    <input type="submit" class="form-control btn" id="change" value="Change Password" name="change" style="background-color:skyblue;color:black">
</div></div></div>
</body>
</html>
<?php
    if(isset($_POST['change'])){
        $sel=mysqli_query($conn,"SELECT * FROM users where id='".$_SESSION['user_id']."'");
        if(mysqli_num_rows($sel)>0){
            $fe=mysqli_fetch_assoc($sel);
            if($fe['password']==$_POST['oldpassword']){
?>
<?php
                if($_POST['newpassword']==$_POST['confirmpassword']){
                    $upd=mysqli_query($conn,"UPDATE users set password='".$_POST['newpassword']."' where id='".$_SESSION['user_id']."'");
?>
                <script>alert("Password updated")</script>
                <script>location.href="index1.php"</script>                
<?php 
                }
                else{
?>
                    <script>alert("Please fill the correct details")</script>
<?php 
                }
              }
            else if($fe['password']!=$_POST['oldpassword']){
?>
                <script>alert("Retry Again")</script>                
<?php            }
            
        }
    }
?>
<script src="assets/js/bundle.js"></script>
<script src="assets/js/scripts.js"></script>
<script src="assets/js/data-tables/data-tables.js"></script>
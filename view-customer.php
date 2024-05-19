<?php include 'sidebar.php';?>
<?php
$select=mysqli_query($conn,"SELECT * from billing where id='".$_GET['id']."'");
        if(mysqli_num_rows($select)>0){
            $fe=mysqli_fetch_assoc($select);
        }

?>            
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="author" content="Softnio">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>K7 Groups</title>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="shortcut icon" href="images/title.png">
<link rel="stylesheet" href="assets/css/style20d4.css?v1.1.2">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="nk-body" style="margin-top:30px" data-sidebar-collapse="lg" data-navbar-collapse="lg">
<script src="assets/js/bundle.js"></script>
<script src="assets/js/scripts.js"></script>
<div class="nk-content">
    <div class="container">
    <div class="nk-content-inner">
    <div class="nk-content-body">
    <div class="nk-block-head">
    <div class="nk-block-head-between flex-wrap gap g-2">
    <div class="nk-block-head-content">
        <h2 class="nk-block-title">View Customer</h1>
        <nav><ol class="breadcrumb breadcrumb-arrow mb-0">
            <li class="breadcrumb-item">
            <a href="#">Home</a></li>
            <li class="breadcrumb-item">
            <a href="#">Customer</a></li>
            <li class="breadcrumb-item">
            <a href="#">View Customer</a></li>
        </ol></nav></div>
<div class="nk-block-head-content"><ul class="d-flex">
    <li>&nbsp;&nbsp;<button onclick="history.go(-1)" class="btn btn-danger">Back</button></li></ul></div></div></div>
<form method="post" enctype="multipart/form-data">
<div class="row g- new" id="new">
<div class="col-xxl-9">
<div class="gap gy-4">
<div class="gap-col">
<div class="card card-gutter-md">
<div class="card-body">
<div class="row g-gs">
<div class="col-lg-12 form-label" style="font-size:16px;font-weight:700;">&nbsp;Customer</div>
<div class="col-lg-3">
<div class="form-group"><label for="name" class="form-label">Name</label>
<div class="form-control-wrap">
<input type="text" class="form-control" name="name" value=<?=$fe['name'];?> id="name" readonly/>
</div></div></div>
<div class="col-lg-3">
<div class="form-group"><label for="date" class="form-label">Date</label>
<div class="form-control-wrap">
    <input type="text" class="form-control" value=<?=$fe['date'];?> id="date" name="date"  readonly></div></div></div>
    <div class="col-lg-3">
<div class="form-group"><label for="category" class="form-label">Category</label>
<div class="form-control-wrap">
<input type="text" class="form-control" id="category" name="category" value=<?=$fe['status'];?> readonly>
    </div>
    </div>
    </div>
<div class="col-lg-3">
<div class="form-group"><label for="mobile_num" class="form-label">Mobile</label>
<div class="form-control-wrap">
<input type="text" class="form-control" maxlength="10" id="mobile_num" name="mobile_num" value=<?=$fe['mobile_num'];?> readonly></div></div></div>
<div class="col-lg-6">
<div class="form-group"><label for="address" class="form-label">Address</label>
<div class="form-control-wrap">
    <textarea class="form-control" id="address" name="address" placeholder="Enter your address"readonly><?=$fe['address'];?></textarea></div></div></div>
    <div class="col-lg-6">
<div class="form-group"><label for="remarks" class="form-label">Remarks</label>
<div class="form-control-wrap">
    <textarea class="form-control" id="remarks" name="remarks" placeholder="Mention remarks if any"readonly><?=$fe['remarks'];?></textarea></div></div></div>
</div> 
</body>
</html>

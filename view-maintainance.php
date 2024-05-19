<?php include 'sidebar.php'?>
<!DOCTYPE html><html lang="en">
<head>
<meta charset="utf-8">
<meta name="author" content="Softnio">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>K7 Groups</title>
<link rel="shortcut icon" href="images/title.png">
<link rel="stylesheet" href="assets/css/style20d4.css?v1.1.2"></head>
<body class="nk-body" data-sidebar-collapse="lg" data-navbar-collapse="lg"style="margin-top:40px">
<?php 
    $sel=mysqli_query($conn,"SELECT* FROM maintainance WHERE id='".$_GET['id']."' ");
    if(mysqli_num_rows($sel)>0){
        $fe=mysqli_fetch_assoc($sel);
    }
?>
<div class="nk-content">
    <div class="container">
    <div class="nk-content-inner">
    <div class="nk-content-body">
    <div class="nk-block-head">
    <div class="nk-block-head-between flex-wrap gap g-2">
    <div class="nk-block-head-content">
        <h2 class="nk-block-title">View Maintainance</h1>
        <nav><ol class="breadcrumb breadcrumb-arrow mb-0">
            <li class="breadcrumb-item">
            <a href="#">Home</a></li>
            <li class="breadcrumb-item">
            <a href="#">Maintainance</a></li>
            <li class="breadcrumb-item">
            <a href="#">View Maintainance</a></li>
        </ol></nav></div>
<div class="nk-block-head-content"><ul class="d-flex">
    <li>&nbsp;&nbsp;<button onclick="history.go(-1)" class="btn btn-danger">Back</button></li></ul></div></div></div>

<div class="nk-block">
        <form method="post"  enctype="multipart/form-data">
        <div class="row g-gs">
        <div class="col-xxl-9">
        <div class="gap gy-4">
        <div class="gap-col">
        <div class="card card-gutter-md">
        <div class="card-body">
        <div class="row g-gs">
        <div class="col-lg-6">
        <div class="form-group"><label class="form-label">Machine Id</label>
    <div class="form-control-wrap"><input readonly type="text" class="form-control" name="mid" value=<?=$fe['mid'];?>></div></div></div>
    <div class="col-lg-6">
        <div class="form-group"><label class="form-label">Operator Name</label>
    <div class="form-control-wrap"><input readonly type="text" class="form-control" name="operator" value=<?=$fe['operator'];?>></div></div></div>
    <div class="col-12">
        <div class="form-group"><label class="form-label">Date</label>
    <div class="form-control-wrap"><input readonly type="date" class="form-control"  name="date" value=<?=$fe['date'];?>></div></div></div>
    <div class="col-lg-6">
        <div class="form-group"><label class="form-label">Charge</label>
    <div class="form-control-wrap"><input readonly type="text" class="form-control" placeholder="Product price" name="charge" value=<?=$fe['charge'];?>></div></div></div>
    <div class="col-lg-6">
        <div class="form-group"><label class="form-label">Mode Of Service</label>
    <div class="form-control-wrap"><input readonly type="text" class="form-control"  name="mos" value=<?=$fe['mos'];?>></div></div></div>
    
    
    <div class="col-lg-12">
        <div class="form-group"><label class="form-label">Complaints</label>
    <div class="form-control-wrap">
        <textarea class="form-control" name="complaints" readonly><?=$fe['complaints'];?></textarea></div></div></div>
    <div class="col-lg-12">
        <div class="form-group">
    </div></div></div></div></div></div>
    <div class="gap-col">
        <div class="card card-gutter-lg">
        <div class="card-body">
        <label><b>Machine Image</b></label>        
        <div>    
    <div class="image-upload-wrap d-flex flex-column align-items-center">
        <img src=<?=$fe['machine_photo'];?> height="200px" width="220px">
    </div></div></div></div></div></div></div>
</form></div></div></div></div></div>
    
    </div></div></div></div></div></div>
    </body>
    <script src="assets/js/bundle.js"></script>
        <script src="assets/js/scripts.js"></script>
<link rel="stylesheet" href="assets/css/libs/editors/quill20d4.css?v1.1.2"></link><script src="assets/js/libs/editors/quill.js"></script><script src="assets/js/editors/quill.js"></script>
</html>
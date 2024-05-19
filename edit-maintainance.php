<?php include 'sidebar.php'?>
<!DOCTYPE html><html lang="en">
<head>
<meta charset="utf-8">
<meta name="author" content="Softnio">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Multi-purpose admin dashboard template that especially build for programmers.">
<title>K7 Groups</title>
<link rel="shortcut icon" href="images/title.png">
<link rel="stylesheet" href="assets/css/style20d4.css?v1.1.2"></head>
<body class="nk-body" data-sidebar-collapse="lg" data-navbar-collapse="lg" style="margin-top:40px">
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
        <div class="nk-block-head-content"><h2 class="nk-block-title">Edit Maintainance</h1><nav><ol class="breadcrumb breadcrumb-arrow mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Maintainance</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Maintainance</li></ol>
        </nav></div>
    <div class="nk-block-head-content"><ul class="d-flex">
        <li><a href="maintainance.php" class="btn btn-primary btn-md d-md-none"><em class="icon ni ni-eye"></em><span>View</span></a></li>
        <li>&nbsp;&nbsp;<button onclick="history.go(-1)" class="btn btn-danger">Back</button></li></ul></div></div></div>
    <div class="nk-block">
<form method="post" enctype="multipart/form-data">
        <div class="row g-gs">
        <div class="col-xxl-9">
        <div class="gap gy-4">
        <div class="gap-col">
        <div class="card card-gutter-md">
        <div class="card-body">
        <div class="row g-gs">
        <div class="col-lg-6">
        <div class="form-group"><label class="form-label">Machine ID</label>
    <div class="form-control-wrap"><input type="text" class="form-control"  name="mid" value=<?=$fe['mid'];?>></div></div></div>
    <div class="col-6">
        <div class="form-group"><label class="form-label">Date</label>
    <div class="form-control-wrap">
        <input type="date" name="date" value="<?=date('Y-m-d');?>" class="form-date form-control"></div></div></div>
    <div class="col-lg-6">
        <div class="form-group"><label class="form-label">Charge</label>
    <div class="form-control-wrap"><input type="text" class="form-control" name="charge" value=<?=$fe['charge'];?>></div></div></div>
    <div class="col-lg-6">
        <div class="form-group"><label class="form-label">Mode Of Service</label>
    <div class="form-control-wrap">
        <select class="js-select" name="mos" data-search="true" data-sort="false">
        <option value="">Select an option</option>
        <option value="Service" <?php if($fe['mos']=="Service"){echo "selected";}?>>Service</option>
        <option value="Oil Changing" <?php if($fe['mos']=="Oil Changing"){echo "selected";}?>>Oil Changing</option>
        <option value="Painting" <?php if($fe['mos']=="Painting"){echo "selected";}?>>Painting</option>
    </select></div></div></div>
    <div class="col-lg-12">
        <div class="form-group"><label class="form-label">Complaints</label>
    <div class="form-control-wrap">
        <textarea name="complaints" class="form-control"><?=$fe['complaints'];?></textarea> <br></div>
    </div></div></div></div>
    <div class="col-lg-12">
        <div class="form-group">
    </div></div></div></div></div></div>
    <div class="gap-col">
<div class="card card-gutter-md">
<div class="card-body">
<div class="form-group"><label class="form-label">Machine Photo</label>
<div class="form-control-wrap">
</div>
<center><img src="<?=$fe['machine_photo'];?>" height='170px' width='180px'></center>

<div class="pt-3">
<input  id="upload_media" name="upload_media" type="file" max="1">
<label for="upload_media" class="btn btn-md btn-primary">Upload Image</label> 
<div class="form-note mt-3">Set the product thumbnail image. Only *.png, *.jpg and *.jpeg image files are accepted.</div>   
</div></div></div></div></div>


    <div class="gap-col" style="margin-top:40px"><ul class="d-flex align-items-center gap g-3">
        <li><input type="submit" name="submit" value="Edit" class="btn btn-primary"></li>
        <li><a href="maintainance.php" class="btn border-0">Cancel</a></li></ul></div>
</form></div></div></div></div></div>

        </body>
        <script src="assets/js/bundle.js"></script>
        <script src="assets/js/scripts.js"></script>            
<link rel="stylesheet" href="assets/css/libs/editors/quill20d4.css?v1.1.2"></link>
<script src="assets/js/libs/editors/quill.js"></script>
<script src="assets/js/editors/quill.js"></script>
</html>
<?php
    if(isset($_POST['submit']))
    {
        $upd=mysqli_query($conn,"UPDATE maintainance 
                SET mid='".$_POST['mid']."',
                charge='".$_POST['charge']."',
                mos='".$_POST['mos']."',
                complaints='".$_POST['complaints']."',
                date='".$_POST['date']."'
                WHERE id='".$_GET['id']."'");

        if($_FILES["upload_media"]["tmp_name"] != "" || $_FILES["avatar"]["tmp_name"] != ""){
            $target_dir = "uploads/";
            $target_file1 = $target_dir . basename($_FILES["upload_media"]["name"]);
            $check1 = getimagesize($_FILES["upload_media"]["tmp_name"]);
            if(move_uploaded_file($_FILES['upload_media']['tmp_name'],$target_file1)){
                $upd=mysqli_query($conn,"UPDATE maintainance 
                SET machine_photo='".$target_file1."'
                WHERE id='".$_GET['id']."'");
            }
        }
        
           
?>
        <script>location.href="maintainance.php"</script>
        <?php
    }
    
?>
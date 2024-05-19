<?php include 'sidebar.php'?>
<!DOCTYPE html><html lang="en">
<head>
<meta charset="utf-8">
<meta name="author" content="Softnio">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>K7 Groups</title>
<link rel="shortcut icon" href="images/title.png">
<link rel="stylesheet" href="assets/css/style20d4.css?v1.1.2"></head>
<body class="nk-body" data-sidebar-collapse="lg" data-navbar-collapse="lg" style="margin-top:40px">
<?php 
    $sel=mysqli_query($conn,"SELECT* FROM inventory WHERE id='".$_GET['id']."' ");
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
        <div class="nk-block-head-content"><h2 class="nk-block-title">Edit Inventory</h1><nav><ol class="breadcrumb breadcrumb-arrow mb-0"><li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Inventory</li>
        <li class="breadcrumb-item active" aria-current="page">Edit Inventory</li>
    </ol></nav></div>
    <div class="nk-block-head-content"><ul class="d-flex">
        <li><a href="inventory.php" class="btn btn-primary btn-md d-md-none"><em class="icon ni ni-eye"></em><span>View</span></a></li>
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
    <div class="col-lg-6">
    <div class="form-group"><label class="form-label">Machine Name</label>
    <div class="form-control-wrap"><input type="text" class="form-control"  name="machine_name" value=<?=$fe['machine_name'];?>></div></div></div>

    <div class="col-lg-4">
        <div class="form-group"><label class="form-label">Operator Name</label>
    <div class="form-control-wrap"><input type="text" class="form-control" placeholder="Total price" name="operator_name" value=<?=$fe['operator_name'];?>>
    </div></div></div>
    <div class="col-lg-4">
    <div class="form-group">
        <div class="form-control-wrap"><label class="form-label">Category</label>
        <select class="js-select" name="category" data-search="true" data-sort="false">
        <option value="">Select an option</option>
        <option value="Grinding Machine" <?php if($fe['category']=="Grinding Machine"){echo "selected";}?>>Grinding Machine</option>
        <option value="Milling Machine" <?php if($fe['category']=="Milling Machine"){echo "selected";}?>>Milling Machine</option>
        <option value="Drilling Machine" <?php if($fe['category']=="Drilling Machine"){echo "selected";}?>>Drilling Machine</option>
    </select></div></div></div>
    <div class="col-lg-4">
<div class="form-group"><label for="baseprice" class="form-label">Material Quantity</label>
<div class="form-control-wrap">
    <input required type="number" class="form-control" id="baseprice" name="quantity" value=<?=$fe['quantity'];?> min=1></div></div></div>
    <div class="col-lg-12">
        <div class="form-group"><label class="form-label">Remarks</label>
    <div class="form-control-wrap">
        <textarea class="form-control" name="remarks"><?=$fe['remarks'];?></textarea><br></div></div></div>
    <div class="col-lg-12">
        <div class="form-group">
    </div></div>
<div class="form-group"><label class="form-label">Machine Photo</label>
<div class="form-control-wrap">
</div>
<center><img src="<?=$fe['upload_media'];?>" height="150px" width="180px"></center>
<div class="pt-3">
<input  id="upload_media" name="upload_media" type="file" max="1">
<label for="upload_media" class="btn btn-md btn-primary">Upload Image</label> 
<div class="form-note mt-3">Set the product thumbnail image. Only *.png, *.jpg and *.jpeg image files are accepted.</div>   
</div></div>
</div></div></div></div></div>


    
<div class="gap-col text-center" style="margin-top:40px"><ul class="d-flex align-items-center gap g-3">
        <li><input type="submit" name="submit" value="Edit" class="btn btn-primary"></li>
        <li><a href="inventory.php" class="btn border-0">Cancel</a></li></ul></div>
</form></div></div></div>
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
        $upd=mysqli_query($conn,"UPDATE inventory 
                SET machine_name='".$_POST['machine_name']."',
                mid='".$_POST['mid']."',
                operator_name='".$_POST['operator_name']."',
                machine_name='".$_POST['machine_name']."',
                category='".$_POST['category']."',
                remarks='".$_POST['remarks']."',
                quantity='".$_POST['quantity']."'
                WHERE id='".$_GET['id']."'");

        if($_FILES["upload_media"]["tmp_name"] != "" ){
            $target_dir = "uploads/";
            $target_file1 = $target_dir . basename($_FILES["upload_media"]["name"]);
            $check1 = getimagesize($_FILES["upload_media"]["tmp_name"]);
            if(move_uploaded_file($_FILES['upload_media']['tmp_name'],$target_file1)){
                $upd=mysqli_query($conn,"UPDATE inventory 
                SET upload_media='".$target_file1."'
                WHERE id='".$_GET['id']."'");
            }
        }
        
           
?>
        <script>location.href="inventory.php"</script>
        <?php
    }
    
?>
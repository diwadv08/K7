<?php include 'sidebar.php';?>
<style>
    spam{
        color:red;
    }
</style>
<?php
$select=mysqli_query($conn,"SELECT * from enquiry where id='".$_GET['id']."'");
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
<meta name="description" content="Multi-purpose admin dashboard template that especially build for programmers.">
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
        <h2 class="nk-block-title">Edit Enquiry</h1>
        <nav><ol class="breadcrumb breadcrumb-arrow mb-0">
            <li class="breadcrumb-item">
            <a href="#">Home</a></li>
            <li class="breadcrumb-item">
            <a href="#">Customer</a></li>
            <li class="breadcrumb-item">
            <a href="#">Enquiry</a></li>
            <li class="breadcrumb-item">
            <a href="#">Edit Enquiry</a></li>
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
<div class="col-lg-6">
<div class="form-group"><label for="name" class="form-label">Name<spam>*</spam></label>
<div class="form-control-wrap">
<input type="text" class="form-control" name="name" value=<?=$fe['name'];?> id="name"/>
</div></div></div>
<div class="col-lg-6">
<div class="form-group"><label for="date" class="form-label">Date<spam>*</spam></label>
<div class="form-control-wrap">
    <input type="date" class="form-control" id="date" name="date"  value="<?=date('Y-m-d');?>"></div></div></div>
    <div class="col-lg-6">
<div class="form-group"><label for="category" class="form-label">Business Type<spam>*</spam></label>
<div class="form-control-wrap">
    <select name="b_type" class="form-select">
    <option value="Retail"
    <?php if($fe['b_type']=='Retail' ){echo "selected";}?>>Retail</option>
        <option value="Wholesale"
    <?php if($fe['b_type']=='Wholesale'){echo "selected";}?>>Wholesale</option>
    </select>  
</div></div></div>
<div class="col-lg-6">
<div class="form-group"><label for="category" class="form-label">Quantity<spam>*</spam></label>
<div class="form-control-wrap">
<input type="text" class="form-control"  id="mobile_num" name="quantity" value=<?=$fe['quantity'];?>>  
</div></div></div> 
<div class="col-lg-6">
<div class="form-group"><label for="mobile_num" class="form-label">Mobile<spam>*</spam></label>
<div class="form-control-wrap">
<input type="tel" class="form-control" pattern="^[0-9]{10}$"  id="mobile_num" name="mobile" value=<?=$fe['mobile'];?>>
</div></div></div>
<div class="col-lg-6">
<div class="form-group"><label for="mobile_num" class="form-label">Email</label>
<div class="form-control-wrap">
<input type="email" class="form-control"  id="mobile_num" name="email" value=<?=$fe['email'];?>>
</div></div></div>
<div class="col-lg-6">
<div class="form-group"><label for="address" class="form-label">Address<spam>*</spam></label>
<div class="form-control-wrap">
    <input class="form-control" id="address" name="address" placeholder="Enter your address" value="<?=$fe['address'];?>"></div></div></div>
    <div class="col-lg-6">
<div class="form-group"><label for="remarks" class="form-label">Remarks<spam>*</spam></label>
<div class="form-control-wrap">
    <input class="form-control" id="remarks" name="remarks" placeholder="Enter your remarks" value="<?=$fe['remarks'];?>"></div></div></div>
    <div class="col-lg-3">
    <input type="submit" name="save" class="btn btn-primary" style="margin-left:4%;margin-bottom:20px;margin-top:20px;" value="Edit"></div></form>
</body>
</html>
<?php
    if(isset($_POST['save'])){
        $upd=mysqli_query($conn,"UPDATE enquiry
                set name='".$_POST['name']."',
                date='".$_POST['date']."',
                mobile='".$_POST['mobile']."',
                b_type='".$_POST['b_type']."',
                email='".$_POST['email']."',
                quantity='".$_POST['quantity']."',
                remarks='".$_POST['remarks']."',
                address='".$_POST['address']."'
                where id='".$_GET['id']."'");
?>    
<script>location.href='enquiry.php'</script>
<?php
        }
?>
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
    $sel=mysqli_query($conn,"SELECT* FROM quotation WHERE id='".$_GET['id']."' ");
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
        <div class="nk-block-head-content"><h2 class="nk-block-title">Edit Quotation</h1><nav><ol class="breadcrumb breadcrumb-arrow mb-0"><li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Order</li>
        <li class="breadcrumb-item active" aria-current="page">Edit Quotation</li>
    </ol></nav></div>
    <div class="nk-block-head-content"><ul class="d-flex">
        <li><a href="quotation.php" class="btn btn-primary btn-md d-md-none"><em class="icon ni ni-eye"></em><span>View</span></a></li>
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
        <div class="form-group"><label class="form-label">Quotation ID</label>
    <div class="form-control-wrap"><input type="text" class="form-control"  name="qid" value=<?=$fe['qid'];?>></div></div></div>
    <div class="col-lg-6">
<div class="form-group"><label for="baseprice" class="form-label">Quotationer Mobile Number</label>
<div class="form-control-wrap">
    <input required type="tel" class="form-control" pattern="^[0-9]{10}$"  name="q_mob" value="<?=$fe['q_mob'];?>" placeholder="Quotationer Mobile Number"></div></div></div>

    <div class="col-lg-12">
        <div class="form-group"><label class="form-label">Date</label>
    <div class="form-control-wrap"><input type="date" class="form-control" placeholder="Total price" name="date"  value="<?=date('Y-m-d');?>" >
    </div></div></div>
    
<div class="form-group"><label class="form-label">Quotation To</label><div class="form-control-wrap"><div class="js-quill" data-toolbar="minimal" data-placeholder="Write Quotation to address here..." id="disp" name="remarks"><?=$fe['remarks'];?></div></div></div>
<input type="hidden" name="remarks" id="remarks">

<div class="col-6">
<div class="form-group"><label class="form-label">Bar ID</label>
<input required type="text" name="bar_id" value="<?=$fe['bar_id'];?>" class="form-date form-control"></div></div>


    <div class="col-lg-6">
<div class="form-group"><label for="baseprice" class="form-label">Product Description</label>
<div class="form-control-wrap">
    <input required type="text" class="form-control"  name="q_desc" placeholder="Product Description" value="<?=$fe['q_desc'];?>"></div></div></div>

    <div class="col-lg-6">
<div class="form-group"><label for="baseprice" class="form-label">Price</label>
<div class="form-control-wrap">
    <input required type="number" name="q_price" value="<?=$fe['q_price'];?>" class="form-control"></div></div></div>



    <div class="col-lg-6">
<div class="form-group"><label for="baseprice" class="form-label">Quantity</label>
<div class="form-control-wrap">
    <input required type="number" name="quantity" class="form-control" value="<?=$fe['quantity'];?>"></div></div></div>




    <div class="col-lg-6">
<div class="form-group"><label for="baseprice" class="form-label">Tax(%)</label>
<div class="form-control-wrap">
    <input required type="number" value="<?=$fe['tax'];?>" name="tax" class="form-control"></div></div></div>


    <div class="col-lg-6">
<div class="form-group"><label for="baseprice" class="form-label">Discount(%)</label>
<div class="form-control-wrap">
    <input required type="number" value="<?=$fe['discount'];?>" name="discount" class="form-control"></div></div></div>


    <div class="col-lg-12">
        <div class="form-group"><label class="form-label">Quotationer Address</label>
    <div class="form-control-wrap">
        <textarea class="form-control" name="q_address"><?=$fe['q_address'];?></textarea><br></div></div></div>
    
        


    
<div class="gap-col text-center" style="margin-top:40px"><ul class="d-flex align-items-center gap g-3">
        <li><input type="submit" name="submit" id="submit" value="Edit" class="btn btn-primary"></li>
        <li><a href="quotation.php" class="btn border-0">Cancel</a></li></ul></div>
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
        $upd=mysqli_query($conn,"UPDATE quotation 
                SET qid='".$_POST['qid']."',
                q_mob='".$_POST['q_mob']."',
                date='".$_POST['date']."',
                remarks='".$_POST['remarks']."',
                q_address='".$_POST['q_address']."',
                bar_id='".$_POST['bar_id']."',
                q_desc='".$_POST['q_desc']."',
                q_price='".$_POST['q_price']."',
                quantity='".$_POST['quantity']."',
                tax='".$_POST['tax']."',
                discount='".$_POST['discount']."'
                WHERE id='".$_GET['id']."'");
?>
        <script>location.href="quotation.php"</script>
        <?php
    }
    
?>
<script>
    $(document).ready(function(){
        $("#submit").click(function(){
            var a=($("#disp").text());
            $("#remarks").val(a);
        })
    })
</script>
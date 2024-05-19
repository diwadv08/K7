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
    $sel=mysqli_query($conn,"SELECT* FROM salesorder WHERE id='".$_GET['id']."' ");
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
        <div class="nk-block-head-content"><h2 class="nk-block-title">Edit Order</h1><nav><ol class="breadcrumb breadcrumb-arrow mb-0"><li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Order</li>
        <li class="breadcrumb-item active" aria-current="page">Edit Order</li>
    </ol></nav></div>
    <div class="nk-block-head-content"><ul class="d-flex">
        <li><a href="salesorder.php" class="btn btn-primary btn-md d-md-none"><em class="icon ni ni-eye"></em><span>View</span></a></li>
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
        <div class="form-group"><label class="form-label">Bill ID</label>
    <div class="form-control-wrap"><input type="text" class="form-control"  name="bid" value=<?=$fe['bid'];?>></div></div></div>
    <div class="col-lg-6">
        <div class="form-group"><label class="form-label">Date</label>
    <div class="form-control-wrap"><input type="date" class="form-control" placeholder="Total price" name="date" value=<?=$fe['date'];?>>
    </div></div></div>
    <div class="col-lg-4">
    <div class="form-group"><label class="form-label">Vendor Name</label>
    <div class="form-control-wrap"><input type="text" class="form-control"  name="vendor_name" value=<?=$fe['vendor_name'];?>></div></div></div>

    <div class="col-lg-4">
    <div class="form-group"><label class="form-label">Vendor Mobile</label>
    <div class="form-control-wrap"><input type="text" class="form-control"  name="vendor_mob" value=<?=$fe['vendor_mob'];?>></div></div></div>

    <div class="col-lg-4">
        <div class="form-group"><label class="form-label">Vendor Charge</label>
    <div class="form-control-wrap"><input type="text" class="form-control" placeholder="Total price" name="vendor_charge" value=<?=$fe['vendor_charge'];?>>
    </div></div></div>

    <div class="col-lg-4">
    <div class="form-group"><label class="form-label">Description</label>
    <div class="form-control-wrap"><input type="text" class="form-control"  name="vendor_desc" value="<?=$fe['vendor_desc'];?>"></div></div></div>

    <div class="col-lg-2">
    <div class="form-group"><label class="form-label">Quantity</label>
    <div class="form-control-wrap"><input type="text" class="form-control"  name="quantity" value=<?=$fe['quantity'];?>></div></div></div>

    <div class="col-lg-3">
        <div class="form-group"><label class="form-label">Tax</label>
    <div class="form-control-wrap"><input type="text" class="form-control" placeholder="Total price" name="tax" value=<?=$fe['tax'];?>>
    </div></div></div>
    <div class="col-lg-3">
        <div class="form-group"><label class="form-label">Discount</label>
    <div class="form-control-wrap"><input type="text" class="form-control" placeholder="Total price" name="discount" value=<?=$fe['discount'];?>>
    </div></div></div>

    <div class="col-lg-6">
        <div class="form-group"><label class="form-label">Remarks</label>
    <div class="form-control-wrap">
        <textarea class="form-control" name="remarks"><?=$fe['remarks'];?></textarea><br></div></div></div>
    <div class="col-lg-6">
        <div class="form-group"><label class="form-label">Vendor Address</label>
    <div class="form-control-wrap">
        <textarea class="form-control" name="vendor_address"><?=$fe['vendor_address'];?></textarea><br></div></div></div>
    <div class="col-lg-12">
        <div class="form-group">
    </div></div>
    </div></div>
    </div></div>


    
<div class="gap-col text-center"><ul class="d-flex align-items-center gap g-3">
        <li><input type="submit" name="submit" value="Edit" class="btn btn-primary"></li>
        <li><a href="salesorder.php" class="btn border-0">Cancel</a></li></ul></div>
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
        $upd=mysqli_query($conn,"UPDATE salesorder 
                SET vendor_name='".$_POST['vendor_name']."',
                bid='".$_POST['bid']."',
                vendor_charge='".$_POST['vendor_charge']."',
                date='".$_POST['date']."',
                remarks='".$_POST['remarks']."',
                vendor_address='".$_POST['vendor_address']."',
                vendor_desc='".$_POST['vendor_desc']."',
                quantity='".$_POST['quantity']."',
                tax='".$_POST['tax']."',
                discount='".$_POST['discount']."'
                WHERE id='".$_GET['id']."'");                
?>
        <script>location.href="billing-sales.php?id=<?=$_GET['id'];?>"</script>
        <?php
    }
    
?>
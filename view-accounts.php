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
    $sel=mysqli_query($conn,"SELECT* FROM product WHERE id='".$_GET['id']."' ");
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
        <h2 class="nk-block-title">View Bills</h1>
        <nav><ol class="breadcrumb breadcrumb-arrow mb-0">
            <li class="breadcrumb-item">
            <a href="#">Home</a></li>
            <li class="breadcrumb-item">
            <a href="#">Expenses</a></li>
            <li class="breadcrumb-item">
            <a href="#">Billing</a></li>
            <li class="breadcrumb-item">
            <a href="#">View Billing</a></li>
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
        <div class="form-group"><label class="form-label">Bill Id</label>
    <div class="form-control-wrap"><input readonly type="text" class="form-control" name="ecom_id" value=<?=$fe['ecom_id'];?>></div></div></div>
    <div class="col-lg-6">
        <div class="form-group"><label class="form-label">Bill Name</label>
    <div class="form-control-wrap"><input readonly type="text" class="form-control" name="product_name" value=<?=$fe['product_name'];?>></div></div></div>
    <div class="col-12">
        <div class="form-group"><label class="form-label">Date</label>
    <div class="form-control-wrap"><input readonly type="date" class="form-control"  name="date" value=<?=$fe['date'];?>></div></div></div>
    <div class="col-lg-6">
        <div class="form-group"><label class="form-label">Base Price</label>
    <div class="form-control-wrap"><input readonly type="text" class="form-control" placeholder="Product price" name="base_price" value=<?=$fe['base_price'];?>></div></div></div>
    <div class="col-lg-6">
        <div class="form-group"><label class="form-label">Discount Price</label>
    <div class="form-control-wrap"><input readonly type="text" class="form-control" placeholder="Discount price" name="discount_price" value=<?=$fe['discount_price'];?>></div></div></div>
    <div class="col-lg-6">
        <div class="form-group"><label class="form-label">Tax Class</label>
    <div class="form-control-wrap"><input readonly type="text" class="form-control"  name="tax_class" value=<?=$fe['tax_class'];?>></div></div></div>
    
    
    
    <div class="col-lg-6">
        <div class="form-group">
            <label class="form-label">VAT Amount (%)</label>
    <div class="form-control-wrap"><input readonly type="text" class="form-control" placeholder="" name="vat_amount" value=<?=$fe['vat_amount'];?>></div></div></div>
    <div class="col-lg-6">
        <div class="form-group"><label class="form-label">SKU</label>
    <div class="form-control-wrap"><input readonly type="text" class="form-control" placeholder="SKU number" name="sku" value=<?=$fe['sku'];?>></div></div></div>
    <div class="col-lg-6">
        <div class="form-group"><label class="form-label">Barcode</label>
    <div class="form-control-wrap"><input readonly type="text" class="form-control" placeholder="Barcode number" name="bar_code" value=<?=$fe['bar_code'];?>></div></div></div>
    <div class="col-lg-6">
        <div class="form-group"><label class="form-label">Quantity</label>
        <div class="form-control-wrap"><input readonly type="number" class="form-control" placeholder="On shelf" name="on_shelf" value=<?=$fe['on_shelf'];?>></div></div></div>
    <div class="col-lg-6">
    <div class="form-group"><label class="form-label">On Shelf</label>
        <div class="form-control-wrap"><input readonly type="number" class="form-control" placeholder="In warehouse" name="in_warehouse" value=<?=$fe['in_warehouse'];?> ></div></div></div>
    <div class="col-lg-12">
        <div class="form-group"><label class="form-label" style="margin-left:130px">Description</label>
    <div class="form-control-wrap">
        <center><textarea cols="85" name="remarks" readonly><?=$fe['remarks'];?></textarea></center></div></div></div>
    <div class="col-lg-12">
        <div class="form-group">
    </div></div></div></div></div></div>
    <div class="gap-col">
        <div class="card card-gutter-lg">
        <div class="card-body">
        <label><b>Bill Image</b></label>        
        <div>    
    <div class="image-upload-wrap d-flex flex-column align-items-center">
        <img src=<?=$fe['upload_media'];?> height="200px" max-width="120px">
    </div></div></div></div></div></div></div>
</form></div></div></div></div></div>
    
    </div></div></div></div></div></div>
    </body>
    <script src="assets/js/bundle.js"></script>
        <script src="assets/js/scripts.js"></script>
<link rel="stylesheet" href="assets/css/libs/editors/quill20d4.css?v1.1.2"></link><script src="assets/js/libs/editors/quill.js"></script><script src="assets/js/editors/quill.js"></script>
</html>
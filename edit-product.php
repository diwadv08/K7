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
        <div class="nk-block-head-content"><h2 class="nk-block-title">Edit Bill</h1><nav><ol class="breadcrumb breadcrumb-arrow mb-0"><li class="breadcrumb-item"><a href="#">Home</a></li><li class="breadcrumb-item active" aria-current="page">Edit Bill</li></ol></nav></div>
    <div class="nk-block-head-content"><ul class="d-flex">
        <li><a href="products.php" class="btn btn-primary btn-md d-md-none"><em class="icon ni ni-eye"></em><span>View</span></a></li>
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
    <div class="form-control-wrap"><input type="text" class="form-control"  name="ecom_id" value=<?=$fe['ecom_id'];?>></div></div></div>
    <div class="col-lg-6">
    <div class="form-group"><label class="form-label">Bill Name</label>
    <div class="form-control-wrap"><input type="text" class="form-control"  name="product_name" value=<?=$fe['product_name'];?>></div></div></div>
    <div class="col-12">
        <div class="form-group"><label class="form-label">Date</label>
    <div class="form-control-wrap">
        <input type="date" name="date" value="<?=date('Y-m-d');?>" class="form-date form-control"></div></div></div>
    <div class="col-lg-6">
        <div class="form-group"><label class="form-label">Base Price</label>
    <div class="form-control-wrap"><input type="text" class="form-control" placeholder="Total price" name="base_price" value=<?=$fe['base_price'];?>></div></div></div>
    <div class="col-lg-6">
        <div class="form-group"><label class="form-label">Discount Price</label>
    <div class="form-control-wrap"><input type="text" class="form-control" placeholder="Discount price" name="discount_price" value=<?=$fe['discount_price'];?>></div></div></div>
    <div class="col-lg-6">
        <div class="form-group"><label class="form-label">Tax Class</label>
    <div class="form-control-wrap">
        <select class="js-select" name="tax_class" data-search="true" data-sort="false">
        <option value="">Select an option</option>
        <option value="Tax Free" <?php if($fe['tax_class']=="Tax Free"){echo "selected";}?>>Tax Free</option>
        <option value="Taxable Goods" <?php if($fe['tax_class']=="Taxable Goods"){echo "selected";}?>>Taxable Goods</option>
        <option value="Downloadable Product" <?php if($fe['tax_class']=="Downloadable Product"){echo "selected";}?>>Downloadable Product</option>
    </select></div></div></div>
    <div class="col-lg-6">
        <div class="form-group">
            <label class="form-label">VAT Amount (%)</label>
    <div class="form-control-wrap"><input type="text" class="form-control" placeholder="" name="vat_amount" value=<?=$fe['vat_amount'];?>></div></div></div>
    <div class="col-lg-6">
        <div class="form-group"><label class="form-label">SKU</label>
    <div class="form-control-wrap"><input type="text" class="form-control" placeholder="SKU number" name="sku" value=<?=$fe['sku'];?>></div></div></div>
    <div class="col-lg-6">
        <div class="form-group"><label class="form-label">Barcode</label>
    <div class="form-control-wrap"><input type="text" class="form-control" placeholder="Barcode number" name="bar_code" value=<?=$fe['bar_code'];?>></div></div></div>
    <div class="col-lg-6">
    <div class="form-group"><label class="form-label">Quantity</label>    
    <div class="form-control-wrap"><input type="number" class="form-control" placeholder="On shelf" name="on_shelf" value=<?=$fe['on_shelf'];?>></div></div></div>
    <div class="col-lg-6">
    <div class="form-group"><label class="form-label">In Warehouse</label>
        <div class="form-control-wrap"><input type="number" class="form-control" placeholder="In warehouse" name="in_warehouse" value=<?=$fe['in_warehouse'];?> ></div></div></div>
    <div class="col-lg-12">
        <div class="form-group"><label class="form-label">Description</label>
    <div class="form-control-wrap">
        <textarea class="form-control" name="remarks"><?=$fe['remarks'];?></textarea><br></div></div></div>
    <div class="col-lg-12">
        <div class="form-group">
    </div></div></div></div></div></div>
    <div class="gap-col">
<div class="card card-gutter-md">
<div class="card-body">
<div class="form-group"><label class="form-label">Bill Photo</label>
<div class="form-control-wrap">
</div>
<center><img src="<?=$fe['upload_media'];?>" height="150px" width="180px"></center>
<div class="pt-3">
<input  id="upload_media" name="upload_media" type="file" max="1">
<label for="upload_media" class="btn btn-md btn-primary">Upload Image</label> 
<div class="form-note mt-3">Set the product thumbnail image. Only *.png, *.jpg and *.jpeg image files are accepted.</div>   
</div></div></div></div></div>


    <div class="gap-col" style="margin-top:40px"><ul class="d-flex align-items-center gap g-3">
        <li><input type="submit" name="submit" value="Edit" class="btn btn-primary"></li>
        <li><a href="products.php" class="btn border-0">Cancel</a></li></ul></div>
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
        $upd=mysqli_query($conn,"UPDATE product 
                SET product_name='".$_POST['product_name']."',
                ecom_id='".$_POST['ecom_id']."',
                base_price='".$_POST['base_price']."',
                discount_price='".$_POST['discount_price']."',
                tax_class='".$_POST['tax_class']."',
                vat_amount='".$_POST['vat_amount']."',
                sku='".$_POST['sku']."',
                bar_code='".$_POST['bar_code']."',
                on_shelf='".$_POST['on_shelf']."',
                in_warehouse='".$_POST['in_warehouse']."',
                remarks='".$_POST['remarks']."',
                date='".$_POST['date']."'
                WHERE id='".$_GET['id']."'");

        if($_FILES["upload_media"]["tmp_name"] != "" || $_FILES["avatar"]["tmp_name"] != ""){
            $target_dir = "uploads/";
            $target_file1 = $target_dir . basename($_FILES["upload_media"]["name"]);
            $check1 = getimagesize($_FILES["upload_media"]["tmp_name"]);
            if(move_uploaded_file($_FILES['upload_media']['tmp_name'],$target_file1)){
                $upd=mysqli_query($conn,"UPDATE product 
                SET upload_media='".$target_file1."'
                WHERE id='".$_GET['id']."'");
            }
        }
        
           
?>
        <script>location.href="products.php"</script>
        <?php
    }
    
?>
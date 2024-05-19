<?php include 'sidebar.php';?>
<body class="nk-body" data-sidebar-collapse="lg" data-navbar-collapse="lg"style="margin-top:40px">
<script src="assets/js/bundle.js"></script><script src="assets/js/scripts.js"></script>

<div class="nk-content">
<div class="container">
<div class="nk-content-inner">
<div class="nk-content-body">
<div class="nk-block-head">
<div class="nk-block-head-between flex-wrap gap g-2">
<div class="nk-block-head-content"><h2 class="nk-block-title">Add Billing</h1>
<nav>
    <ol class="breadcrumb breadcrumb-arrow mb-0">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">ecommerce</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add Billing</li>
    </ol>
</nav>
</div>
<div class="nk-block-head-content"><ul class="d-flex"><li>
    <a href="accounts.php" class="btn btn-primary btn-md d-md-none">
        <em class="icon ni ni-eye"></em><span>View</span></a></li><li>
    <a href="accounts.php" class="btn btn-success d-none d-md-inline-flex"><em class="icon ni ni-eye"></em><span>View All Bills</span></a></li>
    <li>&nbsp;&nbsp;<button onclick="history.go(-1)" class="btn btn-danger">Back</button></li></ul></div></div></div>
<div class="nk-block">
<?php
$pc=mysqli_query($conn,"SELECT max(id)+1 from product");
$pcq = mysqli_fetch_array($pc);
$bill_number = $pcq[0];
if(isset($_POST['submit'])){
        $target_dir = "uploads/";
        $target_file2 = $target_dir . basename($_FILES["upload_media"]["name"]);
        $check2 = getimagesize($_FILES["upload_media"]["tmp_name"]);
        if($check1 !== false && $check2 !== false){
            if(move_uploaded_file($_FILES["upload_media"]["tmp_name"],$target_file2)){
                $ins=mysqli_query($conn,"INSERT INTO product (ecom_id,product_name,
                base_price,discount_price ,tax_class ,
                vat_amount,sku ,
                bar_code,on_shelf ,in_warehouse ,
                remarks ,date ,upload_media) VALUES 
                ('".$_POST['ecom_id']."','".$_POST['product_name']."',
                '".$_POST['base_price']."','".$_POST['discount_price']."',
                '".$_POST['tax_class']."',
                '".$_POST['vat_amount']."','".$_POST['sku']."',
                '".$_POST['bar_code']."','".$_POST['on_shelf']."',
                '".$_POST['in_warehouse']."','".$_POST['remarks']."',
                '".$_POST['date']."','".$target_file2."')");
?>
            <script>location.href="accounts.php"</script>
<?php
                
                }
            }
        }
?>
<form action="#" method="post" enctype="multipart/form-data">
<div class="row g-gs">
<div class="col-xxl-9">
<div class="gap gy-4">
<div class="gap-col">
<div class="card card-gutter-md">
<div class="card-body">
<div class="row g-gs">
<div class="col-lg-12">
<div class="form-group"><label for="ecomid" class="form-label">Bill ID</label>
<div class="form-control-wrap">
    <input required type="text" class="form-control" value="<?="#BID".$bill_number;?>" name="ecom_id" placeholder="Enter Your Bill Id"></div></div></div>
<div class="col-lg-12">
    <div class="form-group"><label for="productname" class="form-label">Bill Name</label>
<div class="form-control-wrap">
    <input required type="text" class="form-control" id="productname" name="product_name" placeholder="Bill Name"></div></div></div>
<div class="form-control-wrap">
<div class="col-12">
<div class="form-group"><label class="form-label">Date</label>
<input required type="date" name="date" value="<?=date('Y-m-d');?>" class="form-date form-control"></div></div></div>
<div class="col-lg-6">
<div class="form-group"><label for="baseprice" class="form-label">Base Price</label>
<div class="form-control-wrap">
    <input required type="text" class="form-control" id="baseprice" name="base_price" placeholder="Total price"></div></div></div>
<div class="col-lg-6">
<div class="form-group"><label for="discount-price" class="form-label">Discount Price</label>
<div class="form-control-wrap">
    <input required type="text" class="form-control" id="discount-price" name="discount_price" placeholder="Discount price"></div></div></div>
<div class="col-lg-6">
<div class="form-group"><label for="tax-class" class="form-label">Tax Class</label>
<div class="form-control-wrap">
    <select class="form-select" id="tax-class" name="tax_class" data-search="true" data-sort="false">
        <option selected hidden>Select an option</option>
        <option value="Tax Free">Tax Free</option>
        <option value="Taxable Goods">Taxable Goods</option>
        <option value="Downloadable Product">Downloadable Product</option>
    </select></div></div></div>
<div class="col-lg-6">
<div class="form-group"><label for="vat-amount" class="form-label">VAT Amount (%)</label>
<div class="form-control-wrap">
    <input required type="text" class="form-control" id="vat-amount" name="vat_amount" value="2%"></div></div></div>
<div class="col-lg-6">
<div class="form-group"><label for="sku" class="form-label">SKU No</label>
<div class="form-control-wrap">
    <input required type="text" class="form-control" id="sku" name="sku" value="SKU"></div></div></div>
<div class="col-lg-6">
<div class="form-group"><label for="barcode" class="form-label">Barcode</label>
<div class="form-control-wrap">
    <input required type="text" class="form-control" id="barcode" name="bar_code" value="BAR"></div></div></div>
<div class="col-lg-12">
<div class="form-group"><label class="form-label">Quantity</label>
<div class="row g-gs">
<div class="col-lg-6">
<div class="form-control-wrap">
    <input required type="number" class="form-control" name="on_shelf" placeholder="On shelf"></div></div>
<div class="col-lg-6">
<div class="form-control-wrap">
    <input required type="number" class="form-control" name="in_warehouse" placeholder="In warehouse"></div></div></div></div></div>
<div class="col-lg-12">
<div class="form-group"><label class="form-label">Remarks</label>
<div class="form-control-wrap">
<div class="form-group">
    <textarea class="form-control" name="remarks" ></textarea></div>
</div></div></div>
<div class="col-lg-12">
<div class="form-group">

</div></div></div></div></div></div>
<div class="gap-col">
<div class="card card-gutter-md">
<div class="card-body">
<div class="form-group"><label class="form-label">Bill Photo</label>
<div class="form-control-wrap">
</div>
<div class="pt-3">
<input required  id="upload_media" name="upload_media" type="file" max="1">
<label for="upload_media" class="btn btn-md btn-primary">Upload Image</label> 
<div class="form-note mt-3">Set the product thumbnail image. Only *.png, *.jpg and *.jpeg image files are accepted.</div>   
</div></div></div></div></div>
<div class="gap-col"><ul class="d-flex align-items-center gap g-3">
    <li></li></ul></div></div></div></div></div></div>
<div><input required type="submit" name="submit" class="btn btn-primary" style="margin-left:4%;margin-bottom:20px;margin-top:20px;" value="Save Changes"></div></form>
</div></div></div>

</body>
</html>
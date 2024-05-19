<?php include 'sidebar.php';?>
<body class="nk-body" data-sidebar-collapse="lg" data-navbar-collapse="lg"style="margin-top:40px">
<script src="assets/js/bundle.js"></script>
<script src="assets/js/scripts.js"></script>
<div class="nk-content">
<div class="container">
<div class="nk-content-inner">
<div class="nk-content-body">
<div class="nk-block-head">
<div class="nk-block-head-between flex-wrap gap g-2">
<div class="nk-block-head-content"><h2 class="nk-block-title">Add Quotation</h1>
<nav>
    <ol class="breadcrumb breadcrumb-arrow mb-0">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Procurement</a></li>
        <li class="breadcrumb-item active" aria-current="page">Quotation</li>
        <li class="breadcrumb-item active" aria-current="page">Add Quotation</li>
    </ol>
</nav>
</div>
<div class="nk-block-head-content"><ul class="d-flex"><li>
    <a href="quotation.php" class="btn btn-primary btn-md d-md-none">
        <em class="icon ni ni-eye"></em><span>View</span></a></li>
        <li>&nbsp;&nbsp;<a href="quotation.php" class="btn btn-success d-none d-md-inline-flex"><em class="icon ni ni-eye"></em><span>View All Quotation</span></a></li>
    <li>&nbsp;&nbsp;<button onclick="history.go(-1)" class="btn btn-danger">Back</button></li></ul></div></div></div>
<div class="nk-block">
<?php
$pc=mysqli_query($conn,"SELECT max(id)+1 from quotation");
$pcq = mysqli_fetch_array($pc);
$bill_number = $pcq[0];
if(isset($_POST['submit'])){
                $ins=mysqli_query($conn,"INSERT INTO quotation (qid,
                q_address,q_mob ,date,
                bar_id,q_desc ,q_price,
                quantity ,tax,discount,
                remarks) VALUES 
                ('".$_POST['qid']."',
                '".$_POST['q_address']."','".$_POST['q_mob']."',
                '".$_POST['date']."','".$_POST['bar_id']."','".$_POST['q_desc']."','".$_POST['q_price']."','".$_POST['quantity']."',
                '".$_POST['tax']."','".$_POST['discount']."','".$_POST['remarks']."')");
?>
<?php
                
                }
?>
<form action="billing-invoiceq1.php" method="post" enctype="multipart/form-data">
<div class="row g-gs">
<div class="col-xxl-9">
<div class="gap gy-4">
<div class="gap-col">
<div class="card card-gutter-md">
<div class="card-body">
<div class="row g-gs">
<div class="col-lg-12">
<div class="form-group"><label for="ecomid" class="form-label">Quotation ID</label>
<div class="form-control-wrap">
    <input required type="text" class="form-control" value="<?="QID-".$bill_number ;?>" name="qid" placeholder="Enter Machine Id"></div></div></div>
    <div class="form-group"><label class="form-label">Invoice To</label><div class="form-control-wrap"><div class="js-quill" data-toolbar="minimal" data-placeholder="Write product description here..." id="disp" name="remarks"></div></div></div>  
    <div class="col-6">
<div class="form-group"><label class="form-label">Date</label>
<input required type="date" name="date" value="<?=date('Y-m-d');?>" class="form-date form-control"></div></div>
    <div class="col-lg-6">
<div class="form-group"><label for="baseprice" class="form-label">Quotationer Mobile Number</label>
<div class="form-control-wrap">
    <input required type="tel" class="form-control" pattern="^[0-9]{10}$"  name="q_mob" placeholder="Quotationer Mobile Number"></div></div></div>
    <div class="col-6">
<div class="form-group"><label class="form-label">Bar ID</label>
<input required type="text" placeholder="BAR ID" name="bar_id" value="BAR-" class="form-date form-control" minlength="5"></div></div>
    <div class="col-lg-6">
<div class="form-group"><label for="baseprice" class="form-label">Product Description</label>
<div class="form-control-wrap">
    <input required type="text" class="form-control"  name="q_desc" placeholder="Product Description"></div></div></div>

    <div class="col-lg-6">
<div class="form-group"><label for="baseprice" class="form-label">Price</label>
<div class="form-control-wrap">
    <input required type="number" name="q_price" placeholder="Price" class="form-control"></div></div></div>



    <div class="col-lg-6">
<div class="form-group"><label for="baseprice" class="form-label">Quantity</label>
<div class="form-control-wrap">
    <input required type="number" name="quantity" class="form-control" placeholder="Quantity"></div></div></div>
    <div class="col-lg-6">
<div class="form-group"><label for="baseprice" class="form-label">Tax(%)</label>
<div class="form-control-wrap">
    <input required type="number" name="tax" class="form-control" placeholder='Tax'></div></div></div>
    <div class="col-lg-6">
<div class="form-group"><label for="baseprice" class="form-label">Discount(%)</label>
<div class="form-control-wrap">
    <input required type="number" name="discount" class="form-control" placeholder='Discount'></div></div></div>
<div class="col-lg-12">
<div class="form-group"><label class="form-label">Quotationer Address</label>
<div class="form-control-wrap">
<div class="form-group">
<textarea class="form-control" name="q_address" placeholder="Address"></textarea></div>
</div></div></div>
<input type="hidden" name="remarks" id="remarks">
<div class="gap-col"><ul class="d-flex align-items-center gap g-3">
    <li></li></ul></div></div></div></div></div></div>
<div><input required type="submit" name="submit" class="btn btn-primary" style="margin-left:4%;margin-bottom:20px;margin-top:20px;" value="Save Changes" id="submit"></div></form>
</div></div></div>
</body>
</html>
<script src="assets/js/bundle.js"></script>
<script src="assets/js/scripts.js"></script>            
<link rel="stylesheet" href="assets/css/libs/editors/quill20d4.css?v1.1.2"></link>
<script src="assets/js/libs/editors/quill.js"></script>
<script src="assets/js/editors/quill.js"></script>
<script>
    $(document).ready(function(){
        $("#submit").click(function(){
            var a=($("#disp").text());
            $("#remarks").val(a);
        })
    })
</script>
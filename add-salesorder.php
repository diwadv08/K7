<?php include 'sidebar.php';?>
<body class="nk-body" data-sidebar-collapse="lg" data-navbar-collapse="lg"style="margin-top:40px">
<script src="assets/js/bundle.js"></script><script src="assets/js/scripts.js"></script>

<div class="nk-content">
<div class="container">
<div class="nk-content-inner">
<div class="nk-content-body">
<div class="nk-block-head">
<div class="nk-block-head-between flex-wrap gap g-2">
<div class="nk-block-head-content"><h2 class="nk-block-title">Add Order</h1>
<nav>
    <ol class="breadcrumb breadcrumb-arrow mb-0">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Sales Order</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add Order</li>
    </ol>
</nav>
</div>
<div class="nk-block-head-content"><ul class="d-flex"><li>
    <a href="salesorder.php" class="btn btn-primary btn-md d-md-none">
        <em class="icon ni ni-eye"></em><span>View</span></a></li><li>
    <a href="salesorder.php" class="btn btn-success d-none d-md-inline-flex"><em class="icon ni ni-eye"></em><span>View All Orders</span></a></li>
    <li>&nbsp;&nbsp;<button onclick="history.go(-1)" class="btn btn-danger">Back</button></li></ul></div></div></div>
<div class="nk-block">
<?php
$pc=mysqli_query($conn,"SELECT max(id)+1 from salesorder");
$pcq = mysqli_fetch_array($pc);
$bill_number = $pcq[0];
if(isset($_POST['submit'])){
                $ins=mysqli_query($conn,"INSERT INTO salesorder (bid,vendor_name,
                vendor_address,vendor_mob ,date,vendor_charge,vendor_desc,quantity,
                remarks,discount,tax) VALUES ('".$_POST['bid']."','".$_POST['vendor_name']."','".$_POST['vendor_address']."','".$_POST['vendor_mob']."','".$_POST['date']."','".$_POST['vendor_charge']."','".$_POST['vendor_desc']."','".$_POST['quantity']."','".$_POST['remarks']."','".$_POST['discount']."','".$_POST['tax']."')");
                $id=mysqli_insert_id($conn);
?>
            <script>location.href="billing-sales.php?id=<?=$id;?>"</script>
<?php
                
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
    <input required type="text" class="form-control" value="<?="OID-".$bill_number ;?>" name="bid" placeholder="Enter Machine Id"></div></div></div>
    <div class="col-3">
<div class="form-group"><label class="form-label">Date</label>
<input required type="date" name="date" value="<?=date('Y-m-d');?>" class="form-date form-control"></div></div>
    <div class="col-lg-3">
    <div class="form-group"><label for="productname" class="form-label">Vendor Name</label>
<div class="form-control-wrap">
    <input required type="text" class="form-control" id="productname" name="vendor_name" placeholder="Vendor Name"></div></div></div>
    <div class="col-lg-3">
<div class="form-group"><label for="baseprice" class="form-label">Vendor Mobile Number</label>
<div class="form-control-wrap">
    <input required type="tel" class="form-control" pattern="^[0-9]{10}$"  name="vendor_mob" placeholder="Vendor Mobile Number"></div></div></div>
<div class="col-lg-3">
<div class="form-group"><label for="baseprice" class="form-label">Vendor Charge</label>
<div class="form-control-wrap">
    <input required type="text" class="form-control" id="baseprice" name="vendor_charge" placeholder="Vendor Charge"></div></div></div>
<div class="col-lg-4">
    <div class="form-group"><label for="productname" class="form-label">Description</label>
<div class="form-control-wrap">
    <input required type="text" class="form-control" id="productname" name="vendor_desc" placeholder="Description"></div></div></div>

    <div class="col-lg-2">
    <div class="form-group"><label for="productname" class="form-label">Quantity</label>
<div class="form-control-wrap">
    <input required type="number" class="form-control" id="productname" name="quantity" value=1></div></div></div>

    <div class="col-lg-3">
    <div class="form-group"><label for="productname" class="form-label">Tax</label>
<div class="form-control-wrap">
    <input required type="number" class="form-control" id="productname" name="tax" placeholder="Enter Tax" value=0></div></div></div>

    <div class="col-lg-3">
    <div class="form-group"><label for="productname" class="form-label">Discount</label>
<div class="form-control-wrap">
    <input required type="number" class="form-control" id="productname" name="discount" placeholder="Enter Discount" value=0></div></div></div>
    

<div class="col-lg-6">
<div class="form-group"><label class="form-label">Address</label>
<div class="form-control-wrap">
<div class="form-group">
<textarea class="form-control" name="vendor_address" placeholder="Address"></textarea></div>
</div></div></div>

<div class="col-lg-6">
<div class="form-group"><label class="form-label">Remarks</label>
<div class="form-control-wrap">
<div class="form-group">
<textarea class="form-control" name="remarks" placeholder="Remarks"></textarea></div>
</div></div></div>
<div class="col-lg-12">
<div class="form-group">

<div class="gap-col"><ul class="d-flex align-items-center gap g-3">
    <li></li></ul></div></div></div></div></div></div>
<div><input required type="submit" name="submit" class="btn btn-primary" style="margin-left:4%;margin-bottom:20px;margin-top:20px;" value="Save Changes"></div></form>
</div></div></div>

</body>
</html>
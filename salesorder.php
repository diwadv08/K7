<?php include 'sidebar.php';?>
<!DOCTYPE html><html lang="en">
<head>
<meta charset="utf-8">
<meta name="author" content="Softnio">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>K7 Groups</title>
<link rel="shortcut icon" href="images/title.png">
<link rel="stylesheet" href="assets/css/style20d4.css?v1.1.2">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body class="nk-body" data-sidebar-collapse="lg" data-navbar-collapse="lg" style="margin-top:50px">
<div class="nk-app-root">
<div class="nk-main">
<div class="nk-content">
<div class="container">
<div class="nk-content-inner">
<div class="nk-content-body">
<div class="nk-block-head">
<div class="nk-block-head-between flex-wrap gap g-2">
<div class="nk-block-head-content"><h2 class="nk-block-title">Sales Order</h2><nav><ol class="breadcrumb breadcrumb-arrow mb-0"><li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Procurement</li>
<li class="breadcrumb-item active" aria-current="page">Sales Order</li>
</ol></nav></div>
<div class="nk-block-head-content">
    <ul class="d-flex">
    <li><a href="add-salesorder.php" class="btn btn-primary btn-md d-md-none">
        <em class="icon ni ni-plus"></em><span>Add</span></a></li>
        <?php if($ft['sales_order']==1){?><li><a href="add-salesorder.php" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em>
        <span>Add Order</span></a></li><li><a href="add-salesorder.php" class="btn btn-primary btn-md d-md-none">
            <em class="icon ni ni-plus"></em><span>Add</span></a></li><?php }?>
    <li>&nbsp;&nbsp;<button onclick="history.go(-1)" class="btn btn-danger">Back</button></li></ul></div></div></div>
<div class="nk-block-head-content"><ul class="d-flex"></ul>
<div class="nk-block">
<div class="card">
<table class="datatable-init table" data-nk-container="table-responsive">
<thead class="table-light">
<tr>
<th class="tb-col"><span class="overline-title">Bill ID</span></th>
<th class="tb-col"><span class="overline-title">Vendor Name</span></th>
<th class="tb-col"><span class="overline-title">Vendor Charge</span></th>
<th class="tb-col"><span class="overline-title">Vendor Address</span></th>
<th class="tb-col"><span class="overline-title">Date</span></th>
<th class="tb-col"><span class="overline-title">Remarks</span></th>
<th class="tb-col tb-col-md"><span class="overline-title">Preview</span></th>
<?php if($ft['sales_order']==1){?>
<th class="tb-col tb-col-end p-auto" data-sortable="false"><span class="overline-title">action</span></th><?php }?>
</tr>
</thead>
<tbody>
<?php
$sino=0;      
    $sel=mysqli_query($conn,"SELECT * FROM salesorder order by bid desc");
    if(mysqli_num_rows($sel)>0){
        while($fe=mysqli_fetch_assoc($sel)){
?>            
        <tr>
            
<td class="tb-col title"><?=$fe['bid'];?></td>
<td class="tb-col tb-col-md"><span><?=$fe['vendor_name']?></span></td>
<td class="tb-col tb-col-md"><span><?=$fe['vendor_charge']?></span></td>
<td class="tb-col tb-col-md"><span><?=$fe['vendor_address']?></span></td>
<td class="tb-col"><span><?=$fe['date']?></span></td>
<td class="tb-col"><span><?=$fe['remarks']?></span></td>
<td class="tb-col"><span class="btn btn-light btn-sm"><a class="text-dark" href="billing-sales.php?id=<?=$fe['id'];?>">Preview</a></span></td>
<?php if($ft['sales_order']==1){?>
<td class="tb-col tb-col-end">
<div class="dropdown"><a href="#" class="btn btn-sm btn-icon btn-zoom me-n1" data-bs-toggle="dropdown">
    <em class="icon ni ni-more-v"></em></a>
<div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
<div class="dropdown-content py-1">
    <ul class="link-list link-list-hover-bg-primary link-list-md">
        <li>
            <a href="edit-salesorder.php?id=<?=$fe['id'];?>">
            <em class="icon ni ni-edit"></em>
            <span>Edit</span></a>
            <a id="hi" href="delete-salesorder.php?id=<?=$fe['id'];?>" onclick="return confirm('Are you sure want to delete this bill')">
            <em class="icon ni ni-trash"></em>
            <span>Delete</span></a></li><li> 
                </a>
            </li>
        </ul>
    </div>
</div>
</div>
</td>

<?php
}
?>
</tr>

<?php
        }
    }   
?>
<br><br>
</div>
</div>
</form>
</body>
<script src="assets/js/bundle.js"></script>
<script src="assets/js/scripts.js"></script>
<script src="assets/js/data-tables/data-tables.js"></script>
</html>
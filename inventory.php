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
<div class="nk-block-head-content"><h2 class="nk-block-title">Inventory</h2><nav><ol class="breadcrumb breadcrumb-arrow mb-0"><li class="breadcrumb-item"><a href="#">Home</a></li><li class="breadcrumb-item active" aria-current="page">Inventory</li></ol></nav></div>
<div class="nk-block-head-content">
    <ul class="d-flex">
        <?php if($ft['inventory']==1){?>
    <li><a href="add-inventory.php" class="btn btn-primary btn-md d-md-none">
        <em class="icon ni ni-plus"></em><span>Add</span></a></li>
    <li><a href="add-inventory.php" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em>
        <span>Add Inventory</span></a></li>
    <li><a href="add-inventory.php" class="btn btn-primary btn-md d-md-none">
            <em class="icon ni ni-plus"></em><span>Add</span></a></li><?php }?>
    <li>&nbsp;&nbsp;<button onclick="history.go(-1)" class="btn btn-danger">Back</button></li></ul></div></div></div>
<div class="nk-block-head-content"><ul class="d-flex"></ul>
<div class="nk-block">
<div class="card">
<table class="datatable-init table" data-nk-container="table-responsive">
<thead class="table-light">
<tr>

<th class="tb-col"><span class="overline-title">Material Id</span></th>
<th class="tb-col"><span class="overline-title">Material Photo</span></th>
<th class="tb-col"><span class="overline-title">Material Name</span></th>
<th class="tb-col"><span class="overline-title">Quantity</span></th>
<?php if($ft['inventory']==1){?><th class="tb-col tb-col-end p-auto" data-sortable="false"><span class="overline-title">action</span></th><?php }?>
</tr>
</thead>
<tbody>
<?php      
    $sel=mysqli_query($conn,"SELECT * FROM inventory");
    $i=1;
    if(mysqli_num_rows($sel)>0){
        while($fe=mysqli_fetch_assoc($sel)){
?>            
<tr>
<td class="tb-col title">#<?=12000+$i++;?></td>
<td class="tb-col title">
<div class="media-group">
<div class="media media-md media-middle"><a href="edit-inventory.php?id=<?=$fe['id'];?>"><img src=<?=$fe['upload_media'];?> height="40px" max-width="30px"></a></div>
</div></td>
<td class="tb-col tb-col-md"><span><?=$fe['machine_name']?></span></td>
<td class="tb-col tb-col-md"><span><?=$fe['quantity']?></span></td>
<?php if($ft['inventory']==1){?>
<td class="tb-col tb-col-end">
<div class="dropdown"><a href="#" class="btn btn-sm btn-icon btn-zoom me-n1" data-bs-toggle="dropdown">
    <em class="icon ni ni-more-v"></em></a>
<div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
<div class="dropdown-content py-1">
    <ul class="link-list link-list-hover-bg-primary link-list-md">
        <li>
            <a href="view-inventory.php?id=<?=$fe['id'];?>">
            <em class="icon ni ni-eye"></em>
            <span>View Details</span>
            <a href="edit-inventory.php?id=<?=$fe['id'];?>">
            <em class="icon ni ni-edit"></em>
            <span>Edit</span></a>
            <a id="hi" href="delete-inventory.php?id=<?=$fe['id'];?>" onclick="return confirm('Are you sure want to delete this bill')">
            <em class="icon ni ni-trash"></em>
            <span>Delete</span></a></li><li> 
                </a>
            </li>
        </ul>
    </div>
</div>
</div>
</td>
<?php }?>
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
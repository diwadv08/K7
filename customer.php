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
<body class="nk-body" data-sidebar-collapse="lg" data-navbar-collapse="lg" style="margin-top:30px">
<div class="nk-content">
    <div class="container">
    <div class="nk-content-inner">
    <div class="nk-content-body">
    <div class="nk-block-head">
    <div class="nk-block-head-between flex-wrap gap g-2">
    <div class="nk-block-head-content">
        <h2 class="nk-block-title">Customer List</h1>
        <nav><ol class="breadcrumb breadcrumb-arrow mb-0">
            <li class="breadcrumb-item">
            <a href="#">Home</a></li>
            <li class="breadcrumb-item">
            <a href="#">Customer</a></li>
            <li class="breadcrumb-item">
            <a href="#">CRM</a></li>
        </ol></nav></div>
<div class="nk-block-head-content"><ul class="d-flex"><li>
    <a href="#" class="btn btn-md d-md-none btn-primary"><em class="icon ni ni-plus"></em><span>Create</span></a></li>
    <?php if($ft['crm']==1){?><li><a href="add-customer.php" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Add Customer</span></a></li><?php }?>
    <li>&nbsp;&nbsp;<button onclick="history.go(-1)" class="btn btn-danger">Back</button></li></ul></div></div></div>
<div class="nk-block">
    <div class="card">
        <table class="datatable-init table" data-nk-container="table-responsive">
            <thead class="table-light">
        <tr>
            <th class="tb-col tb-col-check col-start" data-sortable="false">
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value=""></div></th>
        <th class="tb-col tb-col-start"><span class="overline-title">Customer ID</span></th>
        <th class="tb-col tb-col-start"><span class="overline-title">Customer Name</span></th>
    
    <th class="tb-col"><span class="overline-title">phone</span></th>
    <th class="tb-col"><span class="overline-title">date</span></th>
    <th class="tb-col"><span class="overline-title">category</span></th>
    <?php if($ft['crm']==1){ ?><th class="tb-col"><span class="overline-title">action</span></th><?php }?>
</tr></thead><tbody>
    <?php
    $sel=mysqli_query($conn,"SELECT * FROM billing where name!='' and status!='' and mobile_num!='' and array_price!='NA' ORDER BY pid desc");
    if(mysqli_num_rows($sel)>0){
        while($fe=mysqli_fetch_assoc($sel)){
            ?>
            <tr>
            <td class="tb-col tb-col-check">
    <div class="form-check"><input class="form-check-input" type="checkbox" value=""></div></td>
    <td class="tb-col">
        <a href="#" class="text-dark">CID<?=$fe['id'];?></a></td>
    <td class="tb-col">
        <a href="#" class="text-dark"><?=$fe['name'];?></a></td>
    
        <td class="tb-col"><span><?=$fe['mobile_num'];?></span></td>
        <td class="tb-col tb-col-xl"><span><?=$fe['date'];?></span></td>
        <td class="tb-col tb-col-xl">
        <?php if($fe['status']=="Wholesale" ||$fe['status']=="wholesale" ||$fe['status']=="Whole Sale" ||$fe['status']=="whole sale"  ){
?>
        <span class="badge text-bg-danger-soft"><?=$fe['status'];?></span>
<?php       
}        
?>
<?php 
        if($fe['status']=="Retail" || $fe['status']=="retail"){
?>
        <span class="badge text-bg-success-soft"><?=$fe['status'];?></span>
<?php
}       
?>
</td>
        <?php if($ft['crm']==1){ ?>
        <td class="tb-col tb-col-xl">
            <a href="billing-invoice.php?id=<?=$fe['id'];?>">
            <em style="color:black;font-size:20px" class="icon ni ni-eye"></em>
            <a href="edit-customer.php?id=<?=$fe['id'];?>">
            <em style="color:green;font-size:20px" class="icon ni ni-edit"></em>
            <a id="hi" href="delete-customer.php?id=<?=$fe['id'];?>" onclick="return confirm('Are you sure want to delete this customer')">
            <em style="color:red;font-size:20px" class="icon ni ni-trash"></em>
            </a>
        </td>
<?php        }
        }
    }
?>    
</tbody></table></div></div></div></div></div></div>
    <div class="container-fluid">
    <div class="nk-footer-wrap">
    <div class="nk-footer-links"></div></div></div></div></div></div></div></body><script src="assets/js/bundle.js"></script><script src="assets/js/scripts.js"></script>
    <script src="assets/js/data-tables/data-tables.js"></script>

</html>

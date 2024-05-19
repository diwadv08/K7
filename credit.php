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
<div class="nk-block-head-content"><h2 class="nk-block-title">Genral Expenses</h2><nav><ol class="breadcrumb breadcrumb-arrow mb-0"><li class="breadcrumb-item"><a href="#">Home</a></li><li class="breadcrumb-item active" aria-current="page">Expenses</li></ol></nav></div>
<div class="nk-block-head-content">
    <ul class="d-flex">
    <li>&nbsp;&nbsp;<button onclick="history.go(-1)" class="btn btn-danger">Back</button></li></ul></div></div></div>
<div class="nk-block-head-content"><ul class="d-flex"></ul>
<div class="nk-block">
<div class="card">
<table class="datatable-init table" data-nk-container="table-responsive">
<thead class="table-light">
<tr>
<th class="tb-col tb-col-check" data-sortable="false">
<div class="form-check"><input class="form-check-input" type="checkbox" value=""></div></th>
<th class="tb-col"><span class="overline-title">Invoice Id</span></th>
<th class="tb-col"><span class="overline-title">Customer ID</span></th>
<th class="tb-col"><span class="overline-title">Customer Name</span></th>
<th class="tb-col"><span class="overline-title">Date</span></th>
<th class="tb-col tb-col-md"><span class="overline-title">Net Amount</span></th>
<th class="tb-col tb-col-md"><span class="overline-title">Credit Amount</span></th>
<th class="tb-col"><span class="overline-title">Remaining Amount</span></th>
</tr>
</thead>
<tbody>
<?php      
    $sel=mysqli_query($conn,"SELECT * FROM billing where r_amount!=0");
    if(mysqli_num_rows($sel)>0){
        while($fe=mysqli_fetch_assoc($sel)){
?>            
        <tr>
    <td class="tb-col tb-col-check">
<div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="pid1"></div></td>
<td class="tb-col title">IN<?=$fe['pid'];?></td>
<td class="tb-col title">CID<?=$fe['id'];?></td>
<td class="tb-col title"><?=$fe['name'];?></td>
<td class="tb-col tb-col-md"><span><?=$fe['date']?></span></td>
<td class="tb-col tb-col-md"><span><?=$fe['net_amount'];?></span></td>
<td class="tb-col"><?=$fe['net_amount']-$fe['r_amount'];?>.00</td>
<td class="tb-col"><span><?=$fe['r_amount']?>.00</span></td>
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
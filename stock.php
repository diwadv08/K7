<?php include 'sidebar.php';?>
<?php
    $sel1=mysqli_query($conn,"SELECT * FROM cube");
    $sel2=mysqli_query($conn,"SELECT COUNT(load1) FROM cube where load1=0");
    $fe1=mysqli_fetch_array($sel2);
    $sel21=$fe1[0];
    $sel3=mysqli_query($conn,"SELECT COUNT(load1) FROM cube where load1=25");
    $fe=mysqli_fetch_array($sel3);
    $sel31=$fe[0];
    $sel4=mysqli_query($conn,"SELECT COUNT(load1) FROM cube where load1=50");
    $fe5=mysqli_fetch_array($sel4);
    $sel41=$fe5[0];
    $sel5=mysqli_query($conn,"SELECT COUNT(load1) FROM cube where load1=75");
    $fe2=mysqli_fetch_array($sel5);
    $sel51=$fe2[0];
    $sel6=mysqli_query($conn,"SELECT COUNT(load1) FROM cube where load1=100");
    $fe3=mysqli_fetch_array($sel6);
    $sel61=$fe3[0];

    //Sales Cube Count
    $sel1a=mysqli_query($conn,"SELECT COUNT(sales) FROM cube where sales=0");
    $fe1a=mysqli_fetch_array($sel1a);
    $sel21a=$fe1a[0];
    $sel3a=mysqli_query($conn,"SELECT COUNT(sales) FROM cube where sales=25");
    $fe2a=mysqli_fetch_array($sel3a);
    $sel31a=$fe2a[0];
    $sel4a=mysqli_query($conn,"SELECT COUNT(sales) FROM cube where sales=50");
    $fe3a=mysqli_fetch_array($sel4a);
    $sel41a=$fe3a[0];
    $sel5a=mysqli_query($conn,"SELECT COUNT(sales) FROM cube where sales=75");
    $fe22a=mysqli_fetch_array($sel5a);
    $sel51a=$fe22a[0];
    $sel6a=mysqli_query($conn,"SELECT COUNT(sales) FROM cube where sales=100  && salt=0");
    $fe31a=mysqli_fetch_array($sel6a);
    $sel61a=$fe31a[0];
    $sel7a=mysqli_query($conn,"SELECT COUNT(sales) FROM cube where sales=100 && salt=1");
    $fe32a=mysqli_fetch_array($sel7a);
    $sel71a=$fe32a[0];
    $total_sum=mysqli_query($conn,"SELECT SUM(total)from billing");
    $fff=mysqli_fetch_array($total_sum);
    $tot=$fff[0];
?>
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
<body class="nk-body" data-sidebar-collapse="lg" data-navbar-collapse="lg" style="margin-top:35px;overflow:hidden">
<div class="nk-content">
    <div class="container">
    <div class="nk-content-inner">
    <div class="nk-content-body">
    <div class="nk-block-head">
    <div class="nk-block-head-between flex-wrap gap g-2">
    <div class="nk-block-head-content">
        <h2 class="nk-block-title">Product Stocks</h1>
        <nav><ol class="breadcrumb breadcrumb-arrow mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Product Stocks</a></li>
        </ol></nav></div>
        <div class="nk-block-head-content"><ul class="d-flex"><li>
    
    <li>&nbsp;&nbsp;<button onclick="history.go(-1)" class="btn btn-danger">Back</button></li></ul></div></div></div>
</div></div>
<div class="nk-block">
    
<ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
    <!--begin:::Tab item-->
    <li class="nav-item">
        <a class="nav-link text-active-primary active" href="#" id="loadt">Load</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-active-primary" href="#" id="salet">Sales</a>
    </li>
    <!--end:::Tab item-->

    <!--begin:::Tab item-->
    
    <!--end:::Tab item-->

    </ul>
    <div class="card mt-1" id="load">
    <div class="card-body">
<table class="datatable-init table" data-nk-container="table-responsive">
<thead class="table-light">
<tr>
<th class="tb-col"><span class="overline-title">% OF cubes on Load category</span></th>
<th class="tb-col"><span class="overline-title">Count of cubes</span></th>
</tr>
</thead>
<tbody>
        

<tr>
<td class="tb-col tb-col-md"><p>No of 25% Loaded cubes</p></td>
<td class="tb-col tb-col-md"><span><?=$sel31;?></span></td>
</tr>
<tr>
<td class="tb-col tb-col-md"><p>No of 50% Loaded cubes</p></td>
<td class="tb-col tb-col-md"><span><?=$sel41;?></span></td>
</tr>
<tr>
<td class="tb-col tb-col-md"><p>No of 75% Loaded cubes</p></td>
<td class="tb-col tb-col-md"><span><?=$sel51;?></span></td>
</tr>
<tr>
<td class="tb-col tb-col-md"><p>No of 100% Loaded cubes</p></td>
<td class="tb-col tb-col-md"><span><?=$sel61;?></span></td>
</tr>
<tr>
<td class="tb-col tb-col-md"><p>No of Unloaded cubes</p></td>
<td class="tb-col tb-col-md"><span><?=$sel21;?></span></td>
</tr>
<tr>
<td class="tb-col tb-col-md"><p>Total No of cubes</p></td>
<td class="tb-col tb-col-md"><span><?=325;?></span></td>
</tr>
</table>
        </div>
    </div>

    <div class="card mt-1" id="sale">
        <div class="card-body">
        <table class="datatable-init table" data-nk-container="table-responsive">
<thead class="table-light">
<tr>
<th class="tb-col"><span class="overline-title">% OF cubes on Sales category</span></th>
<th class="tb-col"><span class="overline-title">Count of cubes</span></th>
</tr>
</thead>
<tbody>
        

<tr>
<td class="tb-col tb-col-md"><p>No of 25% Available cubes</p></td>
<td class="tb-col tb-col-md"><span><?=$sel31a;?></span></td>
</tr>
<tr>
<td class="tb-col tb-col-md"><p>No of 50% Available cubes</p></td>
<td class="tb-col tb-col-md"><span><?=$sel41a;?></span></td>
</tr>
<tr>
<td class="tb-col tb-col-md"><p>No of 75% Available cubes</p></td>
<td class="tb-col tb-col-md"><span><?=$sel51a;?></span></td>
</tr>
<tr>
<td class="tb-col tb-col-md"><p>No of 100% Available cubes</p></td>
<td class="tb-col tb-col-md"><span><?=$sel61a;?></span></td>
</tr>
<tr>
<td class="tb-col tb-col-md"><p>No of 100% Available Salt cubes</p></td>
<td class="tb-col tb-col-md"><span><?=$sel71a;?></span></td>
</tr>
<tr>
<td class="tb-col tb-col-md"><p>No of Unavailable cubes</p></td>
<td class="tb-col tb-col-md"><span><?=$sel21a;?></span></td>
</tr>
<tr>
<td class="tb-col tb-col-md"><p>Total No of cubes</p></td>
<td class="tb-col tb-col-md"><span><?=325;?></span></td>
</tr>
</table>
        </div>
    </div>
</div>
</div>
</div>
   
<script src="assets/js/bundle.js"></script>
<script src="assets/js/scripts.js"></script>
</html>
<script>
    $(document).ready(function(){
    $("#load").show();
    $("#sale").hide();
        $("#loadt").click(function(){
            $("#load").show();
            $("#sale").hide();
        })
        $("#salet").click(function(){
            $("#sale").show();
            $("#load").hide();
        })
    })
</script>
<style>
    td{
        /* text-transform:uppercase; */
    }
</style>
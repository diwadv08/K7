 <?php include 'sidebar.php'?>

<?php
    $count=0;
    // Load cube count
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
    $sel6a=mysqli_query($conn,"SELECT COUNT(sales) FROM cube where sales=100");
    $fe31a=mysqli_fetch_array($sel6a);
    $sel61a=$fe31a[0];
    $total_sum=mysqli_query($conn,"SELECT SUM(total)from billing");
    $fff=mysqli_fetch_array($total_sum);
    $tot=$fff[0];

    


    //Cutomer Count
    $total_cus=mysqli_query($conn,"SELECT COUNT(id)from billing where name!=''");
    $fffc=mysqli_fetch_array($total_cus);
    $cus=$fffc[0];
    $total_sal=mysqli_query($conn,"SELECT SUM(base_price)from product");
    $fcfc=mysqli_fetch_array($total_sal);
    $total_salie=$fcfc[0];



    $count_nam=mysqli_query($conn,"SELECT count(name)from billing where name!=''");
    $fcb=mysqli_fetch_array($count_nam);
    $count_name=$fcb[0];

    $count_ex=mysqli_query($conn,"SELECT count(id)from product where product_name!=''");
    $fccc=mysqli_fetch_array($count_ex);
    $count_exp=$fccc[0];

    $count_us=mysqli_query($conn,"SELECT count(id)from users where name!=''");
    $fcu=mysqli_fetch_array($count_us);
    $count_user=$fcu[0];

?>
<body class="nk-body" data-sidebar-collapse="lg" data-navbar-collapse="lg" style="margin-top:5px">
    <div class="nk-content">
        <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="row g-gs">
    <div class="col-xl-6">
    <div class="card h-100">
    <div class="card-body">
    <div class="d-flex justify-content-between align-items-center"><div>
    <div class="card-title"><div class="media media-middle media-circle text-bg-warning mb-3"><em class="icon ni ni-trend-up"></em></div>
    <h5 style="color:orange">Load</h5></div>
    <a href="#" class="btn btn-success mt-2 btn-sm col-lg-5 btn-block">100% Loaded-><?=$sel61;?></a>
    <a href="#" class="btn btn-warning mt-2 btn-sm col-lg-5 btn-block">75% Loaded-><?=$sel51;?></a>
    <a href="#" class="btn btn-info mt-2 btn-sm col-lg-5 btn-block">50% Loaded-><?=$sel41;?></a>
    <a href="#" class="btn btn-danger mt-2 btn-sm col-lg-5 btn-block">25% Loaded-><?=$sel31;?></a><br>
    <a href="#" class="btn btn-dark mt-2 btn-sm col-lg-5 btn-block" style="width=120px">UnLoaded-><?=$sel21;?></a><br>
    <p class="mt-3">Daily Load</p>
    </div>
    <div class="d-none d-sm-block d-xl-none d-xxl-block me-md-5 me-xxl-0"></div></div></div></div></div>

    <div class="col-xl-6">
    <div class="card h-100">
    <div class="card-body">
    <div class="d-flex justify-content-between align-items-center"><div>
    <div class="card-title"><div class="media media-middle media-circle text-bg-success text-dark mb-3"><em class="icon ni ni-sign-inr-alt"></em></div>
    <h5 style="color:green">Sales</h5></div>
     <a class="btn btn-success mt-2 btn-sm col-lg-5 btn-block">100% Availabale-><?=$sel61a;?></a>
    <a class="btn btn-warning mt-2 btn-sm col-lg-5 btn-block">75% Availabale-><?=$sel51a;?></a>
    <a class="btn btn-info mt-2 btn-sm col-lg-5 btn-block">50% Availabale-><?=$sel41a;?></a>
    <a class="btn btn-danger mt-2 btn-sm col-lg-5 btn-block">25% Availabale-><?=$sel31a;?></a>
    <a class="btn btn-dark mt-2 btn-sm col-lg-5 btn-block">Unavailabale-><?=$sel21a;?></a>
    <br><p class="mt-3">Daily Sales</p>
    
</div>
    <div class="d-none d-sm-block d-xl-none d-xxl-block me-md-5 me-xxl-0"></div></div></div></div></div>


    <div class="col-sm-4 col-xl-4 col-md-4">
    <div class="card h-100">
    <div class="card-body">
    <div class="card-title"><h4 class="title">Activity</h4></div>
    <div class="d-flex justify-content-between align-items-end gap g-2">
    <div class="flex-grow-1">
    <div class="align-items-center mt-3 p-2">
    <li class="nk-data-list-item">
    <div class="media media-middle media-circle text-bg-success-soft"><em class="icon ni ni-sign-inr-alt"></em></div>
<div class="amount-wrap">
    <div class="amount h3 mb-0">Rs.<?=$tot;?></div><span class="smaller">Total Sales</span></div></li><br> 
    
    <li class="nk-data-list-item">
    <div class="media media-middle media-circle text-bg-danger-soft"><em class="icon ni ni-sign-inr-alt"></em></div>
<div class="amount-wrap">
    <div class="amount h3 mb-0">Rs.<?=$total_salie;?></div><span class="smaller">Total Expense</span></div></li><br> 
    <li class="nk-data-list-item">
        <a href="report1.php" class="btn btn-warning btn-block col-9">View Report</a>
    </li>
</div></div></div></div></div></div>
    <div class="col-xxl-8 col-lg-8 col-md-8">
    <div class="card h-100">
    <div class="row g-0 col-sep col-sep-md">
    <div class="col-md-12">
    <div class="card-body">
    <div class="card-title-group mb-4">
    <div class="card-title"><h4 class="title">Total Profit</h4></div></div>
    <div class="nk-chart-ecommerce-total-profit"><canvas data-nk-chart="bar" id="totalProfitChart"></canvas></div></div></div></div></div></div>
    


<div class="col-sm-6 col-xl-3 col-xxl-6">
    <div class="card h-100">
    <div class="card-body">
    <center><div class="media media-middle media-circle text-bg-success mb-3"><em class="icon ni ni-users-fill"></em></div><b style="font-size:25px">&nbsp;&nbsp;<?=$count_name;?></b></center>
    <h3 class="text-success" align="center">Customers</h5>
<div class="d-flex align-items-center mb-3">
</div></div></div></div>

<div class="col-sm-6 col-xl-3 col-xxl-6">
    <div class="card h-100">
    <div class="card-body">
    <center><div class="media media-middle media-circle text-bg-danger mb-3"><em class="icon ni ni-growth-fill"></em></div><b style="font-size:25px">&nbsp;&nbsp;<?=$count_exp;?></b></center>
    <h3 class="text-danger" align="center">Expenses</h5>
<div class="d-flex align-items-center mb-3">
    <div class="amount h4 mb-0"></div>
</div></div></div></div>

<div class="col-sm-6 col-xl-3 col-xxl-6">
    <div class="card h-100">
    <div class="card-body">
    <center><div class="media media-middle media-circle text-bg-warning mb-3"><em class="icon ni ni-users"></em></div><b style="font-size:25px">&nbsp;&nbsp;<?=$count_user;?></b></center>
    <h3 class="text-warning" align="center">Users</h5>
<div class="d-flex align-items-center mb-3">
    <div class="amount h4 mb-0"></div>
</div></div></div></div> 

<div class="col-sm-6 col-xl-3 col-xxl-6">
    <div class="card h-100">
    <div class="card-body">
    <center><div class="media media-middle media-circle text-bg-dark mb-3"><em class="icon ni ni-pie"></em></div><b style="font-size:25px">&nbsp;&nbsp;325</b></center>
    <h3 class="text-dark" align="center">Stocks</h5>
<div class="d-flex align-items-center mb-3">
</div></div></div></div></div></div></div></div></div>
</div></div></div></div></div></div></div></div></div></div></div>
</body>

    
    
    <script src="assets/js/bundle.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/charts/ecommerce-chart.js"></script>
</html>








 
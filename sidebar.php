<?php
    include 'db/connection.php';
?>
<?php
    include 'db/session.php';
?>


<?php
// $sel=mysqli_query($conn,"SELECT * FROM sidebar where menu_id='1'");
// if(mysqli_num_rows($sel)>0){
//     $fe=mysqli_fetch_array($sel);
// }
    $sel2=mysqli_query($conn,"SELECT * from users where id='".$_SESSION['user_id']."'");
    if(mysqli_num_rows($sel2)>0){
        $ft=mysqli_fetch_assoc($sel2);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style20d4.css?v1.1.2">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>K7 groups</title>
    <link rel="shortcut icon" href="images/title.png">
</head>
<body class="nk-body" data-sidebar-collapse="lg" data-navbar-collapse="lg">
<div class="nk-app-root">
        <div class="nk-main">
        <div class="nk-sidebar nk-sidebar-fixed is-theme" id="sidebar">
        <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="index1.php" class="logo-link">
        <img class=" app-sidebar-logo-default" src="images/logo.png"  height="80px">
        <div class="logo-wrap">
            </div></a>
    <div class="nk-sidebar-toggle me-n1">
        <button class="btn btn-md btn-icon text-light btn-no-hover sidebar-toggle">
        <em class="icon ni ni-arrow-left"></em></button></div></div></div>
    <div class="nk-sidebar-element nk-sidebar-body" style="margin-top:-25px">
        <div class="nk-sidebar-content">
        <div class="nk-sidebar-menu" data-simplebar>
        <ul class="nk-menu">
        <li class="nk-menu-item">
            <a href="index1.php" class="nk-menu-link">
                <span class="nk-menu-icon">
            <em class="icon ni ni-dashboard"></em></span>
            <span class="nk-menu-text">Dashboard</span></a></li>
        
        <?php if($ft['user_name']=="admin"){?>
            <li class="nk-menu-item">
                <a href="#" class="nk-menu-link nk-menu-toggle">
                <span class="nk-menu-icon"><em class="icon ni ni-unlock"></em></span>
                <span class="nk-menu-text">Admin Panel</span></a>
                <ul class="nk-menu-sub">
                    <li class="nk-menu-item"><a href="user.php" class="nk-menu-link"><span class="nk-menu-icon">
            <em class="icon ni ni-chevron-right"></em></span>
                        <span class="nk-menu-text">Users</span></a></li>
                    <li class="nk-menu-item"><a href="login_details.php" class="nk-menu-link"><span class="nk-menu-icon">
            <em class="icon ni ni-chevron-right"></em></span>
                <span class="nk-menu-text">Log</span></a></li>
                
            </ul></li>
          <?php }
          
          ?>
                
        <ul class="nk-menu-sub">
       
        <li class="nk-menu-item">
            </li>
            <?php if($ft['sales']!=2){?><li class="nk-menu-item">
                <a href="sales.php" class="nk-menu-link">
                    <span class="nk-menu-icon">
            <em class="icon ni ni-chevrons-right"></em></span>
            <span class="nk-menu-text">Sales</span></a></li><?php }?>
            
            <?php if($ft['load1']!=2){?>
            <li class="nk-menu-item">
                <a href="load.php" class="nk-menu-link">
                    <span class="nk-menu-icon">
            <em class="icon ni ni-grid-box-alt"></em></span>
            <span class="nk-menu-text">Load</span></a></li><?php }?>

            <?php if($ft['customer']!=2){?><li class="nk-menu-item">
                <a href="#" class="nk-menu-link nk-menu-toggle">
                <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                <span class="nk-menu-text">Customer</span></a>
                <ul class="nk-menu-sub">
                <?php if($ft['crm']!=2){?><li class="nk-menu-item"><a href="customer.php" class="nk-menu-link">
                    <span class="nk-menu-icon">
            <em class="icon ni ni-chevron-right"></em></span><span class="nk-menu-text">CRM</span></a><?php }?></li>
            <?php if($ft['enquiry']!=2){?>        
                    <li class="nk-menu-item"><a href="enquiry.php" class="nk-menu-link"><span class="nk-menu-icon">
            <em class="icon ni ni-chevron-right"></em></span>
                <span class="nk-menu-text">Enquiry</span></a></li><?php }?></li>
                
            </ul></li><?php }?></li>



            <?php if($ft['procurement']!=2){?>
            <li class="nk-menu-item">
                <a href="#" class="nk-menu-link nk-menu-toggle">
                <span class="nk-menu-icon"><em class="icon ni ni-unarchive"></em></span>
                <span class="nk-menu-text">Procurement</span></a>
                <ul class="nk-menu-sub">
                <?php if($ft['quotation']!=2){?>
                <li class="nk-menu-item"><a href="quotation.php" class="nk-menu-link">
                    <span class="nk-menu-icon">
            <em class="icon ni ni-chevron-right"></em></span><span class="nk-menu-text">Quotation</span></a></li>  <?php }?>  
            <?php if($ft['sales_order']!=2){?> <li class="nk-menu-item"><a href="salesorder.php" class="nk-menu-link">
                    <span class="nk-menu-icon">
            <em class="icon ni ni-chevron-right"></em></span><span class="nk-menu-text">Sales Order</span></a></li> <?php }?>
            <?php if($ft['invoice']!=2){?> <li class="nk-menu-item"><a href="invoice.php" class="nk-menu-link">
                    <span class="nk-menu-icon">
            <em class="icon ni ni-chevron-right"></em></span><span class="nk-menu-text">Invoice</span></a><?php }?>
            </ul></li><?php } ?>

            <?php if($ft['accounts']!=2){?>
            <li class="nk-menu-item">
                <a href="#" class="nk-menu-link nk-menu-toggle">
                <span class="nk-menu-icon"><em class="icon ni ni-sign-inr-alt"></em></span>
                <span class="nk-menu-text">Accounts</span></a>
                <ul class="nk-menu-sub">

                <?php if($ft['income']!=2){?> <li class="nk-menu-item"><a href="products.php" class="nk-menu-link">
                    <span class="nk-menu-icon">
            <em class="icon ni ni-chevron-right"></em></span><span class="nk-menu-text">Genral Expenses</span></a></li><?php }?>

            <?php if($ft['expenses']!=2){?>
                <li class="nk-menu-item"><a href="expenses.php" class="nk-menu-link">
                    <span class="nk-menu-icon">
            <em class="icon ni ni-chevron-right"></em></span><span class="nk-menu-text">Expenses Reports</span></a></li> 
             <?php }?>  
            
            <?php if($ft['income']!=2){?> <li class="nk-menu-item"><a href="income.php" class="nk-menu-link">
                    <span class="nk-menu-icon">
            <em class="icon ni ni-chevron-right"></em></span><span class="nk-menu-text">Income Reports</span></a></li><?php }?>

            <?php if($ft['credit']!=2){?><li class="nk-menu-item"><a href="credit.php" class="nk-menu-link">
                    <span class="nk-menu-icon">
            <em class="icon ni ni-chevron-right"></em></span><span class="nk-menu-text">Credit Reports</span></a></li><?php }?>
            </ul></li><?php }?>
            
            <?php if($ft['inventory']!=2){?><li class="nk-menu-item">
                <a href="inventory.php" class="nk-menu-link">
                    <span class="nk-menu-icon">
            <em class="icon ni ni-growth"></em></span>
            <span class="nk-menu-text">Material Inventory</span></a></li>
            
            <?php }?>

            <?php if($ft['user_name']=="admin"){?><li class="nk-menu-item">
                <a href="smsdata.php" class="nk-menu-link">
                    <span class="nk-menu-icon">
            <em class="icon ni ni-chat-circle"></em></span>
            <span class="nk-menu-text">SMS</span></a></li>
            
            <?php }?>

            
            <?php if($ft['stocks']!=2){?><li class="nk-menu-item">
                <a href="stock.php" class="nk-menu-link">
                    <span class="nk-menu-icon">
            <em class="icon ni ni-box"></em></span>
            <span class="nk-menu-text">Product Stocks</span></a></li><?php } ?>
            <?php if($ft['service']!=2){?><li class="nk-menu-item">
                <a href="maintainance.php" class="nk-menu-link">
                    <span class="nk-menu-icon">
            <em class="icon ni ni-alert-fill"></em></span>
            <span class="nk-menu-text">Maintainance and Service</span></a></li>
            <?php }?>

            <?php if($ft['user_name']=="admin"){?>
            <li class="nk-menu-item">
                <a href="#" class="nk-menu-link nk-menu-toggle">
                <span class="nk-menu-icon"><em class="icon ni ni-reports"></em></span>
                <span class="nk-menu-text">Reports</span></a>
                <ul class="nk-menu-sub">
                    <li class="nk-menu-item"><a href="report1.php" class="nk-menu-link"><span class="nk-menu-icon">
            <em class="icon ni ni-chevron-right"></em></span>
                        <span class="nk-menu-text">Sales</span></a></li>
                    <li class="nk-menu-item"><a href="report2.php" class="nk-menu-link"><span class="nk-menu-icon">
            <em class="icon ni ni-chevron-right"></em></span>
                <span class="nk-menu-text">Customer</span></a></li>
                <li class="nk-menu-item"><a href="report3.php" class="nk-menu-link"><span class="nk-menu-icon">
            <em class="icon ni ni-chevron-right"></em></span>
                <span class="nk-menu-text">Billing</span></a></li>
            </ul></li>
            <?php }?>


           
                <li class="nk-menu-item">
                <a href="logout.php" class="nk-menu-link">
                    <span class="nk-menu-icon">
                <em class="icon ni ni-signout"></em></span>
                <span class="nk-menu-text">Logout</span></a></li>
           
        
        </li></ul></div></div></div></div>
        <?php 
        include 'top.php';
        ?>
        
</body>
</html>


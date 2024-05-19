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
<style>
    .ggg{
        height:100px!important;
        overflow-Y:scroll!important;
    }
</style>
<body class="nk-body" data-sidebar-collapse="lg" data-navbar-collapse="lg" style="margin-top:30px">
<div class="nk-content">
    <div class="container">
    <div class="nk-content-inner">
    <div class="nk-content-body">
    <div class="nk-block-head">
    <div class="nk-block-head-between flex-wrap gap g-2">
    <div class="nk-block-head-content">
        <h2 class="nk-block-title">SMS</h1>
        <nav><ol class="breadcrumb breadcrumb-arrow mb-0">
            <li class="breadcrumb-item">
            <a href="#">Home</a></li>
            <li class="breadcrumb-item">
            <a href="#">SMS</a></li>
        </ol></nav></div>
<div class="nk-block-head-content"><ul class="d-flex"><li>
    <a href="#" class="btn btn-md d-md-none btn-primary"><em class="icon ni ni-plus"></em><span>Create</span></a></li>
    <?php if($ft['crm']==1){?><li><a href="sms.php" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-chat"></em><span>SEND SMS</span></a></li><?php }?>
    <li>&nbsp;&nbsp;<button onclick="history.go(-1)" class="btn btn-danger">Back</button></li></ul></div></div></div>
<div class="nk-block">
    <div class="card">
        <table class="datatable-init table" data-nk-container="table-responsive">
            <thead class="table-light">
        <tr>
  
        <th class="tb-col tb-col-start"><span class="overline-title">S.NO</span></th>
        <th class="tb-col tb-col-start"><span class="overline-title">Message</span></th>
    
    <th class="tb-col"><span class="overline-title">Template</span></th>
    <th class="tb-col"><span class="overline-title">Message Sent to</span></th>
    
</tr></thead><tbody>
    <?php
    $i=1;
    $sel=mysqli_query($conn,"SELECT * FROM sms where options!='To All Customers'");
    if(mysqli_num_rows($sel)>0){
        while($fe=mysqli_fetch_assoc($sel)){
            ?>
            <tr>

    <td class="tb-col">
        <a href="#" class="text-dark"><?=$i++;?></a></td>
    <td class="tb-col">
        <a href="#" class="text-dark"><?=$fe['message'];?></a>
    </td>
    
        <td class="tb-col"><span><?=$fe['template'];?></span></td>
        <td class="tb-col ggg"><span>
            <?php 
            $n=explode("--",$fe['db_input']);
            $l=count($n);
            for($i1=0;$i1<$l;$i1++){
                echo $n[$i1]."<br>";
            }
            ?>
        </span></td>
<?php        }
        }
?>    
</tbody></table></div></div></div></div></div></div>
    <div class="container-fluid">
    <div class="nk-footer-wrap">
    <div class="nk-footer-links"></div></div></div></div></div></div></div></body><script src="assets/js/bundle.js"></script><script src="assets/js/scripts.js"></script>
    <script src="assets/js/data-tables/data-tables.js"></script>

</html>

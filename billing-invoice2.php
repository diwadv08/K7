<?php
include 'sidebar.php';
?>
<?php

if(isset($_GET['id'])) {
    $id = $_GET['id'];
}
if(isset($_POST['id'])) {
    $id = $_POST['id'];
} 


if(isset($_POST['save1'])|| $id != '' ){
        $select=mysqli_query($conn,"SELECT * from user_details where check_id='$id'");
        if(mysqli_num_rows($select)>0){
            $fe=mysqli_fetch_assoc($select);
            $array_price = explode(",", $fe['array_price']);
            $arrp = explode(",", $fe['product_id']);
            $arrpd = explode(",", $fe['product_description']);            
            $c1=0;
            $c2=0;
            $c3=0;
            $c4=0;
            $count=[0,0,0,0];
            ?>
        <?php
            foreach($arrpd as $arp){
                if(str_contains($arp,'-25%')){
                    $count[0]=$c1+1;
                }
                if(str_contains($arp,'-50%')){
                    $count[1]=$c2+1;
                }
                if(str_contains($arp,'-75%')){
                    $count[2]=$c3+1;
                }
                if(str_contains($arp,'-100%')){
                    $count[3]=$c4+1; 
                }
            }
            $l=$count[0]+$count[1]+$count[2]+$count[3];
        ?>
<style>
    .overline-title{
        color:white;
    }
</style>
<body class="nk-body" data-sidebar-collapse="lg" data-navbar-collapse="lg">
<div class="nk-content" style="margin-top:40px">
<div class="nk-content">
    <div class="container">
    <div class="nk-content-inner">
    <div class="nk-content-body">
    <div class="nk-block-head">
    <div class="nk-block-head-between flex-wrap gap g-2">
    <div class="nk-block-head-content">
        <h2 class="nk-block-title">Invoice</h1>
        </div>
<div class="nk-block-head-content"><ul class="d-flex">
<li>&nbsp;&nbsp;<button onclick="history.go(-1)" class="btn btn-danger">Back</button></li>
<?php if($ft['reports']==1){?><li>&nbsp;&nbsp;
        <a href="report1.php" class="btn btn-success">Go To Billing</a>
    </li>&nbsp;&nbsp;
    <li>
         <button onclick="Export()" class="btn btn-dark">
        <span class="ni ni-file" style="font-size:22px;font-weight:400"></span>&nbsp;Export as PDF</button></li><?php }?>

</ul></div></div></div>
<div class="nk-block">
<div class="card">
<div class="nk-invoice"  id="maintable">
<div class="nk-invoice-head flex-column flex-sm-row">
<div class="nk-invoice-head-item mb-3 mb-sm-0">
<div class="nk-invoice-brand mb-1"><a href="#" class="logo-link">
<div class="logo-wrap"><img src="images/logo.png" height="60px" width="180px" style="margin-top:-12px"></div></a></div><ul>
    <li></li>
    <li>info@dk7.in</li>
<li>+91 99944 98000</li></ul></div>
<div class="nk-invoice-head-item text-sm-end">
    <p style="font-size:34px;color:#56b37d;margin-top:-20px"><b>INVOICE ORDER</b></p>
<div class="h3"><span style="margin-right:22px;">Invoice No:</span>#<?=120000+$fe['pid'];?></div><ul>
    <li><span style="margin-right:37px">Date:</span><?=$fe['date'];?></li></ul></div></div>
<div class="nk-invoice-head flex-column flex-sm-row">
<div class="nk-invoice-head-item mb-3 mb-sm-0">
<div class="h3">Invoice To</div><ul>
<li><?=$fe['name'];?></li>
    <li><?=$fe['address'];?></li>
<li><?=$fe['mobile_num'];?></li></ul></div>
<div class="nk-invoice-head-item">
<div class="h3">Invoice From</div><ul>
    <li><b>K7 Ice Factory</b></li>
<li>1362, Nagai Road,</li>
<li>Jothi Nagar,Thomban Kudisai,</li>
<li>Thanjavur-613001</li>
<li><a href="mailto:info@dk7.in" style="text-decoration:underline;color:#56b37d">info@dk7.in</a></li></ul></div></div>
<div class="nk-invoice-body">
<div class="table-responsive"><table class="table nk-invoice-table"><thead style="background:#56b37d;color:white">
    <tr><th class="tb-col"><span class="overline-title">S no</span></th>
    <th class="tb-col"><span class="overline-title">item id</span></th>
    <th class="tb-col"><span class="overline-title">description</span></th>
    <th class="tb-col"><span class="overline-title">price</span></th>
    <th class="tb-col"><span class="overline-title">qty</span></th>
    <th class="tb-col tb-col-end"><span class="overline-title">total</span></th>
</tr></thead>
<tbody>
    <tr>
<?php
    $a=0;
    for($i=0;$i<$l;$i++){
?>
<td class="tb-col"><span>
        <?=++$a.".";?>
    </span></td>
    <td class="tb-col"><span>
        <?=$arrp[$i];?>
    </span></td>
    <td class="tb-col"><span>
        <?php
        
        $sub_arr = explode("-", $arrp[$i]);

        $bar_size = str_replace("0.", "", $sub_arr[1]);
        if($bar_size == "1.00") { $bar_size = 100; }
        //echo $bar_size."<br>";
        $sub_arr1 = explode(", ", $fe['product_description']);
        //print_r($sub_arr1);
        foreach($sub_arr1 as $sub_ar1) {
            if (strpos($sub_ar1, $bar_size) !== false) {
                echo $sub_ar1." ";
            }
        }
        
        ?>
    </span></td>
    <td class="tb-col"><span><?php
     $total= explode("-", $arrp[$i]);
     echo $array_price[$i];
    ?></span></td>
    <td class="tb-col"><span>
        <?=$total[2];?></span></td>
    <td class="tb-col tb-col-end"><span>Rs.<?=$array_price[$i]*$total[2];?>.00</span></td>
    </tr>
    <?php }?>

   <tfoot><tr>
        <td colspan="4"></td>
    <td>Subtotal:</td>
    <td class="tb-col-end">Rs.<?=$fe['price'];?>.00</td></tr><tr>
        <td colspan="4"></td>
    <td>Tax (<?=$fe['tax'];?>%):</td>
    <td class="tb-col-end">(+)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$fe['net_amount']-$fe['price'];?>.00</td></tr><tr>
        <td colspan="4"></td>
    <td style="background:#56b37d;color:white">Grand Total:</td>
    <td class="tb-col-end" style="background:#56b37d;color:white">Rs.<?=$fe['net_amount'];?></td></tr>
    <?php if($fe['r_amount']!=0 && $fe['credit']!=0){?>
        <tr>
        <td colspan="4"></td>
    <td><b>Paid Amount:</b></td>
    <td class="tb-col-end">&nbsp;&nbsp;<b>Rs.<?=$fe['net_amount']-$fe['r_amount'];?>.00</b></td></tr><tr>
    <tr>
        <td colspan="4"></td>
    <td><b>Balance Amount:</b></td>
    <td class="tb-col-end">&nbsp;&nbsp;<b>Rs.<?=$fe['r_amount'];?>.00</b></td></tr>
    <?php }?>
</tfoot></table></div></div></div></div></div></div></div></div></div>                     
<?php            
        }
    }
?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
<script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
<script src="assets/js/data-tables/data-tables.js"></script>
<script type="text/javascript">
        function Export() {
            html2canvas(document.getElementById('maintable'), {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500,
                            height:400
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("Table.pdf");
                }
            });
        }
    </script>
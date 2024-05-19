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


if(isset($_POST['save']) || $id != '' ){
        $select=mysqli_query($conn,"SELECT * from quotation where id='$id'");
        if(mysqli_num_rows($select)>0){
            $fe=mysqli_fetch_assoc($select);
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
        <h2 class="nk-block-title">Quotation</h1>
        </div>
<div class="nk-block-head-content"><ul class="d-flex">
<li>&nbsp;&nbsp;<button onclick="history.go(-1)" class="btn btn-danger">Back</button></li>
<?php if($ft['reports']==1){?> &nbsp;&nbsp;
    <li>
        <button onclick="Export()" class="btn btn-dark">
        <span class="ni ni-file" style="font-size:22px;font-weight:400"></span>&nbsp;Export as PDF</button></li><?php }?>

</ul></div></div></div>
<div class="nk-block">
<div class="card">
<div class="nk-invoice" id="maintable">
<div class="nk-invoice-head flex-column flex-sm-row">
<div class="nk-invoice-head-item mb-3 mb-sm-0">
<div class="nk-invoice-brand mb-1"><a href="#" class="logo-link">
<div class="logo-wrap"><img src="images/logo.png" height="60px" width="180px" style="margin-top:-12px"></div></a></div><ul>
<li>info@dk7.in</li>
<li>+91 99944 98000</li></ul></div>
<div class="nk-invoice-head-item text-sm-end">
<p style="font-size:34px;color:#56b37d;margin-top:-20px"><b>QUOTATION ORDER</b></p>
<div class="h3"><span style="margin-right:57px;">Quote No:</span><?=$fe['qid'];?></div><ul>
<li><span style="margin-right:37px">Date:</span><?=$fe['date'];?></li>
    
</ul></div></div>
<div class="nk-invoice-head flex-column flex-sm-row">
<div class="nk-invoice-head-item mb-3 mb-sm-0">
<div class="h4">Quotation To</div><ul>
<li><?=$fe['remarks'];?></li>
    <li><?=$fe['q_address'];?></li>
<li><?=$fe['q_mob'];?></li></ul></div>
<div class="nk-invoice-head-item">
<div class="h4">Quotation From</div><ul>
<li><b>K7 Ice Factory</b></li>
<li>1362, Nagai Road,</li>
<li>Jothi Nagar,Thomban Kudisai,</li>
<li>Thanjavur-613001</li>
<li><a href="mailto:info@dk7.in" style="text-decoration:underline;color:#56b37d">info@dk7.in</a></li></ul></div></div>
<div class="nk-invoice-body">
<div class="table-responsive"><table class="table nk-invoice-table"><thead class=""  style="background:#56b37d!important;">
    <tr>
    <th class="tb-col"><span class="overline-title">Quotation id</span></th>    
    <th class="tb-col"><span class="overline-title">Bar id</span></th>
    <th class="tb-col"><span class="overline-title">description</span></th>
    <th class="tb-col"><span class="overline-title">price</span></th>
    <th class="tb-col"><span class="overline-title">qty</span></th>
    <th class="tb-col tb-col-end"><span class="overline-title">total</span></th>
</tr></thead>
<tbody>
    <tr>
    <?php
        $total=$fe['quantity']*$fe['q_price'];
    ?>        
    <td class="tb-col"><span></span><?=$fe['qid'];?></td>
    <td class="tb-col"><span></span><?=$fe['bar_id'];?></td>
    <td class="tb-col"><span></span><?=$fe['q_desc'];?></td>
    <td class="tb-col"><span></span><?=$fe['q_price'];?>.00</td>
    <td class="tb-col"><span></span><?=$fe['quantity'];?></td>
    <td class="tb-col tb-col-end"><span>Rs.<?=$total;?>.00</span></td>

    </tr>
   <tfoot><tr>
        <td colspan="4"></td>
    <td >Subtotal:</td>
    <td class="tb-col-end">Rs.<?=$total;?>.00</td></tr><tr>
    
    <td colspan="4"></td>
    <td >Tax (<?=$fe['tax'];?>%):</td>
    <td class="tb-col-end">(+)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $t=$fe['tax']*($total/100);?></td></tr>
    <tr>
    <td colspan="4"></td>
    <td >Discount(<?=$fe['discount'];?>%):</td>
    <td class="tb-col-end">(-)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $t1=$fe['discount']*($total/100);?></td></tr>
    <tr>
    <td colspan="4"></td>
    <td style="background:#56b37d;color:white">Grand Total:</td>
    <td class="tb-col-end" style="background:#56b37d;color:white">Rs.<?php echo $total+$t-$t1;?></td></tr></tfoot></table></div></div></div></div></div></div></div></div></div>  
</div>
<?php            
        }
    }
?>
</html>
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
                            height: 400
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("Table.pdf");
                }
            });
        }
    </script>








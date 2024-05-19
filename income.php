<?php include 'sidebar.php';
$sel2=mysqli_query($conn,"SELECT * FROM users where id='".$_SESSION['user_id']."'");
if(mysqli_num_rows($sel2)>0){
    $ft=mysqli_fetch_assoc($sel2);
}
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
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
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
<div class="nk-block-head-content"><h2 class="nk-block-title">Income</h2><nav><ol class="breadcrumb breadcrumb-arrow mb-0"><li class="breadcrumb-item"><a href="#">Home</a></li><li class="breadcrumb-item active" aria-current="page">Income</li></ol></nav></div>
<div class="nk-block-head-content">
    <ul class="d-flex">
    <li><button onclick="Export()" class="btn btn-dark"><span class="ni ni-file" style="font-size:22px;font-weight:400"></span>&nbsp;Export as PDF</button></li>
    <li>&nbsp;&nbsp;<button onclick="ExportToExcel('xlsx')" class=" btn btn-success"><span class="ni ni-dashboard" style="font-size:22px;font-weight:400"></span>&nbsp;Export as Excel</button></li>
    <li>&nbsp;&nbsp;<a href="allincomes.php" class="btn btn-primary"><span class="ni ni-eye" style="font-size:22px;font-weight:400"></span>&nbsp;&nbsp;View All Incomes</a></li>
    <li>&nbsp;&nbsp;<button onclick="history.go(-1)" class="btn btn-danger">Back</button></li></ul></div></div></div>
<div class="nk-block">
<div class="card">
<table id="maintable" class="datatable-init table" data-nk-container="table-responsive">
<thead class="table-light">
<div class="row">
    <form method="post">
        <div class="col-6 m-4 d-flex">
            <div class="col-4">
                From:<input id="min" name="min" class="form-control" type="date" value="<?=date('Y-m-d');?>">
            </div>
            <div class="col-4" style='margin-left:40px;'>
                To:<input id="max" name="max" class="form-control" type="date" value="<?=date('Y-m-d');?>">
            </div>
            <div class="col-4" style='margin-left:40px;margin-top:25px'>
                <input  name="submit" class="btn btn-danger" type="submit" value="Search">
            </div>
        </div>
    </form>
    </div>
<tr>
<th class="tb-col tb-col-check" data-sortable="false">
<div class="form-check"><input class="form-check-input" type="checkbox" value=""></div></th>
<th class="tb-col"><span class="overline-title">Id</span></th>
<th class="tb-col"><span class="overline-title">Date</span></th>
<th class="tb-col tb-col-md"><span class="overline-title">quantity</span></th>
<th class="tb-col tb-col-md"><span class="overline-title">price</span></th>
</tr>
</thead>
<tbody>
<?php
$nowdate=date('Y-m-d');
if(isset($_POST['submit'])){
    $sel=mysqli_query($conn,"SELECT * FROM billing where date<='".$_POST['max']."' and date>='".$_POST['min']."'");
    if(mysqli_num_rows($sel)>0){
        while($fe=mysqli_fetch_assoc($sel)){
?>            
        <tr>
    <td class="tb-col tb-col-check">
<div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="pid1"></div></td>
<td class="tb-col title">
<?php 
    $a=explode(",", $fe['product_id']);
    foreach ($a as $a1){
        echo $a1."<br>";
    }
?></td>
<td class="tb-col tb-col-md"><span><?=$fe['date']?></span></td>
<td class="tb-col tb-col-md"><span class="badge bg-secondary">Sales</span></td>

<td class="tb-col tb-col-md"><span><?=$fe['net_amount']?></span></td>
</tr>
</tbody>
<?php
        }
    }
    $sel1=mysqli_query($conn,"SELECT sum(net_amount) FROM billing where date<='".$_POST['max']."' and date>='".$_POST['min']."'");
    if(mysqli_num_rows($sel1)>0){
        $fg=mysqli_fetch_array($sel1);
        $sumof=$fg[0];
?>
<?php
if($sumof != 0){
    ?>
<tfoot><tr>
    <td colspan="4" style="background-color:green"></td>
    <td class="tb-col" style="background-color:green;color:white">Grand Total:<b style="margin-left:50px;">Rs.<?=$sumof;?></td></tr></tfoot>

<?php
        }
        else{
            ?>
            <td colspan="4"><p style="margin-left:420px">No Income Found</p></td>  
            <?php
        }

    }  

}
else{
    $sel3=mysqli_query($conn,"SELECT * FROM billing where date='".$nowdate."'");
    if(mysqli_num_rows($sel3)>0){
        while($fe1=mysqli_fetch_assoc($sel3)){
?>            
        <tr>
    <td class="tb-col tb-col-check">
<div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="pid1"></div></td>
<td class="tb-col title">
<?php
    $b=explode(",", $fe1['product_id']);
    foreach ($b as $b1){
        echo $b1."<br>";
    }
?></td>
<td class="tb-col tb-col-md"><span><?=$fe1['date']?></span></td>
<td class="tb-col tb-col-md"><span class="badge bg-secondary">Sales</span></td>
<td class="tb-col tb-col-md"><span><?=$fe1['net_amount']?></span></td>
</tr>
</tbody>
<?php
        
    }
}
$sel3a=mysqli_query($conn,"SELECT sum(net_amount) FROM billing where date='".$nowdate."'");
    if(mysqli_num_rows($sel3a)>0){
        $fh=mysqli_fetch_array($sel3a);
        $sum1=$fh[0];
    }
?>
<?php
if($sum1!=0){
    ?>
    <tfoot><tr>
    <td colspan="4" style="background-color:green;color:white"></td>
    <td class="tb-col" style="background-color:green;color:white">Grand Total:<b style="margin-left:50px;">Rs.<?=$sum1;?></b></td></tr></tfoot>
    <?php    
    
        }
        else{
            ?>
            <td colspan="4"><p style="margin-left:420px">No Income Found</p></td>  
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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
<script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
</html>


<script>
    function ExportToExcel(type, fn, dl) {
       var elt = document.getElementById('maintable');
       var wb = XLSX.utils.table_to_book(elt, { sheet: "sheet1" });
       return dl ?
         XLSX.write(wb, { bookType: type, bookSST: true, type: 'base64' }):
         XLSX.writeFile(wb, fn || ('MySheetName.' + (type || 'xlsx')));
    }
</script>
<script type="text/javascript">
  $(document).ready(function(){
  $(".btn-convert").click(function(){
    var convertionType = $("#convertion-type").val();
    if(convertionType == "split") {
      splitHTMLtoMultiPagePDF();
    } else {
      addHTMLToPDFPage();
    }
  });
});

function addHTMLToPDFPage() {

  var doc = new jsPDF('p', 'pt', [$("body").width(), $("body").height()]);
  converHTMLToCanvas($("#html-template")[0], doc, false, false);
}

function converHTMLToCanvas(element, jspdf, enableAddPage, enableSave) {
  html2canvas(element, { allowTaint: true }).then(function(canvas) {
    if(enableAddPage == true) {
      jspdf.addPage($("body").width(), $("body").height());
    }
    
    image = canvas.toDataURL('image/png', 1.0);
    jspdf.addImage(image, 'PNG', 15, 15, $(element).width(), $(element).height()); // A4 sizes
    
    if(enableSave == true) {
      jspdf.save("add-to-multi-page.pdf");
    }
  });
}

function splitHTMLtoMultiPagePDF() {
  var htmlWidth = $(".single-html-block").width();
  var htmlHeight = $(".single-html-block").height();
  var pdfWidth = htmlWidth + (15 * 2);
  var pdfHeight = (pdfWidth * 1.5) + (15 * 2);
  
  var doc = new jsPDF('p', 'pt', [pdfWidth, pdfHeight]);

  var pageCount = Math.ceil(htmlHeight / pdfHeight) - 1;


  html2canvas($(".single-html-block")[0], { allowTaint: true }).then(function(canvas) {
    canvas.getContext('2d');

    var image = canvas.toDataURL("image/png", 1.0);
    doc.addImage(image, 'PNG', 15, 15, htmlWidth, htmlHeight);


    for (var i = 1; i <= pageCount; i++) {
      doc.addPage(pdfWidth, pdfHeight);
      doc.addImage(image, 'PNG', 15, -(pdfHeight * i)+15, htmlWidth, htmlHeight);
    }

    doc.save("split-to-multi-page.pdf");
  });
};
    </script>
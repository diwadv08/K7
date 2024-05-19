<?php
include 'sidebar.php';
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
<body class="nk-body" data-sidebar-collapse="lg" data-navbar-collapse="lg">
<div class="nk-content" style="margin-top:40px">
<div class="nk-content">
    <div class="container">
    <div class="nk-content-inner">
    <div class="nk-content-body">
    <div class="nk-block-head">
    <div class="nk-block-head-between flex-wrap gap g-2">
    <div class="nk-block-head-content">
        <h2 class="nk-block-title">Quotation Preview</h1>
        </div>
</div></div>
<div class="nk-block">
<div class="card" id="maintable">
<div class="nk-invoice">
<div class="nk-invoice-head flex-column flex-sm-row">
<div class="nk-invoice-head-item mb-3 mb-sm-0">
<div class="nk-invoice-brand mb-1"><a href="index.html" class="logo-link">
<div class="logo-wrap"><img src="images/logo.png" height="60px" width="180px" style="margin-top:-12px"></div></a></div><ul>
    <li>K7@company.com</li>
<li>(120) 456 789</li></ul></div>
<div class="nk-invoice-head-item text-sm-end">
<div class="h3">Quotation No:<b>----</b></div><ul>
    <li>Quotation Date:<b>--/--/--</b></li></ul></div></div>
<div class="nk-invoice-head flex-column flex-sm-row">
<div class="nk-invoice-head-item mb-3 mb-sm-0">
</div></div>

<p><b>Dear Sir,</b></p>
<center><p style="text-indent:40px"><b>--Message--</b></p>

<p style="text-indent:40px"><b>---Sub Message---</b></p></center>

<div style="margin-left:80%">
<spam><b>Yours faithfully</b></spam>
<address>
<center>--Name--<br>
--Mobile--<br>
--K7 Groups--<br></center>              
</address>
</div>
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
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("Table.pdf");
                }
            });
        }
    </script>




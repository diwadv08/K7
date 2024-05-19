<?php 
include 'sidebar.php';
?>

<style>
    spam{
        color:red;
    }
</style>

<?php
$pc=mysqli_query($conn,"SELECT max(id)+1 from quotation");
$pcq = mysqli_fetch_array($pc);
$bill_number = $pcq[0];
            $insert_id = mysqli_insert_id($conn);
?>

<body class="nk-body" style="margin-top:40px" data-sidebar-collapse="lg" data-navbar-collapse="lg">
<script src="assets/js/bundle.js"></script>
<script src="assets/js/scripts.js"></script>
<div class="nk-content">
<div class="container">
<div class="nk-content-inner">
<div class="nk-content-body" >
<div class="nk-block-head">
<div class="nk-block-head-between flex-wrap gap g-2">
<div class="nk-block-head-content"><h2 class="nk-block-title">Add Quotation</h1>
<nav>
    <ol class="breadcrumb breadcrumb-arrow mb-0">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Procurement</a></li>
        <li class="breadcrumb-item active" aria-current="page">Quotation</li>
        <li class="breadcrumb-item active" aria-current="page">Add Quotation</li>
    </ol>
</nav>
</div>
<div class="nk-block-head-content"><ul class="d-flex"><li>
    <a href="quotation.php" class="btn btn-primary btn-md d-md-none">
        <em class="icon ni ni-eye"></em><span>View</span></a></li>
        
        <li>&nbsp;&nbsp;<a href="quotation.php" class="btn btn-success d-none d-md-inline-flex"><em class="icon ni ni-eye"></em><span>View All Quotation</span></a></li>
        
    <li>&nbsp;&nbsp;<button onclick="history.go(-1)" class="btn btn-danger">Back</button></li></ul>
    </div>
    </div>
</div>
    
    
    <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
    <!--begin:::Tab item-->
    <li class="nav-item">
        <a class="nav-link text-active-primary active existing" href="#">Exiting Quotation</a>
    </li>
    <!--end:::Tab item-->

    <!--begin:::Tab item-->
    <li class="nav-item">
        <a class="nav-link text-active-primary newuser" href="#">New Quotation</a>
    </li>
    <!--end:::Tab item-->

    </ul>
<form method="post" name="form1" enctype="multipart/form-data"  action="billing-invoiceq1.php">
<div class="row g-gs" id="existing">
<div class="col-xxl-9">
<div class="gap gy-4">
<div class="gap-col">
<div class="card card-gutter-md">
<div class="card-body">
<div class="row g-gs">
<div class="col-lg-12 form-label" style="font-size:16px;font-weight:700;">&nbsp;Existing Quotation</div>
<div class="col-lg-3">
<input type="hidden" id="id" name="id"/>
<div class="form-group">
    <label for="select_name" class="form-label">Name<spam>*</spam></label>
<div class="form-control-wrap">
<select class="form-select" id="select_name">
<?php
    $sel234=mysqli_query($conn,"SELECT  max(idie) from quotation");
    $fec=mysqli_fetch_array($sel234);
    $selidie=$fec[0];
    $sel2=mysqli_query($conn,"SELECT  * from quotation where q_name!=''");
    if(mysqli_num_rows($sel2)>0){
        while($fb=mysqli_fetch_array($sel2)){
            
?>
    <option hidden selected>Choose an Quationer Name</option>
    <option value="<?=$fb['id'];?>"><?=$fb['q_name'];?></option>
<?php    } 
    }
?>
</select>
</div></div></div>

<input type="hidden" name="idie" id="idie">

<input type="hidden" name="q_name" id="q_name">
<input type="hidden" name="name_sub" id="name_sub">
<div class="col-lg-3">
<div class="form-group"><label for="date" class="form-label">Date<spam>*</spam></label>
<div class="form-control-wrap">
    <input type="date" class="form-control"  name="date" value="<?=date('Y-m-d');?>"></div></div></div>
    <div class="col-lg-3">
    <div class="form-group"><label for="ecomid" class="form-label">Quotation ID</label>
<div class="form-control-wrap">
    <input required type="text" class="form-control" value="<?="QID-".$bill_number ;?>" name="qid" placeholder="Enter Quotation Id"></div></div></div>
<div class="col-lg-3"><div class="form-group"><label for="baseprice" class="form-label">Quotationer Mobile Number</label>
<div class="form-control-wrap">
    <input required type="tel" class="form-control" id="mobile_num"  pattern="^[0-9]{10}$"  name="q_mob" placeholder="Quotationer Mobile Number"></div></div></div>
<div class="col-lg-12">
<div class="form-group"><label class="form-label">Invoice To</label><div class="form-control-wrap"><div class="js-quill" data-toolbar="minimal" data-placeholder="Write quotation description here..." id="disp" name="remarks"></div></div></div></div>
<input type="hidden" name="remarks" id="remark">  


<div class="col-lg-12">
<div class="form-group"><label class="form-label">Quotationer Address</label>
<div class="form-control-wrap">
<div class="form-group">
<textarea class="form-control" name="q_address" id="address" placeholder="Address"></textarea></div>
</div></div></div>
<div class="col-4">
<div class="form-group"><label class="form-label">Bar ID</label>
<input required type="text" placeholder="BAR ID" name="bar_id" value="BAR-" class="form-date form-control" minlength="5"></div></div>


    <div class="col-lg-4">
<div class="form-group"><label for="baseprice" class="form-label">Product Description</label>
<div class="form-control-wrap">
    <input required type="text" class="form-control"  name="q_desc" placeholder="Product Description"></div></div></div>

    <div class="col-lg-4">
<div class="form-group"><label for="baseprice" class="form-label">Price</label>
<div class="form-control-wrap">
    <input required type="number" name="q_price" placeholder="Price" class="form-control"></div></div></div>



    <div class="col-lg-4">
<div class="form-group"><label for="baseprice" class="form-label">Quantity</label>
<div class="form-control-wrap">
    <input required type="number" name="quantity" class="form-control" placeholder="Quantity"></div></div></div>

    <div class="col-lg-4">
<div class="form-group"><label for="baseprice" class="form-label">Tax(%)</label>
<div class="form-control-wrap">
    <input required type="number" name="tax" class="form-control" placeholder='Tax'></div></div></div>


    <div class="col-lg-4">
<div class="form-group"><label for="baseprice" class="form-label">Discount(%)</label>
<div class="form-control-wrap">
    <input required type="number" name="discount" class="form-control" placeholder='Discount'></div></div></div>


<?php
    $sele=mysqli_query($conn,"SELECT max(check_id) as check_id from user_details");
    if(mysqli_num_rows($sele)>0){
        $fff=mysqli_fetch_array($sele);
        ?>
        <input type="hidden" name="check_id" value=<?=$fff['check_id'];?>> 
<?php
    }
?>


    </div></div>
<!--  -->


    <div class="col-lg-3">
    <input type="submit" name="save"  id="submit" class="btn btn-primary" style="margin-left:4%;margin-bottom:20px;margin-top:20px;" value="Save Changes"></div>
    </div>
</form>
</div>
</div>
</div>
</div>



<form method="post" name="form2" style="margin-top:10px" action="billing-invoiceq2.php">
<div class="row g- new" id="new">
<div class="col-xxl-9">
<div class="gap gy-4">
<div class="gap-col">
<div class="card card-gutter-md">
<div class="card-body">
<div class="row g-gs">
<div class="col-lg-12 form-label" style="font-size:16px;font-weight:700;">&nbsp;New Quotation</div>
<div class="col-lg-3">
<div class="form-group"><label for="name" class="form-label">Name<spam>*</spam></label>
<div class="form-control-wrap">
<input type="text" class="form-control" name="q_name1" id="name" placeholder="Enter your name"required/>
</div></div></div>
<input type="hidden" name="idie1" value=<?=$selidie+1;?>>

<div class="col-lg-3">
<div class="form-group"><label for="date" class="form-label">Date<spam>*</spam></label>
<div class="form-control-wrap">
<input type="date" class="form-control"  name="date1" value="<?=date('Y-m-d');?>"></div></div></div>
<div class="col-lg-3">
    <div class="form-group"><label for="ecomid" class="form-label">Quotation ID</label>
<div class="form-control-wrap">
    <input required type="text" class="form-control" value="<?="QID-".$bill_number ;?>" name="qid1" placeholder="Enter Quotation Id"></div></div></div>
<div class="col-lg-3">
<div class="form-group"><label for="baseprice" class="form-label">Quotationer Mobile Number</label>
<div class="form-control-wrap">
    <input required type="tel" class="form-control" pattern="^[0-9]{10}$"  name="q_mob1" placeholder="Quotationer Mobile Number"></div></div></div>
    <div class="col-lg-12">
<div class="form-group"><label class="form-label">Invoice To</label><div class="form-control-wrap"><div class="js-quill" data-toolbar="minimal" data-placeholder="Write quotation description here..." id="disp1"></div></div></div></div>
<input type="hidden" name="remarks1" id="remarks1">  

    <div class="col-lg-12">
<div class="form-group"><label class="form-label">Quotationer Address</label>
<div class="form-control-wrap">
<div class="form-group">
<textarea class="form-control" name="q_address1" placeholder="Address"></textarea></div>
</div></div></div>  
<div class="col-lg-12 form-label" style="font-size:16px;font-weight:700;">&nbsp;Product</div>
<div class="col-4">
<div class="form-group"><label class="form-label">Bar ID</label>
<input required type="text" placeholder="BAR ID" name="bar_id1" value="BAR-" class="form-date form-control" minlength="5"></div></div>


    <div class="col-lg-4">
<div class="form-group"><label for="baseprice" class="form-label">Product Description</label>
<div class="form-control-wrap">
    <input required type="text" class="form-control"  name="q_desc1" placeholder="Product Description"></div></div></div>

    <div class="col-lg-4">
<div class="form-group"><label for="baseprice" class="form-label">Price</label>
<div class="form-control-wrap">
    <input required type="number" name="q_price1" placeholder="Price" class="form-control"></div></div></div>



    <div class="col-lg-4">
<div class="form-group"><label for="baseprice" class="form-label">Quantity</label>
<div class="form-control-wrap">
    <input required type="number" name="quantity1" class="form-control" placeholder="Quantity"></div></div></div>

    <div class="col-lg-4">
<div class="form-group"><label for="baseprice" class="form-label">Tax(%)</label>
<div class="form-control-wrap">
    <input required type="number" name="tax1" class="form-control" placeholder='Tax'></div></div></div>


    <div class="col-lg-4">
<div class="form-group"><label for="baseprice" class="form-label">Discount(%)</label>
<div class="form-control-wrap">
    <input required type="number" name="discount1" class="form-control" placeholder='Discount'></div></div></div>

<input type="hidden" id="id" name="id"/>

    <div class="col-lg-3">
    <input type="submit" name="save1" id="submit1" class="btn btn-primary" style="margin-left:4%;margin-bottom:20px;margin-top:20px;" value="Save Changes"></div>
</form>
</body>
</html>
<script>

$(document).ready(function(){
    $("#new").hide();
    $(".newuser").click(function(){
        $("#new").show();
        $("#select_name").val('');
        $("#category").val('');
        $("#mobile_num").val('');
        $("#address").val(''); 
        $("#existing").hide(); 
    })
    $(".existing").click(function(){
        $("#new").hide();
        $("#name1").val('');
        $("#category1").val('');
        $("#mobile_num1").val('');
        $("#remarks1").val('');
        $("#address1").val(''); 
        $("#existing").show(); 
    })
    $("#select_name").change(function(event){
        event.preventDefault();
        var id=$(this).val();
        $("#idie").val($(this).val());
        $.ajax({
            url:"ajax2.php",
            type:"post",
            data:{"id":id},
            success: function(result){
                var obj = JSON. parse(result);
                $('#id').val(obj.id)
                $('#name_sub').val(obj.q_name)
                $('#mobile_num').val(obj.q_mob)
                $('#address').val(obj.q_address)
            }
        })
    })
    $("#select_name").change(function(event){
        event.preventDefault();
        var id=$(this).val();
        $.ajax({
            url:"ajax3.php",
            type:"post",
            data:{"id":id},
            success: function(result){
                var obj = JSON. parse(result);
                $("#q_name").val(obj.q_name)
            }
        })
    })
})

</script>

<script src="assets/js/bundle.js"></script>
<script src="assets/js/scripts.js"></script>            
<link rel="stylesheet" href="assets/css/libs/editors/quill20d4.css?v1.1.2"></link>
<script src="assets/js/libs/editors/quill.js"></script>
<script src="assets/js/editors/quill.js"></script>
<script>
    $(document).ready(function(){
        $("#select_name").change(function(){
                $("#q_name").val($("#opt").text());
            })
        $("#submit").click(function(){
            var a=($("#disp").text());
            $("#remark").val(a);
        })
        $("#submit1").click(function(){
            var c=($("#disp1").text());
            $("#remarks1").val(c);
        })
    })
</script>
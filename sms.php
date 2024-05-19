<?php include 'sidebar.php';?>
<?php
if(isset($_POST['submit'])){
    $ins=mysqli_query($conn,"INSERT INTO sms (options,db_input,message) VALUES ('".$_POST['options']."','".$_POST['db_input']."','".$_POST['message']."')");
    $id=mysqli_insert_id($conn);


    if($_POST['n_template']!=""){
        if($_POST['template_check']!=""){
            $upd=mysqli_query($conn,"UPDATE sms set template='".$_POST['n_template']."' where id='".$id."'");
            $select=mysqli_query($conn,"SELECT * FROM templates where template='".$_POST['n_template']."'");
            if(mysqli_num_rows($select)==0){
                $ins1=mysqli_query($conn,"INSERT INTO templates (template,message)VALUES ('".$_POST['n_template']."','".$_POST['message']."')");
            }
        }
        else{
            $upd=mysqli_query($conn,"UPDATE sms set template='".$_POST['n_template']."' where id='".$id."'");
        }
    }
    else if($_POST['e_template']!=""){
        $upd=mysqli_query($conn,"UPDATE sms set template='".$_POST['e_template']."' where id='".$id."'");
    }
    if($ins){
        ?>
        <script>
            alert("Inserted");
            location.href='smsdata.php';
        </script>
        <?php
    }
}
?>
<style>
    spam{
        background:lightgrey;
        width:70px;
        color:black;
        border-radius:30px;
        margin-right:3px;
        padding:3px 15px 3px 14px;
    }
    #ta{
        padding:5px 10px 10px 10px;
        background:white;
        border:1px solid silver;
        border-radius:5px;
        margin-top:-10px;
        height:225px;
        width:450px;
        overflow-Y:scroll;
    }
    .nn{
        padding:5px 10px 10px 10px;
        background:white;
        border:1px solid silver;
        border-radius:5px;
        margin-top:-10px;
        height:225px;
        width:420px;

        overflow-Y:scroll;
    }
    em{
        margin-top:10px;
    }
</style>
<body class="nk-body" data-sidebar-collapse="lg" data-navbar-collapse="lg"style="margin-top:40px">
<script src="assets/js/bundle.js"></script>
<script src="assets/js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<div class="nk-content">
<div class="container">
<div class="nk-content-inner">
<div class="nk-content-body">
<div class="nk-block-head">
<div class="nk-block-head-between flex-wrap gap g-2">
<div class="nk-block-head-content"><h2 class="nk-block-title">SMS</h1>
<nav>
    <ol class="breadcrumb breadcrumb-arrow mb-0">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">SMS</a></li>
    </ol>
</nav>
</div>
<div class="nk-block-head-content">
    <ul class="d-flex">
        <li>&nbsp;&nbsp;<button onclick="history.go(-1)" class="btn btn-danger">Back</button></li>
    </ul>
</div></div></div>
<div class="nk-block">
<?php
$pc=mysqli_query($conn,"SELECT max(id)+1 from inventory");
$pcq = mysqli_fetch_array($pc);
$bill_number = $pcq[0];
if(isset($_POST['submit'])){
    
}
?>
<form action="#" onsubmit="return Myfun()" method="post" enctype="multipart/form-data">
<div class="row g-gs">
<div class="col-xxl-9">
<div class="gap gy-4">
<div class="gap-col">
<div class="card card-gutter-md">
<div class="card-body">
<div class="row g-gs">
<div class="col-lg-6">
<div class="form-group"><label for="tax-class" class="form-label">Category</label>
<div class="form-control-wrap">
    <select class="form-select mt-1" id="option" name="options" data-search="true" data-sort="false">
        <option selected hidden>Select an option</option>
        <option value="To All Customers">To All Customers</option>
        <option value="Select Customers">Select Customers</option>
    </select>
</div></div></div>


<div class="col-lg-6 jjjk">
<div class="form-group">
<div class="form-group"><label class="form-label d-flex justify-content-between">New Template<button id="temp_btn" class="btn btn-sm btn-warning col-4">Existing Template</button></label>
<div class="form-control-wrap">
    <input type="text" class="form-control" name="n_template" id="n_template"  autocomplete="off"  placeholder="Enter Template">
</div></div>
<div class="form-control-wrap">
    <input type="checkbox" class="form-check-input mt-3" id="add_template" name="template_check"><label class="mt-2 form-check-label">Save Template</label>
</div></div></div>


<div class="col-lg-6 jjjk1">
<div class="form-group">
<div class="form-group"><label class="form-label d-flex justify-content-between">Existing Template<button id="temp_btn1" class="btn btn-sm btn-warning col-6">New Template</button></label>
<div class="form-control-wrap">
    <select name="e_template" id="e_template" class="form-select">
        <option value="0" hidden>Choose Template</option>
        <?php
        $sele=mysqli_query($conn,"SELECT * FROM templates");
        if(mysqli_num_rows($sele)>0){
            while($sss=mysqli_fetch_assoc($sele)){
                ?>
                <option value="<?=$sss['template'];?>"><?=$sss['template'];?></option>
                <?php
            }
        }
        ?>
    </select>
</div></div></div></div>



<div class="col-lg-12">
    <div class="form-group">
    <label class="form-label">Message</label>
        <div class="form-control-wrap">
             <textarea class="form-control" placeholder="Enter Message" id="message" name="message"></textarea>   
        </div>
    </div>
</div>
<div class="col-lg-4">
<!-- <div class="form-group"> -->
    <!-- <label class="form-label">Mode Of Delivery</label> -->
<!-- <div class="form-control-wrap">
   <input type="checkbox" class="form-check-input" value="SMS" name="mode" id="sms" checked><label class="form-check-label" for="">SMS</label>
   <input type="checkbox" class="form-check-input" style="margin-left:30px"><label class="form-check-label" for=""  value="Email" name="mode">Email</label>
</div> -->
<!-- </div> -->
</div>



<div class="col-lg-3">
<div class="form-group">
<div class="form-control-wrap">
<div class="col-lg-2">
    
</div>
</div>
</div>
</div>
<div class="col-lg-3">
<div class="form-group">
<div class="form-control-wrap">
<div class="col-lg-2">
    
</div>
</div>
</div>
</div>
<div class="col-lg-6 cl">
<label class="form-label mb-3">Select Customers</label>
<div class="form-group">
<div class="form-control-wrap">
<div class="col-lg-6">
<div class="col-lg-8 ">
<div class="form-control-wrap nn">
<?php
$count=0;
    $select=mysqli_query($conn,"SELECT * FROM billing");
        if(mysqli_num_rows($select)>0){
            ?>
            <?php
            while($fetch=mysqli_fetch_assoc($select)){
                $count=$count+1;
            ?>
            <div class="col-12 mb-2" style="margin-left:0px">
            <span class="form-control bg-white text-dark"><input type="checkbox"  value="<?=$fetch['name'];?>" name="customer" id="customer<?=$count;?>" mob="<?=$fetch['mobile_num'];?>" class="cus"><span id="c_name">&nbsp;&nbsp;<?=$fetch['name'];?></span></span></div>
            <?php
                }
            }
            ?>
            </div>
    </div>
</div>
</div>
</div>
</div>

<div class="col-lg-4">
<label class="form-label mb-3">Selected Customers</label>
<div class="form-group">
<div class="form-control-wrap">
<div class="col-lg-8 " id="ta">
    
</div>

</div>



</div></div>
</div>
</div></div></div>
<input type="text" id="count" value="<?=$count;?>" hidden>
<input type="text" id="db_input" name="db_input" hidden>
<div class="d-none" id="ta_dummy"></div>
<div class="col-lg-12">
<div class="form-group">
<div class="form-control-wrap"><input type="submit" name="submit" class="btn btn-primary" style="margin-bottom:20px;margin-top:20px;" value="Save Changes"></div></form>
</div></div></div>

</body>
</html>

<script>
    $(document).ready(function(){
        $(".jjjk").hide();
        $(".jjjk1").show();
        $('#message').attr('readonly', true);
        $("#temp_btn").click(function(e){
            e.preventDefault()
            if($(this).hasClass("clicked")){
                $(".jjjk").show();
                $(".jjjk1").hide();
                $("#e_template").html("");
                $('#message').attr('readonly', false);
                $("#message").val("");
            }
            else {
                $(".jjjk").hide();
                $(".jjjk1").show();
                $("#n_template").val("");
                $("#e_template").html('<option value="0" hidden>Choose Template</option><<?php $sele=mysqli_query($conn,"SELECT * FROM templates");if(mysqli_num_rows($sele)>0){while($sss=mysqli_fetch_assoc($sele)){?><option value="<?=$sss['template'];?>"><?=$sss['template'];?></option><?php } } ?>');
                $('#message').attr('readonly', true);
            }
        })
        $("#temp_btn1").click(function(e){
            e.preventDefault()
            if($(this).hasClass("clicked")){
                $(".jjjk1").show();
                $(".jjjk").hide();
                $("#n_template").val("");
                $('#message').attr('readonly', true);
            }
            else {
                $(".jjjk1").hide();
                $(".jjjk").show();
                $("#e_template").html("");
                $('#message').attr('readonly', false);
                $("#message").val("");
            }
        })
        $("#ta_dummy").hide();
        $(".cl").hide();
        $("#option").change(function(){
            if($(this).val()=="To All Customers"){
                $(".cl").hide();
                $("#ta").html('');
                $(".cus").prop('checked', false);
                var len=$("#count").val();
                $("#ta").prepend("<?php $select=mysqli_query($conn,'SELECT * FROM billing');if(mysqli_num_rows($select)>0){while($fetch=mysqli_fetch_assoc($select)){?><spam><b style='display:none'>--</b><?=$fetch['mobile_num']?></spam><br><?php }}?>");
                var a=$("#ta").text();
                $("#db_input").val(a);
            }
            else{
                $(".cl").show();
                $("spam").remove();
                var a=$("#ta").text();
                $("#db_input").val(a);
            }
        })
        var len=$("#count").val();
        for(let i=1;i<=len;i++){
            $("#customer"+i).click(function(){
                if(this.checked){
                    var name=$(this).val();
                    var mob=$(this).attr('mob');
                    $("#ta").prepend("<spam class='common_spam' data_name='"+name+"' id='spam"+i+"'>"+name+"&nbsp;&nbsp;<em class='icon ni ni-cross-circle pt-1 em"+i+"' style='font-size:19px'></em></spam><br>");
                    var a=$("#ta_dummy").prepend("<span id='spam1"+i+"'>"+mob+"--</span>");
                    var a=$("#ta_dummy").text();
                    $("#db_input").val(a);
                    $(".em"+i).click(function(){
                        $("#spam"+i).remove();
                        $("#spam1"+i).remove();
                        var a=$("#ta_dummy").text();
                        $("#db_input").val(a);
                        $("#customer"+i).prop('checked', false);
                    })
                }
                else if(!(this.checked)){
                   var a=$(this).val();
                   $("#spam"+i).remove();
                   $("#spam1"+i).remove();
                   var a1=$("#ta_dummy").text();
                   $("#db_input").val(a1);
                }
            })
        }
    })
</script>
<script>
            $(document).ready(function(){
                $('#e_template').change(function(){
                    var temp=$(this).val();
                    $.ajax({
                        type: 'POST',
                        url: 'ajaxTemplate1.php',
                        data:{"id":temp},
                        success: function(data) {
                            var obj=JSON. parse(data);
                            $("#message").val(obj.message);
                        }
                    })
                });

            });
</script>


<script>
    function Myfun(){
        if($("#message").val()==''){
            alert("Please Type Any Message To Proceed");
            return false;
        }
    }
</script>



<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
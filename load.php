<?php include 'sidebar.php';?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="shortcut icon" href="images/title.png">
    
    <title>K7 Groups</title>
    <link href="css/style1.css?v=1" rel="stylesheet" />
    <!-- Modernizr --> 
    <script src="js/external/modernizr.custom1.js"></script>
</head>
<body class="nk-body" data-sidebar-collapse="lg" data-navbar-collapse="lg" style="margin-top:60px">
<div class="nk-content">
    <div class="container">
    <div class="nk-content-inner">
    <div class="nk-content-body">
    <div class="nk-block-head">
    <div class="nk-block-head-between flex-wrap gap g-2">
    <div class="nk-block-head-content">
        <h2 class="nk-block-title" style="margin-top:-30px;font-weight:600;font-size:30px">Load</h2></div>
        <div class="countie">
                    <li><em id="tomato">....</em>&nbsp;&nbsp;25%-<span id="red_count">0</span>
                    <li><em id="skyblue">....</em>&nbsp;&nbsp;50%-<span id="blue_count">0</span>
                    <li><em id="orange">....</em>&nbsp;&nbsp;75%-<span id="orange_count">0</span>
                    <li><em id="grey">....</em>&nbsp;&nbsp;Full-<span id="unavailable">0</span>
                    <li><em id="yellow">....</em>&nbsp;&nbsp;Empty-<span id="total_count">325</span>
                </div>
<div class="nk-block-head-content"></div></div></div></div></div></div></div>
    <div>
    <div>
        
    </div>

<div class="choose-sits">    
               
                <div class="imain">
                    <div class="col-sm-12 col-lg-10 col-lg-offset-1">
                <div class="sits-area hidden-xs">
                    <!-- <div class="sits-anchor">screen</div> -->

                    <div class="sits">
                        <aside class="sits__line">
                            <table>
                            <tr><td><span class="sits__indecator">R1</span></td></tr>
                            <tr><td><span class="sits__indecator">R2</span></td></tr>
                            <tr><td><span class="sits__indecator">R3</span></td></tr>
                            <tr><td><span class="sits__indecator">R4</span></td></tr>
                            <tr><td><span class="sits__indecator">R5</span></td></tr>
                            <tr><td><span class="sits__indecator">R6</span></td></tr>
                            <tr><td><span class="sits__indecator">R7</span></td></tr>
                            <tr><td><span class="sits__indecator">R8</span></td></tr>
                            <tr><td><span class="sits__indecator">R9</span></td></tr>
                            <tr><td><span class="sits__indecator">R10</span></td></tr>
                            <tr><td><span class="sits__indecator">R11</span></td></tr>
                            <tr><td><span class="sits__indecator">R12</span></td></tr>
                            <tr><td><span class="sits__indecator">R13</span></td></tr>
                            <tr><td><span class="sits__indecator">R14</span></td></tr>
                            <tr><td><span class="sits__indecator">R15</span></td></tr>
                            <tr><td><span class="sits__indecator">R16</span></td></tr>
                            <tr><td><span class="sits__indecator">R17</span></td></tr>
                            <tr><td><span class="sits__indecator">R18</span></td></tr>
                            <tr><td><span class="sits__indecator">R19</span></td></tr>
                            <tr><td><span class="sits__indecator">R20</span></td></tr>
                            <tr><td><span class="sits__indecator">R21</span></td></tr>
                            <tr><td><span class="sits__indecator">R22</span></td></tr>
                            <tr><td><span class="sits__indecator">R23</span></td></tr>
                            <tr><td><span class="sits__indecator">R24</span></td></tr>
                            <tr><td><span class="sits__indecator">R25</span></td></tr>
                            </table>
                        </aside>
                        <div class="sits__row" id="divie">
<?php    

function getColor($conn, $cube_name) {
    $qu=mysqli_query($conn,"SELECT color,water_level FROM cube where cube_name = '$cube_name'");
    if(mysqli_num_rows($qu) == 0) {
         return "sits-price--cheap";
    } else {
        $ffe=mysqli_fetch_array($qu);
        return $ffe['color'];
    }    
}
function color($conn,$cube_name){
    $see=mysqli_query($conn,"SELECT * FROM cube where cube_name='$cube_name'");
    $fc=mysqli_fetch_assoc($see);
    if($fc['load1']==0 && $fc['sales']==0){
        return "sits-price--cheap";
    }
    else if($fc['load1']==75){
        return "orange";
    }
    else if($fc['sales']==100 && $fc['load1']==100){
        return "sits-state--not";
    }
    else if($fc['load1']==50){
        return "blue";
    }
    else if($fc['load1']==25){
        return "red";
    }
    else if($fc['load1']==100){
        return "sits-state--not";
    }
}
?>
<div class="mainsits">
    <table>
<center> 
<?php
for($r=1;$r<=25;$r++){
?>
<tr>
<?php
    for($c=1;$c<=13;$c++){
        $cube_name="R".$r."C".$c;
        $sel=mysqli_query($conn,"SELECT * from cube where cube_name='$cube_name'");
        $fe=mysqli_fetch_assoc($sel);
?>
    <td><span class="sits__place <?=color($conn,$cube_name);?>" data-place='<?=$fe['cube_name'];?>' data-price='10'data-toggle="modal" data-target="#exampleModal" id="<?=$fe['cube_name'];?>"><?=$fe['cube_name'];?></span></td>
<?php
    }
?>
    </tr>
<?php
}     
?>
</table>
</center>
</div>       
</div>       
</div>       
</div>       
</div>       
</div>       
                        
                        
                    <div class="sits1">
                        <footer class="sits__number">
                        <table>
                            <tr>
                            <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                <span style="margin-left:144px"></span></td>
                                <td colspan="13">    
                        <span class="sits__indecator" style="margin-left:1px">C1</span>
                            <span class="sits__indecator" style="margin-left:5px">C2</span>
                            <span class="sits__indecator" style="margin-left:5px">C3</span>
                            <span class="sits__indecator" style="margin-left:5px">C4</span>
                            <span class="sits__indecator" style="margin-left:5px">C5</span>
                            <span class="sits__indecator" style="margin-left:5px">C6</span>
                            <span class="sits__indecator" style="margin-left:5px">C7</span>
                            <span class="sits__indecator" style="margin-left:5px">C8</span>
                            <span class="sits__indecator" style="margin-left:5px">C9</span>
                            <span class="sits__indecator" style="margin-left:5px">C10</span>
                            <span class="sits__indecator" style="margin-left:5px">C11</span>
                            <span class="sits__indecator" style="margin-left:5px">C12</span>
                            <span class="sits__indecator" style="margin-left:5px">C13</span>
                            </td>
                        </tr>
                        </table>
                            <!-- <span class="sits__indecator">14</span>
                            <span class="sits__indecator">15</span>
                            <span class="sits__indecator">16</span>
                            <span class="sits__indecator">17</span>
                            <span class="sits__indecator">18</span> -->
                        </footer>

        </div>  
        <form method="post"style="margin-top:-43%;">
                    
        
<div class="modal fade justify-content-center" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<input type="hidden" id="sel_btn_id"/>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body" style="background-color:floralwhite;border:5px solid black;padding: 30px;margin:20px;border-radius:10px;">
        <center>
            <div class="row">
                <div class="col-5">
                <div class="">
                    <input type="" style="cursor:pointer" value="25"  class="btn btn-danger btn-lg col-6" id="twentyfive" name="twentyfive" data-dismiss="modal">
                </div>
                <div class=" mt-3">
                    <input type=""  style="cursor:pointer" value="50"  class="btn btn-info btn-lg col-6"  id="fifty" name="fifty" data-dismiss="modal">
                </div>
                <div class=" mt-3">
                    <input type=""  style="cursor:pointer" value="75"  class="btn btn-warning btn-lg col-6"  id="seventyfive" name="seventyfive" data-dismiss="modal">
                </div>
                <div class=" mt-3">
                    <input type=""  style="cursor:pointer" value="100"  class="btn btn-success btn-lg col-6" id="hundred" name="hundred" data-dismiss="modal">
                </div>
                </div>
                <div class="col-7">
                    <div class="mt-2">
                        <br>
                        <br>
                        <input type=""  style="cursor:pointer;height:120px;" value="Salt-100%"  class="btn btn-secondary btn-lg col-7" id="shundred" name="hundred" data-dismiss="modal">
                    </div>
                </div>
            </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  <div class="row">
  <div class="col-3"></div>
  <div class="col-3"></div>
  <div class="col-3"></div>
  <div class="col-3">
  <input type="submit" class="btn btn-primary bload" value="Load" name="submit2" id="submit2" onclick="myFun()">
</div>
</div>
  </form>
  </body>
</html>
<script>
    
    $(document).ready(function(){
        $("#saltb").val(0);
        $('#total_count').text($('.sits-price--cheap').length);
            $('#unavailable').text($('.sits-state--not').length);
            $('#red_count').text($('.red').length);
            $('#blue_count').text($('.blue').length);
            $('#green_count').text($('.green').length);
            $('#orange_count').text($('.orange').length);
        $("#twentyfive").click(function(){
            $(this).click(function(){
            $(this).addClass('clicked');
                $("#fifty").hide();
                $("#seventyfive").hide();
                $("#hundred").hide();
                $("#shundred").hide();
            });
            var sel_btn_id = $('#sel_btn_id').val();           
            $('#'+sel_btn_id).removeClass('sits-price--cheap');
            $('#'+sel_btn_id).addClass('red');
            $('#'+sel_btn_id).text("25%");
            var twe=(sel_btn_id +'-'+ 25 + '%');
            var a=$("#sel_btn_id").val();
            $.ajax({
                url:"ajaxload.php",
                type:"post",
                data:{"data":a,"load":25,"sale":25},
                success:function(res){
                    
                }
            })
            
            $('#store').val($('#store').val()+twe);  
            $('#exampleModal').modal("hide");
            $('#red_count').text($('.red').length);
            $('#total_count').text($('.sits__place').length);
        });
           
        $("#fifty").click(function(){
            $(this).addClass('clicked');
            $(this).click(function(){
                $("#seventyfive").hide();
                $("#hundred").hide();
                $("#shundred").hide();
            });
            var sel_btn_id = $('#sel_btn_id').val();
            $('#'+sel_btn_id).removeClass('sits-price--cheap');
            $('#'+sel_btn_id).addClass('blue');
            $('#'+sel_btn_id).text("50%");
            var fif=(sel_btn_id +'-'+ 50 + '%');
            $('#store').val($('#store').val()+fif);           
            $('#exampleModal').modal("hide");
            $('#blue_count').text($('.blue').length);
            $('#total_count').text($('.sits-price--cheap').length);
            var a=$("#sel_btn_id").val();
            $.ajax({
                url:"ajaxload.php",
                type:"post",
                data:{"data":a,"load":50,"sale":50},
                success:function(res){
                    
                }

            })
        })
        $("#seventyfive").click(function(){
            $(this).addClass('clicked');
            $(this).click(function(){
                $("#hundred").hide();
                $("#shundred").hide();
            });
            var sel_btn_id = $('#sel_btn_id').val();
            $('#'+sel_btn_id).removeClass('sits-price--cheap');
            $('#'+sel_btn_id).addClass('orange');
            $('#'+sel_btn_id).text("75%");
            var sev=(sel_btn_id +'-'+ 75 + '%');
            $('#store').val($('#store').val()+sev);               
            $('#exampleModal').modal("hide");
            $('#orange_count').text($('.orange').length);
            $('#total_count').text($('.sits-price--cheap').length);
            var a=$("#sel_btn_id").val();
            $.ajax({
                url:"ajaxload.php",
                type:"post",
                data:{"data":a,"load":75,"sale":75},
                success:function(res){
                    
                }
            })
        })
        $("#hundred").click(function(){
            $(this).addClass('clicked');
            var sel_btn_id = $('#sel_btn_id').val();
            $('#'+sel_btn_id).removeClass('sits-price--cheap');
            $('#'+sel_btn_id).addClass('green');
            $('#'+sel_btn_id).text("100%");
            var hun=(sel_btn_id +'-'+ 100 + '%');
            $('#store').val($('#store').val()+hun);             
            $('#exampleModal').modal("hide");
            $('#green_count').text($('.green').length);
            $('#total_count').text($('.sits-price--cheap').length);
            var a=$("#sel_btn_id").val();
            $.ajax({
                url:"ajaxload.php",
                type:"post",
                data:{"data":a,"load":100,"sale":100},
                success:function(res){
                    
                }
            })
        })
        $("#shundred").click(function(){
            $(this).addClass('clicked');
            var sel_btn_id = $('#sel_btn_id').val();
            $('#'+sel_btn_id).removeClass('sits-price--cheap');
            $('#'+sel_btn_id).addClass('green');
            $('#'+sel_btn_id).text("100%");
            var hun=(sel_btn_id +'-'+ 100 + '%');
            $('#store').val($('#store').val()+hun);             
            $('#exampleModal').modal("hide");
            $('#green_count').text($('.green').length);
            $('#total_count').text($('.sits-price--cheap').length);
            var a=$("#sel_btn_id").val();
            var b=1;
            $.ajax({
                url:"ajaxload.php",
                type:"post",
                data:{"data":a,"salt":b,"load":100,"sale":100},
                success:function(res){
                    
                }
            })
        })
        $('.sits__place').click(function() {
            $('#sel_btn_id').val($(this).attr('id'));
            if(!$(this).hasClass('sits__place')) 
            {
                $(this).addClass('sits__place');
                $(this).removeClass('red');
                $(this).removeClass('blue');
                $(this).removeClass('green');
                $(this).removeClass('orange');
                $(this).attr('span');                           
            } 
            else {                
                $(this).attr('data-target', '#exampleModal');
                $(this).attr('data-toggle', 'modal');
                $("#twentyfive").show();
                $("#fifty").show();
                $("#seventyfive").show();
                $("#hundred").show();
            }
            $('#total_count').text($('.sits-price--cheap').length);
            $('#unavailable').text($('.sits-state--not').length);
            $('#red_count').text($('.red').length);
            $('#blue_count').text($('.blue').length);
            $('#green_count').text($('.green').length);
            $('#orange_count').text($('.orange').length);
            $('#'+$(this).attr('id')).text($(this).attr('id'));        
        })
        $(".bload").click(function(){
            var ic=$(".clicked").length;
            if(ic==0){
                alert("Please Load Any Cube")
                return false;
            }
            else{
                alert("Cubes Loaded Successfully")
                return true;
                location.href="load.php";
            }
        })
        $(".sits__place").click(function(){
            if($(this).hasClass('orange')){
                $("#twentyfive").hide();
                $("#fifty").hide();
                $("#seventyfive").hide();
                $(this).removeClass('red');
                $(this).removeClass('blue');
                $(this).removeClass('green');
                $(this).removeClass('orange');
            }
            else if($(this).hasClass('blue')){
                $("#twentyfive").hide();
                $("#fifty").hide();
                $(this).removeClass('red');
                $(this).removeClass('blue');
                $(this).removeClass('green');
                $(this).removeClass('orange');
            }
            else if($(this).hasClass('red')){
                $("#twentyfive").hide();
                $(this).removeClass('red');
                $(this).removeClass('blue');
                $(this).removeClass('green');
                $(this).removeClass('orange');
            }
            else if($(this).hasClass('sits-state--not')){
                $(this).attr('data-target','');
                $(this).attr('data-toggle', '');
            } 
        }) 
        // $(".red").click(function(){
        //             $("#fifty").hide();
        //             $("#seventyfive").hide();
        //             $("#hundred").hide();
        // });
        // $(".blue").click(function(){
        //             $("#seventyfive").hide();
        //             $("#hundred").hide();
        // });
        // $(".orange").click(function(){
        //             $("#hundred").hide();
        // }); 
    })
</script>

<style>
    .red {
        text-indent: 1px !important;
        color: black !important;
        background-color:tomato!important;
    }
    .red:hover {
        color: black !important;
        background-color:tomato!important;
    }
    .blue {
        text-indent: 1px !important;
        color: black !important;
        background-color: powderblue!important;
    }
    .blue:hover {
        background-color: powderblue!important;
    }
    .green {
        text-indent: 1px !important;
        color: black !important;
        background-color: lightgreen!important;
    }
    .green:hover {
        background-color: lightgreen!important;
    }
    .orange {
        text-indent: 1px !important;
        color: black !important;
        background-color: orange!important;
    }
    .orange:hover {
        background-color: orange !important;
        opacity:1;
    }
    
</style>

<?php
    if(isset($_POST['submit2'])){
        $upd=mysqli_query($conn,"UPDATE ");
    }
?>


<script src="assets/js/bundle.js"></script>
<script src="assets/js/scripts.js"></script>
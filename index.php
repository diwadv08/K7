<?php
    include 'db/connection.php';
?>
<?php
    session_start();
?>
<?php
if(isset($_POST['login'])){
$sel1=mysqli_query($conn,"SELECT * from users where user_name='".$_POST['uname']."' and password='".$_POST['pwd']."' and block=1");
if(mysqli_num_rows($sel1)>0){
    header("Location: block.php");
}

$sel=mysqli_query($conn,"SELECT * from users where user_name='".$_POST['uname']."' and password='".$_POST['pwd']."' and block=0");
    if(mysqli_num_rows($sel)>0){
        $fe=mysqli_fetch_assoc($sel);
        $_SESSION['user_id']=$fe['id'];
        $upd=mysqli_query($conn,"UPDATE users set time='".$_POST['time']."',date='".$_POST['date']."',ipaddress='".$_POST['ipaddress']."' where id='".$fe['id']."'");
?>
        <script>location.href="index1.php"</script>
<?php    
    }
    else if($_POST['uname']=="" && $_POST['pwd']==""){
            echo "<script>alert('Please Fill The inputs')
            location.href='index.php'</script>";

    }
    else{
            echo "<script>alert('Login Invalid')
            location.href='index.php'</script>";
    }
    
}

?>


<!DOCTYPE html>
<html lang="en">
<head><meta charset="utf-8">
<meta name="author" content="Softnio">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<title>K7 Login</title>
<link rel="shortcut icon" href="images/title.png">
<link rel="stylesheet" href="assets/css/style20d4.css">
<style>
        body{
            overflow-X:hidden;
            background-image:url("images/c.png");
            background-attachment: fixed;
            background-position:cover;
            background-size:100%;
            background-repeat:repeat;
        }
        
        .immm{
            padding:0px 30px 30px 50px;
            /* border-radius:38px 0px 0px 38px; */
            margin-top:20px;
            margin-bottom:30px;
            height:560px;
            width:590px;
            overflow-y:scroll;
        }
        #oname{
            color:green;
            font-size:20px;
            font-weight: 500;
        }
        #ofounder{
            color:blue;
            font-size:17px;
            margin-top:-10px;
            line-height:0px;
            font-weight: 600;
        }
        .ieee{
            /* max-width: 850px!important; */
            padding-right:-50px;
            margin-left:22px;
        }
        .nnnn{
            border-radius:10px;
            box-shadow:-1px -1px 15px grey;
            /* max-width: 900px!important; */
            margin: -23px !important;;
        }
        .ggggii{
            margin-top:10px;
        }
        .ggggi{

        }
        #parag{
            margin-bottom:-30px;
        }
        .ggggT2{
        }
        .ggggT1{
            padding-right:10px;

        }
        .ggggT2{
        }
        .alllh4{
            margin-bottom:10px;
            margin-top:20px;
            color:green;
            font-size:22px;
        }
        .mmmmi{
            border:none;
        }
        #idsss{
            margin-bottom:30px;
        }
        .k7logo{
            margin-top:-20px;
            height:150px;
        }
        @media screen and (max-width:500px){
            .mmmmi{
                margin-left:-35px;
            }
            #founder_img{
                margin-top:30px;
            }
        }
        @media screen and (max-width:410px) {
            .ieee{
                max-width: 280px!important;
            }
            .nnnn{
                margin-top:-200px;
            }
            .immm{
                padding:0px 30px 30px 50px;
                border-radius:38px 0px 0px 38px;
                margin-top:240px;
                margin-bottom:30px;
                height: 250px !important;;
                width:460px;
                overflow-y:scroll;
            }
            .mmmmi{
                border:none;
                border-radius:60px;
            }
            .k7logo{
                margin-top:-60px;
                height:120px;
            }
            .lta{
                font-size:18px !important;
                margin-bottom:-10px !important;
            
            }   
        }
        @media screen and (max-width:310px) {
            .ieee{
                max-width: 260px!important;
            }
            .nnnn{
                margin-top:-200px;
            }
            .immm{
                padding:0px 30px 30px 50px;
                border-radius:38px 0px 0px 38px;
                margin-top:220px;
                margin-bottom:30px;
                height: 250px !important;;
                width:460px;
                overflow-y:scroll;
            }
            .mmmmi{
                border:none;
                border-radius:60px;
            }
            .k7logo{
                margin-top:-60px;
                height:120px;
            }
            .lta{
                font-size:18px !important;
                margin-bottom:-10px !important;
            
            } 
        }
        @media screen and (max-width:210px) {
            .ieee{
                max-width: 300px!important;
            }
            .k7logo{
                margin-top:-20px;
                height:120px;
            }
            .nnnn{
                margin-top:-200px;
            }
            .immm{
                padding:0px 30px 30px 50px;
                border-radius:38px 0px 0px 38px;
                margin-top:240px;
                margin-bottom:30px;
                height: 250px !important;;
                width:460px;
                overflow-y:scroll;
            }
            .mmmmi{
                border:none;
                border-radius:60px;
            }
            .k7logo{
                margin-top:-40px;
                height:120px;
            }
            .lta{
                font-size:18px !important;
                margin-bottom:-10px !important;
            
            }
        }
   
</style>
</head>



<body class="nk-body" data-sidebar-collapse="lg" data-navbar-collapse="lg" >
    <div class="nk-app-root">
    <div class="nk-main">
    <div class="nk-wrap align-items-center justify-content-center">
<div class="container p-sm-4">
    <div class="row flex-lg bg-white nnnn">
        <div class="col-lg-6 immm">
        <div class="ggggii">
            <div class="ggggh">
            <center><img src="images/founder.jpg" id="founder_img" height="170px" width="140px" style="border:5px solid black">
            <p id="oname">G.D Kesevan</p>
            <p id="ofounder">(Founder)</p></center><br>
            </div>
            <p id="parag">Founded in 2012, The K7 ice factory is Thanjavur based leading ice manufacturer and the No.1 ice brand, with bestselling product like Block Ice. 
            Almost 11 years later, The K7 Ice factory still operates with the same entrepreneurial spirit and passion for ice since it began. Now led by the second generation of the K7 family, keeping our customers cool is still at the forefront of everything we do, which is celebrated in the range of ice product we offer.</p>
        </div><br>
        <div class="ggggi">
            <div class="ggggT1">
            <h4 class="alllh4">THE BEGINNING</h4>
            <p>It all started a generations ago with G.D. Kesavan, an entrepreneurial young blood and ice merchant in Hull. Local market needed to keep their catch cold, however ice wasn’t so readily easy available in those days so he initiate to cover the demand.</p>
            </div>
        <div class="ggggT2">
            <h4 class="alllh4">EXPANDING THE FLEET</h4>
            <p>Spotting an opportunity in the market, son of Dhanabal – Kesavan, founded The K7 Ice factory and the first ice factory was built to produce crushed ice for the local market.
            Now on the process towards development of the company, cold storage for ice blocks, tube ice, bottled drinking water, beverage and dry ice manufacturing in near future.</p>
        </div>
    </div>
</div>

    <div class="col-lg-5 col-sm-10 col-xs-10   ieee">
    <div class="card card-gutter-lg hidden-xs card-auth mmmmi">
    <div class="card-body">
    <div class="brand-logo mb-3">   
    <center><div class="logo-wrap">
        <img  class="img-responsive k7logo" src="images/login.png"></div>
    </div></center>
<div class="nk-block-head">
    <div class="nk-block-head-content"><h3 class="nk-block-title mb-1 lta">Login to Account</h3><br>
<form method="post">    
    <div class="row gy-3">
    <div class="col-lg-12">
        <input type="hidden" value="" id="time" name="time"/>
        <input type="hidden" value="" id="date" name="date"/>
        <input type="hidden" value="<?=$_SERVER['REMOTE_ADDR'];?>" name="ipaddress"/>
    <div class="form-group"><label for="username" class="form-label un">Username</label>
<div class="form-control-wrap"><input type="text" class="form-control" name="uname" id="username" placeholder="Enter username"></div></div></div>
<div class="col-lg-12">
    <div class="form-group"><label for="password" class="form-label">Password</label>
<div class="form-control-wrap"><input type="password" class="form-control" name="pwd" id="password" placeholder="Enter password"></div></div></div>
<!-- <div class="col-12">
    <div class="d-flex flex-wrap"> -->
    <!-- <div class="form-check form-check-sm"><input class="form-check-input" type="checkbox" value="" id="rememberMe"><label class="form-check-label" for="rememberMe"> Remember Me </label></div>
    <a href="auth-reset-fancy.html" class="small">Forgot Password?</a></div></div> -->
    <br>

<div class="col-12 mt-3">
<div class="d-grid">
        <input type="submit" class="btn btn-primary mt-2" id="idsss" name="login" value="Login to account" />
    </div>
</div>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</body>
</html>
<script>
    $(document).ready(function(){
        var c=new Date().getMonth();
        var d=c+1;

        $("#time").val(new Date().getHours()+":"+new Date().getMinutes()+":"+new Date().getSeconds(2));
        $("#date").val(new Date().getDate()+"/"+d+"/"+new Date().getFullYear());
    })
</script> 


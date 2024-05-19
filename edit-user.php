<?php include 'sidebar.php'?>
<!DOCTYPE html><html lang="en">
<head>
<meta charset="utf-8">
<meta name="author" content="Softnio">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>K7 Groups</title>
<link rel="shortcut icon" href="images/title.png">
<link rel="stylesheet" href="assets/css/style20d4.css?v1.1.2"></head>
<script src="assets/js/bundle.js"></script>
<script src="assets/js/scripts.js"></script>
<body class="nk-body" data-sidebar-collapse="lg" data-navbar-collapse="lg" style="margin-top:50px">
<?php 
    $sel=mysqli_query($conn,"SELECT* FROM users WHERE id='".$_GET['id']."' ");
    $sel2=mysqli_query($conn,"SELECT user_name FROM users");
    if(mysqli_num_rows($sel2)>0){
        while($ft=mysqli_fetch_assoc($sel2)){

        }
    }
    if(mysqli_num_rows($sel)>0){
        $fe=mysqli_fetch_assoc($sel);
    }
?>
<div class="nk-app-root">
<div class="nk-main">
<div class="nk-content">
<div class="container">
<div class="nk-content-inner">
<div class="nk-content-body">
<div class="nk-block-head">
<div class="nk-block-head-between flex-wrap gap g-2">
<div class="nk-block-head-content"><h2 class="nk-block-title">Edit User</h2>
<nav><ol class="breadcrumb breadcrumb-arrow mb-0">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit User</li></ol></nav></div>
<div class="nk-block-head-content">
    <ul class="d-flex">
    <li>&nbsp;&nbsp;<button onclick="history.go(-1)" class="btn btn-danger">Back</button></li></ul></div></div></div>
<form action="#" method="post" enctype="multipart/form-data">
<div class="row g-gs">
<div class="col-xxl-9">
<div class="gap gy-4">
<div class="gap-col">
<div class="card card-gutter-md">
<div class="card-body">
<div class="row g-gs">
<div class="col-lg-12">
<div class="form-group"><label for="name" class="form-label">Name</label>
<div class="form-control-wrap">
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name" value="<?=$fe['name'];?>"></div></div></div>
    <div class="col-lg-6">
<div class="form-group"><label for="gender" class="form-label">Gender</label>
<div class="form-control-wrap">
<input type="radio" class="form-radio" id="gender" name="gender" value="Male"<?php if($fe['gender']=="Male"){echo "checked";}?>>&nbsp;Male&nbsp;&nbsp;&nbsp;
<input type="radio" class="form-radio" id="gender" name="gender" value="Female"<?php if($fe['gender']=="Female"){echo "checked";}?>>&nbsp;Female</div></div></div>
<div class="col-lg-6">
<div class="form-group"><label for="age" class="form-label">Age</label>
<div class="form-control-wrap">
<input type="number" class="form-control" id="age" name="age" placeholder="Enter Your age" value=<?=$fe['age'];?>></div></div></div>    
<div class="col-lg-6">
<div class="form-group"><label for="username" class="form-label">Username</label>
<div class="form-control-wrap">
    <input type="text" class="form-control" id="username" name="user_name" placeholder="Set Up Your User  Name" value="<?=$fe['user_name'];?>"></div></div></div>
    <div class="col-lg-6">
<div class="form-group"><label for="password" class="form-label">Password</label>
<div class="form-control-wrap">
    <input type="text" class="form-control" id="password" name="password" placeholder="Set Up Password" value="<?=$fe['password'];?>"></div></div></div>    
    
<div class="card-body">
<div class="form-group"><label class="form-label">Photo</label>
<div class="image-upload-wrap d-flex flex-column align-items-center">
<div class="media media-huge">
    <img id="image-result" class="w-100 h-100" src=<?=$fe['image'];?>></div>
<div class="pt-3">
    <input class="upload-image" name="image" data-target="image-result" id="change-image" type="file" max="1" hidden />
    <label for="change-image" class="btn btn-md btn-primary">Change</label></div></div></div>
</div></div>

    <div class="gap-col">
<div class="card card-gutter-md">
<div class="card-body">
<div class="form-group"><label class="form-label">Resume</label>
<div class="form-control-wrap">
<input  id="resume" name="resume" type="file" max="1" />
<label for="resume" class="btn btn-md btn-primary">Upload Resume</label> 
<div class="form-note mt-3">Set the resume in pdf format.</div> 
</div>
</div>
    </div>
    </div>
    <br>
    <div class="gap-col">
<div class="card card-gutter-md">
<div class="card-body">
<div class="form-group"><label class="form-label">Proof</label>
<div class="form-control-wrap">
<input  id="proof" name="proof" type="file" max="1"/>
<label for="proof" class="btn btn-md btn-primary">Signature Proof</label>
<div class="form-note mt-3">Accepts both files and images</div> 
</div>
</div>
    </div>
    </div>
    <br>

<div class="row g-gs">
<div class="col-lg-6">
<div class="form-group"><label for="mobile_num" class="form-label">Mobile Number</label>
<div class="form-control-wrap">
<input type="tel" class="form-control" pattern="^[0-9]{10}$"  id="mobile_num" name="mobile_num" value=<?=$fe['mobile_num'];?>>

</div></div></div>
<div class="col-lg-6">
<div class="form-group"><label for="city" class="form-label">City</label>
<div class="form-control-wrap">
    <input type="text" class="form-control" id="city" name="city" value=<?=$fe['city'];?>></div></div></div>
<div class="col-lg-6">
<div class="form-group"><label for="email" class="form-label">Email Id</label>
<div class="form-control-wrap">
    <input type="email" class="form-control" id="email" name="email" value=<?=$fe['email'];?>></div></div></div>
<div class="col-lg-6">
<div class="form-group"><label for="pincode" class="form-label">Pincode</label>
<div class="form-control-wrap">
    <input type="text" class="form-control" id="pincode" name="pincode" value=<?=$fe['pincode'];?>></div></div></div>
    <div class="col-lg-12">
<div class="form-group"><label for="address1" class="form-label">Address</label>
<div class="form-control-wrap">
    <textarea class="form-control" id="address1" name="address1"><?=$fe['address1'];?></textarea></div></div></div>
    <div class="col-lg-12">
<div class="form-control-wrap">

<div class="form-group"><label class="form-label">Remarks</label>
<div class="form-control-wrap">
<div class="form-group">
<textarea  class="form-control" name="remarks"><?=$fe['remarks'];?></textarea></div>
</div></div></div>
<div class="col-lg-12">
<div class="form-group">
<input type="submit" name="submit" class="btn btn-primary" style="margin-left:4%;margin-bottom:20px;margin-top:20px;" value="Save Changes"></div></form>
</div></div></div></div></div></div></div>
<div>
</div></div></div>






<?php
    if(isset($_POST['submit']))
    {
        $selll=mysqli_query($conn,"SELECT user_name from users where user_name='".$_POST['user_name']."' and id NOT IN ('".$_GET['id']."')");
        if(mysqli_num_rows($selll)>0){
            ?>
                <script>alert("Username Already Exists")</script>
                <script>location.href="edit-user.php?id='".$_GET['id']."'"</script>
            <?php
            }
    else{
        $upd=mysqli_query($conn,"UPDATE users 
                SET name='".$_POST['name']."',
                gender='".$_POST['gender']."',
                age='".$_POST['age']."',
                user_name='".$_POST['user_name']."',
                password='".$_POST['password']."',
                mobile_num='".$_POST['mobile_num']."',
                city='".$_POST['city']."',
                email='".$_POST['email']."',
                pincode='".$_POST['pincode']."',
                address1='".$_POST['address1']."',
                remarks='".$_POST['remarks']."'
                WHERE id='".$_GET['id']."'");

        if($_FILES["image"]["tmp_name"] != "" || $_FILES["resume"]["tmp_name"] != "" ||$_FILES["proof"]["tmp_name"] != ""  ){
            $target_dir = "uploads/";
            $target_file1 = $target_dir . basename($_FILES["image"]["name"]);
            $target_file2 = $target_dir . basename($_FILES["resume"]["name"]);
            $target_file3 = $target_dir . basename($_FILES["proof"]["name"]);
            $check1 = getimagesize($_FILES["image"]["tmp_name"]);
            $check2 = $_FILES["resume"]["tmp_name"];
            $check3 = $_FILES["proof"]["tmp_name"];
            if($check1 !== false && $check2 !== "application/pdf" && $check3 !== "application/pdf" || $check3 !== "application/png" || $check3 !== "application/jpeg" || $check3 !== "application/jpg" )
            {
                if(move_uploaded_file($_FILES['image']['tmp_name'],$target_file1)){
                    $upd=mysqli_query($conn,"UPDATE users    
                    SET image='".$target_file1."'
                    WHERE id='".$_GET['id']."'");
                }
                else if(move_uploaded_file($_FILES['resume']['tmp_name'],$target_file2)){
                    $upd=mysqli_query($conn,"UPDATE users    
                    SET resume='".$target_file2."'
                    WHERE id='".$_GET['id']."'");
                }
                else if(move_uploaded_file($_FILES['proof']['tmp_name'],$target_file3)){
                    $upd=mysqli_query($conn,"UPDATE users    
                    SET proof='".$target_file3."'
                    WHERE id='".$_GET['id']."'");
                }
                else if(move_uploaded_file($_FILES['image']['tmp_name'],$target_file1) && move_uploaded_file($_FILES['resume']['tmp_name'], $target_file2)){
                    $upd=mysqli_query($conn,"UPDATE users    
                    SET image='".$target_file1."',
                    resume='".$target_file2."'
                    WHERE id='".$_GET['id']."'");
                }
                else if(move_uploaded_file($_FILES['resume']['tmp_name'],$target_file2) && move_uploaded_file($_FILES['proof']['tmp_name'], $target_file3)){
                    $upd=mysqli_query($conn,"UPDATE users    
                    SET resume='".$target_file2."',
                    proof='".$target_file3."'
                    WHERE id='".$_GET['id']."'");
                }
                else if(move_uploaded_file($_FILES['image']['tmp_name'],$target_file1) && move_uploaded_file($_FILES['proof']['tmp_name'], $target_file3)){
                    $upd=mysqli_query($conn,"UPDATE users    
                    SET image='".$target_file1."',
                    proof='".$target_file3."'
                    WHERE id='".$_GET['id']."'");
                }
                else if(move_uploaded_file($_FILES['image']['tmp_name'],$target_file1) && move_uploaded_file($_FILES['resume']['tmp_name'], $target_file2)  && move_uploaded_file($_FILES['proof']['tmp_name'], $target_file3)){
                    $upd=mysqli_query($conn,"UPDATE users    
                    SET image='".$target_file1."',
                    resume='".$target_file2."',
                    proof='".$target_file3."'
                    WHERE id='".$_GET['id']."'");
                }
            }
        }
?>
        <script>location.href="user.php"</script>
        <?php
    }
}
    
?>
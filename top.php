<div class="nk-wrap">
        <div class="nk-header nk-header-fixed">
        <div class="container-fluid">
        <div class="nk-header-wrap">
        <div class="nk-header-logo ms-n1">
        <div class="nk-sidebar-toggle">
            <button class="btn btn-sm btn-icon btn-zoom sidebar-toggle d-sm-none">
            <em class="icon ni ni-menu"></em></button>
            <button class="btn btn-md btn-icon btn-zoom sidebar-toggle d-none d-sm-inline-flex">
            <em class="icon ni ni-menu"></em></button></div>
    <div class="nk-navbar-toggle me-2">
        <button class="btn btn-sm btn-icon btn-zoom navbar-toggle d-sm-none">
        <em class="icon ni ni-menu-right"></em></button>
        <button class="btn btn-md btn-icon btn-zoom navbar-toggle d-none d-sm-inline-flex">
        <em class="icon ni ni-menu-right"></em></button></div>
        <a href="index1.php" class="logo-link">
        <div class="logo-wrap"></div></a></div>

        <nav class="nk-header-menu nk-navbar">
</li>
    
   
</li></ul></nav>
<div class="nk-header-tools"><ul class="nk-quick-nav ms-2">
<div class="dropdown-menu dropdown-menu-lg">
    <div class="dropdown-content dropdown-content-x-lg py-1">
    <div class="search-inline">
    <div class="form-control-wrap flex-grow-1"><input placeholder="Type Query" type="text" class="form-control-plaintext"></div><em class="icon icon-sm ni ni-search"></em></div></div>
<div class="dropdown-content dropdown-content-x-lg py-3">
    <ul class="dropdown-list gap gy-2"><li>
    <div class="media-group">


<div class="media-action media-action-end">
    </div></div></li><li>
    <div class="media-group">
  
<div class="media-action media-action-end">
</div></div></li><li>
<div class="media-group">
    <div class="media media-sm media-middle media-circle text-bg-light"><img src="images/admin.png" alt=""></div>
<div class="media-text">
    <span class="sub-text">Admin</span></div>
<div class="media-action media-action-end">
    <button class="btn btn-md btn-zoom btn-icon me-n1"><em class="icon ni ni-trash"></em></button></div></div></li></ul></div></div></li>
<li class="dropdown"><a href="#" data-bs-toggle="dropdown">
    <div class="d-sm-none">
    <div class="media media-sm media-circle"><img src="<?=$ft['image'];?>" alt="" class="img-thumbnail"></div></div>
<div class="d-none d-sm-block">
    <div class="media media-circle"><img src="<?=$ft['image'];?>"alt="" class="img-thumbnail"></div></div></a>
<div class="dropdown-menu dropdown-menu-md">
    <div class="dropdown-content dropdown-content-x-lg py-3 border-bottom border-light">
    <div class="media-group">
    <div class="media media-xl media-middle media-circle"><img src="<?=$ft['image'];?>"alt="" class="img-thumbnail"></div>
    
<div class="media-text">
    <div class="lead-text"><?=$ft['name'];?></div>
    <span class="sub-text"><?=$ft['role'];?></span></div></div></div>
<div class="dropdown-content dropdown-content-x-lg py-3 border-bottom border-light"><ul class="link-list"><li><a href="view-user.php?id=<?=$_SESSION['user_id'];?>"><em class="icon ni ni-user"></em> 
<span>My Profile</span></a></li>
<?php if($ft['name']=="Admin"){
    ?>
            <li><a href="changepassword.php">
                <em class="icon ni ni-setting-alt"></em> 
                <span>Change Password</span></a>
            </li>
<?php
}?>            
            </ul>
        </div>

<div class="dropdown-content dropdown-content-x-lg py-3">
    <ul class="link-list">
        <li><a href="logout.php">
        <em class="icon ni ni-signout"></em> 
        <span>Log Out</span></a></li>
        </form>
    </ul></div>
</div></li></ul>
</div></div></div></div>

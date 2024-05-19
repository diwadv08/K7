<?php include 'sidebar.php';
$sel2=mysqli_query($conn,"SELECT * FROM users where id='".$_SESSION['user_id']."'");
if(mysqli_num_rows($sel2)>0){
    $ft=mysqli_fetch_assoc($sel2);
}
?>
<body class="nk-body" data-sidebar-collapse="lg" data-navbar-collapse="lg" style="margin-top:50px">
<div class="nk-app-root">
<div class="nk-main">
<div class="nk-content">
<div class="container">
<div class="nk-content-inner">
<div class="nk-content-body">
<div class="nk-block-head">
<div class="nk-block-head-between flex-wrap gap g-2">
<div class="nk-block-head-content"><h2 class="nk-block-title">Accounts</h2><nav><ol class="breadcrumb breadcrumb-arrow mb-0"><li class="breadcrumb-item"><a href="#">Home</a></li><li class="breadcrumb-item active" aria-current="page">Accounts</li></ol></nav></div>
<div class="nk-block-head-content">
    <ul class="d-flex">
        <?php if($ft['accounts']==1){?>
    <li><a href="add-accounts.php" class="btn btn-primary btn-md d-md-none">
        <em class="icon ni ni-plus"></em><span>Add</span></a></li>
        <li><a href="add-accounts.php" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em>
        <span>Add Bills</span></a></li><li><a href="add-accounts.php" class="btn btn-primary btn-md d-md-none">
            <em class="icon ni ni-plus"></em><span>Add</span></a></li><?php }?>
    <li>&nbsp;&nbsp;<button onclick="history.go(-1)" class="btn btn-danger">Back</button></li></ul></div></div></div>
<div class="nk-block-head-content"><ul class="d-flex"></ul>
<div class="nk-block">
<div class="card">
<table class="datatable-init table display nowrap" data-nk-container="table-responsive">
<thead class="table-light">
<div class="row">
        <div class="col-6 m-4 d-flex">
            <div class="col-6">
                <input id="min" name="min" class="form-control" type="text">
            </div>
            <div class="col-6" style='margin-left:40px;'>
                <input id="max" name="max" class="form-control" type="text">
            </div>
        </div>
    </div>
<tr>
<th class="tb-col tb-col-check" data-sortable="false">
<div class="form-check"><input class="form-check-input" type="checkbox" value=""></div></th>
<th class="tb-col"><span class="overline-title">Bill Id</span></th>
<th class="tb-col"><span class="overline-title">Bill Photo</span></th>
<th class="tb-col"><span class="overline-title">Date</span></th>
<th class="tb-col tb-col-md"><span class="overline-title">sku</span></th>
<th class="tb-col tb-col-md"><span class="overline-title">barcode</span></th>
<th class="tb-col"><span class="overline-title">qty</span></th>
<th class="tb-col tb-col-md"><span class="overline-title">price</span></th>
<?php if($ft['accounts']==1){?>
<th class="tb-col tb-col-end p-auto" data-sortable="false"><span class="overline-title">action</span></th><?php }?>
</tr>
</thead>
<tbody>
<?php      
    $sel=mysqli_query($conn,"SELECT * FROM product");
    if(mysqli_num_rows($sel)>0){
        while($fe=mysqli_fetch_assoc($sel)){
?>            
        <tr>
    <td class="tb-col tb-col-check">
<div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="pid1"></div></td>
<td class="tb-col title"><?=$fe['ecom_id'];?></td>
<td class="tb-col title">
<div class="media-group">
<div class="media media-md media-middle"><a href="edit-accounts.php?id=<?=$fe['id'];?>"><img src=<?=$fe['upload_media'];?> height="40px" max-width="30px"></a></div>
</div></td>
<td class="tb-col tb-col-md"><span><?=$fe['date']?></span></td>
<td class="tb-col tb-col-md"><span><?=$fe['sku']?></span></td>
<td class="tb-col"><?=$fe['bar_code'];?></td>
<td class="tb-col"><span><?=$fe['on_shelf']?></span></td>
<td class="tb-col tb-col-md"><span><?=$fe['base_price']?></span></td>

<?php if($ft['accounts']==1){?>
<td class="tb-col tb-col-end">
<div class="dropdown"><a href="#" class="btn btn-sm btn-icon btn-zoom me-n1" data-bs-toggle="dropdown">
    <em class="icon ni ni-more-v"></em></a>
<div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
<div class="dropdown-content py-1">
    <ul class="link-list link-list-hover-bg-primary link-list-md">
        <li>
            <a href="view-accounts.php?id=<?=$fe['id'];?>">
            <em class="icon ni ni-eye"></em>
            <span>View Details</span>
            <a href="edit-accounts.php?id=<?=$fe['id'];?>">
            <em class="icon ni ni-edit"></em>
            <span>Edit</span></a>
            <a id="hi" href="delete-accounts.php?id=<?=$fe['id'];?>" onclick="return confirm('Are you sure want to delete this bill')">
            <em class="icon ni ni-trash"></em>
            <span>Delete</span></a></li><li> 
                </a>
            </li>
        </ul>
    </div>
</div>
</div>
</td>
<?php }?>
</tr>

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
</html>


<script>
let minDate, maxDate;
 
 // Custom filtering function which will search data in column four between two values
 DataTable.ext.search.push(function (settings, data, dataIndex) {
     let min = minDate.val();
     let max = maxDate.val();
     let date = new Date(data[4]);
  
     if (
         (min === null && max === null) ||
         (min === null && date <= max) ||
         (min <= date && max === null) ||
         (min <= date && date <= max)
     ) {
         return true;
     }
     return false;
 });
  
 // Create date inputs
 minDate = new DateTime('#min', {
     format: 'MMMM Do YYYY'
 });
 maxDate = new DateTime('#max', {
     format: 'MMMM Do YYYY'
 });
  
 // DataTables initialisation
 let table = new DataTable('#example');
  
 // Refilter the table
 document.querySelectorAll('#min, #max').forEach((el) => {
     el.addEventListener('change', () => table.draw());
 });
 
</script>

<?php
    include 'db/connection.php';
?>
<?php
    $query = $_POST["query"];
    $sql = mysqli_query($conn,"SELECT template FROM templates WHERE template LIKE '%$query%'");
    if(mysqli_num_rows($sql)>0){
        while($fe = mysqli_fetch_assoc($sql)){
            $suggestions[] = $fe['template'];
        }
    }
    echo json_encode($suggestions);
?>
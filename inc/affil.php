<?php	

if(isset($_GET['aff_id']) && !empty($_GET['aff_id'])){
    $_SESSION['aff_id'] = $_GET['aff_id'];
}

if(isset($_GET['sub_id1']) && !empty($_GET['sub_id1'])){
    $_SESSION['sub_id1'] = $_GET['sub_id1'];
}
else{
    $_SESSION['sub_id1'] = "";
}
if(isset($_GET['sub_id2']) && !empty($_GET['sub_id2'])){
    $_SESSION['sub_id2'] = $_GET['sub_id2'];
}
else{
    $_SESSION['sub_id2'] = "";
}
if(isset($_GET['sub_id3']) && !empty($_GET['sub_id3'])){
    $_SESSION['sub_id3'] = $_GET['sub_id3'];
}
else{
    $_SESSION['sub_id3'] = "";
}


<?php
include_once("inc/utils.php");
$conn = getConn();
if ($conn && $_REQUEST && $_REQUEST['id']) {
    $removed = removeProduct($conn, $_REQUEST['id']);
    if($removed){
        header('Location: lista.php?message=excluded');
    } else {
        header('Location: lista.php?message=excludefail');
    }

}
?>
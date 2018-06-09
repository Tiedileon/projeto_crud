<?php
include_once("inc/utils.php");
redirIfNotLogged();
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
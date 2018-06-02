<?php
function navActive($pg, $key){
    if ($pg == $key){
        return "active";
    }
}
function getConn(){
    $host="localhost";
    $username="root";
    $userpass="caelum";
    $dbname="fp_73";
    return (mysqli_connect($host, $username,$userpass,$dbname));
}
function getProductById($conn, $id){
    $query = "SELECT * FROM produtos WHERE id='$id'";
    $result = mysqli_query($conn,$query);
    $prod = mysqli_fetch_assoc($result);
    return $prod;
}
function getProducts($conn){
    $query = "SELECT * FROM produtos";
    $result = mysqli_query($conn,$query);
    return $result;
}

function addProduct($conn,$nome, $preco, $quant){
    $query = "INSERT INTO produtos 
                            (nome,preco,quant) 
                     VALUES ('{$nome}',{$preco},'{$quant}')";
    return mysqli_query($conn,$query);
}
function removeProduct($conn, $id){
    if ($id && is_numeric($id)){
        $query = "DELETE FROM produtos WHERE id = {$id}";
        return mysqli_query($conn,$query);
    }
    
}

function updateProduct($conn,$id,$nome,$quant,$preco) {
    if($id){
        $query= "UPDATE
                produtos
                SET
                nome='{$nome}',
                quant='{$quant}',
                preco='{$preco}'
                WHERE
                id='{$id}'";
        $result = mysqli_query($conn,$query);
        return $result;
    }
}
?>
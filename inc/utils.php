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
    $query = "SELECT
                p.id,
                p.nome AS nome_produto,
                p.preco,
                p.quant,
                c.nome AS nome_categoria
            FROM
                produtos AS p
            INNER JOIN
                categorias AS c
            ON
                (p.idcategoria = c.id)
            ORDER BY
                p.id
            DESC";
    $result = mysqli_query($conn,$query);
    return $result;
}

function addProduct($conn,$nome, $preco, $quant, $idcateg){
    $query = "INSERT INTO produtos 
                            (nome,preco,quant,idcategoria) 
                     VALUES ('{$nome}',{$preco},'{$quant}','{$idcateg}')";
    return mysqli_query($conn,$query);
}
function removeProduct($conn, $id){
    if ($id && is_numeric($id)){
        $query = "DELETE FROM produtos WHERE id = {$id}";
        return mysqli_query($conn,$query);
    }
}
function updateProduct($conn,$id,$nome,$quant,$preco,$idcategoria) {
    if($id){
        $query= "UPDATE
                produtos
                SET
                nome='{$nome}',
                quant='{$quant}',
                preco='{$preco}',
                idcategoria='{$idcategoria}'
                WHERE
                id='{$id}'";
        $result = mysqli_query($conn,$query);
        return $result;
    }
}
function getCategories($conn) {
    $query = "SELECT * FROM categorias";
    $result = mysqli_query($conn,$query);
    return $result;
}

?>
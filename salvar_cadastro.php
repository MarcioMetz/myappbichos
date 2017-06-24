<?php

$nome = $_REQUEST['nome'];
$porte = $_REQUEST['porte'];
$especie = $_REQUEST['especie'];
$raca = $_REQUEST['raca'];
$idade = $_REQUEST['idade'];
$fotos = $_REQUEST['fotos'];

include 'conn.php';

$sql = "insert into cadastro(nome,porte,especie,raca,idade,fotos) values('$nome','$porte','$especie','$raca','$idade','$fotos')";
$result = @mysql_query($sql);
if ($result){
    echo json_encode(array('success'=>true));
} else {
    echo json_encode(array('msg'=>'Erro ao inserir dados.'));
}
?>
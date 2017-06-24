<?php

$id = intval($_REQUEST['id']);
$nome = $_REQUEST['nome'];
$porte = $_REQUEST['porte'];
$especie = $_REQUEST['especie'];
$raca = $_REQUEST['raca'];
$idade = $_REQUEST['idade'];
$fotos = $_REQUEST['fotos'];

include 'conn.php';

$sql = "update cadastro set nome='$nome',porte='$porte',especie='$especie',raca ='$raca',idade='$idade', fotos='$fotos' where id=$id";
$result = @mysql_query($sql);
if ($result){
    echo json_encode(array('success'=>true));
} else {
    echo json_encode(array('msg'=>'Erro ao atualizar dados.'));
}
?>
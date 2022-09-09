<?php
$id = $_POST['id'];
$nome = $_POST['nome'];
$cargo = $_POST['cargo'];
$salario = $_POST['salario'];
$dependentes = $_POST['dependentes'];

$refFile = fopen("cadastros/$id.txt","a+");

fwrite($refFile,"Id: ".$id."\n"."Nome: ".$nome."\n"."Cargo: ".$cargo."\n"."Salário: ".$salario."\n"."Dependentes: ".$dependentes);

fclose($refFile);

$abc = scandir("cadastros");

array_shift($abc);
array_shift($abc);

foreach($abc as $def){
    echo"<a href='readInfo.php?id=$def'>$def</a><br>";
}
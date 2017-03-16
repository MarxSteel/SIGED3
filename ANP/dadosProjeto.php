<?php 
$Dados = $PDO->prepare("SELECT * FROM icbr_projeto WHERE pro_chave='$codProjeto'");
$Dados->execute();
$Qry = $Dados->fetch();

$NomeProjeto = $Qry['pro_nome'];
$AvenidaProjeto = $Qry['pro_avenida'];
$ClubeCodigo = $Qry['pro_clube'];
$StatusProjeto = $Qry['pro_status'];
$DataCadastro = $Qry['pro_DtCadastro'];
$ChaveProjeto = $Qry['pro_chave'];
$UsuarioCadastro = $Qry['pro_UserCadastro'];
$DistritoProjeto = $Qry['pro_distrito'];
$IDProjeto = $Qry['id'];
$Baixar = $Qry['pro_arquivo'];

if ($StatusProjeto === "1") {
	$DetalheStatus = "Aguardando Revisão";
}
elseif ($StatusProjeto === "2") {
	$DetalheStatus = "REPROVADO";	
}
elseif ($StatusProjeto === "3") {
	$DetalheStatus = "Aprovado";
}
else{

}

$ChamaClube = $PDO->prepare("SELECT * FROM icbr_clube WHERE icbr_id='$ClubeCodigo'");
$ChamaClube->execute();
 $Valores = $ChamaClube->fetch();
  $ClubeProjeto = $Valores['icbr_Clube'];
  $EmailClube = $Valores['icbr_ProjetoEmail'];


?>


<?php

/* obtendo o conteudo do body */
$json =  file_get_contents('php://input');

/* convertendo o body em formato json em objeto php*/
$dadosObra = json_decode ($json);

$codigo         = $dadosObra->idObra;
$nomeObra       = $dadosObra->nomeObra;
$descObra       = $dadosObra->descObra;
$duracaoObra    = $dadosObra->duracaoObra;
$loopObra       = $dadosObra->loopObra;
$statusObra     = $dadosObra->statusObra;
$textoObra      = $dadosObra->textoObra;

if(!isset($codigo))
{
    $codigo = 0;
}

if(!isset($nomeObra))
{
    $nomeObra = '';
}

if(!isset($descObra))
{
    $descObra = '';
}

if(!isset($duracaoObra))
{
    $duracaoObra = 0;
}

if(!isset($loopObra))
{
    $loopObra = false;
}

if(!isset($statusObra))
{
    $statusObra = '';
}

if(!isset($textoObra))
{
    $textoObra = '';
}

// Campos vazios
if ( $nomeObra == '' or $descObra == '' or $textoObra == '')
{
	echo "erro-Preencher os campos obrigatórios!";
	return;	
}

include('conexao_bd.php');

$codigo = 0;
$statusObra = 'ativo';

$query = " INSERT INTO usuarios ( id, nome, email, senha, ativo ) Values ( ?, ?, ?, ?, ? ) ";
$querytratada = $conn->prepare($query); 
$querytratada->bind_param("issss", $codigo, $userName, $email, $senha, $ativo);
$querytratada->execute();

if ($querytratada->affected_rows > 0) 
{
	$resposta = 'ok';
	session_start();
	$_SESSION['controle'] = ucwords($userName);	
} 
else 
{
	echo 'problema';
	return;
}

// FECHA CONEXAO
mysqli_close($conn);

// RETORNA RESULTADO
echo $resposta;
return;

?>
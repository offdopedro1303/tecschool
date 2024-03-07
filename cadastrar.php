<?php
session_start();
include('conexao.php');

if(empty($_POST['nome'] || $_POST['curso'])){
    header('Location: index.php');
}
$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$sigla = mysqli_real_escape_string($conexao, trim($_POST['curso']));
$nascimento = mysqli_real_escape_string($conexao, trim($_POST['data']));
$sexo = mysqli_real_escape_string($conexao, trim($_POST['sexo']));
$RM = mysqli_real_escape_string($conexao, trim($_POST['rm']));

$sql = "select count(*) as total from aluno where RM = '$RM'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1){
    $_SESSION['usuario_existe'] = true;
    header('Location: cadastro.php');;
    exit;
}

$sql = "INSERT INTO aluno(RM, nome, nascimento, sigla, sexo) values ('$RM', '$nome', '$nascimento', '$sigla', '$sexo')";

if($conexao->query($sql) === true){
$_SESSION['status_cadastro'] = true;
}
$conexao->close();

header('Location: login.php');
exit;
?>


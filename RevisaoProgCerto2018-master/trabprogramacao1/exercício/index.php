<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>exe</title>
	<meta charset="utf-8">
</head>
<style type="text/css">
	ul li {
		display: inline;
	}
</style>
<body>

<?php

    if (!isset($_SESSION['usuario'])){
    require_once ('login.php');}

    elseif(isset($_SESSION['usuario'])){
    $nome = $_SESSION['usuario'];
        echo "Olá $nome";
        require_once ('sair.php');
        require_once ('linkperfil.php');
       }
?>



<ul>
    <a href="produtos.php?nome=Fruta&linha=link"><li>frutas</li></a>
    <a href="produtos.php?nome=limpeza&linha=link"><li>limpeza</li></a>
    <a href="produtos.php?nome=legumes&linha=link"><li>legumes</li></a>
    <a href="produtos.php?nome=laticinios&linha=link"><li>laticinios</li></a>
    <a href="produtos.php?nome=doces&linha=link"><li>doces</li></a>
    <a href="produtos.php?nome=higiene&linha=link"><li>higiene</li></a>
</ul>

<form method="POST" action="produtos.php?linha=post">
    <input type="search" name="BUSCA">
    <input type="submit" value="Buscar">
</form>

<a href="controladorCategoria.php?rota=exibir">View</a>


</body>
</html>
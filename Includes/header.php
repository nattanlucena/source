<?php
require 'Config/Config.php';

$config = new Config(); 
$url = $config->url();

?>
<!DOCTYPE html!>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="<?php echo $url;?>/css/estilo.css">
<link href="http://fonts.googleapis.com/css?family=Droid+Sans"
	rel="stylesheet" type="text/css">
<script
	src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $url;?>/js/search.js"></script>
<title>List Internal HDBR Servers</title>
</head>
<div id="all">
	<header>
		<h1>Titulo</h1>
		<div id="logo"></div>
		<nav id="menu">
			<ul>
				<li><a href="#">Servidores Hospedagem </a></li>
				<li><a href="#">Servidores Revenda</a></li>
				<li><a href="#">Servidores VPS</a></li>
				<li><a href="#">Auditorias</a></li>
			</ul>
		</nav>
	</header>
	<!-- #header -->
	<div id="corpo">
		<div id="container">
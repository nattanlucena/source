<?php
?>
<!DOCTYPE html!>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../css/estilo.css">
		<link href="http://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet" type="text/css">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/javascript" src="./js/search.js"></script>
		<title>List Internal HDBR Servers - Auditorias</title>
	</head>
	<div id="all">
		<header>
			<h1>Titulo</h1>
			<div id="logo">
			</div>
			<nav id="menu">
				<ul>
					<li><a href="#">Servidores Hospedagem</a></li>
					<li><a href="#">Servidores Revenda</a></li>
					<li><a href="#">Servidores VPS</a></li>
					<li><a href="#">Auditorias</a></li>
				</ul>
			</nav>
		</header>
		<!-- #header -->
		<div id="corpo">
			<div id="container">
				<div id="search">
					<input type="text" placeholder="Pesquisar" class="form-control" id="search-input" value=""
						style="width: 300px;" /> 
				</div>
				<table id="table-list" class="table table-condensed">
					<thead>
						<tr>
							<th>Dia</th>
							<th>Hostname</th>
							<th>Tipo: Revenda | Hospedagem</th>		
							<th>Ticket</th>
							<th>Problema</th>
							<th>Status</th>
							<th>Resolvido</th>
							<th>Downtime</th>
							<th>Observações</th>
							<th>Ações</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>A</td>
							<td>A</td>
							<td>A</td>
							<td>A</td>
							<td>A</td>
							<td>A</td>
							<td>A</td>
							<td>A</td>
							<td>A</td>	
							<td>Editar | Remover</td>			
						</tr>
					</tbody>
				</table>
			</div> 
			<!-- #container -->
		</div> 
		<!-- #corpo -->
		
		<footer>
			<small>Copyright © 2014 - HostDime Brasil - Todos os direitos reservados</small>
		</footer>
	</div><!-- #all -->
</html>
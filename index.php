<?php
?>
<!DOCTYPE html!>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="./css/estilo.css">
		<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
		<link href="http://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="./js/search.js"></script>
		<title>List Internal HDBR Servers</title>
	</head>
<body>
	<div id="topo">
			
			<div id="logo">
				<a href="default">
					<img src="./img/logo.png" width="385" height="81" border="0">
				</a>

			</div>
			<nav id="menu">
				<ul>
					<li><a href="#">Servidores Hospedagem</a>
						<!-- <ul>
							<li>EUA</li>
							<li>BR</li>
							<li>SP</li>
						</ul> -->
					</li>
					<li><a href="#">Servidores Revenda</a>
						<!--<ul>
							<li>EUA</li>
							<li>BR</li>
							<li>SP</li>
						</ul> -->
					</li>
					<li><a href="#">Servidores VPS</a>
						<!--<ul>
							<li>EUA</li>
							<li>BR</li>
							<li>SP</li>
						</ul> -->
					</li>
					<li><a href="#">Auditorias</a></li>
				</ul>
			</nav>
		</div>
		<!-- #topo -->
	<div id="all">
		<div id="corpo">
				<div id="search" class="pull-right" style="margin:0;padding:0;display:inline">
					<input type="text" placeholder="Pesquisar" class="form-control" id="search-input" value=""
						style="width: 300px;" /> 
				</div>
				<table id="table-list" class="table table-condensed">
					<thead>
						<tr>
							<th>HD Number</th>
							<th>DC</th>
							<th>Hostname</th>
							<th>IP</th>
							<th>DNS</th>
							<th>PHP 5.3.x</th>
							<th>PHP 5.4.x</th>
							<th>Apache</th>
							<th>Mysql</th>
							<th>Nginx</th>
							<th>CloudLinux</th>
							<th>Cpanel</th>
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
							<td>A</td>
							<td>A</td>
							<td>A</td>
						</tr>
					</tbody>
				</table>
				<span class="pull-right">
				<a href="#">
					<button class="btn btn-danger" >
					<strong>Adicionar Servidor</strong>
					<!--<img width="20" height="20"  title="editar texto" src="/imagens/adicionar.gif" /> -->
					</button>
				</a>
			</span>
		
		</div> 
		<!-- #corpo -->
		
		<footer>
			<small>Copyright © 2014 - HostDime Brasil - Todos os direitos reservados</small>
		</footer>
	</div><!-- #all -->
</body>
</html>
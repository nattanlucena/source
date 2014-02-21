<?php
	
	require_once 'Controller/ServidorController.php';
	require_once 'Model/Servidor.php';

	$sc = new ServidorController();
	$rows = array();
	$rows = $sc->carregarServidoresEUAAction();

	//var_dump($rows);
	

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
					
					<?php foreach($rows as $r): ?>
						<tr>
							<td><?php echo $r['hdnumber']; ?></td>
							<td><?php echo $r['dc']; ?></td>
							<td><?php echo $r['hostname']; ?></td>
							<td><?php echo $r['ip']; ?></td>
							<td><?php echo $r['dns1'].'<br />'.$r['dns2'] ; ?></td>
							<td><?php echo $r['php53']; ?></td>
							<td><?php echo $r['php54']; ?></td>
							<td><?php echo $r['apache']; ?></td>
							<td><?php echo $r['mysql']; ?></td>
							<td><?php echo $r['nginx']; ?></td>
							<td><?php echo $r['cloudlinux']; ?></td>
							<td><?php echo $r['cpanel']; ?></td>
						</tr>
					<?php endforeach;?>
					
					</tbody>
				</table>
				<span class="pull-right">
				<a href="./view/inserir_servidor.php">
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
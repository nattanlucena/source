<?php
	
	require_once '../../Controller/ServidorController.php';
	require_once '../../Model/Servidor.php';

	$sc = new ServidorController();
	$rows = array();
	$rows = $sc->carregarVPSAction();
	
	if($rows == NULL){
		$rows = $sc;
	}
	
?>
<!DOCTYPE html!>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>List Internal HDBR Servers</title>
		
		<link rel="stylesheet" type="text/css" href="../../css/estilo.css">
		<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="http://getbootstrap.com/examples/sticky-footer-navbar/sticky-footer-navbar.css">
		<link href="http://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet" type="text/css">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
		<script type="text/javascript" src="../../js/search.js"></script>
		<script type="text/javascript" src="../../js/remove.js"></script>
	
	</head>
<body>
	<div id="topo">
			<div class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<div class="navbar-header">
						
							<img src="../../img/logo.png" border="0" width="200px;" height="50px;">
						
					</div><!-- .navbar-header -->
					<div class="collapse navbar-collapse pull-right">
						<ul class="nav navbar-nav">
							<li><a href="../shared.php">Shared Server</a>
								<!-- <ul>
									<li>EUA</li>
									<li>BR</li>
									<li>SP</li>
								</ul> -->
							</li>
							<li><a href="../reseller.php">Reseller Server</a>
								<!--<ul>
									<li>EUA</li>
									<li>BR</li>
									<li>SP</li>
								</ul> -->
							</li>
							<li><a href="../vps.php">VPS Server</a>
								<!--<ul>
									<li>EUA</li>
									<li>BR</li>
									<li>SP</li>
								</ul> -->
							</li>
							<li class="active"><a href="#">Audit</a></li>
						</ul>
					</div><!-- .navbar-collapse -->
				</div><!-- .container -->
			</div><!-- .navbar -->
		</div>
		<!-- #topo -->
	<div id="all">
		<div class="container" id="container">
			<div class=".page-header">				
			</div><!-- .page-header -->
			<div class="content">
				<div style="padding-top: 5px;">
					<h3 class="bs-callout bs-callout-info">Audit Area</h3>
				</div>
				<div class="tab_">
					<ul id="tab_1" class="nav nav-tabs nav-justified" style="margin-top: 30px;">
						<li class="active">
							<a href="#shared" data-toggle="tab">Shared</a>
						</li>
						<li class>
							<a href="#reseller" data-toggle="tab">Reseller</a>
						</li>
						<li class>
							<a href="#vps" data-toggle="tab">VPS</a>
						</li>
					</ul>
					<div id="tab_content" class="tab-content" style="margin-top: 30px;">
					<table id="table-list" class="table table-condensed">
						<thead>
							<tr>
								<th>Day</th>
								<th>ID</th>
								<th>Hostname</th>
								<th>Ticket</th>
								<th>Issue</th>
								<th>Status</th>
								<th>Solved</th>
								<th>Description</th>
							</tr>
						</thead>
						<tbody>
						
						<?php foreach($rows as $r): ?>
							<tr>
								<td><a href="https://admin.dimenoc.com/server/view/index/id/<?php echo $r->getHdnumber();?>"><?php echo $r->getHdnumber(); ?></a></td>
								<td><img src="../../img/eua.png" width="30" height="30" border="0"></td>
								<td><?php echo $r->getHostname(); ?></td>
								<td><?php echo $r->getIp(); ?></td>
								<td><?php echo $r->getDns1().'<br />'.$r->getDns2(); ?></td>
								<td><?php echo $r->getPhp53(); ?></td>
								<td><?php if($r->getPhp54() != ''): ?><?php echo $r->getPhp54(); ?><?php else:?><img src="../../img/Off.png"><?php endif;?></td>
								<td><?php echo $r->getApache(); ?></td>
								<td>
									<a href="../editar_servidor.php?id=<?php echo $r->getHdnumber()?>">
										<img src="../../img/glyphicons_150_edit.png" title="Editar" width="25" height="25">
									</a>  
									
									<a href="javascript:void(0)" id="<?php echo $r->getHdnumber()?>" class="remove">
										<img src="../../img/glyphicons_016_bin.png" title="Remover" width="25" height="25">
									</a>
									
								</td>
							</tr>
						<?php endforeach;?>
						
						</tbody>
					</table>
					</div><!-- #tab_content -->
				</div><!-- .tab_ -->
				<span class="pull-right">
				<a href="../inserir_servidor.php">
					<button class="btn btn-danger" >
					<strong>New Issue</strong>
					<!--<img width="20" height="20"  title="editar texto" src="/imagens/adicionar.gif" /> -->
					</button>
				</a>
			</span>
			</div><!-- .content -->
		</div> <!-- .container -->
		
	</div><!-- #all -->
</body>
</html>

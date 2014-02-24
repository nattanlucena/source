<?php
	
	require_once '../../Controller/HistoricoController.php';
	require_once '../../Model/Servidor.php';

	$hc = new HistoricoController();
	$rows = array();
	
	$rows = $hc->loadHistoriyAction();
	

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
					<span class="pull-right" style="margin-top: -20px;">
						<a href="new_issue.php">
							<button class="btn btn-danger" >
							<strong>New Issue</strong>
							
							</button>
						</a>
					</span>
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
					
						
						<div class="tab-pane fade in active" id="shared">
							<div id="tab_table_shared">
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
										<th>Count</th>
										<th></th>
									</tr>
								</thead>
								<tbody>	
								<?php if(is_array($rows)):?>
									<?php foreach($rows as $r): ?>
									<?php if($r->getTipo() == "hospedagem"):?>														
									<tr>
										<td style="width: 100px;"><?php echo $r->getDia(); ?></td>
										<td style="width: 100px;"><?php echo $r->getServidor_hdnumber(); ?></td>
										<td style="width: 200px;"><?php echo $r->getHostname(); ?></td>
										<td style="width: 100px;"><?php echo $r->getTicket(); ?></td>
										<td style="width: 200px;"><?php echo $r->getProblema(); ?></td>
										<td style="width: 100px;"><?php echo $r->getStatus(); ?></td>
										<td style="width: 100px;"><?php echo $r->getResolvido(); ?></td>
										<td style="width: 300px;"><?php echo $r->getObservacoes(); ?></td>
										<td style="width: 300px;"></td>
										<td style="width: 50px;">
											<a href="../editar_servidor.php?id=<?php echo $r->getServidor_hdnumber()?>">
												<img src="../../img/glyphicons_150_edit.png" title="Editar" width="25" height="25">
											</a>  
											
											<a href="javascript:void(0)" id="<?php echo $r->getServidor_hdnumber()?>" class="remove">
												<img src="../../img/glyphicons_016_bin.png" title="Remover" width="25" height="25">
											</a>
											
										</td>
									</tr>
									<?php endif;?>
									<?php endforeach;?>
								<?php endif;?>																
								</tbody>
							</table>
							</div>
						</div><!-- #content_tab_shared -->
						
						<div class="tab-pane fade" id="reseller">
							<div id="tab_table_reseller">
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
									<?php if(is_array($rows)):?>
									<?php foreach($rows as $r): ?>
									<?php if($r->getTipo() == "revenda"):?>			
									<tr>
										<td style="width: 100px;"><?php echo $r->getDia(); ?></td>
										<td style="width: 100px;"><?php echo $r->getServidor_hdnumber(); ?></td>
										<td style="width: 200px;"><?php echo $r->getHostname(); ?></td>
										<td style="width: 100px;"><?php echo $r->getTicket(); ?></td>
										<td style="width: 200px;"><?php echo $r->getProblema(); ?></td>
										<td style="width: 100px;"><?php echo $r->getStatus(); ?></td>
										<td style="width: 100px;"><?php echo $r->getResolvido(); ?></td>
										<td style="width: 300px;"><?php echo $r->getObservacoes(); ?></td>
										<td style="width: 300px;"></td>
										<td style="width: 50px;">
											<a href="../editar_servidor.php?id=<?php echo $r->getServidor_hdnumber()?>">
												<img src="../../img/glyphicons_150_edit.png" title="Editar" width="25" height="25">
											</a>  
											
											<a href="javascript:void(0)" id="<?php echo $r->getServidor_hdnumber()?>" class="remove">
												<img src="../../img/glyphicons_016_bin.png" title="Remover" width="25" height="25">
											</a>
											
										</td>
									</tr>	
									<?php endif;?>
									<?php endforeach;?>
								<?php endif;?>		
								</tbody>
							</table>
							</div>
						</div><!-- #content_tab_reseller -->
						
						<div class="tab-pane fade" id="vps">
							<div id="tab_table_vps">
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
								<?php if(is_array($rows)):?>
									<?php foreach($rows as $r): ?>
									<?php if($r->getTipo() == "vps"):?>	
									<tr>
										<td style="width: 100px;"><?php echo $r->getDia(); ?></td>
										<td style="width: 100px;"><?php echo $r->getServidor_hdnumber(); ?></td>
										<td style="width: 200px;"><?php echo $r->getHostname(); ?></td>
										<td style="width: 100px;"><?php echo $r->getTicket(); ?></td>
										<td style="width: 200px;"><?php echo $r->getProblema(); ?></td>
										<td style="width: 100px;"><?php echo $r->getStatus(); ?></td>
										<td style="width: 100px;"><?php echo $r->getResolvido(); ?></td>
										<td style="width: 300px;"><?php echo $r->getObservacoes(); ?></td>
										<td style="width: 300px;"></td>
										<td style="width: 50px;">
											<a href="../editar_servidor.php?id=<?php echo $r->getServidor_hdnumber()?>">
												<img src="../../img/glyphicons_150_edit.png" title="Editar" width="25" height="25">
											</a>  
											
											<a href="javascript:void(0)" id="<?php echo $r->getServidor_hdnumber()?>" class="remove">
												<img src="../../img/glyphicons_016_bin.png" title="Remover" width="25" height="25">
											</a>
											
										</td>
									</tr>
									<?php endif;?>
									<?php endforeach;?>
								<?php endif;?>									
								</tbody>
							</table>
							</div>
						</div><!-- #content_tab_vps -->
						
					</div><!-- #tab_content -->
				</div><!-- .tab_ -->
			</div><!-- .content -->
		</div> <!-- .container -->
		
	</div><!-- #all -->
</body>
</html>

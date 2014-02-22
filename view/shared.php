<?php
	
	require_once '../Controller/ServidorController.php';
	require_once '../Model/Servidor.php';

	$sc = new ServidorController();
	$rows = array();
	$rows = $sc->carregarSharedAction();
	

?>
<!DOCTYPE html!>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>List Internal HDBR Servers</title>
		
		<link rel="stylesheet" type="text/css" href="../css/estilo.css">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="http://getbootstrap.com/examples/sticky-footer-navbar/sticky-footer-navbar.css">
		<link href="http://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet" type="text/css">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/javascript" src="../js/search.js"></script>
		<script type="text/javascript" src="../js/remove.js"></script>
		<script type="text/javascript" src="../js/bootstrap.min.js"></script>
		
		<script type="text/javascript">
			$(function() {
				  // Setup drop down menu
				  $('.dropdown-toggle').dropdown();
				 
				  // Fix input element click problem
				  $('.dropdown input, .dropdown label').click(function(e) {
				    e.stopPropagation();
				  });
				});
		</script>
		<style type="text/css">
			#formLogin input{
				width: 150px;
				padding-bottom: 15px;
			}
		</style>	
	</head>

<body>
	<div id="topo">
			<div class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<div class="navbar-header">
						
							<img src="../img/logo.png" border="0" width="200px;" height="50px;">
						
					</div><!-- .navbar-header -->
					<div class="collapse navbar-collapse pull-right">
						<ul class="nav navbar-nav">
							<li class="active"><a href="#" >Shared Server</a>
								<!-- <ul>
									<li>EUA</li>
									<li>BR</li>
									<li>SP</li>
								</ul> -->
							</li>
							<li><a href="reseller.php">Reseller Server</a>
								<!--<ul>
									<li>EUA</li>
									<li>BR</li>
									<li>SP</li>
								</ul> -->
							</li>
							<li><a href="vps.php">VPS Server</a>
								<!--<ul>
									<li>EUA</li>
									<li>BR</li>
									<li>SP</li>
								</ul> -->
							</li>
							<li><a href="audit/index.php">Audit</a></li>
						</ul>
						  <ul class="nav pull-right">
					          <li class="dropdown" id="menuLogin">
					            <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="navLogin"  style="padding-top:15px;">Login</a>
					            <div class="dropdown-menu" style="padding:17px; margin-left:-20px;">
					              <form class="form" id="formLogin">  
					                <input name="username" id="username" type="text" placeholder="Username" class="form-control"> 
					                <input name="password" id="password" type="password" placeholder="Password" class="form-control"><br>
					                <button type="button" class="btn btn-default">Login</button>
					              </form>
					            </div>
					          </li>
					      </ul>
					</div><!-- .navbar-collapse -->
				</div><!-- .container -->
			</div><!-- .navbar -->
		</div>
		<!-- #topo -->
	<div id="all">
		<div class="container" id="container">
			<div class=".page-header">
				<div id="search" class="pull-right" style="margin:0;padding:0;display:inline">
					<input type="text" placeholder="Search" class="form-control" id="search-input" value=""
						style="width: 300px;" /> 
				</div>
				
			</div><!-- .page-header -->
			<div class="content">
				<div style="padding-top: 5px;">
					<h3 class="bs-callout bs-callout-info">Shared Servers List</h3>
				</div>
				<table id="table-list" class="table table-condensed">
					<thead>
						<tr>
							<th>ID</th>
							<th>DC</th>
							<th>Hostname</th>
							<th>IP</th>
							<th>DNS</th>
							<th>PHP 5.3.x</th>
							<th>PHP 5.4.x</th>
							<th>Apache</th>
							<th>Mysql</th>
							<th>Nginx</th>
							<th>CL</th>
							<th>Cpanel</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
					
					<?php foreach($rows as $r): ?>
						<tr>
							<td><a href="https://admin.dimenoc.com/server/view/index/id/<?php echo $r->getHdnumber();?>"><?php echo $r->getHdnumber(); ?></a></td>
							<td>
								<?php if($r->getDc() == "EUA"):?>
									<img src="../img/eua.png" width="30" height="30" border="0">
								<?php elseif ($r->getDC() == "BR"):?>
									<img src="../img/br.png" width="30" height="30" border="0">
								<?php else:?>
									<img src="../img/sp.png" width="30" height="25" border="0">
								<?php endif;?>
							</td>
							<td><?php echo $r->getHostname(); ?></td>
							<td><?php echo $r->getIp(); ?></td>
							<td><?php echo $r->getDns1().'<br />'.$r->getDns2(); ?></td>
							<td><?php echo $r->getPhp53(); ?></td>
							<td><?php if($r->getPhp54() != ''): ?><?php echo $r->getPhp54(); ?><?php else:?><img src="../img/Off.png"><?php endif;?></td>
							<td><?php echo $r->getApache(); ?></td>
							<td><?php echo $r->getMysql(); ?></td>
							<td><?php if($r->getNginx() == 'sim'):?><img src="../img/On.png"><?php else:?><img src="../img/Off.png"><?php endif;?></td>
							<td><?php if($r->getCloudlinux() == 'sim'):?><img src="../img/On.png"><?php else:?><img src="../img/Off.png"><?php endif;?></td>
							<td><?php echo $r->getCpanel(); ?></td>
							<td>
								<a href="editar_servidor.php?id=<?php echo $r->getHdnumber()?>">
									<img src="../img/glyphicons_150_edit.png" title="Edit" width="25" height="25">
								</a>  
								
								<a href="javascript:void(0)" id="<?php echo $r->getHdnumber()?>" class="remove">
									<img src="../img/glyphicons_016_bin.png" title="Remove" width="25" height="25">
								</a>							
							</td>
						</tr>
					<?php endforeach;?>
					
					</tbody>
				</table>
				<span class="pull-right">
				<a href="inserir_servidor.php">
					<button class="btn btn-danger" >
						<strong>Add Server</strong>
					</button>
				</a>
			</span>
			</div><!-- .content -->
		</div> <!-- .container -->
		
	</div><!-- #all -->
</body>
</html>
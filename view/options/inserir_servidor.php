<?php
	
	require_once '../../Controller/ServidorController.php';
	require_once '../../Model/Servidor.php';

	$sc = new ServidorController();
	$rows = array();
	$rows = $sc->carregarSharedAction();
	

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
		
		<style type="text/css">
			#form{
				margin-top: 40px;
			}
			.form-group input{
				width: 300px;
			}
			.form-group select{
				width: 200px;
			}
		</style>
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
							<li><a href="../../index.php" >Shared Server</a>
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
							<li><a href="../../auditorias/index.php">Audit</a></li>
						</ul>
					</div><!-- .navbar-collapse -->
				</div><!-- .container -->
			</div><!-- .navbar -->
		</div>
		<!-- #topo -->
	<div id="all">
		<div class="container" id="container" style="margin-left: 25%;">
			<div class="content">
				<div style="padding-top: 5px;">
					<h3 class="bs-callout bs-callout-info">Add Server</h3>
				</div>
				<div id="form">
					<form method="POST" action="../../Controller/ServidorController.php?acao=inserir" class="form-horizontal" style="width: 500px;">
						<fieldset>
							<div class="control-group">
							
								<div class="form-group">
									<label for="hdnumber" class="col-sm-4 control-label">HDNumber:</label>
										<input type="text" class="form-control col-sm-8"  name="hdnumber" required id="hdnumber"/>
								</div>	
								<div class="form-group">	
									<label for="dc" class="col-sm-4 control-label">DC:</label>
										<select id="dc" class="form-control col-sm-8" name="dc">
											<option value="EUA">EUA</option>
											<option value="BR">BR</option>
											<option value="SPO">SPO</option>
										</select>
								</div>
								<div class="form-group">	
									<label for="tipo" class="col-sm-4 control-label">Tipo:</label>
										<select id="tipo" class="form-control col-sm-8" name="tipo">
											<option value="hospedagem">Hospedagem</option>
											<option value="revenda">Revenda</option>
											<option value="vps">VPS</option>
										</select><br />
								</div>
								<div class="form-group">		
									<label for="hostname" class="col-sm-4 control-label">* Hostname:</label>
										<input type="text" class="form-control col-sm-8"  name="hostname" required id="hostname"/>
								</div>
								<div class="form-group">		
									<label for="ip" class="col-sm-4 control-label">* IP:</label>
										<input type="text" class="form-control col-sm-8"  name="ip" required id="ip"/>
								</div>		
								<div class="form-group">
									<label for="dns1" class="col-sm-4 control-label">* DNS1:</label>
										<input type="text" class="form-control col-sm-8"  name="dns1" required id="dn1"/>
								</div>
								<div class="form-group">		
									<label for="dns2" class="col-sm-4 control-label">* DNS2:</label>
										<input type="text" class="form-control col-sm-8"  name="dns2" required id="dns2"/>
								</div>
								<div class="form-group">		
									<label for="php53" class="col-sm-4 control-label">* PHP 5.3.x:</label>
										<input type="text" class="form-control col-sm-8"  name="php53" required id="php53"/>
								</div>
								<div class="form-group">			
									<label for="php54" class="col-sm-4 control-label">* PHP 5.4.x:</label>
										<input type="text" class="form-control col-sm-8"  name="php54" required id="php54"/>
								</div>
								<div class="form-group">		
									<label for="apache" class="col-sm-4 control-label">* Apache:</label>
										<input type="text" class="form-control col-sm-8"  name="apache" required id="apache"/>		
								</div>	
								<div class="form-group">							
									<label for="mysql" class="col-sm-4 control-label">* Mysql:</label>
										<input type="text" class="form-control col-sm-8"  name="mysql" required id="mysql"/>
								</div>	
								<div class="form-group">		
									<label for="nginx" class="col-sm-4 control-label">* Nginx:</label>
										<select id="nginx" class="form-control col-sm-8" name="nginx">
											<option value="sim">Sim</option>
											<option value="nao">Não</option>
										</select>
								</div>	
								<div class="form-group">		
									<label for="cloudlinux" class="col-sm-4 control-label">* CloudLinux:</label>
										<select id="cloudlinux" class="form-control col-sm-8" name="cloudlinux">
											<option value="sim">Sim</option>
											<option value="nao">Não</option>
										</select>
								</div>	
								<div class="form-group">		
									<label for="cpanel" class="col-sm-4 control-label">* Cpanel:</label>
										<input type="text" class="form-control col-sm-8"  name="cpanel" required id="cpanel"/>
								</div>	
								<br />
								
								<div class="form-group pull-right">
									<div class="col-sm-offset-2 col-sm-10">	
										<input type="submit" class="btn btn-danger" id="salvar" value="Cadastrar" name="salvar" style="width: 100px;"/>
									</div>
								</div>
								<!-- .form-group -->
							</div>
							<!-- .control-group -->
						</fieldset>
					</form>
				</div><!-- #form -->
			</div><!-- .content -->
		</div> <!-- .container -->
		
	</div><!-- #all -->
</body>
</html>
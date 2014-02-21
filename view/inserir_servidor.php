<?php
?>
<!DOCTYPE html!>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../css/estilo.css">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
		<link href="http://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet" type="text/css">
		<title>List Internal HDBR Servers</title>
	</head>
<body>
	<div id="topo">
			
			<div id="logo">
				<a href="default">
					<img src="../img/logo.png" width="385" height="81" border="0">
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
			<div id="container">
				<form style="width: 500px" method="POST" action="../Controller/ServidorController.php?acao=inserir" role="form">
					<fieldset>
						<legend>Inserir novo servidor</legend>
						<div class="control-group">
						
							<div class="form-group">
								<label for="hdnumber" class="col-lg-2 control-label">* HDNumber:</label>
									<input type="text" class="form-control"  name="hdnumber" required id="hdnumber"/><br />
							</div>	
							<div class="form-group">	
								<label for="dc" class="col-lg-2 control-label">DC:</label>
									<select id="dc" class="form-control" name="dc">
										<option value="EUA">EUA</option>
										<option value="BR">BR</option>
										<option value="SPO">SPO</option>
									</select><br />
							</div>
							<div class="form-group">	
								<label for="tipo" class="col-lg-2 control-label">Tipo:</label>
									<select id="tipo" class="form-control" name="tipo">
										<option value="hospedagem">Hospedagem</option>
										<option value="revenda">Revenda</option>
										<option value="VPS">VPS</option>
									</select><br />
							</div>
							<div class="form-group">		
								<label for="hostname" class="col-lg-2 control-label">* Hostname:</label>
									<input type="text" class="form-control"  name="hostname" required id="hostname"/><br />
							</div>
							<div class="form-group">		
								<label for="ip" class="col-lg-2 control-label">* IP:</label>
									<input type="text" class="form-control"  name="ip" required id="ip"/><br />
							</div>		
							<div class="form-group">
								<label for="dns1" class="col-lg-2 control-label">* DNS1:</label>
									<input type="text" class="form-control"  name="dns1" required id="dn1"/><br />
							</div>
							<div class="form-group">		
								<label for="dns2" class="col-lg-2 control-label">* DNS2:</label>
									<input type="text" class="form-control"  name="dns2" required id="dns2"/><br />
							</div>
							<div class="form-group">		
								<label for="php53" class="col-lg-2 control-label">* PHP 5.3.x:</label>
									<input type="text" class="form-control"  name="php53" required id="php53"/><br />
							</div>
							<div class="form-group">			
								<label for="php54" class="col-lg-2 control-label">* PHP 5.4.x:</label>
									<input type="text" class="form-control"  name="php54" required id="php54"/><br />
							</div>
							<div class="form-group">		
								<label for="apache" class="col-lg-2 control-label">* Apache:</label>
									<input type="text" class="form-control"  name="apache" required id="apache"/><br />		
							</div>	
							<div class="form-group">							
								<label for="mysql" class="col-lg-2 control-label">* Mysql:</label>
									<input type="text" class="form-control"  name="mysql" required id="mysql"/><br />
							</div>	
							<div class="form-group">		
								<label for="nginx" class="col-lg-2 control-label">* Nginx:</label>
									<select id="nginx" class="form-control" name="nginx">
										<option value="sim">Sim</option>
										<option value="nao">Não</option>
									</select><br />
							</div>	
							<div class="form-group">		
								<label for="cloudlinux" class="col-lg-2 control-label">* CloudLinux:</label>
									<select id="cloudlinux" class="form-control" name="cloudlinux">
										<option value="sim">Sim</option>
										<option value="nao">Não</option>
									</select><br />
							</div>	
							<div class="form-group">		
								<label for="cpanel" class="col-lg-2 control-label">* Cpanel:</label>
									<input type="text" class="form-control"  name="cpanel" required id="cpanel"/><br />
							</div>	
							<div class="form-group">	
								<input type="submit" class="btn btn-primary btn-xs" id="salvar" value="Cadastrar" name="salvar"/>
							</div>
							<!-- .form-group -->
						</div>
						<!-- .control-group -->
					</fieldset>
				</form>
			</div> 
			<!-- #container -->
		</div> 
		<!-- #corpo -->
		
		<footer>
			<small>Copyright © 2014 - HostDime Brasil - Todos os direitos reservados</small>
		</footer>
	</div><!-- #all -->
</html>
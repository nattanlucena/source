<?php

require_once '../Controller/ServidorController.php';
require_once '../Model/Servidor.php';

if(isset($_GET['id'])){
	
		$sc = new ServidorController();
		$s = $sc->findServer($_GET['id']);
		
		
		$dc = array("SPO", "BR","EUA");
		$tipo = array("hospedagem", "revenda", "vps");
	
}

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
						
							<img src="../img/logo.png" border="0" width="200px;" height="50px;">
						
					</div><!-- .navbar-header -->
					<div class="collapse navbar-collapse pull-right">
						<ul class="nav navbar-nav">
							<li><a href="shared.php" >Shared Server</a>
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
					</div><!-- .navbar-collapse -->
				</div><!-- .container -->
			</div><!-- .navbar -->
		</div>
		<!-- #topo -->
	<div id="all">
		<div class="container" id="container" style="padding-left: 25%;">
			<div class="content">
				<div style="padding-top: 5px;">
					<h3 class="bs-callout bs-callout-info">Edit Server <?php echo $_GET['id'];?></h3>
				</div>
				<div id="form">
					<form method="POST" action="../Controller/ServidorController.php?acao=editar" class="form-horizontal" style="width: 500px;">
						<fieldset>
							<div class="control-group">
								<input type="hidden" name="hdnumber" id="hdnumber" value="<?php echo $s->getHdnumber();?>">
								<div class="form-group">
									<label for="hdnumber" class="col-sm-4 control-label">HDNumber:</label>
										<input type="text" class="form-control col-sm-8"  style="width: 100px;" value="<?php echo $s->getHdnumber();?>" disabled/>
								</div>	
								<div class="form-group">	
									<label for="dc" class="col-sm-4 control-label">DC:</label>
										<select id="dc" class="form-control col-sm-8" name="dc">
											<?php foreach($dc as $a): ?>
												<?php if( $a == $s->getDC() ):?>
													<option value="<?php echo $a;?>"<?php echo "selected='selected'";?>><?php echo $a;?></option>
													<?php else:?>
													<option value="<?php echo $a;?>"><?php echo $a;?></option>
												<?php endif;?>
											<?php endforeach;?>
										</select>
								</div>
								<div class="form-group">	
									<label for="tipo" class="col-sm-4 control-label">Tipo:</label>
										<select id="tipo" class="form-control col-sm-8" name="tipo">
											<?php foreach($tipo as $t):?>
												<?php if($t == $s->getTipo()):?>
													<option value="<?php echo $t;?>"<?php echo "selected='selected'";?>><?php echo $t;?></option>
													<?php else:?>
													<option value="<?php echo $t;?>"><?php echo $t;?></option>
												<?php endif;?>
											<?php endforeach;?>
										</select><br />
								</div>
								<div class="form-group">		
									<label for="hostname" class="col-sm-4 control-label">* Hostname:</label>
										<input type="text" class="form-control col-sm-8"  name="hostname" required id="hostname" value="<?php echo $s->getHostname();?>"/>
								</div>
								<div class="form-group">		
									<label for="ip" class="col-sm-4 control-label">* IP:</label>
										<input type="text" class="form-control col-sm-8"  name="ip" required id="ip" value="<?php echo $s->getIp();?>"/>
								</div>		
								<div class="form-group">
									<label for="dns1" class="col-sm-4 control-label">* DNS1:</label>
										<input type="text" class="form-control col-sm-8"  name="dns1" required id="dn1" value="<?php echo $s->getDns1();?>"/>
								</div>
								<div class="form-group">		
									<label for="dns2" class="col-sm-4 control-label">* DNS2:</label>
										<input type="text" class="form-control col-sm-8"  name="dns2" required id="dns2" value="<?php echo $s->getDns2();?>"/>
								</div>
								<div class="form-group">		
									<label for="php53" class="col-sm-4 control-label">* PHP 5.3.x:</label>
										<input type="text" class="form-control col-sm-8"  name="php53" required id="php53" value="<?php echo $s->getPhp53();?>"/>
								</div>
								<div class="form-group">			
									<label for="php54" class="col-sm-4 control-label">* PHP 5.4.x:</label>
										<input type="text" class="form-control col-sm-8"  name="php54" required id="php54" value="<?php echo $s->getPhp54();?>"/>
								</div>
								<div class="form-group">		
									<label for="apache" class="col-sm-4 control-label">* Apache:</label>
										<input type="text" class="form-control col-sm-8"  name="apache" required id="apache" value="<?php echo $s->getApache();?>"/>		
								</div>	
								<div class="form-group">							
									<label for="mysql" class="col-sm-4 control-label">* Mysql:</label>
										<input type="text" class="form-control col-sm-8"  name="mysql" required id="mysql" value="<?php echo $s->getMysql();?>"/>
								</div>	
								<div class="form-group">		
									<label for="nginx" class="col-sm-4 control-label">* Nginx:</label>
										<select id="nginx" class="form-control col-sm-8" name="nginx">
											<?php if($s->getNginx = "sim"):?>
												<option value="sim" selected="selected">Sim</option>
												<option value="nao">Não</option>
											<?php else:?>
												<option value="nao" selected="selected">Não</option>
												<option value="sim" >Sim</option>
											<?php endif;?>
										</select>
								</div>	
								<div class="form-group">		
									<label for="cloudlinux" class="col-sm-4 control-label">* CloudLinux:</label>
										<select id="cloudlinux" class="form-control col-sm-8" name="cloudlinux">
											<?php if($s->getCloudlinux = "sim"):?>
												<option value="sim" selected="selected">Sim</option>
												<option value="nao">Não</option>
											<?php else:?>
												<option value="nao" selected="selected">Não</option>
												<option value="sim" >Sim</option>
											<?php endif;?>
										</select>
								</div>	
								<div class="form-group">		
									<label for="cpanel" class="col-sm-4 control-label">* Cpanel:</label>
										<input type="text" class="form-control col-sm-8"  name="cpanel" required id="cpanel" value="<?php echo $s->getCpanel();?>"/>
								</div>	
								<br />
								
								<div class="form-group pull-right">
									<div class="col-sm-offset-2 col-sm-10">	
										<input type="submit" class="btn btn-danger" id="salvar" value="Edit" name="salvar" style="width: 100px;"/>
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
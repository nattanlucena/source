<?php 
	require_once '../../Controller/ServidorController.php';
	
	$sc = new ServidorController();
	$ar = $sc->getAllHdAndHostnameAction();
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
		<script src="http://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
		
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
			textarea { 
    			resize: none; 
			}
			input[type="text"]{
				width: 200px;
			}
		</style>
		<script type="text/javascript">
			$(function(){
				$("#day").mask("99/99/9999");
				$("#solved").mask("99/99/9999");
			});	
		</script>
		
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
							<li><a href="../shared.php" >Shared Server</a>
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
							<li><a href="index.php">Audit</a></li>
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
					<h3 class="bs-callout bs-callout-info">New Issue</h3>
				</div>
				<div id="form">
					<form method="POST" action="../../Controller/HistoricoController.php?acao=insert" class="form-horizontal" style="width: 500px;">
						<fieldset>
							<div class="control-group">
							
								<div class="form-group">
									<label for="hdnumber" class="col-sm-4 control-label">Server:</label>
										<select id="hdnumber" class="form-control col-sm-8" name="hdnumber">
										<?php if(is_array($ar)):?>
										<?php foreach($ar as $a):?>
											<option value="<?php echo $a["hdnumber"];?>"><?php echo $a["hostname"];?></option>
										<?php endforeach;?>
										<?php endif;?>
										</select>							
								</div>	
								
								<div class="form-group">	
									<label for="day" class="col-sm-4 control-label">Day:</label>
										<input type="text" class="form-control col-sm-8"  name="day" required id="day"/>
								</div>
								
								<div class="form-group">		
									<label for="ticket" class="col-sm-4 control-label">Ticket:</label>
										<input type="text" class="form-control col-sm-8"  name="ticket" required id="ticket"/>
								</div>
								
								<div class="form-group">		
									<label for="issue" class="col-sm-4 control-label">Issue:</label>
										<input type="text" class="form-control col-sm-8"  name="issue" required id="issue"/>
								</div>	
									
								<div class="form-group">
									<label for="nginx" class="col-sm-4 control-label">Status:</label>
										<select id="status" class="form-control col-sm-8" name="status">
											<option value="solved">Solved</option>
											<option value="unsolved">Unsolved</option>
										</select>
								</div>
								
								<div class="form-group">		
									<label for="solved" class="col-sm-4 control-label">Solved:</label>
										<input type="text" class="form-control col-sm-8"  name="solved" required id="solved"/>
								</div>
								
								<div class="form-group">		
									<label for="downtime" class="col-sm-4 control-label">Downtime:</label>
										<input type="text" class="form-control col-sm-8"  name="downtime" required id="downtime"/>
								</div>
								<div class="form-group">			
									<label for="php54" class="col-sm-4 control-label">Description:</label>
										<textarea  class="form-control"  rows="7" cols="10" name="desc" required id="desc" style="width: 300px;"></textarea>
								</div>
								
								<br />
								
								<div class="form-group pull-right">
									<div class="col-sm-offset-2 col-sm-10">		
									</div>
									<div class="col-sm-offset-2 col-sm-10">	
										<input type="submit" class="btn btn-default" id="back" value="Back" name="backy" onClick="history.back()" style="width: 90px; margin-left: -110px;"/>	
										<input type="submit" class="btn btn-danger" id="save" value="Save" name="save" style="width: 100px;"/>
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
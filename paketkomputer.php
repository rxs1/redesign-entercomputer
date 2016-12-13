<!DOCTYPE html>
<html>
<head>
	<?php
	$title ='Paket Komputer' ;
	include 'head.php';
	?>

</head>
<body>
	<?php include 'header.php'; ?>

	<?php include 'search.php'; ?>
	
	<div class="container">
		<div class="row">
			<div>
				<h2 class="paket"><b>Paket Komputer</b></h2>
				<br>
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#seagate" aria-controls="seagate" role="tab" data-toggle="tab">High-end</a></li>
					<li role="presentation"><a href="#samsung" aria-controls="samsung" role="tab" data-toggle="tab">Middel-end</a></li>
					<li role="presentation"><a href="#WD" aria-controls="WD" role="tab" data-toggle="tab">Low-end</a></li>
				</ul>
				<!-- Tab panes -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="seagate">
						<div class="col-md-12 content">	
							<div class="panel-group accordions" id="accordion">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Paket 1</a>
										</h4>
									</div>
									<div id="collapse1" class="panel-collapse collapse in">
										<div class="panel-body">
											<?php include'dummy-paketkomputer.php'; ?>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Paket 2</a>
										</h4>
									</div>
									<div id="collapse2" class="panel-collapse collapse">
										<div class="panel-body">
											<?php include'dummy-paketkomputer.php'; ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane" id="samsung">			    	
						<div class="col-md-12 content">	
							<div class="panel-group accordions" id="accordion1">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion1" href="#collapse3">Paket 1</a>
										</h4>
									</div>
									<div id="collapse3" class="panel-collapse collapse in">
										<div class="panel-body">
											<?php include'dummy-paketkomputer.php'; ?>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion1" href="#collapse4">Paket 2</a>
										</h4>
									</div>
									<div id="collapse4" class="panel-collapse collapse">
										<div class="panel-body">
											<?php include'dummy-paketkomputer.php'; ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include'footer.php';?>
</body>
</html>
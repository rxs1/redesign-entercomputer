<!DOCTYPE html>
<html>
<head>
	<?php
	$title ='VGA' ;
	include 'head.php';
	?>

</head>
<body>
	<?php include 'header.php'; ?>

	<?php include 'search.php'; ?>
	
	<div class="container">
		<div class="row">
			<div>
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#asus" aria-controls="asus" role="tab" data-toggle="tab">Asus</a></li>
					<li role="presentation"><a href="#galax" aria-controls="galax" role="tab" data-toggle="tab">Galax</a></li>
					<li role="presentation"><a href="#MSI" aria-controls="MSI" role="tab" data-toggle="tab">MSI</a></li>
					<li role="presentation"><a href="#XFX" aria-controls="XFX" role="tab" data-toggle="tab">XFX</a></li>
					<li role="presentation"><a href="#iGame" aria-controls="iGame" role="tab" data-toggle="tab">iGame</a></li>
					<li role="presentation"><a href="#lainnya" aria-controls="lainnya" role="tab" data-toggle="tab">Lainnya</a></li>
					
				</ul>
				<!-- Tab panes -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="asus">
						<div class="col-md-12 content">	
							<div class="panel-group accordions" id="accordion">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">NVIDIA GeForce</a>
										</h4>
									</div>
									<div id="collapse1" class="panel-collapse collapse in">
										<div class="panel-body">
											<?php include'dummy-vga-asus.php'; ?>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">AMD Radeon</a>
										</h4>
									</div>
									<div id="collapse2" class="panel-collapse collapse">
										<div class="panel-body">
											<?php include'dummy-vga-asus.php'; ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane" id="galax">			    	
						<div class="col-md-12 content">	
							<div class="panel-group accordions" id="accordion1">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion1" href="#collapse3">NVIDIA GeForce</a>
										</h4>
									</div>
									<div id="collapse3" class="panel-collapse collapse in">
										<div class="panel-body">
											<?php include'dummy-vga-galax.php'; ?>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion1" href="#collapse4">AMD Radeon</a>
										</h4>
									</div>
									<div id="collapse4" class="panel-collapse collapse">
										<div class="panel-body">
											<?php include'dummy-vga-galax.php'; ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane" id="lainnya">			    	
						<div class="col-md-12 content">	
							<div class="panel-group accordions" id="accordion2">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion2" href="#collapse5">NVIDIA GeForce</a>
										</h4>
									</div>
									<div id="collapse5" class="panel-collapse collapse in">
										<div class="panel-body">
											<?php include'dummy-vga-lainnya.php'; ?>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion2" href="#collapse6">AMD Radeon</a>
										</h4>
									</div>
									<div id="collapse6" class="panel-collapse collapse">
										<div class="panel-body">
											<?php include'dummy-vga-lainnya.php'; ?>
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
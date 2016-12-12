<!DOCTYPE html>
<html>
<head>
	<?php
	$title ='Power Supply' ;
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
					<li role="presentation" class="active"><a href="#seasonic" aria-controls="asus" role="tab" data-toggle="tab">Seasonic</a></li>
					<li role="presentation"><a href="#superflower" aria-controls="galax" role="tab" data-toggle="tab">Super Flower</a></li>
					<li role="presentation"><a href="#bequiet" aria-controls="MSI" role="tab" data-toggle="tab">Be Quiet</a></li>
					<li role="presentation"><a href="#segotep" aria-controls="XFX" role="tab" data-toggle="tab">Segotep</a></li>
					<li role="presentation"><a href="#xfx" aria-controls="iGame" role="tab" data-toggle="tab">XFX</a></li>
					<li role="presentation"><a href="#lainnya" aria-controls="lainnya" role="tab" data-toggle="tab">Lainnya</a></li>
				</ul>
				<!-- Tab panes -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="seasonic">
						<div class="col-md-12 content">	
							<div class="panel-group accordions" id="accordion">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">400W - 600W</a>
										</h4>
									</div>
									<div id="collapse1" class="panel-collapse collapse in">
										<div class="panel-body">
											<?php include'dummy-powersupply-seasonic.php'; ?>
											<center>
												<ul class="pagination">
													<li><a href="#">1</a></li>
													<li><a href="#">2</a></li>
													<li><a href="#">3</a></li>
													<li><a href="#">4</a></li>
													<li><a href="#">5</a></li>
													<li><a href="#">></a></li>
													<li><a href="#">>></a></li>
												</ul>
											</center>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">600W - 800W</a>
										</h4>
									</div>
									<div id="collapse2" class="panel-collapse collapse">
										<div class="panel-body">
											<?php include'dummy-powersupply-seasonic.php'; ?>
											<center>
												<ul class="pagination">
													<li><a href="#">1</a></li>
													<li><a href="#">2</a></li>
													<li><a href="#">3</a></li>
													<li><a href="#">4</a></li>
													<li><a href="#">5</a></li>
													<li><a href="#">></a></li>
													<li><a href="#">>></a></li>
												</ul>
											</center>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">800W - 1000W</a>
										</h4>
									</div>
									<div id="collapse3" class="panel-collapse collapse">
										<div class="panel-body">
											<?php include'dummy-powersupply-seasonic.php'; ?>
											<center>
												<ul class="pagination">
													<li><a href="#">1</a></li>
													<li><a href="#">2</a></li>
													<li><a href="#">3</a></li>
													<li><a href="#">4</a></li>
													<li><a href="#">5</a></li>
													<li><a href="#">></a></li>
													<li><a href="#">>></a></li>
												</ul>
											</center>
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
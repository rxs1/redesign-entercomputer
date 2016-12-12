<!DOCTYPE html>
<html>
<head>
<?php
	$title ='RAM' ;
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
			    	<li role="presentation" class="active"><a href="#galax" aria-controls="galax" role="tab" data-toggle="tab">Galax</a></li>
			    	<li role="presentation"><a href="#corsair" aria-controls="corsair" role="tab" data-toggle="tab">Corsair</a></li>
					<li role="presentation"><a href="#geil" aria-controls="geil" role="tab" data-toggle="tab">Geil</a></li>
					<li role="presentation"><a href="#avexir" aria-controls="avexir" role="tab" data-toggle="tab">Avexir</a></li>
					<li role="presentation"><a href="#kingston" aria-controls="kingston" role="tab" data-toggle="tab">Kingston</a></li>
			    	<li role="presentation"><a href="#lainnya" aria-controls="lainnya" role="tab" data-toggle="tab">Lainnya</a></li>
			    
			  	</ul>
			   	<!-- Tab panes -->
			  	<div class="tab-content">
			    	<div role="tabpanel" class="tab-pane active" id="intel">
			    		<div class="col-md-12 content">	
				    		<div class="panel-group accordions" id="accordion">
						    	<div class="panel panel-default">
						      		<div class="panel-heading">
						        		<h4 class="panel-title">
						          			<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Untuk PC</a>
						        		</h4>
						      		</div>
						      		<div id="collapse1" class="panel-collapse collapse in">
						        		<div class="panel-body">
						        			<?php include'dummy-ram-galax.php'; ?>
						        		</div>
						      		</div>
						      		<div class="panel panel-default">
						      			<div class="panel-heading">
						       				<h4 class="panel-title">
						         				<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Untuk Laptop</a>
						        			</h4>
						      			</div>
						    		</div>
						    		<div id="collapse2" class="panel-collapse collapse">
						        		<div class="panel-body">
						        			<?php include'dummy-ram-galax.php'; ?>
						        		</div>
						      		</div>
						    	</div>
							</div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane" id="corsair">
			    	
			    	<div class="col-md-12 content">	
			    		<div class="panel-group accordions" id="accordion2">
						    <div class="panel panel-default">
						      	<div class="panel-heading">
						        	<h4 class="panel-title">
						          		<a data-toggle="collapse" data-parent="#accordion2" href="#collapse1b">Untuk PC</a>
						        	</h4>
						      	</div>
						      	<div id="collapse1b" class="panel-collapse collapse in">
						        	<div class="panel-body">
						        		<?php include'dummy-ram-corsair.php'; ?>
						        	</div>
						      	</div>
						      	<div class="panel panel-default">
						      			<div class="panel-heading">
						       				<h4 class="panel-title">
						         				<a data-toggle="collapse" data-parent="#accordion2" href="#collapse2b">Untuk Laptop</a>
						        			</h4>
						      			</div>
						    		</div>
						    		<div id="collapse2b" class="panel-collapse collapse">
						        		<div class="panel-body">
						        			<?php include'dummy-ram-corsair.php'; ?>
						        		</div>
						      		</div>
						      	</div>
						    </div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane" id="lainnya">

					<div class="col-md-12 content">	
			    		<div class="panel-group accordions" id="accordion3">
						    <div class="panel panel-default">
						      	<div class="panel-heading">
						        	<h4 class="panel-title">
						          		<a data-toggle="collapse" data-parent="#accordion3" href="#collapse1c">Untuk PC</a>
						        	</h4>
						      	</div>
						      	<div id="collapse1c" class="panel-collapse collapse in">
						        	<div class="panel-body">
						        		<?php include'dummy-ram-lainnya.php'; ?>
						        	</div>
						      	</div>
						      	<div class="panel panel-default">
						      			<div class="panel-heading">
						       				<h4 class="panel-title">
						         				<a data-toggle="collapse" data-parent="#accordion3" href="#collapse2c">Untuk Laptop</a>
						        			</h4>
						      			</div>
						    		</div>
						    		<div id="collapse2c" class="panel-collapse collapse">
						        		<div class="panel-body">
						        			<?php include'dummy-ram-lainnya.php'; ?>
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
	</div>

	<?php include'footer.php';?>
</body>
</html>
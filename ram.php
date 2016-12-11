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
						         				<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Untuk Laptop</a>
						        			</h4>
						      			</div>
						    		</div>
						    		<div id="collapse2" class="panel-collapse collapse">
						        		<div class="panel-body">
						        			<?php include'dummy-ram-corsair.php'; ?>
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
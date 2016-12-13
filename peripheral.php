<!DOCTYPE html>
<html>
<head>
<?php
	$title ='Peripheral' ;
	include 'head.php';
?>

</head>
<body>
	<?php include 'header.php'; ?>

	<?php include 'search.php'; ?>

	<div class="container">
		<div class="form-group">
			<label for="barang"></label>
				<select>
					<option value="case">Case</option>
					<option value="anything"></option>	
				</select>
		</div>
	</div><br/>
	
	<div class="container">
		<div class="row">
			<div>
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active"><a href="#segotep" aria-controls="segotep" role="tab" data-toggle="tab">Segotep</a></li>
			    	<li role="presentation"><a href="#corsair" aria-controls="corsair" role="tab" data-toggle="tab">Corsair</a></li>
					<li role="presentation"><a href="#cubegaming" aria-controls="cubegaming" role="tab" data-toggle="tab">Cube Gaming</a></li>
					<li role="presentation"><a href="#bequiet" aria-controls="bequiet" role="tab" data-toggle="tab">Be Quiet!</a></li>
					<li role="presentation"><a href="#raijintek" aria-controls="raijintek" role="tab" data-toggle="tab">Raijintek</a></li>
			    	<li role="presentation"><a href="#lainnya" aria-controls="lainnya" role="tab" data-toggle="tab">Lainnya</a></li>
			    
			  	</ul>
			  	<!-- Tab panes -->
			  	<div class="tab-content">
			    	<div role="tabpanel" class="tab-pane active" id="segotep">
			    		<div class="col-md-12 content">	
				    		<div class="panel-group accordions" id="accordion">
						    	<div class="panel panel-default">
						      		<div class="panel-heading">
						        		<h4 class="panel-title">
						          			<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Micro</a>
						        		</h4>
						      		</div>
						      		<div id="collapse1" class="panel-collapse collapse in">
						        		<div class="panel-body">
						        			<?php include'dummy-peripheral-segotep.php'; ?>
						        		</div>
						      		</div>
						      		<div class="panel panel-default">
						      			<div class="panel-heading">
						       				<h4 class="panel-title">
						         				<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Mini</a>
						        			</h4>
						      			</div>
						    		</div>
						    		<div id="collapse2" class="panel-collapse collapse">
						        		<div class="panel-body">
						        			<?php include'dummy-peripheral-segotep.php'; ?>
						        		</div>
						      		</div>
						      		<div class="panel panel-default">
						      			<div class="panel-heading">
						       				<h4 class="panel-title">
						         				<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Tower</a>
						        			</h4>
						      			</div>
						    		</div>
						    		<div id="collapse3" class="panel-collapse collapse">
						        		<div class="panel-body">
						        			<?php include'dummy-peripheral-segotep.php'; ?>
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
<!DOCTYPE html>
<html>
<head>
<?php
	$title ='Processor' ;
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
			    <li role="presentation" class="active"><a href="#intel" aria-controls="intel" role="tab" data-toggle="tab">Intel</a></li>
			    <li role="presentation"><a href="#amd" aria-controls="AMD" role="tab" data-toggle="tab">AMD</a></li>
			    
			  </ul>
			  <!-- Tab panes -->
			  <div class="tab-content">
			    <div role="tabpanel" class="tab-pane active" id="intel">
			    	<div class="col-md-12 content">	
				    	<div class="panel-group" id="accordion">
						    <div class="panel panel-default">
						      <div class="panel-heading">
						        <h4 class="panel-title">
						          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Socket Intel LGA 1150</a>
						        </h4>
						      </div>
						      <div id="collapse1" class="panel-collapse collapse in">
						        <div class="panel-body">
						        	<?php include'dummy-processor-intel.php'; ?>
						        </div>
						      </div>
						    </div>
						    <div class="panel panel-default">
						      <div class="panel-heading">
						        <h4 class="panel-title">
						          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Socket Intel LGA 1151</a>
						        </h4>
						      </div>
						      <div id="collapse2" class="panel-collapse collapse">
						        <div class="panel-body">
						        	<?php include'dummy-processor-intel.php'; ?>
						        </div>
						      </div>
						    </div>
						    <div class="panel panel-default">
						      <div class="panel-heading">
						        <h4 class="panel-title">
						          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Socket Intel LGA 1152</a>
						        </h4>
						      </div>
						      <div id="collapse3" class="panel-collapse collapse">
						        <div class="panel-body">
						        	<?php include'dummy-processor-intel.php'; ?>
						        </div>
						      </div>
						    </div>
						  </div>
					  </div>
			    </div>
			    <div role="tabpanel" class="tab-pane" id="amd">
			    	
			    	<div class="col-md-12 content">	
			    		<div class="panel-group" id="accordion2">
						    <div class="panel panel-default">
						      <div class="panel-heading">
						        <h4 class="panel-title">
						          <a data-toggle="collapse" data-parent="#accordion2" href="#collapse1b">Socket AM2 </a>
						        </h4>
						      </div>
						      <div id="collapse1b" class="panel-collapse collapse in">
						        <div class="panel-body">
						        	<?php include'dummy-processor-amd.php'; ?>
						        </div>
						      </div>
						    </div>
						    <div class="panel panel-default">
						      <div class="panel-heading">
						        <h4 class="panel-title">
						          <a data-toggle="collapse" data-parent="#accordion2" href="#collapse2b">Socket AM2+</a>
						        </h4>
						      </div>
						      <div id="collapse2b" class="panel-collapse collapse">
						        <div class="panel-body">
						        	<?php include'dummy-processor-amd.php'; ?>
						        </div>
						      </div>
						    </div>
						    <div class="panel panel-default">
						      <div class="panel-heading">
						        <h4 class="panel-title">
						          <a data-toggle="collapse" data-parent="#accordion2" href="#collapse3b">Socket AM3</a>
						        </h4>
						      </div>
						      <div id="collapse3b" class="panel-collapse collapse">
						        <div class="panel-body">
						        <?php include'dummy-processor-amd.php'; ?>
						        	
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
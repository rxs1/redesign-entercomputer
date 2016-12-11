<!DOCTYPE html>
<html>
<head>
<?php
	$title ='Storage' ;
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
			    <li role="presentation" class="seagate"><a href="#seagate" aria-controls="seagate" role="tab" data-toggle="tab">Seagate</a></li>
			    <li role="presentation"><a href="#samsung" aria-controls="samsung" role="tab" data-toggle="tab">Samsung</a></li>
				<li role="presentation"><a href="#lainnya" aria-controls="lainnya" role="lainnya" data-toggle="tab">Lainnya</a></li>
			    
			  </ul>
			  <!-- Tab panes -->
			  <div class="tab-content">
			    <div role="tabpanel" class="tab-pane active" id="seagate">
			    	<div class="col-md-12 content">	
				    	<div class="panel-group accordions" id="accordion">
						    <div class="panel panel-default">
						      <div class="panel-heading">
						        <h4 class="panel-title">
						          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">HDD</a>
						        </h4>
						      </div>
						      <div id="collapse1" class="panel-collapse collapse in">
						        <div class="panel-body">
						        	<?php include'dummy-storage-seagate.php'; ?>
						        </div>
						      </div>
						    </div>
						    <div class="panel panel-default">
						      <div class="panel-heading">
						        <h4 class="panel-title">
						          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">SSD</a>
						        </h4>
						      </div>
						      <div id="collapse2" class="panel-collapse collapse">
						        <div class="panel-body">
						        	<?php include'dummy-storage-seagate.php'; ?>
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
						          <a data-toggle="collapse" data-parent="#accordion1" href="#collapse3">HDD</a>
						        </h4>
						      </div>
						      <div id="collapse3" class="panel-collapse collapse in">
						        <div class="panel-body">
						        	<?php include'dummy-storage-samsung.php'; ?>
						        </div>
						      </div>
						    </div>
						    <div class="panel panel-default">
						      <div class="panel-heading">
						        <h4 class="panel-title">
						          <a data-toggle="collapse" data-parent="#accordion1" href="#collapse4">SSD</a>
						        </h4>
						      </div>
						      <div id="collapse4" class="panel-collapse collapse">
						        <div class="panel-body">
						        	<?php include'dummy-storage-samsung.php'; ?>
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
						          <a data-toggle="collapse" data-parent="#accordion2" href="#collapse5">HDD</a>
						        </h4>
						      </div>
						      <div id="collapse5" class="panel-collapse collapse in">
						        <div class="panel-body">
						        	<?php include'dummy-storage-lainnya.php'; ?>
						        </div>
						      </div>
						    </div>
						    <div class="panel panel-default">
						      <div class="panel-heading">
						        <h4 class="panel-title">
						          <a data-toggle="collapse" data-parent="#accordion2" href="#collapse6">SSD</a>
						        </h4>
						      </div>
						      <div id="collapse6" class="panel-collapse collapse">
						        <div class="panel-body">
						        	<?php include'dummy-storage-lainnya.php'; ?>
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
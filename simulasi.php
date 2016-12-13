<!DOCTYPE html>
<html>
<head>
	<?php
	$title ='Simulasi Harga' ;
	include 'head.php';
	?>

</head>
<body>
	<?php include 'header.php'; ?>

	<?php include 'search.php'; ?>
	<div class="container simulasi">
		<center><h3> Simulasi Harga</h3></center>
		<hr>		
		<div class="panel panel-default">
			<div class="panel-body">
				<span class="col-md-4" style="margin-top:1%"><a href="#" "><i class="glyphicon glyphicon-trash btn btn-danger btn-sm"></i></a> Intel core i3 LGA 1151</span> <span class="col-md-1"><input class="form-control" type="number" value="1" ></span> <span style="margin-top:1%" class=" pull-right">Rp3.000.000</span>
			</div>
		</div>	
		<div class="panel panel-default">
			<div class="panel-body">
				<span class="col-md-4" style="margin-top:1%"><a href="#" "><i class="glyphicon glyphicon-trash btn btn-danger btn-sm"></i></a>  AMD Athlon X2</span> <span class="col-md-1"><input class="form-control" type="number" value="1" ></span> <span style="margin-top:1%" class=" pull-right">Rp3.002.000</span>
			</div>
		</div>	
		<div class="panel panel-default">
			<div class="panel-body">
				<span class="col-md-4" style="margin-top:1%"><a href="#" "><i class="glyphicon glyphicon-trash btn btn-danger btn-sm"></i></a> Asus GTX 1060 6GB DDR5 Dual OC</span> <span class="col-md-1"><input class="form-control" type="number" value="1" ></span> <span style="margin-top:1%" class=" pull-right">Rp4.750.000</span>
			</div>
		</div>	

		<div class=" panel panel-default">
			<div class="panel-body">
				<span class="col-md-4" style="margin-top:1%">Total Harga</span> <span class="col-md-1"><input disabled class="form-control" type="text" value="3" ></span> <span style="margin-top:1%" class=" pull-right">Rp10.752.000</span>
			</div>
		</div>	
		<br>
		<br>
		<br>
		<br>


		<p><center><button class="btn btn-primary"> Kosongkan Simulasi</button> <button class="btn btn-primary"> Print Priview</button></center> </p>
		<br>
		<br>
	</div>


	<div class="container promo">
		<div>
			<h4 class="judul"><b>PRODUK LAINNYA</b></h4>
		</div>
		<hr>
		<div class="row" >
			<div class="col-md-1 arrow-left1">
				<i class="fa fa-arrow-circle-left"></i>
			</div>
			<div class="col-md-10">
				
				<a href="#" data-toggle="modal" data-target="#myModal1">
					<div class="col-md-2">
						<div class="thumbnail">
							<img src="assets/img/processor-1.jpg" alt="intel">
							<div class="caption">
								<center>
									<p>Intel i3 LGA 1151</p>
									<p>Rp3.000.000</p>
								</center>
							</div>
						</div>
					</div>
				</a>

				<a href="#" data-toggle="modal" data-target="#myModal1">
					<div class="col-md-2">
						<div class="thumbnail">
							<img src="assets/img/processor-1.jpg" alt="intel">
							<div class="caption">
								<center>
									<p>Intel i3 LGA 1151</p>
									<p>Rp3.000.000</p>
								</center>
							</div>
						</div>
					</div>
				</a>
				<a href="#" data-toggle="modal" data-target="#myModal1">
					<div class="col-md-2">
						<div class="thumbnail">
							<img src="assets/img/processor-1.jpg" alt="intel">
							<div class="caption">
								<center>
									<p>Intel i3 LGA 1151</p>
									<p>Rp3.000.000</p>
								</center>
							</div>
						</div>
					</div>
				</a>
				<a href="#" data-toggle="modal" data-target="#myModal1">
					<div class="col-md-2">
						<div class="thumbnail">
							<img src="assets/img/processor-1.jpg" alt="intel">
							<div class="caption">
								<center>
									<p>Intel i3 LGA 1151</p>
									<p>Rp3.000.000</p>
								</center>
							</div>
						</div>
					</div>
				</a>
				<a href="#" data-toggle="modal" data-target="#myModal1">
					<div class="col-md-2">
						<div class="thumbnail">
							<img src="assets/img/processor-1.jpg" alt="intel">
							<div class="caption">
								<center>
									<p>Intel i3 LGA 1151</p>
									<p>Rp3.000.000</p>
								</center>
							</div>
						</div>
					</div>
				</a>
				<a href="#" data-toggle="modal" data-target="#myModal1">
					<div class="col-md-2">
						<div class="thumbnail">
							<img src="assets/img/processor-1.jpg" alt="intel">
							<div class="caption">
								<center>
									<p>Intel i3 LGA 1151</p>
									<p>Rp3.000.000</p>
								</center>
							</div>
						</div>
					</div>
				</a>
			</div>	

			
			<div class="col-md-1 arrow-right1">
				<i class="fa fa-arrow-circle-right"></i>
			</div>
			
			<?php include'dummy-homepage.php'; ?>
		</div>
	</div>
	
	<?php include'footer.php';?>
</body>
</html>
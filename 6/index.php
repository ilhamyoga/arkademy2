<?php
	error_reporting(0);
	include'database.php';
	$db= new database();
	session_start();
?>

<html>
	<head>
		<title>APLIKASI</title>
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="assets/style.css">
	</head>
	<body>
		<div class="container my-4">
  		<div class="row d-flex justify-content-center">
   			<div class="col-md-7">
   				<center>
   				<?php 
   					if(isset($_SESSION['msg'])) {
							echo $_SESSION['msg'];
							session_destroy();
			  		}
					?>
					</center><br>

    			<div class="card">
    				<h5 class="card-header info-color white-text text-center py-2">
      				<strong>DATA PROGRAMMER</strong>
    				</h5>
    				<div class="card-body">
    					<form action="proses.php?load=insert" method="POST">
	    					<div class="input-group">
								  <input class="form-control" type="text" name="nama" placeholder="Input tambah Programmer">
								  <div class="input-group-append">
								    <button type="submit" class="input-group-text">ADD</button>
								  </div>
								</div>
							</form>
						</div>
    			</div>
    		</div>
  		</div>
		</div>

		<?php
			foreach ($db->tampil() as $data) {
		?>
		<div class="container my-4">
			<div class="row d-flex justify-content-center">
				<div class="col-md-7 table-responsive">
					<table border="1">
						<tr>
	        		<td id="td1" class="co1">
	            	<b><?php echo $data['name'] ?></b>
	            	<?php $x = $data['id'] ?>
	            </td>
            	<td id="td2" rowspan="2">
            		<form action="proses.php?load=insert_skil" method="POST">
            			<div class="input-group">
						  			<input class="form-control" type="text" name="nama" placeholder="Tambah Skill">
						  			<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
						  			<div class="input-group-append">
						    			<button type="submit" class="input-group-text">ADD</button>
						  			</div>
									</div>
            		</form>
          		</td>
	        	</tr>
	        	<tr>
	        		<td id="td1" class="co2">
	        			<?php foreach ($db->tampil_skil($x) as $data2) { ?>
	        				<?php echo $data2['name'] ?>
	        				<?php echo "," ?>
	        			<?php } ?>
	        		</td>
	        	</tr>
					</table>
				</div>
			</div>
		</div>
		<?php } ?>

		<script src="assets/js/bootstrap.min.js"></script>
	</body>
</html>
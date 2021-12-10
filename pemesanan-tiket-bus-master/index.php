<?php
	
	include 'config/koneksi.php';

	session_start();

	if(isset($_GET['halaman'])) $halaman = $_GET['halaman']; 
	    else $halaman = "index";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>PO. Sumber Alam Pondok Ungu</title>

	<script src="bootstrap/js/jquery.js"></script>
	
	<!-- Memanggil CSS bootstrap -->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	
	<link rel="stylesheet" href="bootstrap/datepicker/themes/base/jquery.ui.all.css">
	
	<script src="bootstrap/js/bootstrap.min.js"></script>

	<!-- Start JS Datepicker -->
	<script src="bootstrap/js/jquery.js"></script>

	<style type="text/css">
	    .row {
	    	padding-bottom: 15px;
	    	padding-top: 15px;
	    }
	    
	</style>
</head>


<body>

	<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background: #dddbdb">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<img src="images/logo.png" width="300px" height="50px" sizes="relative">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				    <span class="sr-only">Toggle navigation</span>
				    <span class="icon-bar"></span>
				    <span class="icon-bar"></span>
				    <span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
				    <li>
				        <a href="index.php?halaman=cara_pesan" style="color: #010102">
				            <span class="glyphicon glyphicon-list-alt"></span>
				            Cara Pemesanan
				        </a>
				    </li>
				    <li>
				        <a href="index.php?halaman=trayek" style="color: #010102">
				        	<span class="glyphicon glyphicon-road"></span>
				            Info Jalur
				        </a>
				    </li>
				    <li>
				        <a href="index.php?halaman=pemesanan" style="color: #010102">
				            <span class="glyphicon glyphicon-pencil"></span>
				            Pemesanan
				        </a>
				    </li>
				    <li>
				        <a href="index.php?halaman=cek_proses" style="color: #010102">
				            <span class="glyphicon glyphicon-check"></span>
				            Cek Proses
				        </a>
				    </li>
				    <li>
				    	<a href="index.php?halaman=konfirmasi_pembayaran" style="color: #010102">
				    	    <span class="glyphicon glyphicon-share"></span>
				    	    Konfirmasi Pembayaran
				    	</a>
				    </li>
				</ul>
			</div>
			<!-- / navbar collapse -->
		</div>
		<!-- / container -->
	</nav>
	<?php
		include 'slideimage.php';
	?>
	<!-- Content -->
	<div class="container">
		<div class="row">
			<div class="col-md-2">
				
			</div>
			<div class="col-md-8">
				<?php
					
					//menu navbar
					if ($halaman=='index')
						include 'awal.php';
					elseif ($halaman=='cara_pesan')
						include 'cara_pesan.php';
					elseif ($halaman=='trayek')
						include 'trayek.php';
					elseif ($halaman=='pemesanan')
						include 'pemesanan.php';
					elseif ($halaman=='cek_proses')
						include 'cek_proses.php';
					elseif ($halaman=='konfirmasi_pembayaran')
						include 'konfirmasi_bayar.php';

					//footer
					elseif ($halaman=='info_pembayaran')
						include 'info_pembayaran.php';
					elseif ($halaman=='about')
						include 'about.php';

					//kursi
					elseif ($halaman=='kursi_ekonomi')
						include 'kursi_ekonomi.php';
					elseif ($halaman=='kursi')
						include 'kursi.php';

					//pemesanan
					elseif ($halaman=='konfirmasi')
						include 'konfirm_pesanan.php';

				?>
				<br><br>
			</div>
			<div class="col-md-2">
				
			</div>
		</div>
		
		<br><br><br><br><br><br>

	</div>

	<footer style="background:#010102;">
	    <div class="container">
	    	<!-- Contact us form -->
	    	<div class="col-md-4">
	    		<div class="headline">
	    		    <h4><font color="#FFFFFF">CONTACT US</font></h4>
	    		</div>
	    		<hr>
	    		<div class="content">
	    			<font color="#FFFFFF">
	    				<h5>
	    					<p>
	    						<span class="glyphicon glyphicon-map-marker">&nbsp;</span>
	    					    Jl. Pandansari, Kejobong, Purbaligga, Jawa Tengah RT 13 RW 05
	    					</p>

	    					<p>
	    						<span class="glyphicon glyphicon-earphone">&nbsp; </span>  
	    					    0821-4455-9806
	    					</p>
	    					<p>
	    						<span class="glyphicon glyphicon-calendar">&nbsp;</span>
	    						Sunday - Saturday
	    					</p>
	    					<p>
	    						<span class="glyphicon glyphicon-time">&nbsp;</span>
	    						9:00 AM until 5:00 PM
	    					</p>
	    				</h5>
	    			</font>            
	    		</div>
	    	</div>
	    	<div class="col-md-4">
	    	    <div class="headline">
	    	        <h4><font color="#FFFFFF">TRAYEK</font></h4>
	    	    </div>
	    	    <hr>
	    	    <div class="content">
	    	    	<font color="#FFFFFF">
	    				<h5>
	    					<p>
	    						Agen Pondok Ungu - Purwokerto    
	    					</p>
	    					<p>
	    						Agen Pondok Ungu - Yogyakarta
	    					</p>
	    				</h5>
	    			</font>            
	    	    </div>
	    	</div>
	    	<div class="col-md-4">
	    	    <div class="headline">
	    	        <h4><font color="#FFFFFF">ABOUT US</font></h4>
	    	    </div>
	    	    <hr>
	    	    <div class="content">
	    	    	<font color="#FFFFFF">
	    				<h5>
	    					<p>
	    						<a href="index.php?halaman=info_pembayaran" style="color: #FFFFFF">
	    							INFO PEMBAYARAN
	    						</a>    
	    					</p>
	    					<p>
	    						<a href="index.php?halaman=about" style="color: #FFFFFF">
	    							ABOUT P.O HARYANTO
	    						</a>
	    					</p>
	    				</h5>
	    			</font>            
	    	    </div>	
	    	</div>
	    	<!--</div>-->

	    	<div class="col-md-12 text-center">
	    		<hr>
	    		<font color="#FFFFFF">
	    			<p>
	    				Copyright &copy; Fajar Al Fansyah
	    			</p>
	    		</font>
	    	</div>	
	    		
	    </div>
	</footer>

</body>
		<script src="bootstrap/datepicker/js/jquery-1.7.2.js"></script>
		<script src="bootstrap/datepicker/ui/jquery.ui.core.js"></script>


		<script src="bootstrap/datepicker/ui/jquery.ui.widget.js"></script>
		<script src="bootstrap/datepicker/ui/jquery.ui.datepicker.js"></script>
		<script>
		$(function() {
		    $( "#datepicker" ).datepicker({
		    dateFormat:"yy/mm/dd",
		        changeMonth: true,
		        changeYear: true
		    });
		});
		</script>
		<script>
	            $(".input-group.date").datepicker({autoclose: true, todayHighlight: true})
	        </script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</html>

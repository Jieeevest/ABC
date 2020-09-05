<?php 
/*
STMIK IKMI CIREBON

- Aji M. Iqbal Fadhilah
- Muhammad Ridho
- Singgih Budi Purnadi


*/

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Ekoji Challenge</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-6">
				<h2 class="text-center my-3" style="font-size: 36px;font-family: monospace;">Ekoji Challenge</h2>
			</div>
		</div>
		<form method="POST">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<div class="form-group">
					<label class="large mb-1"><b>Uang yang ingin dibelanjakan</b></label>
					<input autofocus autocomplete="off" type="text" name="uang" class="form-control" value="<?= $uang ?? ''?>" required>
				</div>
				<div class="form-group">
					<label class="large mb-1"><b>Harga Permen</b></label>
					<input type="text" required name="hargapermen" class="form-control" autocomplete="off">
				</div>
				<div class="form-group">
					<label class="large mb-1"><b>Jumlah bungkus permen yang bisa ditukarkan</b></label>
					<input type="text" required name="jmlbungkus" class="form-control" autocomplete="off">
				</div>
				<div class="form-group">
					<label class="large mb-1"><b>Jumlah Bonus Permen yang didapat</b></label>
					<div class="input-group">
						<input type="text" required name="permenbonus" class="form-control" autocomplete="off">
						<div class="input-group-append"> <span class="input-group-text">Permen</span></div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<input type="submit" name="submit" value="Calculate" class="btn btn-success btn-block">
				<button onclick="location.href='ekojichallenge1.php'" type="button" name="reset" class="btn btn-danger mt-1 btn-block">Reset</button>
			</div>
		</div>
		</form>
		<hr class="bg-info my-5">
<?php 
	error_reporting('all');
	$uang = $_POST['uang'];
	$hargapermen = $_POST['hargapermen'];
	$jmlbungkus = $_POST['jmlbungkus'];
	$bonuspermen = $_POST['permenbonus'];

	$permen = 0;
	$niqmati = 0;
	$sisabungkus = 0;
	$agg = 1;
	

		if(isset($_POST['submit'])){
			$permen = round($uang/$hargapermen); 
			$niqmati = 0 + $permen;
			do{
				$bonus = round($permen/$jmlbungkus);
				$sisabungkus = $permen%$jmlbungkus;
				$bonus *= $bonuspermen;
				$niqmati += $bonus;

				$permen = $bonus;
				$permen += $sisabungkus;
				if($permen/$jmlbungkus <1){
					break;
				}

				
			}while($agg == 1);
			$sisabungkus = $permen;
		
		}
?>		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-6">
				<h2 class="text-center my-3" style="font-size: 36px;font-family: monospace;">Output</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-6">
				<label class="large"><b>Jumlah Permen yang dinikmati : <?php echo $niqmati ?> Permen</b></label>
			</div>
		</div>
		<div class="row" style="margin-bottom: 150px">
			<div class="col-md-3"></div>
			<div class="col-6">
				<label class="large"><b>Sisa Bungkus yang tersimpan : <?php echo $sisabungkus ?> Permen</b></label>
			</div>
		</div>
<?php 
?>
	</div>



</body>
</html>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<?php 
	/*Tantangan Algoritma Permen dan Bungkusnya*/




 ?>
<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

	<title>DOMPDF</title>
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col">
				<!-- link kop surat -->
				<div class="card mt-3">
					<div class="card-body">
						<h5 class="card-title">KOP SURAT</h5>
						<p class="card-text">Klik link dibawah untuk melihat praktek dompdf </p>

						<a href="<?= base_url('welcome/praktek') ?>" class="btn btn-info">Lihat</a>
						<a href="<?= base_url('welcome/praktek_print') ?>" class="btn btn-primary">Print</a>
					</div>

				</div>

				<!-- link tugas id card -->
				<div class="card mt-3">
					<div class="card-body">
						<h5 class="card-title">TUGAS ID CARD</h5>
						<p class="card-text">Klik link dibawah untuk melihat tugas dompdf</p>

						<a href="<?= base_url('welcome/tugas') ?>" class="btn btn-info">Lihat</a>
						<a href="<?= base_url('welcome/tugas_print') ?>" class="btn btn-primary">Print</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
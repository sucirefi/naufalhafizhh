<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Aplikasi Perpustakaan ID</title>
	<link href="<?= base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
	<link href="<?= base_url('assets/fontawesome/css/fontawesome-all.css');?>" rel="stylesheet">
	<link href="<?= base_url('assets/fontawesome/css/fontawesome-all.min.css');?>" rel="stylesheet">
	<style>	
		body{
			background: #6495ED;
		}
	</style>

</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fuild">
			<div class="collpase naver-collpase">
				<ul class="nav navbar-nav">
					<li>
						<a href="<?=base_url('Dashboard')?>"><b>Perpustakaan ID</b></a>
					</li>
					<li>
						<a href="<?=base_url('anggota')?>"><b>Data Anggota</b></a>
					</li>
					<li>
						<a href="<?=base_url('buku')?>"><b>Data Buku</b></a>
					</li>
					<li>
						<a href="<?=base_url('Transaksi')?>"><b>Transaksi</b></a>
					</li>
					<li>
						<a href="<?=base_url('Logout')?>"><b>Log Out</b></a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">

		<?php
		$data['nip']=$nip;
		$this->load->view($content,$data);
		?>
	</div>

	<script type="text/javascript" src="'assets/js/bootstrap.min.js'"></script>
	<script type="text/javascript" src="'assets/js/jquery.min.js'"></script>
</body>
</html>
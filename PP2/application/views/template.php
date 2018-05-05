<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Naufal Hafizh H</title>
	<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">

	<style>		
		body{
			background: blue;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fuild">
			<div class="collpase naver-collpase">
				<ul class="nav navbar-nav">
					<li class="active">
						<?php echo anchor('dashboard', 'Home'); ?>
					</li>
					<li>
						<?php echo anchor('about', 'About'); ?>
					</li>
					<li>
						<?php echo anchor('contact', 'Contact'); ?>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<?php echo $this->load->view($content, '',TRUE); ?>
	</div>

	<script type="text/javascript" src="'assets/js/bootstrap.min.js'"></script>
	<script type="text/javascript" src="'assets/js/bootstrap.min.js'"></script>
</body>
</html>
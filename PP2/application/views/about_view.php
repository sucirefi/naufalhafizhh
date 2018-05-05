<body> 
	<div class="home">
		<p>About</p>
	</div>
</body>
<?php
	echo form_open('contact/proses');

	$data_nis = array(
		"nama" => "nis",
		"value"=> "",
		"placeholder" => "Nis"
	);

	$data = array(
		"nama" => "fullname",
		"value"=> "",
		"placeholder" => "Nama"
	);

	$data_kelas = array(
		"nama" => "kelas",
		"value"=> "",
		"placeholder" => "kelas"
	);
	echo form_input($data_nis). "</br>";
	echo form_input($data). "</br>";
	echo form_input($data_kelas). "</br>";

	echo form_submit('submit', 'Simpan');

	echo form_close();
?>
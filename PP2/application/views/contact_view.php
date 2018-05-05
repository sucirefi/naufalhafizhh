<body>
	<div class="home">
		<p>Contact</p>
	</div>
</body>
<?php
	echo form_open('contact/proses');

	$data = array(
		"nama" => "fullname",
		"value"=> "",
		"placeholder" => "Nama"
	);

	$data_email = array(
		"nama" => "email",
		"value"=> "",
		"placeholder" => "Email"
	);

	$data_message = array(
		"nama" => "pesan",
		"value"=> "",
		"placeholder" => "Pesan"
	);
	echo form_input($data). "</br>";
	echo form_input($data_email). "</br>";
	echo form_textarea($data_message). "</br>";

	echo form_submit('submit', 'Simpan');

	echo form_close();
?>
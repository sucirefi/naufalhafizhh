<?php 

	$nip = $_GET ['id'];

	$koneksi->query("delete from tb_anggota where nip='$nip'");

 ?>

 <script type="text/javascript">
 		window.location.href="?page=anggota";
 		<?php echo "<script>alert('Apakah Anda Ingin Menghapus data ini ???');</script>" ?>
 </script>
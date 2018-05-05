<?php 

	$nip = $_GET ['id'];

	$koneksi->query("delete from tb_transaksi where id='$id'");

 ?>

 <script type="text/javascript">
 		window.location.href="?page=transaksi";
 		<?php echo "<script>alert('Apakah Anda Ingin Mengembalikan Buku ???');</script>" ?>
 </script>
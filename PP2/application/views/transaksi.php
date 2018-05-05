<style type="text/css">
	body{
		background-image: url('assets/gambar.jpg');
		background-size: cover;
	}
</style>
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Data Transaksi</h3>
	</div>
	<div class="panel-body">
		<a href="<?php echo base_url('transaksi/tambah') ?>"class="btn btn-success" style="margin-bottom:10px;"><i class="fa fa-plus"></i>Transaksi</a>
		<table class="table table-bordered table-stripped">
			<thead>
				<th>ID</th>
				<th>Judul</th>
				<th>Tanggal Pinjam</th>
				<th>Tanggal Kembali</th>
				<th>Status</th>
				<th>Aksi</th>
			</thead>
			<tbody>
				<?php
				$rows=$this->db->get('tb_transaksi');
				if($rows->num_rows()>0){
					$no=1;
					foreach($rows->result()as$row){
				?>
				<tr>
					<td><?=$no?></td>
					<td><?=$row->judul?></td>
					<td><?=$row->tanggal_pinjam?></td>
					<td><?=$row->tanggal_kembali?></td>
					<td><?=$row->status?></td>
					<td>
						<a onclick="return confirm('Apakah Anda Ingin Mengembalikan Buku ???')" href="<?=base_url('transaksi/kembali/'.$row->id)?>" class="btn xm btn-warning"><i class="fa  fa-reply"></i>Kembali</a>
						<a href="<?=base_url('transaksi/perpanjang/'.$row->id)?>" class="btn xm btn-danger" style="margin-left: 10px;" ><i class="fa fa-edit"></i>Perpanjang</a>
					</td>
				</tr>
				<?php
				$no++;
					}
				}else{
					echo"<td rowspan='7'>Data masih kosong</td>";
				}
				?>
			</tbody>
		</table>
	</div>
</div>
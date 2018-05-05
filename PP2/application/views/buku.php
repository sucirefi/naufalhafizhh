<style type="text/css">
	body{
		background-image: url('assets/gambar.jpg');
		background-size: cover;
	}
</style>

<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Data Buku</h3>
	</div>
	<div class="panel-body">
		<a href="<?php echo base_url('buku/tambah_buku'); ?>" class="btn btn-success" style="margin-bottom:10px;"><i class="fa fa-plus"></i>Tambah Buku</a>
		<table class="table table-bordered table-stripped">
			<thead>
				<th>ID</th>
				<th>Judul</th>
				<th>Pengarang</th>
				<th>Penerbit</th>
				<th>Tahun Terbit</th>
				<th>ISBN</th>
				<th>Jumlah Buku</th>
				<th>Lokasi</th>
				<th>Tanggal Input</th>
				<th>Aksi</th>
			</thead>
			<tbody>
				<?php
				$rows=$this->db->get('tb_buku');
				if($rows->num_rows()>0){
					$no=1;
					foreach($rows->result()as$row){
				?>
				<tr>
					<td><?=$no?></td>
					<td><?=$row->judul?></td>
					<td><?=$row->pengarang?></td>
					<td><?=$row->penerbit?></td>
					<td><?=$row->tahun_terbit?></td>
					<td><?=$row->isbn?></td>
					<td><?=$row->jumlah_buku?></td>
					<td><?=$row->lokasi?></td>
					<td><?=$row->tanggal_input?></td>
					<td>
						<a href="<?=base_url('buku/edit_buku/'.$row->id)?>" class="btn xm btn-warning" ><i class="fa fa-edit"></i>Edit</a>
						<a onclick="return confirm('Apakah Anda Yakin Ingin menghapus data .... ???')" href="<?=base_url('buku/hapus_buku/'.$row->id)?>" class="btn xm btn-danger"><i class="fa fa-trash" ></i>Hapus</a>
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
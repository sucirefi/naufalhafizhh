<style type="text/css">
	body{
		background-image: url('assets/gambar.jpg');
		background-size: cover;
	}
</style>

<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Data Anggota</h3>
	</div>
	<div class="panel-body">
		<a href="<?php echo base_url('anggota/tambah_anggota'); ?>"class="btn btn-success" style="margin-bottom:10px;"><i class="fa fa-plus"></i>Tambah Anggota</a>
		<table class="table table-bordered table-stripped">
			<thead>
				<th>No.</th>
				<th>NIP</th>
				<th>Nama</th>
				<th>Tempat Lahir</th>
				<th>Tanggal Lahir</th>
				<th>Jenis Kelamin</th>
				<th>Jurusan</th>
				<th>Aksi</th>
			</thead>
			<tbody>
				<?php
				$rows=$this->db->get('tb_anggota');
				if($rows->num_rows()>0){
					$no=1;
					foreach($rows->result()as$row){
				?>
				<tr>
					<td><?=$no?></td>
					<td><?=$row->nip?></td>
					<td><?=$row->nama?></td>
					<td><?=$row->tempat_lahir?></td>
					<td><?=$row->tanggal_lahir?></td>
					<td><?=$row->jk?></td>
					<td><?=$row->jurusan?></td>
					<td>
						<a href="<?=base_url('anggota/edit_anggota/'.$row->nip)?>" class="btn xm btn-warning"><i class="fa fa-edit"></i>Edit</a>
						<a onclick="return confirm('Apakah Anda Yakin Ingin menghapus data .... ???')" href="<?=base_url('anggota/hapus_anggota/'.$row->nip)?>" class="btn xm btn-danger"><i class="fa fa-trash"></i>Hapus</a>
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
<?php echo form_open("anggota/simpan"); ?>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Tambah Anggota</h3>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<label for="">Nip:</label>
				<input type="text" class="form-control" id="" placeholder="" name="nip">
				<p class="help-block"></p>
			</div>
			<div class="form-group">
				<label for="">Nama :</label>
				<input type="text" class="form-control" id="" placeholder="" name="nama">
				<p class="help-block"></p>
			</div>
			<div class="form-group">
				<label for="">Tempat Lahir :</label>
				<input type="text" class="form-control" id="" placeholder="" name="tmp">
				<p class="help-block"></p>
			</div>
			<div style="color: red" class="form-group">
                <label>Tanggal Lahir</label>
                <input class="form-control" type="date" name="tgl" /> 
            </div>
            <div class="form-group">
                <label>Jenis kelamin</label></br>
                <label class="checkbox-inline">
                <input type="radio" value="l" name="jk">Laki Laki
                </label>
                <label class="checkbox-inline">
                <input type="radio" value="p" name="jk" >Perempuan
                  </label>
            </div>
			<div class="form-group">
				<label for="">Jurusan :</label><br>
				<input type="text" class="form-control" id="" placeholder="" name="jurusan">
				<p class="help-block"></p>
			</div>
		</div>
		<div class="panel-footer">
			<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
			<button type="submit" name="button" value="button" class="btn btn-primary">
				kembali
			</button>
		</div>
	</div>

<?php echo form_close(); ?>

<?php echo form_open("buku/simpan"); ?>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Tambah Buku</h3>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<label for="">Judul :</label>
				<input type="text" class="form-control" id="" placeholder="" name="judul">
				<p class="help-block"></p>
			</div>
			<div class="form-group">
				<label for="">Pengarang :</label>
				<input type="text" class="form-control" id="" placeholder="" name="pengarang">
				<p class="help-block"></p>
			</div>
			<div class="form-group">
                <label for="">Penerbit</label>
                <input class="form-control" type="text" name="penerbit"/> 
            </div>
            <div class="form-group">
               <label>Tahun Terbit</label>
               <select class="form-control" name="tahun">
              	 <?php

                     $tahun = date("Y");

                      for ($i=$tahun-30; $i <= $tahun; $i++) { 
                                                        echo '

                        <option value="'.$i.'">'.$i.'</option>

                          ';
                        }

                    ?>
               </select>
            </div>
            <div class="form-group">
                <label for="">ISBN</label>
                <input class="form-control" type="text" name="isbn"/>
            </div>
            <div class="form-group">
                <label for="">Jumlah Buku</label>
                <input class="form-control" type="number" name="jumlah_buku"/>
            </div>
            <div class="form-group">
                <label>Lokasi</label>
                <select class="form-control" name="lokasi">
                    <option value="Rak_1">Rak 1</option>
                    <option value="Rak_2">Rak 2</option>
                    <option value="Rak_3">Rak 3</option>                                
                </select>
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

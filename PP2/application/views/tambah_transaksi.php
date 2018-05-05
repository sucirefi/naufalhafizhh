<?php echo form_open("transaksi/simpan"); ?>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Tambah Transaksi</h3>
    </div>
    <div style="color: red" class="panel-body">
      <div class="form-group">
        <label for="">Judul :</label>
        <input type="text" class="form-control" id="" placeholder="" name="judul">
        <p class="help-block"></p>
      </div>
      <div style="color: red" class="form-group">
        <label for="">Tanggal Pinjam :</label>
        <input class="form-control" type="date" name="tanggal_pinjam">
        <p class="help-block"></p>
      </div>
      <div style="color: red" class="form-group">
          <label>Tanggal Kembali</label>
          <input class="form-control" type="date" name="tanggal_kembali"> 
      </div>
      <div style="color: black" class="form-group">
        <label for="">Status :</label><br>
        <label class="checkbox-inline">
                <input type="radio" value="pinjam" name="status">Pinjam
                </label>
                <label class="checkbox-inline">
                <input type="radio" value="kembali" name="status" >Kembali
                  </label>
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

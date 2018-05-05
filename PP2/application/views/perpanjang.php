<div class="panel panel-default">
<div <a href="<?php echo base_url('transaksi/perpanjang'); ?>" class="panel-heading">
    Edit data
</div>
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">
            
            <form method="POST" action="<?php echo base_url('transaksi/update'); ?>">
                <div style="color: red" class="form-group">

                    <input type="hidden" name="id" value="<?=$id->id;?>" /> 
                    <label>judul</label>
                    <input class="form-control" name="judul" value="<?=$id->judul;?>" readonly /> 
                </div>

                <div style="color: red" class="form-group">
                    <label>Tanggal Pinjam</label>
                    <input class="form-control" type="date" name="tanggal_pinjam" value="<?=$id->tanggal_pinjam;?>" /> 
                </div>

                <div style="color: red" class="form-group">
                    <label>Tanggal Kembali</label>
                    <input class="form-control" type="date" name="tanggal_kembali" value="<?=$id->tanggal_kembali;?>" /> 
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

                <div>
                    
                    <input type="submit" name="simpan" value="Edit" class="btn btn-primary" style="margin-left: 10px;">  

                </div>
    </div>
    </form>
</div>
</div>
</div>
</div>

        
<?php
    $row=$nip->row();
?>
<div class="panel panel-default">
<div <a href="<?php echo base_url('anggota/edit_anggota'); ?>" class="panel-heading">
	Edit data
</div>
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">
            
            <form method="POST" action="<?php echo base_url('anggota/update'); ?>">
                <div style="color: red"  class="form-group">
                    <input type="hidden" name="id">
                    <label>Nip</label>
                    <input class="form-control" name="nip" value="<?=$row->nip;?>" readonly /> 
                </div>

                <div style="color: red" class="form-group">
                    <label>Nama</label>
                    <input class="form-control" name="nama" value="<?=$row->nama;?>" /> 
                </div>

                <div style="color: red" class="form-group">
                    <label>Tempat Lahir</label>
                    <input class="form-control" name="tmp" value="<?=$row->tempat_lahir;?>" /> 
                </div>

                <div style="color: red" class="form-group">
                    <label>Tanggal Lahir</label>
                    <input class="form-control" type="date" name="tgl" value="<?=$row->tanggal_lahir;?>" /> 
                </div>
                <?php 
                if ($row->jk=='l') {
                   $laki='checked';
                   $perempuan=null;
                }else{
                   $laki=null;
                   $perempuan='checked'; 
                }

                 ?>
                <div class="form-group">
                    <label>Jenis kelamin</label></br>
                    <label class="checkbox-inline">
                        <input type="radio" value="l" name="jk" <?php echo $laki; ?> /> Laki-laki
                    </label>
                    <label class="checkbox-inline">
                        <input type="radio" value="p" name="jk"  <?php echo $perempuan; ?>/> Perempuan
                    </label>
                </div>

                <div style="color: red" class="form-group">
                    <label>Jurusan</label>
                    <input class="form-control" type="text" name="jurusan" value="<?=$row->jurusan;?>" /> 
                </div>

                <div>
                    
                    <input type="submit" name="simpan" value="Edit" class="btn btn-primary">

                </div>
    </div>
    </form>
</div>
</div>
</div>
</div>

        
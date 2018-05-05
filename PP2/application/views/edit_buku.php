<div class="panel panel-default">
<div <a href="<?php echo base_url('buku/edit_buku'); ?>" class="panel-heading">
	Edit data
</div>
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">
            
            <form method="POST" action="<?php echo base_url('buku/update'); ?>">
                <div style="color: red" class="form-group">

                    <input type="hidden" name="id" value="<?=$id->id;?>" /> 
                    <label>judul</label>
                    <input class="form-control" name="judul" value="<?=$id->judul;?>" /> 
                </div>

                <div style="color: red" class="form-group">
                    <label>Pengarang</label>
                    <input class="form-control" name="pengarang" value="<?=$id->pengarang;?>" /> 
                </div>

                <div style="color: red" class="form-group">
                    <label>Penerbit</label>
                    <input class="form-control" name="penerbit" value="<?=$id->penerbit;?>" /> 
                </div>

                <div class="form-group">
               <label>Tahun Terbit</label>
               <select class="form-control" name="tahun_terbit" value="<?=$id->tahun_terbit;?>">
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
                <input class="form-control" type="text" name="isbn" value="<?=$id->isbn;?>"/>
            </div>
            <div class="form-group">
                <label for="">Jumlah Buku</label>
                <input class="form-control" type="text" name="jumlah_buku" value="<?=$id->jumlah_buku;?>"/>
            </div>
            <div class="form-group">
                <label>Lokasi</label>
                <select class="form-control" name="lokasi" value="<?=$id->lokasi;?>">
                    <option value="Rak_1">Rak 1</option>
                    <option value="Rak_2">Rak 2</option>
                    <option value="Rak_3">Rak 3</option>                                
                </select>
            </div>
            <div class="form-group">
                <label>Tanggal input</label>
                <input class="form-control" type="date" name="tanggal_input" value="<?=$id->tanggal_input;?>" readonly/> 
            </div>
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

        
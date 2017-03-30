<div class="box">
     
                <div class="box-header">
                    <h3 class="box-title">Data Jabatan Kosong</h3><br>
                  
          
                
        </div><!-- /.box-header -->
                <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
    <thead>
    <tr class="info">
        <th>No</th>
        <th>ID Jabatan Kosong</th>
        <th>Jabatan</th>
        <th>Tingkat Jabatan</th>
        <th>Unit Kerja</th>
        <th>Periode</th>
        <th class="span2">
            <button type="button" class="btn btn-success glyphicon glyphicon-plus" data-toggle="modal" data-target="#modalAddJabatanKosong"></button>
        </th>
        <th>Profil Syarat Jabatan</th>
        <th>Profil Jabatan</th>
        <th>Seleksi syarat</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $no=1;
    if(isset($data_jabatan_kosong)){
        foreach($data_jabatan_kosong as $row){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row->id_jabatankosong; ?></td>
                <td><?php echo $row->jabatan; ?></td>
                <td><?php echo $row->nama_tingkatjbt; ?></td>
                <td><?php echo $row->nama_unitkerja?></td>
                <td><?php echo $row->periode; ?></td>

                <td>
                    <a class="btn btn-mini btn btn-primary " href="#modalEditJabatanKosong<?php echo $row->id_jabatankosong?>" data-toggle="modal"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                    <a class="btn btn-mini btn btn-danger " href="<?php echo site_url('jabatan_kosong/delete/'.$row->id_jabatankosong);?>"
                    onclick="return confirm('Anda yakin?')"> <i class="glyphicon glyphicon-trash"></i> Hapus</a>
                </td>
                <td>
                    
                    
                    <a class="btn btn-mini btn btn-primary " href="#modalView<?php echo $row->id_jabatankosong?>" data-toggle="modal">
                    <i class="glyphicon glyphicon-list-alt"></i> View</a>
                </td>
                <td>
                    
                    <a class="btn btn-mini btn btn-danger " href="#modalView1<?php echo $row->id_jabatankosong?>" data-toggle="modal"> <i class="glyphicon glyphicon-list-alt"></i> RJ</a>
                     <a class="btn btn-mini btn btn-primary " href="#modalView2<?php echo $row->id_jabatankosong?>" data-toggle="modal"> <i class="glyphicon glyphicon-list-alt"></i> PR</a>
                      <a class="btn btn-mini btn btn-success " href="#modalView3<?php echo $row->id_jabatankosong?>" data-toggle="modal"> <i class="glyphicon glyphicon-list-alt"></i> KM</a>
                </td>
                <td>
                    <a class="btn btn-mini btn btn-success " href="<?php echo site_url('seleksi_syarat/tampil_data/'.$row->id_jabatankosong);?>" data-toggle="modal"> <i class="glyphicon glyphicon-list-alt"></i> Seleksi Syarat</a>
                </td>


            </tr>

        <?php }
    }
    ?>

    </tbody>
</table>
    </div><!-- /.box-body -->
</div><!-- /.box -->

<!-- ============ MODAL ADD JABATAN KOSONG =============== -->

<div class="modal fade" id="modalAddJabatanKosong" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Jabatan Kosong</h4>
            </div>
            <div class="modal-body form">
                <form method="post" action="<?php echo site_url('jabatan_kosong/insert')?>" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">ID Jabatan Kosong</label>
                            <div class="col-md-9">
                                <input name="id_jabatankosong" placeholder="ID Jabatan Kosong" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Jabatan</label>
                            <div class="col-md-9">
                                <select name="jabatan" class="form-control">
                                    <option value="">--Pilih Jabatan--</option>
                                    <?php
                                    if(isset($data_jabatan)){
                                        foreach ($data_jabatan as $row) {
                                            ?>
                                            <option value="<?php echo $row->id_jabatan?>"><?php echo $row->jabatan?></option>
                                        <?php
                                        }
                                    }
                                ?>
                                </select>
                            </div>
                        </div>
                         <div class="form-group">
                              <label class="control-label col-md-3">Tingkat Jabatan</label>

                              <div class="col-md-9">
                                <select name="nama_tingkatjbt" class="form-control">
                                <option value="">-- Pilih Tingkat Jabatan --</option>
                                <?php
                            if(isset($data_tingkat_jabatan)){
                                foreach($data_tingkat_jabatan as $row){
                                    ?>
                                    <option value="<?php echo $row->id_tingkatjbt?>"><?php echo $row->nama_tingkatjbt?></option>
                                <?php
                                }
                            }
                            ?>
                              </select>
                              </div>
                        </div>
                        <div class="form-group">
                              <label class="control-label col-md-3">Unit Kerja</label>

                              <div class="col-md-9">
                                <select name="nama_unitkerja" class="form-control">
                                <option value="">-- Pilih Unit Kerja --</option>
                                <?php
                            if(isset($data_unitkerja)){
                                foreach($data_unitkerja as $row){
                                    ?>
                                    <option value="<?php echo $row->id_unitkerja?>"><?php echo $row->nama_unitkerja?></option>
                                <?php
                                }
                            }
                            ?>
                              </select>
                              </div>
                        </div>
                         
                        <div class="form-group">
                            <label class="control-label col-md-3">Periode</label>
                            <div class="col-md-9">
                                <input name="periode" placeholder="Periode" class="form-control" type="date">
                                <span class="help-block"></span>
                            </div>
                        </div>

                             <h4 class="modal-title">Profil Syarat Jabatan</h4>
                             <br>
                        
                         <div class="form-group">
                              <label class="control-label col-md-3">Pangkat</label>

                              <div class="col-md-9">
                                <select name="nilai_pangkat" class="form-control">
                                <option value="">-- Pilih Pangkat --</option>
                                <?php
                            if(isset($data_pangkat)){
                                foreach($data_pangkat as $row){
                                    ?>
                                    <option value="<?php echo $row->nilai_pangkat?>"><?php echo $row->pangkat?></option>
                                <?php
                                }
                            }
                            ?>
                              </select>
                              </div>
                        </div>

                        <div class="form-group">
                              <label class="control-label col-md-3">Pendidikan</label>

                              <div class="col-md-9">
                                <select name="nilai_pendidikan" class="form-control">
                                <option value="">-- Pilih Pendidikan --</option>
                                <?php
                            if(isset($data_pendidikan)){
                                foreach($data_pendidikan as $row){
                                    ?>
                                    <option value="<?php echo $row->nilai_pendidikan?>"><?php echo $row->pendidikan?></option>
                                <?php
                                }
                            }
                            ?>
                              </select>
                              </div>
                        </div>

                         <h4 class="modal-title">Profil Jabatan : Rekam Jejak</h4>
                             <br>

                            <div class="form-group">
                            <label class="control-label col-md-3">Diklat PIM</label>
                            <div class="col-md-9">
                                <input name="rj01" placeholder="Diklat PIM" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Lama bekerja</label>
                            <div class="col-md-9">
                                <input name="rj02" placeholder="Lama Bekerja" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-3">Pengalaman Jabatan</label>
                            <div class="col-md-9">
                                <input name="rj03" placeholder="Pengalaman Jabatan" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-3">Usia</label>
                            <div class="col-md-9">
                                <input name="rj04" placeholder="Usia" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>

                           <div class="form-group">
                            <label class="control-label col-md-3">Diklat Teknis</label>
                            <div class="col-md-9">
                                <input name="rj05" placeholder="Diklat Teknis" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>


                        <h4 class="modal-title">Profil Jabatan : Performance</h4>
                             <br>

                            <div class="form-group">
                            <label class="control-label col-md-3">Komitmen</label>
                            <div class="col-md-9">
                                <input name="pr01" placeholder="Komitmen" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Disiplin</label>
                            <div class="col-md-9">
                                <input name="pr02" placeholder="Disiplin" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-3">Kerja Sama</label>
                            <div class="col-md-9">
                                <input name="pr03" placeholder="Kerja Sama" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>

                         <div class="form-group">
                            <label class="control-label col-md-3">Kepemimpinan</label>
                            <div class="col-md-9">
                                <input name="pr04" placeholder="Kepemimpinan" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>

                         <div class="form-group">
                            <label class="control-label col-md-3">Orientasi Pelayanan</label>
                            <div class="col-md-9">
                                <input name="pr05" placeholder="Orientasi Pelayanan" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>

                         <div class="form-group">
                            <label class="control-label col-md-3">Integritas</label>
                            <div class="col-md-9">
                                <input name="pr06" placeholder="Integritas" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>

                         <div class="form-group">
                            <label class="control-label col-md-3">Kualitas Kerja</label>
                            <div class="col-md-9">
                                <input name="pr07" placeholder="Kualitas Kerja" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <h4 class="modal-title">Profil Jabatan : Kompetensi Manajerial</h4>
                             <br>

                            <div class="form-group">
                            <label class="control-label col-md-3">Inovasi</label>
                            <div class="col-md-9">
                                <input name="km01" placeholder="Inovasi" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Fleksibilitas Berfikir</label>
                            <div class="col-md-9">
                                <input name="km02" placeholder="Fleksibilitas Berfikir" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-3">Perencanaan</label>
                            <div class="col-md-9">
                                <input name="km03" placeholder="Perencanaan" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-3">Pengorganisasian</label>
                            <div class="col-md-9">
                                <input name="km04" placeholder="Pengorganisasian" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>

                           <div class="form-group">
                            <label class="control-label col-md-3">Komunikasi</label>
                            <div class="col-md-9">
                                <input name="km05" placeholder="Komunikasi" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>


                    </div>
                    <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
                </form>
            </div>
           
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->

<!-- ============ MODAL EDIT JABATAN KOSONG =============== -->
<?php
if(isset($data_jabatan_kosong)){
    foreach($data_jabatan_kosong as $row){
        ?>
       
    <div class="modal fade" id="modalEditJabatanKosong<?php echo $row->id_jabatankosong?>" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Edit Jabatan Kosong</h3>
            </div>
            <div class="modal-body form">
                <form method="post" action="<?php echo site_url('jabatan_kosong/edit')?>" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">ID Jabatan Kosong</label>
                            <div class="col-md-9">
                                <input name="id_jabatankosong" placeholder="ID Jabatan Kosong" class="form-control" type="text" value="<?php echo $row->id_jabatankosong; ?>" readonly>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Periode</label>
                            <div class="col-md-9">
                                <input name="periode" placeholder="Periode" class="form-control" type="date" value="<?php echo $row->periode; ?>">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Jabatan</label>
                            <div class="col-md-9">
                                <select name="jabatan" class="form-control">
                                    <option value="">--Pilih Jabatan--</option>
                                    <?php
                                    if(isset($data_jabatan)){
                                        foreach ($data_jabatan as $row) {
                                            ?>
                                            <option value="<?php echo $row->id_jabatan?>"><?php echo $row->jabatan?></option>
                                        <?php
                                        }
                                    }
                                ?>
                                </select>
                            </div>
                        </div>
                         <div class="form-group">
                              <label class="control-label col-md-3">Tingkat Jabatan</label>

                              <div class="col-md-9">
                                <select name="nama_tingkatjbt" class="form-control">
                                <option value="">-- Pilih Tingkat Jabatan --</option>
                                <?php
                            if(isset($data_tingkat_jabatan)){
                                foreach($data_tingkat_jabatan as $row){
                                    ?>
                                    <option value="<?php echo $row->id_tingkatjbt?>"><?php echo $row->nama_tingkatjbt?></option>
                                <?php
                                }
                            }
                            ?>
                              </select>
                              </div>
                        </div>
                        <div class="form-group">
                              <label class="control-label col-md-3">Unit Kerja</label>

                              <div class="col-md-9">
                                <select name="nama_unitkerja" class="form-control">
                                <option value="">-- Pilih Unit Kerja --</option>
                                <?php
                            if(isset($data_unitkerja)){
                                foreach($data_unitkerja as $row){
                                    ?>
                                    <option value="<?php echo $row->id_unitkerja?>"><?php echo $row->nama_unitkerja?></option>
                                <?php
                                }
                            }
                            ?>
                              </select>
                              </div>
                        </div>
                    

                             <h4 class="modal-title">Profil Syarat Jabatan</h4>
                             <br>
                        
                          <div class="form-group">
                              <label class="control-label col-md-3">Pangkat</label>

                              <div class="col-md-9">
                                <select name="nilai_pangkat" class="form-control">
                                <option value="">-- Pilih Pangkat --</option>
                                <?php
                            if(isset($data_pangkat)){
                                foreach($data_pangkat as $row){
                                    ?>
                                    <option value="<?php echo $row->nilai_pangkat?>"><?php echo $row->pangkat?></option>
                                <?php
                                }
                            }
                            ?>
                              </select>
                              </div>
                        </div>

                        <div class="form-group">
                              <label class="control-label col-md-3">Pendidikan</label>

                              <div class="col-md-9">
                                <select name="nilai_pendidikan" class="form-control">
                                <option value="">-- Pilih Pendidikan --</option>
                                <?php
                            if(isset($data_pendidikan)){
                                foreach($data_pendidikan as $row){
                                    ?>
                                    <option value="<?php echo $row->nilai_pendidikan?>"><?php echo $row->pendidikan?></option>
                                <?php
                                }
                            }
                            ?>
                              </select>
                              </div>
                        </div>

                         <h4 class="modal-title">Profil Jabatan : Rekam Jejak</h4>
                             <br>

                            <div class="form-group">
                            <label class="control-label col-md-3">Diklat PIM</label>
                            <div class="col-md-9">
                                <input name="rj01" placeholder="Diklat PIM" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Lama bekerja</label>
                            <div class="col-md-9">
                                <input name="rj02" placeholder="Lama Bekerja" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-3">Pengalaman Jabatan</label>
                            <div class="col-md-9">
                                <input name="rj03" placeholder="Pengalaman Jabatan" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-3">Usia</label>
                            <div class="col-md-9">
                                <input name="rj04" placeholder="Usia" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>

                           <div class="form-group">
                            <label class="control-label col-md-3">Diklat Teknis</label>
                            <div class="col-md-9">
                                <input name="rj05" placeholder="Diklat Teknis" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>


                        <h4 class="modal-title">Profil Jabatan : Performance</h4>
                             <br>

                            <div class="form-group">
                            <label class="control-label col-md-3">Komitmen</label>
                            <div class="col-md-9">
                                <input name="pr01" placeholder="Komitmen" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Disiplin</label>
                            <div class="col-md-9">
                                <input name="pr02" placeholder="Disiplin" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-3">Kerja Sama</label>
                            <div class="col-md-9">
                                <input name="pr03" placeholder="Kerja Sama" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>

                         <div class="form-group">
                            <label class="control-label col-md-3">Kepemimpinan</label>
                            <div class="col-md-9">
                                <input name="pr04" placeholder="Kepemimpinan" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>

                         <div class="form-group">
                            <label class="control-label col-md-3">Orientasi Pelayanan</label>
                            <div class="col-md-9">
                                <input name="pr05" placeholder="Orientasi Pelayanan" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>

                         <div class="form-group">
                            <label class="control-label col-md-3">Integritas</label>
                            <div class="col-md-9">
                                <input name="pr06" placeholder="Integritas" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>

                         <div class="form-group">
                            <label class="control-label col-md-3">Kualitas Kerja</label>
                            <div class="col-md-9">
                                <input name="pr07" placeholder="Kualitas Kerja" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <h4 class="modal-title">Profil Jabatan : Kompetensi Manajerial</h4>
                             <br>

                            <div class="form-group">
                            <label class="control-label col-md-3">Inovasi</label>
                            <div class="col-md-9">
                                <input name="km01" placeholder="Inovasi" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Fleksibilitas Berfikir</label>
                            <div class="col-md-9">
                                <input name="km02" placeholder="Fleksibilitas Berfikir" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-3">Perencanaan</label>
                            <div class="col-md-9">
                                <input name="km03" placeholder="Perencanaan" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-3">Pengorganisasian</label>
                            <div class="col-md-9">
                                <input name="km04" placeholder="Pengorganisasian" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>

                           <div class="form-group">
                            <label class="control-label col-md-3">Komunikasi</label>
                            <div class="col-md-9">
                                <input name="km05" placeholder="Komunikasi" class="form-control" type="text" value="">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
                </form>
            </div>
           
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->
    <?php }
}
?>



<!-- ============ MODAL VIEW SYARAT JABATAN =============== -->
<?php
if(isset($data_profil_syarat_jabatan)){
    foreach($data_profil_syarat_jabatan as $row){
        ?>
       
    <div class="modal fade" id="modalView<?php echo $row->id_jabatankosong?>" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Profile Syarat Jabatan</h3>
            </div>
            <div class="modal-body form">
                <form method="post" action="<?php echo site_url('profil_syarat_jabatan/edit')?>" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">ID Profile Syarat Jabatan</label>
                            <div class="col-md-9">
                                <input name="id_profilsyaratjbt" placeholder="ID Profile Syarat Jabatan" class="form-control" type="text" value="<?php echo $row->id_profilsyaratjbt; ?>" readonly>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Pangkat</label>
                            <div class="col-md-9">
                                <input name="nilai_pangkat" placeholder="pangkat" class="form-control" type="text" value="<?php echo $row->pangkat; ?>" readonly>
                                <span class="help-block"></span>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="control-label col-md-3">Pendidikan</label>
                            <div class="col-md-9">
                                <input name="nilai_pendidikan" placeholder="pendidikan" class="form-control" type="text" value="<?php echo $row->pendidikan; ?>" readonly>
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
                </form>
            </div>
           
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->
    <?php }
}
?>

<!-- ============ MODAL VIEW PROFIL JABATAN RJ =============== -->
<?php
if(isset($data_bobot_rj_jabatan)){
    foreach($data_bobot_rj_jabatan as $row){
        ?>
       
    <div class="modal fade" id="modalView1<?php echo $row->id_jabatankosong?>" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Profil Jabatan Rekam Jejak</h3>
            </div>
            <div class="modal-body form">
                <form method="post" action="<?php echo site_url('jabatan_kosong/edit')?>" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3"></label>
                            <div class="col-md-9">
                                <input name="id_rjj" placeholder="ID Profile Jabatan" class="form-control" type="hidden" value="<?php echo $row->id_rjj; ?>" readonly>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Diklat PIM</label>
                            <div class="col-md-9">
                                <input name="rj01" placeholder="" class="form-control" type="text" value="<?php echo $row->rj01; ?>" readonly>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Lama Bekerja</label>
                            <div class="col-md-9">
                                <input name="rj02" placeholder="" class="form-control" type="text" value="<?php echo $row->rj02; ?>" readonly>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Pengalaman Jabatan</label>
                            <div class="col-md-9">
                                <input name="rj03" placeholder="" class="form-control" type="text" value="<?php echo $row->rj03; ?>" readonly>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Usia</label>
                            <div class="col-md-9">
                                <input name="rj04" placeholder="" class="form-control" type="text" value="<?php echo $row->rj04; ?>" readonly>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Diklat Teknis</label>
                            <div class="col-md-9">
                                <input name="rj05" placeholder="" class="form-control" type="text" value="<?php echo $row->rj05; ?>" readonly>
                                <span class="help-block"></span>
                            </div>
                        </div>
                    

                    </div>
                    <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
                </form>
            </div>
           
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->
    <?php }
}
?>

<!-- ============ MODAL VIEW PROFIL JABATAN PR =============== -->
<?php
if(isset($data_bobot_per_jabatan)){
    foreach($data_bobot_per_jabatan as $row){
        ?>
       
    <div class="modal fade" id="modalView2<?php echo $row->id_jabatankosong?>" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Profil Jabatan Performance</h3>
            </div>
            <div class="modal-body form">
                <form method="post" action="<?php echo site_url('jabatan_kosong/edit')?>" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3"></label>
                            <div class="col-md-9">
                                <input name="id_prj" placeholder="ID Profile Jabatan" class="form-control" type="hidden" value="<?php echo $row->id_prj; ?>" readonly>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Komitmen</label>
                            <div class="col-md-9">
                                <input name="pr01" placeholder="" class="form-control" type="text" value="<?php echo $row->pr01; ?>" readonly>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Disiplin</label>
                            <div class="col-md-9">
                                <input name="pr02" placeholder="" class="form-control" type="text" value="<?php echo $row->pr02; ?>" readonly>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Kerja Sama</label>
                            <div class="col-md-9">
                                <input name="pr03" placeholder="" class="form-control" type="text" value="<?php echo $row->pr03; ?>" readonly>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Kepemimpinan</label>
                            <div class="col-md-9">
                                <input name="pr04" placeholder="" class="form-control" type="text" value="<?php echo $row->pr04; ?>" readonly>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Orientasi Pelayanan</label>
                            <div class="col-md-9">
                                <input name="pr05" placeholder="" class="form-control" type="text" value="<?php echo $row->pr05; ?>" readonly>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Integritas</label>
                            <div class="col-md-9">
                                <input name="pr06" placeholder="" class="form-control" type="text" value="<?php echo $row->pr06; ?>" readonly>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Kualitas Kerja</label>
                            <div class="col-md-9">
                                <input name="pr07" placeholder="" class="form-control" type="text" value="<?php echo $row->pr07; ?>" readonly>
                                <span class="help-block"></span>
                            </div>
                        </div>
                    

                    </div>
                    <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
                </form>
            </div>
           
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->
    <?php }
}
?>

<!-- ============ MODAL VIEW PROFIL JABATAN KM =============== -->
<?php
if(isset($data_bobot_km_jabatan)){
    foreach($data_bobot_km_jabatan as $row){
        ?>
       
    <div class="modal fade" id="modalView3<?php echo $row->id_jabatankosong?>" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Profil Jabatan Kompetensi Manajerial</h3>
            </div>
            <div class="modal-body form">
                <form method="post" action="<?php echo site_url('jabatan_kosong/edit')?>" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3"></label>
                            <div class="col-md-9">
                                <input name="id_kmj" placeholder="ID Profile Jabatan" class="form-control" type="hidden" value="<?php echo $row->id_kmj; ?>" readonly>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Inovasi</label>
                            <div class="col-md-9">
                                <input name="km01" placeholder="" class="form-control" type="text" value="<?php echo $row->km01; ?>" readonly>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Fleksibelitas Berfikir</label>
                            <div class="col-md-9">
                                <input name="km02" placeholder="" class="form-control" type="text" value="<?php echo $row->km02; ?>" readonly>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Perencanaan</label>
                            <div class="col-md-9">
                                <input name="km03" placeholder="" class="form-control" type="text" value="<?php echo $row->km03; ?>" readonly>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Pengorganisasian</label>
                            <div class="col-md-9">
                                <input name="km04" placeholder="" class="form-control" type="text" value="<?php echo $row->km04; ?>" readonly>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Komunikasi</label>
                            <div class="col-md-9">
                                <input name="km05" placeholder="" class="form-control" type="text" value="<?php echo $row->km05; ?>" readonly>
                                <span class="help-block"></span>
                            </div>
                        </div>
                    

                    </div>
                    <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
                </form>
            </div>
           
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->
    <?php }
}
?>

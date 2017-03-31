<div class="box">
     
                <div class="box-header">
                    <h3 class="box-title">Data Peserta Seleksi Syarat</h3><br>
                  
          
                
        </div><!-- /.box-header -->
                <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
    <thead>
    <tr class="info">
        <th>No</th>
        <th>ID Seleksi Syarat</th>
        <th>ID Pegawai</th>
        <th>Nama Pegawai</th>
        <th>Nilai Pangkat Pegawai</th>
        <th>Nilai Pendidikan Pegawai</th>
        <th>ID Jabatan Kosong</th>
        <th>Nilai Pangkat Jabatan</th>
        <th>Nilai Pendidikan Jabatan</th>
        <th>Gap Pangkat</th>
        <th>Gap Pendidikan</th>
        <th>Gap</th>

    </tr>
    </thead>
    <tbody>
    <?php
    $no=1;
    if(isset($data_seleksi_syarat)){
        foreach($data_seleksi_syarat as $row){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row->id_seleksi_syarat; ?></td>
                <td><?php echo $row->id_pegawai?></td>
                 <td><?php echo $row->nama?></td>
                <td><?php echo $row->nilai_pangkat_pegawai ?></td>
                <td><?php echo $row->nilai_pendidikan_pegawai?></td>
                  <td><?php echo $row->id_jabatankosong?></td>
                <td><?php echo $row->nilai_pangkat_jabatan ?></td>
                <td><?php echo $row->nilai_pendidikan_jabatan?></td>
                <td><?php echo $row->gap_pangkat?></td>
                <td><?php echo $row->gap_pendidikan ?></td>
                <td><?php echo $row->gap?></td>
            

            </tr>

        <?php }
    }
    ?>

    </tbody>
</table>
    </div><!-- /.box-body -->
</div><!-- /.box -->



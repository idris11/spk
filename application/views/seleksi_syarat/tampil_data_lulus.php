<div class="box">
     
                <div class="box-header">
                    <h3 class="box-title">Data Peserta Seleksi Syarat Yang Lulus</h3><br>
                  
          
                
        </div><!-- /.box-header -->
                <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
    <thead>
    <tr class="info">
        <th>No</th>
        <th>NIP</th>
        <th>Nama</th>
        <th>Jabatan</th>
        <th>Gap Pangkat</th>
        <th>Gap Pendidikan</th>
        <th>Gap</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $no=1;
    if(isset($pegawai_lulus)){
        foreach($pegawai_lulus->result() as $row){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row->nip; ?></td>
                <td><?php echo $row->nama?></td>
                <td><?php echo $row->jabatan?></td>
                <td><?php echo $row->gap_pangkat ?></td>
                <td><?php echo $row->gap_pendidikan?></td>
                <td><?php echo $row->gap?></td>
            </tr>
        <?php 
        }
    }
    ?>
    </tbody>
</table>
    </div><!-- /.box-body -->
</div><!-- /.box -->



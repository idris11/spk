<?php
class model_material_keluar extends ci_model{

    
    function insert_temp(){
        $id_material =   $_GET['id_material'];
        $jumlah_material_keluar    =   $_GET['jumlah_material_keluar'];
        
        $data   =   array(
                    'id_material'=>$id_material,
                    'jumlah_material_keluar'=>$jumlah_material_keluar,
                    'status'=>0);
        // status 1 sudah diproses, 2 belum diproses
        $this->db->insert('detail_material_keluar',$data);

        $query=$this->db->query("SELECT stok_material FROM material where id_material='$id_material'")->row_array();
       $stok_material= $query['stok_material'];
       $stok_material2=$stok_material - $jumlah_material_keluar;

       $this->db->query("UPDATE material set stok_material='$stok_material2' where id_material='$id_material'");
    }

    function tampilkan_temp(){
        $query="SELECT b.id_material,b.nama_material, b.satuan_material,td.*
                FROM detail_material_keluar as td,material as b 
                WHERE b.id_material=td.id_material and status=0";
        return $this->db->query($query);
    }

    function hapus_temp($id){
        $this->db->where('id_detail_material_keluar',$id);
        $this->db->delete('detail_material_keluar');
    }

    function chekout(){
        $id_shift   =   $_GET['id_shift'];
        $data       =   array(  'id_shift'=>$id_shift,
                                'tgl_material_keluar'=>  tanggal());
        $this->db->insert('material_keluar',$data);

         $get_id     = $this->db->get_where('material_keluar',$data)->row_array();
        return $get_id['id_material_keluar'];
    }

    function ubah_status($id){
        $this->db->query(   "UPDATE  detail_material_keluar
                            SET status='1',id_material_keluar='$id' 
                            where status=0");
    }
}
<?php
class model_supply extends ci_model{

    
    function insert_temp(){
        $id_material =   $_GET['id_material'];
        $jumlah_material    =   $_GET['jumlah_material'];
        
        $data   =   array(
                    'id_material'=>$id_material,
                    'jumlah_material'=>$jumlah_material,
                    'status'=>0);
        // status 1 sudah diproses, 2 belum diproses


        $this->db->insert('detail_supply',$data);

       $query=$this->db->query("SELECT stok_material FROM material where id_material='$id_material'")->row_array();
       $stok_material= $query['stok_material'];
       $stok_material2=$stok_material + $jumlah_material;

       $this->db->query("UPDATE material set stok_material='$stok_material2' where id_material='$id_material'");


    }

    function tampilkan_temp(){
        $query="SELECT b.id_material,b.nama_material, b.satuan_material, td.*
                FROM detail_supply as td,material as b 
                WHERE b.id_material=td.id_material and status=0";
        return $this->db->query($query);
    }

    function hapus_temp($id){


        $this->db->where('id_supply_detail',$id);
        $this->db->delete('detail_supply');

      
    }

    function chekout(){
        $id_supplier   =   $_GET['id_supplier'];
        $data       =   array(  'id_supplier'=>$id_supplier,
                                'tgl_terima'=>  tanggal());
        $this->db->insert('supply',$data);

         $get_id     = $this->db->get_where('supply',$data)->row_array();
        return $get_id['id_supply'];

       
        
    }


    function ubah_status($id){
        $this->db->query(   "UPDATE  detail_supply
                            SET status='1',id_supply='$id' 
                            where status=0");
    }
    
  }
<?php
class model_produk_keluar extends ci_model{

    
    function insert_temp(){
        $id_produk =   $_GET['id_produk'];
        $jumlah_produk_keluar    =   $_GET['jumlah_produk_keluar'];
        
        $data   =   array(
                    'id_produk'=>$id_produk,
                    'jumlah_produk_keluar'=>$jumlah_produk_keluar,
                    'status'=>0);
        // status 1 sudah diproses, 2 belum diproses
        $this->db->insert('detail_produk_keluar',$data);

        $query=$this->db->query("SELECT stok_produk FROM produk where id_produk='$id_produk'")->row_array();
       $stok_produk= $query['stok_produk'];
       $stok_produk2=$stok_produk - $jumlah_produk_keluar;

       $this->db->query("UPDATE produk set stok_produk='$stok_produk2' where id_produk='$id_produk'");

    }

    function tampilkan_temp(){
        $query="SELECT b.id_produk,b.nama_produk,b.satuan_produk,td.*
                FROM detail_produk_keluar as td,produk as b 
                WHERE b.id_produk=td.id_produk and status=0";
        return $this->db->query($query);
    }

    function hapus_temp($id){
        $this->db->where('id_detail_produk_keluar',$id);
        $this->db->delete('detail_produk_keluar');
    }

    function chekout(){
        $customer   =   $this->input->post('customer');
        $data       =   array(  'customer'=>$customer,
                                'tgl_produk_keluar'=>  tanggal());
        $this->db->insert('produk_keluar',$data);

         $get_id     = $this->db->get_where('produk_keluar',$data)->row_array();
        return $get_id['id_produk_keluar'];
    }

    function ubah_status($id){
        $this->db->query(   "UPDATE  detail_produk_keluar
                            SET status='1',id_produk_keluar='$id' 
                            where status=0");
    }
}
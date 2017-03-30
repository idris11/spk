<?php
class model_ramalan_produksi extends ci_model{

    
    function stok_produk($id_produk){

       return $this->db->query("SELECT stok_produk FROM produk where id_produk='$id_produk'");
    }

    function penjualan($id_produk,$tahun1){

        return $this->db->query("select sum(jumlah_produk_keluar) as 'jumlah',count(id_produk) as 'total'  from detail_produk_keluar join produk_keluar on detail_produk_keluar.id_produk_keluar=produk_keluar.id_produk_keluar where detail_produk_keluar.id_produk='$id_produk' and produk_keluar.tgl_produk_keluar like '$tahun1%'

                        ");
    }


    
  }
<?php
class model_seleksi_syarat extends ci_model{

	function insert($data){
		$this->db->insert('seleksi_syarat',$data);
	}
	
	function seleksi_syarat(){
        return $this->db->query("select seleksi_syarat.id_seleksi_syarat, seleksi_syarat.id_pegawai,  pegawai.nama,
            profil_syarat_pegawai.nilai_pangkat as nilai_pangkat_pegawai, profil_syarat_pegawai.nilai_pendidikan as nilai_pendidikan_pegawai, seleksi_syarat.id_jabatankosong,  
          profil_syarat_jabatan.nilai_pangkat as nilai_pangkat_jabatan, profil_syarat_jabatan.nilai_pendidikan as nilai_pendidikan_jabatan,
(select nilai_pangkat_pegawai - nilai_pangkat_jabatan) as gap_pangkat, (select nilai_pendidikan_pegawai - nilai_pendidikan_jabatan) as gap_pendidikan,
(select gap_pangkat + gap_pendidikan) as gap
			from seleksi_syarat
             join jabatan_kosong on jabatan_kosong.id_jabatankosong=seleksi_syarat.id_jabatankosong join profil_syarat_jabatan
              on jabatan_kosong.id_jabatankosong=profil_syarat_jabatan.id_jabatankosong join pegawai on 
              pegawai.id_pegawai=seleksi_syarat.id_pegawai join profil_syarat_pegawai 
              on pegawai.id_pegawai=profil_syarat_pegawai.id_pegawai")->result();
    }
}
?>

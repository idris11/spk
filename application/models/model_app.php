<?php


class Model_app extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    
    public function getAllData($table)
    {
        return $this->db->get($table)->result();
    }
    public function getSelectedData($table,$data)
    {
        return $this->db->get_where($table, $data);
    }
    function updateData($table,$data,$field_key)
    {
        $this->db->update($table,$data,$field_key);
    }
    function deleteData($table,$data)
    {
        $this->db->delete($table,$data);
    }
    function insertData($table,$data)
    {
        $this->db->insert($table,$data);
    }
    function manualQuery($q)
    {
        return $this->db->query($q);
    }



    function pegawai(){
        return $this->db->query("SELECT * from pegawai a left join jabatan b on a.id_jabatan=b.id_jabatan 
             ")->result();
    }

    function jabatan(){
        return $this->db->query("SELECT * from jabatan a left join tingkat_jabatan b on a.id_tingkatjbt=b.id_tingkatjbt
            left join unitkerja c on a.id_unitkerja=c.id_unitkerja")->result();
    }

    function jabatan_kosong(){
        return $this->db->query("SELECT * from jabatan_kosong a left join jabatan b on a.id_jabatan=b.id_jabatan
            left join tingkat_jabatan c on a.id_tingkatjbt=c.id_tingkatjbt left join unitkerja d on a.id_unitkerja=d.id_unitkerja")->result();
    }

    function profil_syarat_jabatan(){

        return $this->db->query("SELECT * from profil_syarat_jabatan a left join jabatan_kosong b on a.id_jabatankosong=b.id_jabatankosong  left join pangkat
        c on  a.nilai_pangkat=c.nilai_pangkat left join pendidikan d on a.nilai_pendidikan=d.nilai_pendidikan 
             ")->result();   
    }

    function bobot_rj_jabatan(){

        return $this->db->query("SELECT * from bobot_rj_jabatan a left join jabatan_kosong b on a.id_jabatankosong=b.id_jabatankosong 
             ")->result();   
    }

    function bobot_per_jabatan(){

        return $this->db->query("SELECT * from bobot_per_jabatan a left join jabatan_kosong b on a.id_jabatankosong=b.id_jabatankosong 
             ")->result();   
    }

    function bobot_km_jabatan(){

        return $this->db->query("SELECT * from bobot_km_jabatan a left join jabatan_kosong b on a.id_jabatankosong=b.id_jabatankosong 
             ")->result();   
    }

    function profil_syarat_pegawai(){

        return $this->db->query("SELECT * from profil_syarat_pegawai a left join pegawai b on a.id_pegawai=b.id_pegawai left join pangkat
        c on  a.nilai_pangkat=c.nilai_pangkat left join pendidikan d on a.nilai_pendidikan=d.nilai_pendidikan
             ")->result();   
    }

    function bobot_rj_pegawai(){

        return $this->db->query("SELECT * from bobot_rj_pegawai a left join pegawai b on a.id_pegawai=b.id_pegawai
             ")->result();   
    }

    function bobot_per_pegawai(){

        return $this->db->query("SELECT * from bobot_per_pegawai a left join pegawai b on a.id_pegawai=b.id_pegawai
             ")->result();   
    }

    function bobot_km_pegawai(){

        return $this->db->query("SELECT * from bobot_km_pegawai a left join pegawai b on a.id_pegawai=b.id_pegawai 
             ")->result();   
    }

    function seleksi_syarat(){

        return $this->db->query("select hasil_seleksi_syarat.id_hasil, hasil_seleksi_syarat.id_jabatankosong, hasil_seleksi_syarat.id_pegawai,
            hasil_seleksi_syarat.gap, profil_syarat_jabatan.nilai_pangkat, profil_syarat_jabatan.nilai_pendidikan, pegawai.nama,
            profil_syarat_pegawai.nilai_pangkat, profil_syarat_pegawai.nilai_pendidikan from hasil_seleksi_syarat
             join jabatan_kosong on jabatan_kosong.id_jabatankosong=hasil_seleksi_syarat.id_jabatankosong join profil_syarat_jabatan
              on jabatan_kosong.id_jabatankosong=profil_syarat_jabatan.id_jabatankosong join pegawai on 
              pegawai.id_pegawai=hasil_seleksi_syarat.id_pegawai join profil_syarat_pegawai 
              on pegawai.id_pegawai=profil_syarat_pegawai.id_pegawai")->result();
    }







    function login($username, $password) {
        //create query to connect user login database
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $username);
        $this->db->where('password', MD5($password));
        $this->db->limit(1);

        //get query and processing
        $query = $this->db->get();
        if($query->num_rows() == 1) {
            return $query->result(); //if data is true
        } else {
            return false; //if data is wrong
        }
    }

}
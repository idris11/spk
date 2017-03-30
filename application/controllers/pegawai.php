<?php

class pegawai extends CI_Controller
{
    function __construct() {
        parent::__construct();
        
        $this->load->model('model_app');
        check_session();

       
    }
    
    function index()
    {
        
        $data=array(
            'data_pegawai'=>$this->model_app->getAllData('pegawai'),
            'data_pegawai'=>$this->model_app->pegawai(),
            'data_jabatan'=>$this->model_app->getAllData('jabatan'),
            'data_profil_syarat_pegawai'=>$this->model_app->profil_syarat_pegawai('profil_syarat_pegawai'),
            'data_bobot_rj_pegawai'=>$this->model_app->bobot_rj_pegawai('bobot_rj_pegawai'),
            'data_bobot_per_pegawai'=>$this->model_app->bobot_per_pegawai('bobot_per_pegawai'),
            'data_bobot_km_pegawai'=>$this->model_app->bobot_km_pegawai('bobot_km_pegawai'),
            'data_pangkat'=>$this->model_app->getAllData('pangkat'),
            'data_pendidikan'=>$this->model_app->getAllData('pendidikan'),
        );
            $this->template->load('template','pegawai/tampil_data',$data);

    }
    
    function insert()
    {
       

        


        $data=array(
            'id_pegawai'=> $this->input->post('id_pegawai'),
            'nama'=> $this->input->post('nama'),
            'nip'=>$this->input->post('nip'),
            'tempat_lahir'=>$this->input->post('tempat_lahir'),
            'tgl_lahir'=>$this->input->post('tgl_lahir'),
            'alamat'=> $this->input->post('alamat'),
            'agama'=> $this->input->post('agama'),
            'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
            'id_jabatan'=>$this->input->post('jabatan'),
              );


            $data1=array(
            'id_pegawai'=> $this->input->post('id_pegawai'),
            'id_psp'=> $this->input->post('id_psp'),
            'nilai_pangkat'=>$this->input->post('nilai_pangkat'),
            'nilai_pendidikan'=> $this->input->post('nilai_pendidikan'),
      


        );

          

        $data2=array(
            'id_pegawai'=> $this->input->post('id_pegawai'),
            'id_rjp'=> $this->input->post('id_rjp'),
            'rj01'=>$this->input->post('rj01'),
             'rj02'=>$this->input->post('rj02'),
              'rj03'=>$this->input->post('rj03'),
               'rj04'=>$this->input->post('rj04'),
                'rj05'=>$this->input->post('rj05'),


        );

         $data3=array(
            'id_pegawai'=> $this->input->post('id_pegawai'),
            'id_prp'=> $this->input->post('id_prp'),
            'pr01'=>$this->input->post('pr01'),
             'pr02'=>$this->input->post('pr02'),
              'pr03'=>$this->input->post('pr03'),
               'pr04'=>$this->input->post('pr04'),
                'pr05'=>$this->input->post('pr05'),
                'pr06'=>$this->input->post('pr06'),
                'pr07'=>$this->input->post('pr07'),


        );

           $data4=array(
            'id_pegawai'=> $this->input->post('id_pegawai'),
            'id_kmp'=> $this->input->post('id_kmp'),
            'km01'=>$this->input->post('km01'),
             'km02'=>$this->input->post('km02'),
              'km03'=>$this->input->post('km03'),
               'km04'=>$this->input->post('km04'),
                'km05'=>$this->input->post('km05'),


        );

        $this->model_app->insertData('pegawai',$data);
         $this->model_app->insertData('profil_syarat_pegawai',$data1);
          $this->model_app->insertData('bobot_rj_pegawai',$data2);
           $this->model_app->insertData('bobot_per_pegawai',$data3);
            $this->model_app->insertData('bobot_km_pegawai',$data4);
        redirect("pegawai");
    }
    
    function edit()
    {
       
        $id['id_pegawai'] = $this->input->post('id_pegawai');
         $data=array(
            'nama'=> $this->input->post('nama'),
            'nip'=>$this->input->post('nip'),
            'tempat_lahir'=>$this->input->post('tempat_lahir'),
            'tgl_lahir'=>$this->input->post('tgl_lahir'),
            'alamat'=> $this->input->post('alamat'),
            'agama'=> $this->input->post('agama'),
            'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
            'id_jabatan'=>$this->input->post('jabatan'),
            

        );

            $id1['id_psp'] = $this->input->post('id_psp');
            $data1=array(
            'nilai_pangkat'=>$this->input->post('nilai_pangkat'),
            'nilai_pendidikan'=> $this->input->post('nilai_pendidikan'),

        );

            $id2['id_rjp'] = $this->input->post('id_rjp');
        $data2=array(
            
            'rj01'=>$this->input->post('rj01'),
             'rj02'=>$this->input->post('rj02'),
              'rj03'=>$this->input->post('rj03'),
               'rj04'=>$this->input->post('rj04'),
                'rj05'=>$this->input->post('rj05'),


        );

        $id3['id_prp'] = $this->input->post('id_prp');
         $data3=array(
            
            'pr01'=>$this->input->post('pr01'),
             'pr02'=>$this->input->post('pr02'),
              'pr03'=>$this->input->post('pr03'),
               'pr04'=>$this->input->post('pr04'),
                'pr05'=>$this->input->post('pr05'),
                'pr06'=>$this->input->post('pr06'),
                'pr07'=>$this->input->post('pr07'),


        );

        $id4['id_kmp'] = $this->input->post('id_kmp');
           $data4=array(
            
            'km01'=>$this->input->post('km01'),
             'km02'=>$this->input->post('km02'),
              'km03'=>$this->input->post('km03'),
               'km04'=>$this->input->post('km04'),
                'km05'=>$this->input->post('km05'),


        );
        $this->model_app->updateData('pegawai',$data,$id);
        $this->model_app->updateData('profil_syarat_pegawai',$data1,$id,$id1);
        $this->model_app->updateData('bobot_rj_pegawai',$data2,$id,$id2);
        $this->model_app->updateData('bobot_per_pegawai',$data3,$id,$id3);
        $this->model_app->updateData('bobot_km_pegawai',$data4,$id,$id4);
        redirect("pegawai");;
    }
    
    function delete()
    {
        $id['id_pegawai'] = $this->uri->segment(3);
        $this->model_app->deleteData('pegawai',$id);
         $this->model_app->deleteData('profil_syarat_pegawai',$id);
          $this->model_app->deleteData('bobot_rj_pegawai',$id);
           $this->model_app->deleteData('bobot_per_pegawai',$id);
            $this->model_app->deleteData('bobot_km_pegawai',$id);
        redirect("pegawai");
    }
}


<?php

class jabatan_kosong extends CI_Controller
{
    function __construct() {
        parent::__construct();
        
        $this->load->model('model_app');
        check_session();
    }
    
    function index()
    {
         $data=array(
            
            'data_jabatan_kosong'=>$this->model_app->getAllData('jabatan_kosong'),
            'data_jabatan_kosong'=>$this->model_app->jabatan_kosong(),
            'data_jabatan'=>$this->model_app->getAllData('jabatan'),
            'data_tingkat_jabatan'=>$this->model_app->getAllData('tingkat_jabatan'),
            'data_unitkerja'=>$this->model_app->getAllData('unitkerja'),
            'data_profil_syarat_jabatan'=>$this->model_app->profil_syarat_jabatan('profil_syarat_jabatan'),
            'data_bobot_rj_jabatan'=>$this->model_app->bobot_rj_jabatan('bobot_rj_jabatan'),
            'data_bobot_per_jabatan'=>$this->model_app->bobot_per_jabatan('bobot_per_jabatan'),
            'data_bobot_km_jabatan'=>$this->model_app->bobot_km_jabatan('bobot_km_jabatan'),
            'data_pangkat'=>$this->model_app->getAllData('pangkat'),
            'data_pendidikan'=>$this->model_app->getAllData('pendidikan'),
        );

        $this->template->load('template','jabatan_kosong/tampil_data',$data);
    }
    
    function insert()
    {
         $data=array(
            'id_jabatankosong'=> $this->input->post('id_jabatankosong'),
            'id_jabatan'=> $this->input->post('jabatan'),
            'id_tingkatjbt'=>$this->input->post('nama_tingkatjbt'),
            'id_unitkerja'=> $this->input->post('nama_unitkerja'),
            'periode'=> $this->input->post('periode'),

        );
         $data1=array(
            'id_jabatankosong'=> $this->input->post('id_jabatankosong'),
            'id_profilsyaratjbt'=> $this->input->post('id_profilsyaratjbt'),
            'nilai_pangkat'=>$this->input->post('nilai_pangkat'),
            'nilai_pendidikan'=> $this->input->post('nilai_pendidikan'),

        );

        $data2=array(
            'id_jabatankosong'=> $this->input->post('id_jabatankosong'),
            'id_rjj'=> $this->input->post('id_rjj'),
            'rj01'=>$this->input->post('rj01'),
             'rj02'=>$this->input->post('rj02'),
              'rj03'=>$this->input->post('rj03'),
               'rj04'=>$this->input->post('rj04'),
                'rj05'=>$this->input->post('rj05'),


        );

         $data3=array(
            'id_jabatankosong'=> $this->input->post('id_jabatankosong'),
            'id_prj'=> $this->input->post('id_prj'),
            'pr01'=>$this->input->post('pr01'),
             'pr02'=>$this->input->post('pr02'),
              'pr03'=>$this->input->post('pr03'),
               'pr04'=>$this->input->post('pr04'),
                'pr05'=>$this->input->post('pr05'),
                'pr06'=>$this->input->post('pr06'),
                'pr07'=>$this->input->post('pr07'),


        );

           $data4=array(
            'id_jabatankosong'=> $this->input->post('id_jabatankosong'),
            'id_kmj'=> $this->input->post('id_kmj'),
            'km01'=>$this->input->post('km01'),
             'km02'=>$this->input->post('km02'),
              'km03'=>$this->input->post('km03'),
               'km04'=>$this->input->post('km04'),
                'km05'=>$this->input->post('km05'),


        );

         

        $this->model_app->insertData('jabatan_kosong',$data);
        $this->model_app->insertData('profil_syarat_jabatan',$data1);
        $this->model_app->insertData('bobot_rj_jabatan',$data2);
        $this->model_app->insertData('bobot_per_jabatan',$data3);
          $this->model_app->insertData('bobot_km_jabatan',$data4);

        redirect("jabatan_kosong");
    }
    
    function edit()
    {
       $id['id_jabatankosong'] = $this->input->post('id_jabatankosong');
        
        $data=array(
            'id_jabatan'=> $this->input->post('jabatan'),
            'id_tingkatjbt'=>$this->input->post('nama_tingkatjbt'),
            'id_unitkerja'=> $this->input->post('nama_unitkerja'),
            'periode'=> $this->input->post('periode'),

        );

         $id1['id_profilsyaratjbt'] = $this->input->post('id_profilsyaratjbt');
         $data1=array(
            'nilai_pangkat'=>$this->input->post('nilai_pangkat'),
            'nilai_pendidikan'=> $this->input->post('nilai_pendidikan'),

        );

          $id2['id_rjj'] = $this->input->post('id_rjj');
        $data2=array(
            
            
            'rj01'=>$this->input->post('rj01'),
             'rj02'=>$this->input->post('rj02'),
              'rj03'=>$this->input->post('rj03'),
               'rj04'=>$this->input->post('rj04'),
                'rj05'=>$this->input->post('rj05'),


        );

          $id3['id_prj'] = $this->input->post('id_prj');
         $data3=array(
            
            'pr01'=>$this->input->post('pr01'),
             'pr02'=>$this->input->post('pr02'),
              'pr03'=>$this->input->post('pr03'),
               'pr04'=>$this->input->post('pr04'),
                'pr05'=>$this->input->post('pr05'),
                'pr06'=>$this->input->post('pr06'),
                'pr07'=>$this->input->post('pr07'),


        );
             $id4['id_kmj'] = $this->input->post('id_kmj');
        
             $data4=array(
            
            'km01'=>$this->input->post('km01'),
             'km02'=>$this->input->post('km02'),
              'km03'=>$this->input->post('km03'),
               'km04'=>$this->input->post('km04'),
                'km05'=>$this->input->post('km05'),


        );


        $this->model_app->updateData('jabatan_kosong',$data,$id);
        $this->model_app->updateData('profil_syarat_jabatan',$data1,$id,$id1);
        $this->model_app->updateData('bobot_rj_jabatan',$data2,$id,$id2);
        $this->model_app->updateData('bobot_per_jabatan',$data3,$id,$id3);
        $this->model_app->updateData('bobot_km_jabatan',$data4,$id,$id4);
        redirect("jabatan_kosong");;
    }

    
    
    function delete()
    {
        $id['id_jabatankosong'] = $this->uri->segment(3);
        $this->model_app->deleteData('jabatan_kosong',$id);
         $this->model_app->deleteData('profil_syarat_jabatan',$id);
          $this->model_app->deleteData('bobot_rj_jabatan',$id);
           $this->model_app->deleteData('bobot_per_jabatan',$id);
            $this->model_app->deleteData('bobot_km_jabatan',$id);
        redirect("jabatan_kosong");
    }
}


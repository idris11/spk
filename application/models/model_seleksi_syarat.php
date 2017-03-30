<?php
class model_seleksi_syarat extends ci_model{

	function insert($data){
		$this->db->insert('seleksi_syarat',$data);
	}
}
?>
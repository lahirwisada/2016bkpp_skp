<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cref_pejabat_penilai extends Back_end {

    public $model = 'model_tr_pejabat_penilai';

    public function __construct() {
        parent::__construct('kelola_pustaka_kegiatan', 'Pustaka Data Pejabat Penilai');
    }

    public function index() {
        parent::index();
        $this->set("bread_crumb", array(
            "#" => $this->_header_title
        ));
    }

    public function detail($id = FALSE) {
        parent::detail($id, array(
            "id_pejabat_penilai",
            "pejabat_penilai",  
			"atasan_pejabatpenilai",
			"yang_dinilai",			
        ));

        $this->set("bread_crumb", array(
            "back_end/" . $this->_name => $this->_header_title,
            "#" => 'Pendaftaran ' . $this->_header_title
        ));
		$this->set("additional_js", array(
            "back_end/" . $this->_name . "/js/detail_js",
            "back_end/cpeserta_diklat/js/detail_isian_js",
        ));
		$this->add_cssfiles(array("plugins/select2/select2.min.css"));
        $this->add_jsfiles(array("plugins/select2/select2.full.min.js"));
    }

    public function get_like() {
        $keyword = $this->input->post("keyword");

        $kegiatan_found = $this->model_ref_kegiatan->get_like($keyword);
        
        $this->to_json($kegiatan_found);
    }

    

}

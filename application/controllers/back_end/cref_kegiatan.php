<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cref_kegiatan extends Back_end {

    public $model = 'model_ref_kegiatan';

    public function __construct() {
        parent::__construct('kelola_pustaka_kegiatan', 'Pustaka Data Kegiatan');
    }

    public function index() {
        parent::index();
        $this->set("bread_crumb", array(
            "#" => $this->_header_title
        ));
    }

    public function detail($id = FALSE) {
        parent::detail($id, array(
            "id_kegiatan",
            "tahun",  
			"kegiatan_tugas_jabatan",
			"angka_kredit",
			"kuantitas",
			"kualitas",
			"waktu",
			"biaya",			
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

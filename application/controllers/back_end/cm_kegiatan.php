<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cm_kegiatan extends Back_end {

    public $model = 'model_m_kegiatan';

    public function __construct() {
        parent::__construct('kelola_pustaka_kegiatan', 'Pustaka Data kegiatan');
    }

    public function index() {
        parent::index();
        $this->set("bread_crumb", array(
            "#" => $this->_header_title
        ));
    }

   public function detail($id = FALSE) {
        parent::detail($id, array(
            "kode_kegiatan",
            "nama_kegiatan",
        ));

        $this->set("bread_crumb", array(
            "back_end/" . $this->_name => $this->_header_title,
            "#" => 'Pendaftaran ' . $this->_header_title
        ));
//        $this->add_jsfiles(array("avant/plugins/form-jasnyupload/fileinput.min.js"));
    }
    
    public function get_like() {
        $keyword = $this->input->post("keyword");

        $kegiatan_found = $this->model_m_kegiatan->get_like($keyword);
        
        $this->to_json($kegiatan_found);
    }

}

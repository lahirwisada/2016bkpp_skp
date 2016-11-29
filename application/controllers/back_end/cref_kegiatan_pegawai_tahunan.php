<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cref_kegiatan_pegawai_tahunan extends Back_end {

    public $model = 'model_ref_kegiatan_pegawai_tahunan';

    public function __construct() {
        parent::__construct('kelola_pustaka_pegawai', 'Pustaka Data Sasaran Kerja Pegawai');
    }

    public function index() {
        parent::index();
        $this->set("bread_crumb", array(
            "#" => $this->_header_title
        ));
    }

    public function detail($id = FALSE) {
        parent::detail($id, array(
            "tahun ", 
			"id_kegiatan ", 
			"id_pegawai ", 
        ));

        $this->set("bread_crumb", array(
            "back_end/" . $this->_name => $this->_header_title,
            "#" => 'Pendaftaran ' . $this->_header_title
        ));

        $this->set("additional_js", array(
            "back_end/" . $this->_name . "/js/detail_isian_js",
			"back_end/" . $this->_name . "/js/cfg_slc_kegiatan_js",
			"back_end/" . $this->_name . "/js/cfg_slc_pegawai_js",
            
        ));

        $this->add_cssfiles(array("plugins/select2/select2.min.css"));
        $this->add_jsfiles(array("plugins/select2/select2.full.min.js"));
//        $this->add_jsfiles(array("avant/plugins/form-jasnyupload/fileinput.min.js"));
    }

    public function get_like() {
        $keyword = $this->input->post("keyword");
        $id_skpd = $this->input->post("id_skpd");

        $data_found = $this->{$this->model}->get_like($keyword, $id_skpd);

        $this->to_json($data_found);
    }

}

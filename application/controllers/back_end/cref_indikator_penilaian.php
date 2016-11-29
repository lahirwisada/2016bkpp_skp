<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cref_indikator_penilaian extends Back_end {

    public $model = 'model_indikator_penilaian';

    public function __construct() {
        parent::__construct('kelola_pustaka_pegawai', 'Pustaka Data Indikator Penilaian');
    }

    public function index() {
        parent::index();
        $this->set("bread_crumb", array(
            "#" => $this->_header_title
        ));
    }

    public function detail($id = FALSE) {
        parent::detail($id, array(
            "id_indikator",
            "kode_indikator",
            "nama_indikator",
        ));

        $this->set("bread_crumb", array(
            "back_end/" . $this->_name => $this->_header_title,
            "#" => 'Pendaftaran ' . $this->_header_title
        ));
    }

    public function get_like() {
        $keyword = $this->input->post("keyword");
        $id_skpd = $this->input->post("id_indikator");

        $data_found = $this->{$this->model}->get_like($keyword, $id_skpd);

        $this->to_json($data_found);
    }
}

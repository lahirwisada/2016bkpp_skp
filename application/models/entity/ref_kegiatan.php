<?php

if (!defined("BASEPATH")) {
    exit("No direct script access allowed");
}

class Ref_kegiatan extends LWS_model {

    public function __construct() {
        parent::__construct("ref_kegiatan");
        $this->primary_key = "id_kegiatan";
    }

    protected $attribute_labels = array(
        "id_kegiatan" => array("id_kegiatan", "ID Kegiatan"),
        "tahun" => array("tahun", "Tahun"),
        "kegiatan_tugas_jabatan" => array("kegiatan_tugas_jabatan", "kegiatan_tugas_jabatan"),
        "ak" => array("ak", "ak"),
        "kuantitas" => array("kuantitas", "kuantitas"),
        "kualitas" => array("kualitas", "kualitas"),
        "waktu" => array("waktu", "waktu"),
        "biaya" => array("biaya", "biaya"),
    );
    protected $rules = array(
        array("id_kegiatan", ""),
        array("tahun", ""),
        array("kegiatan_tugas_jabatan", ""),
        array("ak", ""),
        array("kuantitas", ""),
        array("kualitas", ""),
        array("waktu", ""),
        array("biaya", ""),
    );
    protected $related_tables = array();
    protected $attribute_types = array();

}

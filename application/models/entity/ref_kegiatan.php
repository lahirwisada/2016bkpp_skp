<?php

if (!defined("BASEPATH")) {
    exit("No direct script access allowed");
}

class Ref_kegiatan extends LWS_model {

    public function __construct() {
        parent::__construct("tr_kegiatan_unit");
        $this->primary_key = "id_kegiatan";
    }

    protected $attribute_labels = array(
        "id_kegiatan_unit" => array("id_kegiatan_unit", ""),
        "tahun" => array("tahun", ""),
        "id_kegiatan" => array("id_kegiatan", ""),
        "angka_kredit" => array("angka_kredit", ""),
        "kuantitas" => array("kuantitas", ""),
        "kualitas" => array("kualitas", ""),
        "waktu" => array("waktu", ""),
        "biaya" => array("biaya", ""),
    );
    protected $rules = array(
        array("id_kegiatan", ""),
        array("tahun", ""),
        array("kegiatan_tugas_jabatan", ""),
        array("angka_kredit", ""),
        array("kuantitas", ""),
        array("kualitas", ""),
        array("waktu", ""),
        array("biaya", ""),
    );
    protected $related_tables = array(
	"m_kegiatan" => array(
            "fkey" => "id_kegiatan",
            "reference_to" => "m_kegiatan",
            "columns" => array(
                "id_kegiatan",
                "kode_kegiatan",
                "nama_kegiatan",
            ),
            "referenced" => "LEFT"
        ),);
    
    protected $attribute_types = array(
        "kualitas" => "NUMERIC",
        "waktu" => "NUMERIC",
        "biaya" => "NUMERIC",
    );

}

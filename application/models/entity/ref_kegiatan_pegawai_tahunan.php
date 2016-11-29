<?php

if (!defined("BASEPATH")) {
    exit("No direct script access allowed");
}

class ref_kegiatan_pegawai_tahunan extends LWS_model {

    public function __construct() {
        parent::__construct("tr_kegiatan_pegawai_tahunan");
        $this->primary_key = "id_kegiatan_pegawai_tahunan";
    }

    protected $attribute_labels = array(
        "id_kegiatan_pegawai_tahunan" => array("id_kegiatan_pegawai_tahunan", ""),
        "id_kegiatan"=> array("id_kegiatan", ""),
		"id_pegawai"=> array("id_pegawai", ""),
		"kegiatan_status"=> array("kegiatan_status", ""),
		"is_mutasi"=> array("is_mutasi", ""),
    );
    protected $rules = array(
        array("id_kegiatan_pegawai_tahunan", ""), 
		array("id_kegiatan", ""), 
		array("id_pegawai", ""), 
		array("kegiatan_status", ""), 
		array("is_mutasi", ""), 
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
        "id_kegiatan" => "NUMERIC",
        "id_pegawai" => "NUMERIC",
        "id_pegawai" => "NUMERIC",
		"kegiatan_status" => "NUMERIC",
		"is_mutasi" => "NUMERIC",
    );

}

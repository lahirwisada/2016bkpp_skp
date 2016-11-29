<?php

if (!defined("BASEPATH")) {
    exit("No direct script access allowed");
}

class Ref_pejabat_penilai extends LWS_model {

    public function __construct() {
        parent::__construct("tr_pejabat_penilai");
        $this->primary_key = "id_pejabat_penilai";
    }

    protected $attribute_labels = array(
        "id_pejabat_penilai" => array("id_pejabat_penilai", ""),
        "atasan_pejabatpenilai" => array("atasan_pejabatpenilai", ""),
		"pejabat_penilai" => array("pejabat_penilai", ""),
        "yang_dinilai" => array("yang_dinilai", ""),
    );
    protected $rules = array(
        array("id_pejabat_penilai", ""),
		array("atasan_pejabatpenilai", ""),
        array("pejabat_penilai", ""),
        array("yang_dinilai", ""),
    );
    protected $related_tables = array(
	"ref_pegawai" => array(
			"fkey" => array(
			"id_pegawai","pejabat_penilai", ),
            "reference_to" => "tr_pejabat_penilai",
            "columns" => array(
                "nama_sambung as nama_pejabat_penilai",
            ),
            "referenced" => "LEFT"
        ),
		"rpeg_atasan" => array(
            "table_name"=>"ref_pegawai",
            "fkey" => array("id_pegawai", "atasan_pejabatpenilai"),
            "table_alias" => "rpeg_atasan","reference_to" => "tr_pejabat_penilai",
            "columns" => array(
                array("nama_sambung", "nama_atasan_pejabatpenilai"),
            ),
            "referenced" => "LEFT"
        ),
		"rpeg_yang_dinilai" => array(
            "table_name"=>"ref_pegawai",
            "fkey" => array("id_pegawai", "yang_dinilai"),
            "table_alias" => "rpeg_yang_dinilai",
			"reference_to" => "tr_pejabat_penilai",
            "columns" => array(
                array("nama_sambung", "nama_yang_dinilai"),
            ),
            "referenced" => "LEFT"
        ),
		);
    
    protected $attribute_types = array(
        "kualitas" => "NUMERIC",
        "waktu" => "NUMERIC",
        "biaya" => "NUMERIC",
    );

}

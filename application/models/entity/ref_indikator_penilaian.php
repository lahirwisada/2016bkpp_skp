<?php

if (!defined("BASEPATH")) {
    exit("No direct script access allowed");
}

class Ref_indikator_penilaian extends LWS_model {

    public function __construct() {
        parent::__construct("ref_indikator_penilaian");
        $this->primary_key = "id_indikator";
    }

    protected $attribute_labels = array(
        "id_indikator" => array("id_indikator", "Id Povinsi"),
        "kode_indikator" => array("kode_indikator", "Kode"),
        "nama_indikator" => array("nama_indikator", "Nama Provinsi"),
        "created_date" => array("created_date", "created_date"),
        "created_by" => array("created_by", "created_by"),
        "modified_date" => array("modified_date", "modified_date"),
        "modified_by" => array("modified_by", "modified_by"),
        "record_active" => array("record_active", "record_active"),
    );
    
    protected $rules = array(
        array("id_indikator", ""),
        array("kode_indikator", ""),
        array("nama_indikator", ""),
        array("created_date", ""),
        array("created_by", ""),
        array("modified_date", ""),
        array("modified_by", ""),
        array("record_active", ""),
    );
    protected $related_tables = array();
    protected $attribute_types = array();

}

?>
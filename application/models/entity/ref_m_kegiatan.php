<?php

if (!defined("BASEPATH")) {
    exit("No direct script access allowed");
}

class Ref_m_kegiatan extends LWS_model {

    public function __construct() {
        parent::__construct("m_kegiatan");
        $this->primary_key = "id_kegiatan";
    }

    protected $attribute_labels = array(
        "id_kegiatan" => array("id_kegiatan", "Id Kegiatan"),
        "kode_kegiatan" => array("kode_kegiatan", "Kode"),
        "nama_kegiatan" => array("nama_kegiatan", "Nama Kegiatan"),
    );
    
    protected $rules = array(
        array("id_kegiatan", ""),
        array("kode_kegiatan", ""),
        array("nama_kegiatan", ""),
    );
    protected $related_tables = array();
    protected $attribute_types = array();

}

?>
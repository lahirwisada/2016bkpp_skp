<?php

if (!defined("BASEPATH")) {
    exit("No direct script access allowed");
}

class Ref_kegiatan extends LWS_model {

    public function __construct() 
	{
        parent::__construct("ref_kegiatan");
        $this->primary_key = "id_kegiatan";
    }

    protected $attribute_labels = array(
        "id_kegiatan" => array("id_kegiatan", "ID Kegiatan"),
        "tahun" => array("tahun", "Tahun"),
    );
    protected $rules = array(
        array("id_kegiatan", ""),
        array("tahun", ""),
		);
    
    protected $related_tables = array();
    protected $attribute_types = array();

}

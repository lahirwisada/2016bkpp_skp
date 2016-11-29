<?php

if (!defined("BASEPATH")) {
    exit("No direct script access allowed");
} include_once "entity/ref_indikator_penilaian.php";

class model_indikator_penilaian extends ref_indikator_penilaian {

    protected $rules = array(
        array("kode_indikator", "required|min_length[1]|max_length[30]"),
        array("nama_indikator", "required|min_length[1]|max_length[200]"),
    );

    public function __construct() {
        parent::__construct();
    }

    public function all($force_limit = FALSE, $force_offset = FALSE) {
        return parent::get_all(array(
                    "kode_indikator",
                    "nama_indikator",
                        ), FALSE, TRUE, FALSE, 1, TRUE, $force_limit, $force_offset);
    }
    
    public function get_like($keyword=FALSE){
        
        $result = FALSE;
        if($keyword){
            $this->db->order_by("kode_indikator", "asc");
            $this->db->where(" lower(".$this->table_name.".nama_indikator) LIKE lower('%".$keyword."%') OR lower(".$this->table_name.".kode_indikator) LIKE lower('%".$keyword."%')", NULL, FALSE);
            $result = $this->get_where();
        }
        return $result;
        
    }
}

?>
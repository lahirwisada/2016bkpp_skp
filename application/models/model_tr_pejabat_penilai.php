<?php

if (!defined("BASEPATH")) {
    exit("No direct script access allowed");
} include_once "entity/tr_pejabat_penilai.php";

class model_tr_pejabat_penilai extends Ref_pejabat_penilai {

    protected $rules = array(
        array("id_pejabat_penilai", "required|min_length[1]|max_length[30]"),
        array("pejabat_penilai", "required|min_length[1]|max_length[30]"),
        array("atasan_pejabatpenilai", ""),
        array("yang_dinilai", ""),
    );

    public function __construct() {
        parent::__construct();
    }
    
    public function all($force_limit = FALSE, $force_offset = FALSE) {
        return parent::get_all(array(
                    "id_pejabat_penilai",
                    "pejabat_penilai",
                    "atasan_pejabatpenilai",
                    "yang_dinilai",
                        ), FALSE, TRUE, FALSE, 1, TRUE, $force_limit, $force_offset);
    }

    public function get_like($keyword = FALSE) {

        $result = FALSE;
        if ($keyword) {
            $this->db->order_by("id_pejabat_penilai", "asc");
            $this->db->where(" lower(" . $this->table_name . ".pejabat_penilai) LIKE lower('%" . $keyword . "%') OR lower(" . $this->table_name . ".atasan_pejabatpenilai) LIKE lower('%" . $keyword . "%')", NULL, FALSE);
            $result = $this->get_where();
        }
        return $result;
    }

}

?>
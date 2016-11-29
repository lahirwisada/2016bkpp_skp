<?php

if (!defined("BASEPATH")) {
    exit("No direct script access allowed");
} include_once "entity/tr_kegiatan_pegawai_tahunan.php";

class model_ref_kegiatan_pegawai_tahunan extends tr_kegiatan_pegawai_tahunan {

    protected $rules = array(
		array("id_kegiatan_pegawai_tahunan", ""), 
		array("id_kegiatan", ""), 
		array("id_pegawai", ""), 
		array("kegiatan_status", ""), 
		array("is_mutasi", ""), 
    );

    public function __construct() {
        parent::__construct();
    }

    public function all($force_limit = FALSE, $force_offset = FALSE) {
        return parent::get_all(array(
                    "id_kegiatan_pegawai_tahunan",
                    "id_kegiatan",
					"id_pegawai",
					"kegiatan_status",
					"is_mutasi",
                        ), FALSE, TRUE, FALSE, 1, TRUE, $force_limit, $force_offset);
    }
	
	public function get_like($keyword = FALSE) {

        $result = FALSE;
        if ($keyword) {
            $this->db->order_by("id_pegawai", "asc");
            $this->db->where(" lower(" . $this->table_name . ".tahun) LIKE lower('%" . $keyword . "%') OR lower(" . $this->table_name . ".id_kegiatan) LIKE lower('%" . $keyword . "%')", NULL, FALSE);
            $result = $this->get_where();
        }
        return $result;
    }

}

?>
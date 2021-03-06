<?php

if (!defined("BASEPATH")) {
    exit("No direct script access allowed");
} include_once "entity/ref_kegiatan.php";

class model_ref_kegiatan_pegawai extends ref_kegiatan {

    protected $rules = array(
        array("id_kegiatan", "required|min_length[1]|max_length[30]"),
        array("tahun", "required|min_length[1]|max_length[30]"),
        array("kegiatan_tugas_jabatan", ""),
        array("angka_kredit", ""),
        array("kuantitas", ""),
        array("kualitas", ""),
        array("waktu", ""),
        array("biaya", ""),
    );

    public function __construct() {
        parent::__construct();
    }
    
    public function all($force_limit = FALSE, $force_offset = FALSE) {
        return parent::get_all(array(
                    "tahun",
                    "kegiatan_tugas_jabatan",
                    "angka_kredit",
                    "kuantitas",
                    "kualitas",
                    "waktu",
                    "biaya",
                        ), FALSE, TRUE, FALSE, 1, TRUE, $force_limit, $force_offset);
    }

    public function get_like($keyword = FALSE) {

        $result = FALSE;
        if ($keyword) {
            $this->db->order_by("id_kegiatan", "asc");
			$where = " lower(" . $this->table_name . ".nama_kegiatan) LIKE lower('%" . $keyword . "%')" 
			."OR lower(" . $this->table_name . ".id_kegiatan) LIKE lower('%" . $keyword . "%')";
            $this->db->where($where, NULL, FALSE);
            $result = $this->get_where();
        }
        return $result;
    }

}

?>
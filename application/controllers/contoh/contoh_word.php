<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Description of contoh_word
 *
 * @author nurfadillah
 */
class Contoh_word extends Main {

    public function __construct() {
        parent::__construct("contoh", "contoh word");
    }

    public function index() {

        echo "template lihat di _assets/template/contoh_template.docx<br />";
        echo "hasil ada di _assets/contoh_hasil/ (lihat di source code line 24).<br />";
        echo "popup langsung kedownload.<br />";

        $save_document_success = FALSE;
        $output_filename = "output_filename-sakkarepmu-";

        $this->load->library('lwphpword', array(
            "base_path" => APPPATH . "../_assets/contoh_hasil/",
            "base_url" => base_url() . "_assets/contoh_hasil/",
            "base_root" => base_url(),
        ));

        $this->lwphpword->save_path = APPPATH . "../_assets/contoh_save_path/";

        $template_file = "../_assets/template/contoh_template.docx";

        /**
         * contoh data tabel
         * ini bisa ambil dari basis data atau dari mana aja.
         */
        $contoh_record = (object) ["uraian" => "ini uraian nomor ", "isi" => "ini isi nomor "];
        $contoh_set_record = [];


        $jumlah_contoh_record = 0;
        while ($jumlah_contoh_record <= 9) {
            $contoh_set_record[] = (object) [
                        "uraian" => $contoh_record->uraian . ($jumlah_contoh_record + 1),
                        "isi" => $contoh_record->isi . ($jumlah_contoh_record + 1)
            ];
            $jumlah_contoh_record++;
        }

        $load_template_success = $this->lwphpword->load_template(APPPATH . $template_file);

        if ($load_template_success) {
            $record_count_found = count($contoh_set_record);
            $this->lwphpword->clone_row('contoh_nomor_tabel', $record_count_found);

            foreach ($contoh_set_record as $key => $record) {

                $template_string_no = 'contoh_nomor_tabel#' . ($key + 1);
                $template_string_uraian_table = 'contoh_uraian_tabel#' . ($key + 1);
                $template_string_isi_table = 'contoh_isi_tabel#' . ($key + 1);

                $this->lwphpword->set_value($template_string_no, "aa" . ($key + 1) . ".");
                $this->lwphpword->set_value($template_string_uraian_table, $record->uraian);
                $this->lwphpword->set_value($template_string_isi_table, $record->isi);
            }

            $this->lwphpword->set_value("contoh_nama_dokumen", "contoh dokumen untuk isi template word");
            $this->lwphpword->set_value("contoh_isi_dokumen", "Isi Dokumen berbentuk tabel");

            $save_document_success = $this->lwphpword->save_document();

            $attention_message = "Cetak Dokumen tidak dapat dilakukan.";
            if ($save_document_success) {
                $attention_message = "Cetak Dokumen sukses.";
                $output_filename .= date('d-F-Y').".docx";
                //$this->lwphpword->download($save_document_success, $output_filename, 'pdf');
                $this->lwphpword->download($save_document_success, $save_document_success);
            }

            echo $attention_message;
        }

        exit;
    }

}

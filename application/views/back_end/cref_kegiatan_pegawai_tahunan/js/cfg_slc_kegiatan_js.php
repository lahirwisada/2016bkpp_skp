<?php

/**
 * used by this module and cref_pegawai
 */
$detail = isset($detail) ? $detail : FALSE;

?>
<script>

    var slc_kegiatan_cfg = {
        data: [],
        ajax: {
            url: "<?php echo base_url(); ?>back_end/cm_kegiatan/get_like",
            placeholder: 'Pilih Kegiatan',
            dataType: 'json',
            delay: 250,
            method: 'post',
            width: '100%',
            data: function (params) {
                return {
                    keyword: params.term, // search term
                    page: params.page
                };
            },
            processResults: function (data, params) {

                var data = $.map(data, function (obj) {
                    obj.id = obj.id || obj.id_kegiatan;
                    obj.text = obj.text || obj.nama_kegiatan;
                    return obj;
                });
                params.page = params.page || 1;
                return {
                    results: data
                };
            },
            cache: true
        },
        escapeMarkup: function (markup) {
            return markup;
        }, 
        minimumInputLength: 2
    };
</script>
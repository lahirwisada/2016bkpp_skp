<?php

/**
 * used by this module and cref_pegawai
 */
$detail = isset($detail) ? $detail : FALSE;

?>
<script>

     var slc_pegawai_cfg = {
        data: [],
        ajax: {
            url: "<?php echo base_url(); ?>back_end/cref_pegawai/get_like",
            placeholder: 'Pilih Pegawai',
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
                    obj.id = obj.id || obj.id_pegawai;
                    obj.text = obj.text || obj.nama_sambung;
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
        }, // let our custom formatter work
        minimumInputLength: 2
    };
</script>
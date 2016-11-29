<?php

/**
 * used by this module and cref_pegawai
 */
$detail = isset($detail) ? $detail : FALSE;

?>
<script>

    var detail_form={
		init: function(){
		$("#slc-kegiatan").select2(slc_kegiatan_cfg);
		<?php if ($detail && !is_null($detail->id_kegiatan) && $detail->id_kegiatan != ""): ?>
					$("#slc-kegiatan").val(<?php echo $detail->id_kegiatan; ?>).trigger("change");
		<?php endif; ?>

		$("#slc-pegawai").select2(slc_pegawai_cfg);
		<?php if ($detail && !is_null($detail->id_pegawai) && $detail->id_pegawai != ""): ?>
					$("#slc-pegawai").val(<?php echo $detail->id_pegawai; ?>).trigger("change");
		<?php endif; ?>
		}
	};
	
    $(document).ready(function () {
		detail_form.init();
    });
</script>
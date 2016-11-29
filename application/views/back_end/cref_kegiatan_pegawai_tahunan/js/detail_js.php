<?php
$id_diklat = isset($id_diklat) && $id_diklat ? $id_diklat : "";
$detail_diklat = isset($detail_diklat) ? $detail_diklat : FALSE;
?>

<script type="text/javascript">

    var formDetailkegiatan = {
        data: {
            id_kegiatan_unit: null,
			tahun: null,
			id_kegiatan: null,
			angka_kredit: null,
			kuantitas: null,
			kualitas: null,
			waktu : null,
			biaya: null,
        },
        collectData: function () {
            var self = this;

            self.data.id_kegiatan = $("#slc-kegiatan").val();
            /*self.data.nip = $("#txt-nip").val();
            self.data.no_kep = $("#txt-no_kep").val();
            self.data.gelar_depan = $("#txt-gelar_depan").val();
            self.data.nama_depan = $("#txt-nama_depan").val();
            self.data.nama_tengah = $("#txt-nama_tengah").val();
            self.data.nama_belakang = $("#txt-nama_belakang").val();
            self.data.gelar_belakang = $("#txt-gelar_belakang").val();
            self.data.tempat_lahir = $("#txt-tempat_lahir").val();
            self.data.tgl_lahir = $("#txt-tgl_lahir").val();
*/
            return self.data;
        }
    };

    $(document).ready(function () {

        $("#frm-ref-kegiatan").submit(function (e) {
            e.preventDefault();

            var data = formDetailkegiatan.collectData();

            $.ajax({
                url: "<?php echo base_url('back_end/cref_kegiatan/detail'); ?>",
                data: data,
                method: 'POST',
                success: function (response, textStatus) {
                    window.location.href = "<?php echo base_url("back_end/cref_kegiatan/index"); ?>";
                },
                complete: function () {

                }
            });

            return false;
        });
    });
</script>
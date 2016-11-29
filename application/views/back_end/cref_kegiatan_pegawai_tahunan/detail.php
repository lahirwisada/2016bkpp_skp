<?php
$header_title = isset($header_title) ? $header_title : '';
$active_modul = isset($active_modul) ? $active_modul : 'none';
$detail = isset($detail) ? $detail : FALSE;
?>

<div class="row">
    <div class="col-md-12">

        <form enctype="multipart/form-data" method="POST" class="form-horizontal" id="frm-ref-kegiatan">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h3 class="panel-title">Formulir <strong><?php echo $header_title; ?></strong></h3>
                </div>
                <div class="panel-body">
                    <p><?php echo load_partial("back_end/shared/attention_message"); ?></p>
                </div>
                <div class="panel-body">

                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Tahun *</label>
                        <div class="col-md-6 col-xs-12">
                            <?php
                            $default_value_tahun = $detail ? $detail->tahun : date('Y');
                            echo dropdown_tahun('tahun', date('Y'), 5, 'class="form-control select"');
                            ?>
                            <?php /* <input type="text" name="tahun" class="form-control" value="<?php echo $detail ? $detail->tahun : ""; ?>"> */ ?>                                   
                            <span class="help-block">Tahun. contoh : 2016</span>
                        </div>
                    </div>
					<div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Pegawai *</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <select id="slc-pegawai" class="form-control select2-basic" name="id_pegawai">
                            </select>
                            <span class="help-block">Pilih Kegiatan.<br />Masukkan kata kunci pada kotak inputan kemudian pilih Pegawai yang dimaksud.</span>
                        </div>
                    </div>
					<div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Kegiatan *</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <select id="slc-kegiatan" class="form-control select2-basic" name="id_kegiatan">
                            </select>
                            <span class="help-block">Pilih Kegiatan.<br />Masukkan kata kunci pada kotak inputan kemudian pilih Kegiatan yang dimaksud.</span>
                        </div>
                    </div>
					<!--
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Angka Kredit *</label>
                        <div class="col-md-6 col-xs-12">                                            
                            
                                <input type="text" name="angka_kredit" class="form-control" value="<?php echo $detail ? $detail->angka_kredit : ""; ?>">
                                                                        
                            <span class="help-block">Tahun. contoh : 2016</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Kuantitas *</label>
                        <div class="col-md-6 col-xs-12">                                            
                            
                                <input type="text" name="kuantitas" class="form-control" value="<?php echo $detail ? $detail->kuantitas : ""; ?>">
                                                                        
                            <span class="help-block">Tahun. contoh : 2016</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Kualitas *</label>
                        <div class="col-md-6 col-xs-12">                                            
                            
                                <input type="text" name="kualitas" class="form-control" value="<?php echo $detail ? $detail->kualitas : ""; ?>">
                                                                       
                            <span class="help-block">Tahun. contoh : 2016</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Waktu *</label>
                        <div class="col-md-6 col-xs-12">                                            
                            
                                <input type="text" name="waktu" class="form-control" value="<?php echo $detail ? $detail->waktu : ""; ?>">
                                                                       
                            <span class="help-block">Tahun. contoh : 2016</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Biaya *</label>
                        <div class="col-md-6 col-xs-12">                                            
                            
                                <input type="text" name="biaya" class="form-control" value="<?php echo $detail ? $detail->biaya : ""; ?>">
                                                                       
                            <span class="help-block">Tahun. contoh : 2016</span>
                        </div>
                    </div>

                </div>
				-->
                <div class="panel-footer">
                    <button type="submit" class="btn-primary btn pull-right">Submit</button>
                    <a href="<?php echo base_url("back_end/" . $active_modul . "/index"); ?>" class="btn-default btn">Batal / Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>
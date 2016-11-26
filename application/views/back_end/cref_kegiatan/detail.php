<?php
$header_title = isset($header_title) ? $header_title : '';
$active_modul = isset($active_modul) ? $active_modul : 'none';
$detail = isset($detail) ? $detail : FALSE;
?>

<div class="row">
    <div class="col-md-12">

        <form enctype="multipart/form-data" method="POST" class="form-horizontal">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h3 class="panel-title">Formulir <strong><?php echo $header_title; ?></strong></h3>
                </div>
                <div class="panel-body">
                    <p><?php echo load_partial("back_end/shared/attention_message"); ?></p>
                </div>
                <div class="panel-body">

                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">ID Kegiatan *</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <input type="text" name="id_kegiatan" class="form-control" value="<?php echo $detail ? $detail->idkegiatan : ""; ?>">
                            </div>                                            
                            <span class="help-block">Isikan sesuai dengan kode provinsi yang tertera pada Ketetapan Kementerian Dalam Negeri tentang Wilayah Indonesia.</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Tahun *</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <input type="text" name="tahun" class="form-control" value="<?php echo $detail ? $detail->tahun : ""; ?>">
                            </div>                                            
                            <span class="help-block">Tahun. contoh : 2016</span>
                        </div>
                    </div>

                </div>
                <div class="panel-footer">
                    <button type="submit" class="btn-primary btn pull-right">Submit</button>
                    <a href="<?php echo base_url("back_end/".$active_modul."/index"); ?>" class="btn-default btn">Batal / Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>
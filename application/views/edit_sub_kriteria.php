<!-- <script type="text/javascript">
  $(window).load(function(){
    $('#mymodal').modal('show');
  });
</script>

  <div class="modal show" id="mymodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog modal-md" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">periode</h4>
                                    </div>
                                    <div class="modal-body"> -->
<div class='panel panel-default grid'>
          <div class='panel-heading'>
            <i class='icon-table icon-large'></i>
            Edit Sub Kriteria
</div>
</div>
                 
                    <form class="form-horizontal form-label-left" novalidate <?php echo form_open_multipart('Kriteria_control/Updatesub');?>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">kode subkriteria</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="kd_kriteria" name="kd_kriteia" value="<?php echo $Kriteria['kd_sub_kriteria'];?>"  disabled=disabled  class="form-control col-md-7 col-xs-12">
                          <input type="hidden" id="kd_kriteria" name="kd_sub_kriteria" value="<?php echo $Kriteria['kd_sub_kriteria'];?>">
                        </div>
                      </div>
                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">keterangan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="keterangan" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="keterangan" value="<?php echo $Kriteria['keterangan'];?>"  required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">nilai <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="nilai" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="nilai" value="<?php echo $Kriteria['nilai'];?>"  required="required" type="text">
                          <input id="kd_kriteria" type="hidden" name="kd_kriteria" value="<?php echo $Kriteria['kd_kriteria'];?>"  ">
                        </div>
                      </div>
                                         
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button id="send" type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                    </form>
                    <?php echo form_close();?>
                  </div>
                </div>
              </div>
              </div>

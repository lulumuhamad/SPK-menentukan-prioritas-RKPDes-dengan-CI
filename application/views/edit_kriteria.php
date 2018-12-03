<div class='panel panel-default grid'>
          <div class='panel-heading'>
            <i class='icon-table icon-large'></i>
            Edit Kriteria
</div>
</div>
                 
                    <form class="form-horizontal form-label-left" novalidate <?php echo form_open_multipart('Kriteria_control/Update');?>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Id Kriteria</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="kd_kriteria" name="kd_kriteia" value="<?php echo $Kriteria['kd_kriteria'];?>"  disabled=disabled  class="form-control col-md-7 col-xs-12">
                          <input type="hidden" id="kd_kriteria" name="kd_kriteria" value="<?php echo $Kriteria['kd_kriteria'];?>">
                        </div>
                      </div>
                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">nama kriteria <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="nama_kriteria" value="<?php echo $Kriteria['nama_kriteria'];?>" placeholder="Tuliskan Penyakit disini" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">bobot <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="bobot" value="<?php echo $Kriteria['bobot'];?>" placeholder="Tuliskan Penyakit disini" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">tipe Kriteria <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="tipe_kriteria" value="<?php echo $Kriteria['tipe_kriteria'];?>" placeholder="Tuliskan Penyakit disini" required="required" type="text">
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
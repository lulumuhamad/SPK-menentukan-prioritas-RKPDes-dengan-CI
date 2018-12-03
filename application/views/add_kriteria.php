          
<div class="row">   
<div class="col-md-10">
<div class='panel panel-default grid'>
  <form class="form-horizontal form-label-left" novalidate <?php echo form_open_multipart('Kriteria_control/Create');?>
          <div class='panel-heading'>
            <i class='icon-table icon-large'></i>
            Tambah Kriteria
            <div class="pull-right">
               <button type="submit" class="btn btn-primary btn-rounded btn-sm"">Cancel</button>
              <button id="send" type="submit" class="btn btn-success btn-rounded btn-sm"">Submit</button>
            </div>
            
</div>

                 
                    
                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">kode kriteria <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="kd_kriteria" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" 
                          name="kd_kriteria"read only value="<?php echo $kd_kriteria; ?>"required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama Kriteria <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="nama_kriteria" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" 
                          name="nama_kriteria" placeholder="Nama Kriteria" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Bobot</label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="bobot" required="required" type="text" name="bobot" class="form-control col-md-7 col-xs-12">

                        </div>
                      </div>
                      
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">jenis</label>
                       <div class="col-md-6 col-sm-6 col-xs-12">
                              <select name="bobot" class="form-control select">
                                  <?php $jenis=$this->db->query("SELECT distinct tipe_kriteria from kriteria")->result();
                                  foreach ($jenis as $key => $jenis) {
                                      ?>
                                    <option id="bobot" value="<?php echo $jenis->tipe_kriteria ?>" ><?php echo $jenis->tipe_kriteria?></option>
                                  <?php } ?>
                             </select>
                          <!-- <input id="Pendapatan" required="required" type="text" name="Pendapatan" class="form-control col-md-7 col-xs-12"> -->
                          
                        </div>
                      </div>
                    
                      <div class="ln_solid"></div>
                   
                    </form>
                    <?php echo form_close();?>
                  </div>
                </div>
              </div>
              </div>
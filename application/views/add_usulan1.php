<div class="row">   
<div class="col-md-11">
<div class='panel panel-default grid'>
<form class="form-horizontal form-label-left" novalidate <?php echo form_open_multipart('Usulan_control/Create1/');?>
<div class='panel panel-default grid'>
          <div class='panel-heading'>
            <i class='icon-table icon-large'></i>
            Tambah Usulan
            <div class="pull-right">
              <button type="submit" class="btn btn-primary btn-rounded btn-sm"">Cancel</button>
              <button id="send" type="submit" class="btn btn-success btn-rounded btn-sm"">Submit</button>
            </div>
            
            </div>
</div>
                 
                    
                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">id usulan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="id_usulan" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" 
                          name="id_usulan"readonly value="<?php echo $id_usulan; ?>"required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama usulan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="nama_usulan" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" 
                          name="nama_usulan" placeholder="Nama usulan" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">tanggal</label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="tanggal" required="required" readonly type="date" name="tanggal" class="form-control col-md-7 col-xs-12" value="<?php echo $tgl; ?>">

                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">lokasi</label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="lokasi" required="required" type="text" name="lokasi" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                       
                      <?php
                                              $krit=$this->db->get('kriteria')->result();
                                              foreach ($krit as $key => $value) {
                                              ?>
                                              <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email"><?php echo $value->nama_kriteria;?></label>
                                                 <div class="col-md-6 col-sm-6 col-xs-12">
                                                 <select name="<?php echo $value->kd_kriteria?>" class="form-control select">

                                                    <?php
                                                    $this->db->where('kd_kriteria',$value->kd_kriteria);
                                                    $btkrit=$this->db->get('sub_kriteria')->result();
                                                    foreach ($btkrit as $key => $bt) {
                                                      ?>
                                                      
                                                    <option value="<?php echo $bt->kd_sub_kriteria;?>" ><?php
                                                    echo $bt->keterangan;
                                                    ?></option>
                                                  
                                              <?php
                                            }
                                            ?>
                             </select>
                          <!-- <input id="Pendapatan" required="required" type="text" name="Pendapatan" class="form-control col-md-7 col-xs-12"> -->
                          
                        </div>
                      </div>
                     <?php
                   }
                     ?>
                      <div class="ln_solid"></div>
                     
                    </form>
                    <?php echo form_close();?>
                  </div>
                </div>
              </div>
              </div>

          
<div class="row">   
<div class="col-md-10">
<div class='panel panel-default grid'>
  <form class="form-horizontal form-label-left" novalidate <?php echo form_open_multipart('User_control/Create');?>
          <div class='panel-heading'>
            <i class='icon-table icon-large'></i>
            Tambah Pengguna
            <div class="pull-right">
               <button type="submit" class="btn btn-primary btn-rounded btn-sm"">Cancel</button>
              <button id="send" type="submit" class="btn btn-success btn-rounded btn-sm"">Submit</button>
            </div>
            
</div>

                 
                    
                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">kode admin <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="id_admin" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" 
                          name="id_admin"read only value="<?php echo $id_admin; ?>"required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama admin <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="nama" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" 
                          name="nama" placeholder="Nama admin" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">user</label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="user" required="required" type="text" name="user" class="form-control col-md-7 col-xs-12">

                        </div>
                      </div>
                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">pass</label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="pass" required="required" type="text" name="pass" class="form-control col-md-7 col-xs-12">

                        </div>
                      </div>
                      
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">level</label>
                       <div class="col-md-6 col-sm-6 col-xs-12">
                              <select name="level" class="form-control select">
                                  <?php $jenis=$this->db->query("SELECT distinct level from pengguna")->result();
                                  foreach ($jenis as $key => $jenis) {
                                      ?>
                                    <option id="level" value="<?php echo $jenis->level ?>" ><?php echo $jenis->level?></option>
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
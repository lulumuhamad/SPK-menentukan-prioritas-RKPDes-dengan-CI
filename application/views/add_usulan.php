


              <div class="row">
                        <div class="col-md-12">
                            
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>One Column</strong> Layout</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>


                               
                                 <form class="form-horizontal " novalidate <?php echo form_open_multipart('Usulan_control/Create/');?>
                                <div class="panel-body">                                                                        
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">kode usulan</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" id="id_usulan" name="id_usulan" value="<?php echo $id_usulan; ?>" required="required" class="form-control"/>
                                            </div>                                            
                                            <span class="help-block">This is sample of text field</span>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">nama  usulan</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" id="nama_usulan" name="nama_usulan"  class="form-control"/>
                                            </div>            
                                            <span class="help-block">Password field sample</span>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">tanggal</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                <input type="date" id="tanggal" name="tanggal" class="form-control datepicker" value="<?php echo $tgl ?>">                                            
                                            </div>
                                            <span class="help-block">Click on input field to get datepicker</span>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Textarea</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <textarea name="lokasi" id="lokasi"  class="form-control" rows="5"></textarea>
                                            <span class="help-block">Default textarea field</span>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    <div class="form-group">
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
                         
                        </div>
                      </div>
                     <?php
                   }
                     ?>
                                    </div>
                                    
                                    
                                    
                                 

                                </div>
                                <div class="panel-footer">
                                   
                            <button type="submit" class="btn btn-primary">Cancel</button>
                          <button id="send" type="submit" class="btn btn-success">Submit</button>
                            </div>
                            </div>
                            </form>
                            <?php echo form_close();


                            ?>


                            
                        </div>
                    </div>                    
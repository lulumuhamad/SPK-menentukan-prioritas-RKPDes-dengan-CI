


              <div class="row">
                        <div class="col-md-12">
                            
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Edit Usulan</strong> </h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>


                               
                                 <form class="form-horizontal " novalidate <?php echo form_open_multipart('Usulan_control/Update_action/');?>
                                <div class="panel-body">                                                                        
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">kode usulan</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" id="id_usulan" name="id_usulan" value="<?php echo $op['id_usulan']; ?>" required="required" class="form-control"/>
                                            </div>                                            
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">nama  usulan</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" id="nama_usulan" name="nama_usulan"  value="<?php echo $op['nama_usulan']; ?>" class="form-control"/>
                                            </div>            
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">tanggal</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                <input type="date" id="tanggal" name="tanggal" value="<?php echo $op['tanggal']; ?>" class="form-control datepicker">                                            
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">lokasi</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <input type="text" name="lokasi" id="lokasi" value="<?php echo $op['lokasi']; ?>" class="form-control" rows="5"></textarea>
                                            
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
                                                 <select name="<?php echo $value->kd_kriteria?>">

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
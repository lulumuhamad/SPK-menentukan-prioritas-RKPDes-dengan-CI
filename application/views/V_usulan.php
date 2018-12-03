


<div class="row">
      <div class="col-md-12">

          <!-- START DEFAULT DATATABLE -->
          <div class="panel panel-default">
              <div class="panel-heading">                                
                  <h3 class="panel-title">Daftar Usulan</h3>
                  <ul class="panel-controls">

                      <li><a href="<?php echo base_url() ?>Usulan_control/create" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                      <li><a href="<?php echo base_url() ?>Usulan_control" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                      <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                  </ul>                                
              </div>
              <div class="panel-heading">
                
                  <div class="pull-right">
                       <?php if ($user =='operator')echo anchor(site_url('Usulan_control/create1'), '<i class="fa fa-plus" aria-hidden="true"></i> Tambah', 'class="btn btn-primary btn-rounded btn-sm" role="button" "'); ?>
                       
                       <button type="button" class="btn btn-primary btn-rounded btn-sm" data-toggle="modal" data-target="#modalhitung"><i class="fa fa-exchange" aria-hidden="true">
                         hitung</i>
                      </button> 
                  </div>
              </div>
              
              <div class="panel-body">
                   <table class="table datatable"  >
            <thead>
                <tr>
                       <th width="10">NO</th>
                    <th align="center">KODE USULAN</th>
                    <th align="center">NAMA USULAN</th>
                    <th align="center">LOKASI USULAN</th>
                    <th align="center">PERIODE</th>
                    <!-- <th align="center"></th> -->
                </tr>
            </thead>

            
            <tbody>
                                    <?php
      $no = 1;
        foreach($isi->result_array() as $op)
        {
        ?>                      
                               <td ><?php echo $no++;?></td>
                              <td ><?php echo '<b>'. $op['id_usulan'];?></td>
                                <td><?php echo '<b>'. $op['nama_usulan'];?></td>
                                 <td ><?php echo '<b>'. $op['lokasi'];?></td>
                                <td ><?php echo '<b>'. $op['periode'];?></td>
                                                              
                                <!-- <td > <?php echo 
                                '<button class="btn btn-default btn-rounded btn-sm"><span class="fa fa-pencil"
                                 <span data-toggle="modal" data-target="#myModal" data-href="'.base_url().'Usulan_control/Update/?id_usulan='.$op['id_usulan'].'" class="btn btn-warning" role="button" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
                                 &nbsp&nbsp
                                <span data-toggle="modal" data-target="#confirm-delete" data-href="'.base_url().'User/Customer/delete/?id_usulan='.$op['id_usulan'].'">
                                <a class="btn btn-danger" role="button" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash"></i></a>
                                </span>
                                ';?>
                                </td> -->
                             <!--    <td align="left">
                                      <?php echo 
                                        '<div class="btn-group">
                                         <a href="'.base_url().'Usulan_control/Update/?id_usulan='.$op['id_usulan'].'" class="btn btn-warning btn-rounded btn-sm" role="button" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                         
                                        <a href="'.base_url().'Usulan_control/delete/?id_usulan='.$op['id_usulan'].'" class="btn btn-danger btn-rounded" role="button" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-times"></i></a>
                                        </span>
                                        </td>
                                         </tr>
                                       ';?>
                                 </td>  -->
                                 </tr>

                              <?php }
                              ?>
                            </tbody>
                          </table>
                         
                  
              </div>
          </div>
                            <!-- END DEFAULT DATATABLE -->

                       

                     <!-- ############################################################################ -->
        <div class="modal fade" id="modalhitung" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog modal-md" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">periode</h4>
                                    </div>
                                    <div class="modal-body">
                                     <form class="form-horizontal form-label-left" novalidate <?php echo form_open_multipart('Usulan_control/hitung');?>
                                     <div class="item form-group">
                                               <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email"> PERIODE</label>
                                                 <div class="col-md-6 col-sm-6 col-xs-12">

                                                        <select name="periode" class="form-control selectpicker" onchange="this.form.submit()" >

                                                               <?php

                                                              $btkrit=$this->db->QUERY('SELECT distinct periode from t_usulan')->result();
                                                              foreach ($btkrit as $key => $bt) {
                                                                ?>
                                                              <option id="periode" name="periode" value="<?php echo $bt->periode;?>" ><?php
                                                              echo $bt->periode;
                                                              ?></option>
                                                            <?php } ?>
                                                               </select>
                                                     </div>
                                                </div>
                                          </div> 
                      
                                         <div class="ln_solid"></div>
                                          <div class="form-group">
                                            <div class="col-md-6 col-md-offset-3">
                                              <button type="dismiss"  class="btn btn-primary">Cancel</button>
                                              <button id="send" type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                          </div>
                                        </form>
                                     <?php echo form_close();?>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>




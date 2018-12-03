<div class="row">
                        <div class="col-md-12">

                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title">Daftar Pengguna</h3>
                                    <ul class="panel-controls">
                                        <li><a href="<?php echo base_url() ?>Usulan_control/create" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="<?php echo base_url() ?>Usulan_control" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                                
                                </div>
                                <div class="panel-heading">
                                   <div class="pull-right"><!-- <?php echo anchor(site_url('User_control/create'), '<i class="fa fa-plus" aria-hidden="true"></i> Tambah', 'class="btn btn-primary btn-rounded btn-md"'); ?> -->
                                    <button type="button" class="btn btn-primary btn-rounded btn-sm" data-toggle="modal" data-target="#modalhitung"><i class="fa fa-plus" aria-hidden="true">
                         tambah</i>
                      </button>
                                      </div>
                                </div>
                                <div class="panel-body">
                            <table width="80%" class="table table-striped ">
                              <thead>
                                  <tr>
                                      <th width="30px">NO</th>
                                       <th>KODE </th>
                                      <th>NAMA </th>
                                      <th>username</th>
                                      <th>Password</th>
                                      <th>LEVEL</th>
                                      <th >AKSI</th>
                                  </tr>
                              </thead>

                              <tfoot>
                                  <tr>
                                      < <th width="30px">NO</th>
                                       <th>KODE </th>
                                      <th>NAMA </th>
                                      <th>username</th>
                                      <th>Password</th>
                                      <th>LEVEL</th>
                                      <th >AKSI</th>
                                  </tr>
                              </tfoot>

                              <tbody>
                                                      <?php
                        $no = 1;
                          foreach($isi->result_array() as $op)
                          {
                          ?>
                                                  <td class=" " align="center"><?php echo $no++;?></td>
                                                <td class=" " align="center"><?php echo $op['id_pengguna'];?></td>
                                                  <td class=" " align="center"><?php echo $op['nama_pengguna'];?></td>
                                                  <td class=" " align="center"><?php echo $op['user'];?></td>
                                                  <td class=" " align="center"><?php echo $op['pass'];?></td>
                                                  <td class=" " align="center"><?php echo $op['level'];?></td>
                                                  <td align="left">
                                                    <?php echo 
                                                      '<div class="btn-group">
                                                       <a href="'.base_url().'kriteria_control/edit/?kd_kriteria='.$op['id_pengguna'].'" class="btn btn-warning btn-rounded btn-sm" role="button" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                       
                                                      <a href="'.base_url().'Kriteria_control/delete/?kd_kriteria='.$op['id_pengguna'].'" class="btn btn-danger btn-rounded" role="button" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-times"></i></a>
                                                      </span>
                                                      </td>
                                                       </tr>
                                                     ';?>
                                               </td> 
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
                                               

  <form class="form-horizontal form-label-left" novalidate <?php echo form_open_multipart('User_control/Create');?>
          <div class='panel-heading'>
            <i class='icon-table icon-large'></i>
            Tambah Pengguna
            <div class="pull-right">
               <button data-dismiss="modal" class="btn btn-primary btn-rounded btn-sm"">Cancel</button>
              <button id="send" type="submit" class="btn btn-success btn-rounded btn-sm"">Submit</button>
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


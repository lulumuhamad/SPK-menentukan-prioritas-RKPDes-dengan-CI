<div class="row">
                        <div class="col-md-12">

                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title">Daftar Kriteria</h3>
                                    <ul class="panel-controls">

                                        <li><a href="<?php echo base_url() ?>Usulan_control/create" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="<?php echo base_url() ?>Usulan_control" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                                
                                </div>
                                <div class="panel-heading">
                                    <div class="pull-right">
                                        
                                         <?php if($user=='operator') echo anchor(site_url('Kriteria_control/create'), '<i class="fa fa-plus" aria-hidden="true"></i> Tambah', 'class="btn btn-primary btn-rounded btn-md" '); ?>
                                         <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modallihat">
                                           lihat
                                        </button> -->
                                    </div>
                                </div>
                                <div class="panel-body">
                                <table width="80%" class="table table-striped ">
                              <thead>
                                  <tr>
                                      <th width="30px">NO</th>
                                       <th>KODE KRITERIA</th>
                                      <th>NAMA KRITERIA</th>
                                      <th>TIPE KRITERIA</th>
                                      <th>NILAI PREFERENSI</th>
                                      <th >AKSI</th>
                                  </tr>
                              </thead>

                              <tfoot>
                                  <tr>
                                      <th width="30px">NO</th>
                                       <th>KODE KRITERIA</th>
                                      <th>NAMA KRITERIA</th>
                                      <th>TIPE KRITERIA</th>
                                      <th>NILAI PREFERENSI</th>
                                     <th class=" " align="center">AKSI</th>
                                  </tr>
                              </tfoot>

                              <tbody>
                      <?php
                        $no = 1;
                          foreach($isi->result_array() as $op)
                          {
                          ?>
                                <td class=" " align="center"><?php echo $no++;?></td>
                                <td class=" " align="center"><?php echo $op['kd_kriteria'];?></td>
                                <td class=" " align="center"><?php echo $op['nama_kriteria'];?></td>
                                <td class=" " align="center"><?php echo $op['tipe_kriteria'];?></td>
                                <td class=" " align="center"><?php echo $op['bobot'];?></td>
                                <td align="left">
                                   
                                    <!--   <?php echo '<a href="'.base_url().'kriteria_control/?kd_kriteria='.$op['kd_kriteria'].'" class="btn btn-primary btn-rounded btn-sm" role="button"  data-toggle="modal" data-target="#mymodal" title="lihat"><i class="fa fa-eye"></i></a>' ;?>   -->
                                  
                                   <?php echo '<a href="'.base_url().'kriteria_control/tampil_sub_kriteria/?kd_kriteria='.$op['kd_kriteria'].'" class="btn btn-primary btn-rounded btn-sm" role="button" data-toggle="tooltip" title="lihat"><i class="fa fa-eye"></i></a>' ;?> 
                                  <?php  if ($user =='kades')echo 
                                     '<a href="'.base_url().'kriteria_control/editsub/?kd_kriteria='.$op['kd_kriteria'].'" class="btn btn-warning btn-rounded btn-sm" role="button" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>';?>
                                    <!--  <?php 
                                     if ($user =='kades')echo
                                    '<a href="'.base_url().'Kriteria_control/delete/?kd_kriteria='.$op['kd_kriteria'].'" class="btn btn-danger btn-rounded" role="button" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-times"></i></a>
                                    </span>
                                    
                                   ';?> -->

                             </td> 
                           </tr>
                             <?php }
                              ?>
                              </tbody>
                            </table>
                                    
                                </div>
                            </div>
                            <!-- END DEFAULT DATATABLE -->

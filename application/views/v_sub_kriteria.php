
<div class="row">
                <div class="col-md-8">

                    <!-- START DEFAULT DATATABLE -->
                    <div class="panel panel-default">
                        <div class="panel-heading">                                
                            <h3 class="panel-title"><?php foreach ($kriteria->result_array() as $key => $value) {
                              echo 'kriteria = '.$value['nama_kriteria'];
                            } ?></h3>
                            <?php if($user=='operator'){ ?>
                              <ul class="panel-controls">
                                 <a href=""  class="btn btn-primary btn-rounded btn-md"  data-toggle="modal" data-target="#modaltambahsub" title="tambah"><i class="fa fa-plus" aria-hidden="true">tambah</i></a>
                              </ul> 
                              <?php }; ?>                               
                        </div>
                        <div class="panel-body">
                         <table  class="table table-striped ">
                      <thead>
                          <tr>
                               <th align="center">KODE SUBKRITERIA</th>
                              <th align="center">KETERANGAN</th>
                              <th align="center">NILAI </th>
                            <?php if($user=='kades'){ ?> <th align="center">AKSI</th><?php }; ?>
                          </tr>
                      </thead>

                      <tfoot>
                          <tr align="center">
                               <th align="center">KODE SUBKRITERIA</th>
                              <th align="center">KETERANGAN</th>
                              <th>NILAI </th>
                            <?php if($user=='kades'){ ?> <th >AKSI</th><?php }; ?>
                          </tr>
                      </tfoot>

                      <tbody>
              <?php
                $no = 1;
                  foreach($tampil_sub->result_array() as $op)
                  {
                  ?><tr>
                        <td  align="left"><?php echo $op['kd_sub_kriteria'];?></td>
                        <td  align="left"><?php echo $op['keterangan'];?></td>
                        <td  align="left"><?php echo $op['nilai'];?></td>
                        <?php if($user=='kades'){ ?><td align="left">
                         
                          <?php  echo 
                             '<a href="'.base_url().'kriteria_control/editsub/?kd_sub_kriteria='.$op['kd_sub_kriteria'].'" class="btn btn-warning btn-rounded btn-sm" role="button" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>';?>
                             <?php 
                             echo
                            '<a href="'.base_url().'Kriteria_control/deletesub/?kd_sub_kriteria='.$op['kd_sub_kriteria'].'" class="btn btn-danger btn-rounded" role="button" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-times"></i></a>
                            </span>
                           ';?>
                     </td>
                     </tr>
                     <?php } ?>
                   <?php } ?>

                      </tbody>
                    </table>
              </div>
        </div>
</div>
</div>
                            <!-- END DEFAULT DATATABLE -->

                     <!-- ############################################################################ -->
       <div class="modal fade" id="modaltambahsub" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog modal-md" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">periode</h4>
                                    </div>
                                    <div class="modal-body">
                <form class="form-horizontal form-label-left" novalidate <?php echo form_open_multipart('Kriteria_control/tambah_sub/?kd_kriteria='.$value['kd_kriteria']);?>
                        
                          
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">keterangan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="keterangan" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" 
                          name="keterangan" placeholder="keterangan" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nilai">nilai</label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="nilai" required="required" type="text" name="nilai" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="center">
                            <button id="send" type="submit" class="btn btn-primary btn-rounded btn-sm" role="button" data-toggle="tooltip">Submit</button>
                          </div>
                      </div>
                   
                    </form>
                    <?php echo form_close();?>
                  </div>
               
          </div>
        </div>

<!-- **************************************************************************************************
 -->




<?php $periode= $_REQUEST['periode'];  ?>

<div class="row">
      <div class="col-md-12">

          <!-- START DEFAULT DATATABLE -->
          <div class="panel panel-default">
              <div class="panel-heading">                                
                  <h3 class="panel-title">PERIODE = <?php echo $periode; ?></h3>
                  <ul class="panel-controls">

                    <li><form class="form-horizontal form-label-left" novalidate <?php echo form_open_multipart('Usulan_control/lihatranking');?>
                      <select name="periode" class="form-control selectpicker" onchange="this.form.submit()">
                          <option value="0">PILIH PERIODE</option>
                             <?php

                            $btkrit=$this->db->QUERY('SELECT distinct periode from t_usulan')->result();
                            foreach ($btkrit as $key => $bt) {
                              ?>

                            <option id="periode" name="periode" value="<?php echo $bt->periode;?>" ><?php
                            echo $bt->periode;
                            ?></option>
                          <?php } ?>
                             </select>
                      
                        </form>
                     <?php echo form_close();?>
                   </li>

                      <li><a href="<?php echo base_url() ?>Usulan_control/create" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                      <li><a href="<?php echo base_url() ?>Usulan_control" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                      <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                  </ul>                                
              </div>
              <div class="panel-heading">
                
              </div>
              
              <div class="panel-body">
                   <table class="table datatable"  >
            <thead>
                <tr>
                    <th width="10">RANKING</th>
                    <th align="center">KODE USULAN</th>
                    <th align="center">NAMA USULAN</th>
                    <th align="center">LOKASI USULAN</th>
                    <th align="center">PERIODE</th>
                    <th align="center">NILAI VEKTOR</th>
                </tr>
            </thead>

            
            <tbody>
    <?php
      $no = 0;
      
        foreach($isi as $key => $op)
        {$no++;
        ?>                      
                              <td align="center"><?php echo $no;?></td>
                              <td ><?php echo $op->id_usulan;?></td>
                              <td><?php echo $op->nama_usulan;?></td>
                              <td ><?php echo $op->lokasi;?></td>
                              <td ><?php echo $op->tanggal;?></td>
                              <td align="left"><?php echo $op->nilai_vektor;?> </td> 
                            </tr>

                              <?php }
                              ?>
                            </tbody>
                          </table>
                         
                  
              </div>
          </div>
                            <!-- END DEFAULT DATATABLE -->

                      
                        <div class="pull-right">
                            <button class="btn btn-danger dropdown-toggle btn-rounded btn-lg" data-toggle="dropdown"><i class="fa fa-bars"></i> Export Data</button>
                            <ul class="dropdown-menu">
                               <li><a href="<?php echo base_url('Usulan_control/cetak_excel/?periode='.$periode) ?>" class="list-group-item"><img src='<?php echo base_url() ?>img/icons/xls.png' width="24"/> XLS</a></li>
                               <li><a href="<?php echo base_url('Usulan_control/laporan/?periode='.$periode)?>" class="list-group-item" ><img src='<?php echo base_url() ?>img/icons/pdf.png' width="24"/> PDF</a></li></ul>
                                
                        </div> 

                      
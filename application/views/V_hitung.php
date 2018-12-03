<div class="row">
        <div class="col-md-9">
                <!-- START DEFAULT DATATABLE -->
                <div class="panel panel-default">
                    <div class="panel-heading">                                
                        <h3 class="panel-title">ALTERNATIF & KRITERIA PERIODE=<?php echo $periode; ?></h3>
                        <ul class="panel-controls">
                            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                            <li><a href="<?php echo base_url() ?>index.php/Usulan_control" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                            <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                        </ul>                                
                    </div>
                <div class="panel-body">
                      <table class="table datatable_simple">
                        <thead>
                          <tr>
                            <th >NO </th>
                            <th> KODE USULAN </th>
                            <th>NAMA USULAN</th>
                            <th>LOKASI USULAN</th>
                            <?php 
                             $a ='0';
                              foreach ($k as $key => $value) {
                                if($a <> $value->kd_kriteria):
                             ?> 
                             <th> <?php echo $value->nama_kriteria; ?></th>
                           <?php endif;
                           $a=$value->kd_kriteria;
                           } ?>
                              <th>TAHUN PERIODE </th>
                          </tr>
                        </thead>
                        <tbody>
<?php
  $no = 1;
  $us='0';
    foreach($kriteria as $op)
    { if($us != $op->id_usulan):
    ?>
                          <tr class="even pointer">
                            <td class=" "><?php echo $no++ ?></td>
                            <td><?php echo $op->id_usulan; ?></td>
                            <td class=" "><?php 
                                echo $op->nama_usulan;
                            ?></td>
                            <td><?php echo $op->lokasi?></td>
                            <?php
                            $b='0';
                              foreach ($kriteria as $key => $tt) {
                                if ($tt->id_usulan==$op->id_usulan) {
                                   
                                   foreach ($kriteria as $key => $value) {
                                     if ($value->kd_kriteria==$tt->kd_kriteria) {
                                       foreach ($kriteria as $key => $bb) {
                                         if ($bb->kd_sub_kriteria==$tt->kd_sub_kriteria) {
                                          if($b<>$bb->kd_sub_kriteria):
                                          ?>
                                          <td>
                                           <?php echo $bb->keterangan;?>
                                         </td>
                                           <?php 
                                         endif;
                                         $b=$bb->kd_sub_kriteria;
                                         }
                                       }
                                     }
                                   }
                                }
                              }
                              ?>
                            </td>
                            <td ><?php echo $value->periode; ?></td>
                          </tr> 
                          <?php endif;
                          $us=$op->id_usulan; }
                          ?>
                        </tbody>
                      </table>
                  </div>
            </div>
          </div>
            <!-- END DEFAULT DATATABLE -->
            <div class="col-md-3">
                <!-- START DEFAULT DATATABLE -->
                <div class="panel panel-default">
                    <div class="panel-heading">                                
                        <h3 class="panel-title">PREFERENSI</h3>
                        <ul class="panel-controls">
                            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                            <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                        </ul>                                
                    </div>
                     <div class="panel-body">
                        <table class="table table-striped">
                        <thead>
                          <tr>
                            <th colspan="3" align="center" > NILAI PREFERENSI</th>
                          </tr>
                        </thead>
                        
                        <tbody>
                        
                           <?php
                              foreach($k as $op)
                          {
                          ?>
                          <tr>
                                <td><?php echo $op->nama_kriteria;?></td>
                                <td>=</td>
                                <td><?php echo $op->bobot;?></td>
                                <?php } ?>
                          <tr>
                        </tbody>
                      </table>
                    </div>
                   </div>
            </div>
            <!-- END DEFAULT DATATABLE -->
          
            <div class="col-md-9">
               <!-- START DEFAULT DATATABLE -->
                <div class="panel panel-default">
                    <div class="panel-heading">                                
                        <h3 class="panel-title">MENENTUKAN BOBOT KRITERIA DAN BOBOT KECOCOKAN</h3>
                        <ul class="panel-controls">
                            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                            <li><a href="<?php echo base_url() ?>index.php/Usulan_control" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                            <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                        </ul>                                
                    </div>
                <div class="panel-body">
                      <table class="table datatable_simple">
                        <thead>
                          <tr>
                            <th >NO </th>
                            <th > KODE USULAN </th>
                            <th  >NAMA USULAN</th>
                            <th  >LOKASI USULAN</th>
                            <?php
                            $kolom = '0';
                              foreach ($k as $key => $tt) {
                               ?>
                               <?php 
                               if ($kolom <> $tt->nama_kriteria): ?>
                               
                               <th class="column-title">
                                  <?php echo $tt->nama_kriteria;?>
                                </th>

                               <?php endif ?>
                                <?php
                                $kolom= $tt->nama_kriteria;
                              }
                              ?> 
                          </tr>
                        </thead>
                        <tbody>
  <?php
  $no = 1;
  $us='0';
    foreach($kriteria as $hs)
    {if($us <> $hs->id_usulan):
    ?>
                          <tr class="even pointer">
                            <td class=" "><?php echo $no++ ?></td>
                            <td><?php echo $hs->id_usulan?></td>
                             <td class=" "><?php 
                                echo $hs->nama_usulan;
                            ?></td>
                             <td><?php echo $hs->lokasi?></td>
                                <?php
                            $b='0';
                              foreach ($kriteria as $key => $tt) {
                                if ($tt->id_usulan==$hs->id_usulan) {
                                   
                                   foreach ($kriteria as $key => $value) {
                                     if ($value->kd_kriteria==$tt->kd_kriteria) {
                                       foreach ($kriteria as $key => $bb) {
                                         if ($bb->kd_sub_kriteria==$tt->kd_sub_kriteria) {
                                          if($b<>$bb->kd_sub_kriteria):
                                          ?>
                                          <td>
                                           <?php echo $bb->nilai;?>
                                  <!-- mendeklarasikan $bb->nilai itu apa untuk diambil ke bawah bahan min/max -->
                                           <?php $nilai[$tt->kd_kriteria][] = $bb->nilai; ?>
                                         </td>
                                           <?php 
                                         endif;
                                         $b=$bb->kd_sub_kriteria;
                                         }
                                       }
                                     }
                                   }
                                }
                              }
                              ?>
                             
                          </tr> 
                          <?php
                        endif;
                        $us=$hs->id_usulan;
                           }
                          ?>
                          
                         <!--  -->
                        </tbody>
                      </table>
                    
                   </div>
            </div>
          </div>
          <!-- START DEFAULT DATATABLE -->
          
            <div class="col-md-9">
               <!-- START DEFAULT DATATABLE -->
                <div class="panel panel-default">
                    <div class="panel-heading">                                
                        <h3 class="panel-title">MENENTUKAN NILAI MIN DAN MAX</h3>
                        <ul class="panel-controls">
                            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                            <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                        </ul>                                
                    </div>
                  
                <div class="panel-body">
              <table class="table table-striped">
                        <thead>
                          <tr>
                            <th colspan="4"  > </th>
                            <?php
                            $kolom = '0';
                              foreach ($k as $key => $tt) {
                               ?>
                               <?php 
                               if ($kolom <> $tt->nama_kriteria): ?>
                               <th class="column-title" width="100">
                                  <?php echo $tt->nama_kriteria;?>
                                </th>
                               <?php endif ?>
                                <?php
                                $kolom= $tt->nama_kriteria;
                              }
                              ?> 
                          </tr>
                        </thead>
                        <tfoot>
                          <tr>
                            <th colspan="4" > </th>
                            <?php
                            $kolom = '0';
                              foreach ($k as $key => $tt) {
                               ?>
                               <?php 
                               if ($kolom <> $tt->nama_kriteria): ?>
                               
                               <th class="column-title">
                                  <?php echo $tt->tipe_kriteria;?>
                                </th>

                               <?php endif ?>
                                <?php
                                $kolom= $tt->nama_kriteria;
                              }
                              ?> 
                          </tr>
                        </tfoot>
                        <tbody>
                        <tr >
                            <td colspan="4" align="center"  ><strong>MIN/MAX</td>
                            <?php
                             $x='0';
                             foreach ($kriteria as $key => $tt) {
                                if ($tt->id_usulan==$hs->id_usulan) {
                           foreach($kriteria as $key => $a){
                            if ($a->kd_kriteria==$tt->kd_kriteria) {
                               // $tipe[]=$a->nilai;
                                if($x <> $a->kd_kriteria):?>
                                  <td><?php if($a->tipe_kriteria=='benefit'){
                                    echo $j[$tt->kd_kriteria]=max($nilai[$a->kd_kriteria]);}
                              else{
                                    echo $j[$tt->kd_kriteria]=min($nilai[$a->kd_kriteria]);
                              } ?></td><?php 
                           endif;
                           $x=$a->kd_kriteria;}}}}
                           
                              ?>

                          </tr>
                        </tbody>
                      </table>
                       </div>
                   </div>
            </div>
          </div>
            <!-- END DEFAULT DATATABLE -->
            <div class="col-md-9">
               <!-- START DEFAULT DATATABLE -->
                <div class="panel panel-default">
                    <div class="panel-heading">                                
                        <h3 class="panel-title">MENENTUKAN MATRIKS X BERDASARKAN RATING KECOCOKAN</h3>
                        <ul class="panel-controls">
                            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                            <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                        </ul>                                
                    </div>
                  
                <div class="panel-body">
                        
                      <table class="table datatable_simple">
                        <thead>
                          <tr class="headings">
                            <th class="column-title">no</th>
                            <th class="column-title">Id Usulan </th>
                            <th class="column-title">Nama Usulan</th>
                            <th class="column-title">lokasi</th>
                            <?php
                              foreach ($k as $key => $tt) {
                               ?>
                               <th class="column-title">
                                  <?php echo $tt->nama_kriteria;?>
                                  </th>
                                <?php
                              }
                              ?> 
                          </tr>
                        </thead>
                        <tbody>
<?php
  $no = 1;
  $maxC1=4;
  $z='0';
  // $minc3=0;
    foreach($kriteria as $hs)
    { if($z <> $hs->id_usulan):
    ?>
                          <tr class="even pointer">
                            <td class=" "><?php echo $no++ ?></td>
                           <td> <?php echo $hs->id_usulan?></td>
                               <td><?php  echo $hs->nama_usulan;  ?></td>
                               <td><?php  echo $hs->lokasi;  ?></td>
                             <?php
                             $x='0';
                             foreach ($kriteria as $key => $tt) {
                                if ($tt->id_usulan==$hs->id_usulan) {
                             foreach($kriteria as $key => $a){
                              if ($a->kd_kriteria==$tt->kd_kriteria) {
                                foreach($kriteria as $key => $b){
                              if ($b->kd_sub_kriteria==$tt->kd_sub_kriteria) {
                                
                                if($x <> $a->kd_kriteria):?>
                                  <td><?php if($a->tipe_kriteria=='benefit'){
                                    echo $hasil[$tt->kd_kriteria][$hs->id_usulan]=number_format($b->nilai/$j[$tt->kd_kriteria],2);
                                    }
                              else{
                                      echo  $hasil[$tt->kd_kriteria][$hs->id_usulan]=number_format($j[$tt->kd_kriteria]/$b->nilai,2);
                              } ?></td><?php 
                            endif;
                           $x=$a->kd_kriteria;}}}}}}
                              ?>
                          </tr> 
                          <?php endif;
                           $z=$hs->id_usulan;}
                          ?>
                        </tbody>
                      </table>
                      </div>
            </div>
          </div>
            <!-- END DEFAULT DATATABLE -->
            <div class="col-md-3">
                <!-- START DEFAULT DATATABLE -->
                <div class="panel panel-default">
                    <div class="panel-heading">                                
                        <h3 class="panel-title">KET</h3>
                        <ul class="panel-controls">
                            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                            <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                        </ul>                                
                    </div>
                    <div class="panel-body">

                      <img src="<?php echo base_url() ?>img/MATRIKS_KEPUTUSAN_X.png" width="200" align="left"/>
                      <strong>Benefit=</strong> setiap nilai pada setiap kriteria dibagi dengan nilai MAX dari kriteria itu sendiri.
                      <br><strong>Cost =</strong> nilai MIN pada setiap kriteria dibagi nilai setiap kriteria.
                      
                    </div>
                   </div>
            </div>
            <!-- END DEFAULT DATATABLE -->
          
            <div class="col-md-9">
               <!-- START DEFAULT DATATABLE -->
                <div class="panel panel-default">
                    <div class="panel-heading">                                
                        <h3 class="panel-title">NORMALISASI MATRIKS KEPUTUSAN R</h3>
                        <ul class="panel-controls">
                            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                            <li><a href="<?php echo base_url() ?>index.php/Usulan_control" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                            <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                        </ul>                                
                    </div>
                <div class="panel-body">
                      <table class="table datatable_simple">
                        <thead>
                          <tr class="headings">
                            <th class="column-title">no </th>
                            <th class="column-title">Id Usulan </th>
                            <th class="column-title">Nama Usulan</th>
                            <?php
                              foreach ($k as $key => $k) {
                               ?>
                               <th class="column-title">
                                  <?php echo $k->nama_kriteria;?>
                                  </th>
                                <?php
                              }
                              ?> 
                          </tr>
                        </thead>
                        <tbody>
 <?php
  $no = 1;
    foreach($kriteria as $hs)
    {if($z <> $hs->id_usulan):
    ?>
                      <tr class="even pointer">
                        <td class=" "><?php echo $no++ ?></td>
                        <td><?php echo $hs->id_usulan?></td>
                        <td><?php echo $hs->nama_usulan?></td>
                        
                        
                          <?php

                        $sum[$hs->id_usulan]= 0;
                        $b='0';
                          foreach ($kriteria as $key => $tt) {
                            if ($tt->id_usulan==$hs->id_usulan) {
                               
                               foreach ($kriteria as $key => $value) {
                                 if ($value->kd_kriteria==$tt->kd_kriteria) {
                                   foreach ($kriteria as $key => $bb) {
                                     if ($bb->kd_sub_kriteria==$tt->kd_sub_kriteria) {
                                      if($b<>$bb->kd_sub_kriteria):
                                      ?>
                                      <td>
                                       <?php echo $normal=number_format($hasil[$tt->kd_kriteria][$hs->id_usulan]*$value->bobot,2); 
                                        $sum[$hs->id_usulan] = $sum[$hs->id_usulan] + $normal;
                                            ?>
                                         </td>
                                           <?php 
                                         endif;
                                         $b=$bb->kd_sub_kriteria;
                                         }
                                       }
                                     }
                                   }
                                }
                              }
                              ?>
                            </td>
                          </tr> 
                          <?php endif;
                           $z=$hs->id_usulan;}
                          ?>
                        </tbody>
                      </table>
                    <div>
            </div></div>
            </div>
          </div>
            <!-- END DEFAULT DATATABLE -->
            <div class="col-md-3">

                <!-- START DEFAULT DATATABLE -->
                <div class="panel panel-default">
                    <div class="panel-heading">                                
                        <h3 class="panel-title">KET</h3>
                        <ul class="panel-controls">
                            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                            <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                        </ul>                                
                    </div>
                    <div class="panel-body">
                    <img src="<?php echo base_url() ?>img/normalisasi.png" width="175" align="left"/>
                    Vi = Nilai akhir dari alternatif<br>
                    wj = nilai preferensi <br>
                    rij = Matriks X
                  </div>
                   </div>
            </div>
            <!-- END DEFAULT DATATABLE -->
            <div class="col-md-9">
               <!-- START DEFAULT DATATABLE -->
                <div class="panel panel-default">
                    <div class="panel-heading">                                
                        <h3 class="panel-title">NILAI VEKTOR</h3>
                        <ul class="panel-controls">
                          <li> <button type="button" class="btn btn-primary btn-rounded btn-sm" data-toggle="modal" data-target="#modalrank"><i class="fa fa-exchange" aria-hidden="true">
                         ranking</i></button></li>
                      </button> 
                            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                            <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                        </ul>                                
                    </div>
                <div class="panel-body">
                      <table class="table datatable_simple" >
                        <thead>
                          <tr class="headings">
                            <th class="column-title">no</th>
                            <th class="column-title">Id usulan </th>
                            <th class="column-title">Nama ususlan</th>
                            <th class="column-title">Nilai Vektor</th>
                          </tr>
                        </thead>
                        <tbody>
  <?php
  $no = 1;
    foreach($kriteria as $hs)
    {if($z <> $hs->id_usulan):
        // UPDATE NILAI VEKTOR
      $masukan=$this->db->get_where('t_usulan',array('id_usulan' =>$hs->id_usulan))->row_array();
     if ($masukan['nilai_vektor']!=$sum[$hs->id_usulan]) {
    $data = array('nilai_vektor' =>  $sum[$hs->id_usulan]);
    $this->db->where('id_usulan',$hs->id_usulan);
    $this->db->update('t_usulan',$data);

    // END NILAI VEKTOR
  }
    ?>
                        <tr class="even pointer">
                            <td class=" "><?php echo $no++ ?></td>
                            <td><?php echo $hs->id_usulan?></td>
                            <td class=" "><?php  echo $hs->nama_usulan; ?></td>
                            <td><?php echo $sum[$hs->id_usulan];
                            ;?></td>
                          </tr> 
                          <?php endif;
                           $z=$hs->id_usulan;}
                          ?>
                        </tbody>
                      </table>
                    <div>
</div></div></div></div> 
            <!-- END DEFAULT DATATABLE -->
            <div class="col-md-3">

                <!-- START DEFAULT DATATABLE -->
                <div class="panel panel-default">
                    <div class="panel-heading">                                
                        <h3 class="panel-title">KET</h3>
                        <ul class="panel-controls">
                            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-up"></span></a></li>
                            <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                        </ul>                                
                    </div>
                    <div class="panel-body">
                        NILAI VEKTOR didapatkan dari hasil menjumlahkan setiap nilai (Vi) per alternatif.
                    </div>
                   </div>
            </div>
          </div>
            <!-- END DEFAULT DATATABLE -->
            <div class="modal fade" id="modalrank" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Ranking Prioritas RKPDes</h4>
                                    </div>
                                    <div class="modal-body">
<div class="row">                 
  <div class="col-md-12">
        <div class="panel panel-default">
              <div class="panel-heading">
                        <?php $periode=$value->periode;  ?>
                        <div class="pull-left"> <h3 style="text-align: center">MENENTUKAN RANKING USULAN</h3></div>
                        <div class="pull-right">
                         
                           <button class="btn btn-danger dropdown-toggle btn-rounded btn-lg" data-toggle="dropdown"><i class="fa fa-bars"></i> Export Data</button>
                            <ul class="dropdown-menu">
                               <li><a href="<?php echo base_url('Usulan_control/cetak_excel/?periode='.$periode) ?>" class="list-group-item"><img src='<?php echo base_url() ?>img/icons/xls.png' width="24"/> XLS</a></li>
                               <li><a href="<?php echo base_url('Usulan_control/laporan/?periode='.$periode)?>" class="list-group-item" ><img src='<?php echo base_url() ?>img/icons/pdf.png' width="24"/> PDF</a></li></ul>
                        </div> 
                </div>
                <div class="panel-body">
                  </table>                
                  
                <table class="table datatable_simple">
                        <thead>
                          <tr>
                            <th> KODE </th>
                            <th> USULAN</th>
                            <th>LOKASI</th>
                            <th> nilai vektor</th>
                            <th>peringkat </th>
                            <th>keterangan </th>
                          </tr>
                        </thead>
                        <tbody>
  <?php
  $no = 1;
  $us='0';
  
          $this->db->order_by('nilai_vektor DESC');
          $this->db->where('periode',$periode);
          $ranking=$this->db->get('t_usulan')->result_array();
          foreach($ranking as $ranking)
    {
    ?>                   <tr class="even pointer">
                            <td><?php echo $ranking['id_usulan']; ?></td>
                            <td class=" "><?php echo $ranking['nama_usulan']; ?></td>
                            <td><?php echo $ranking['lokasi']?></td>
                            <td><?php echo $ranking['nilai_vektor'] ?></td>
                            <td class=" "><?php echo $no++ ?></td>
                            <td> 

                             <?php $maxrank[]=  $ranking['nilai_vektor']; ?>
                                <?php 
                               
                                  if ($no <= 13) {
                                    echo "Direkomendasikan untuk dimusywarahkan";
                                  }
                                  else
                                  {
                                    echo "ditinjau ulang";
                                  }
                                 ?>
                              </td>
                          </tr> 
                          <?php 
                        }
                          ?>
                        </tbody>
                      </table>
                </div>
          </div>
         </div>
           </div>
                            </div>
                        </div>
    </div>          
<!-- div class="row">                 
  <div class="col-md-2">
        <div class="panel panel-default">
              <div class="panel-heading">
                        <?php $periode=$value->tanggal;  ?>
                        <div class="pull-right">
                            <button class="btn btn-danger dropdown-toggle btn-lg" data-toggle="dropdown"><i class="fa fa-bars"></i> Export Data</button>
                            <ul class="dropdown-menu">
                               <li><a href="<?php echo base_url('Usulan_control/cetak_excel/?tanggal='.$periode) ?>" class="list-group-item"><img src='<?php echo base_url() ?>img/icons/xls.png' width="24"/> XLS</a></li>
                               <li><a href="<?php echo base_url('Usulan_control/laporan/?tanggal='.$periode)?>" class="list-group-item" ><img src='<?php echo base_url() ?>img/icons/pdf.png' width="24"/> PDF</a></li></ul>
                                
                        </div>                               
                    </div>
          </div>
         </div>
    </div> -->
                <!-- <?php echo anchor(site_url('Usulan_control/laporan/?tanggal='.$periode), '<i class="fa fa-wpforms" aria-hidden="true"></i> Cetak', 'class="btn btn-danger btn-sm"'); ?>
                <?php echo anchor(site_url('Usulan_control/cetak_excel'), '<i class="fa fa-wpforms" aria-hidden="true"></i> Cetak', 'class="btn btn-danger btn-sm"'); ?> -->
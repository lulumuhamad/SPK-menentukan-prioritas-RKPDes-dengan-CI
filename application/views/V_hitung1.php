<div class="row">
                        <div class="col-md-9">

                <!-- START DEFAULT DATATABLE -->
                <div class="panel panel-default">
                    <div class="panel-heading">                                
                        <h3 class="panel-title">menentukan alternative dan kriteria</h3>
                        <ul class="panel-controls">
                            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                            <li><a href="<?php echo base_url() ?>index.php/Usulan_control" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                            <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                        </ul>                                
                    </div>
 
                <div class="panel-body">
                        
                      <table >
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
                            <td ><?php echo $value->tanggal; ?></td>
                             
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
                        <h3 class="panel-title">menentukan alternative dan kriteria</h3>
                        <ul class="panel-controls">
                            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                            <li><a href="<?php echo base_url() ?>index.php/Usulan_control" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                            <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                        </ul>                                
                    </div>
                   </div>
            </div>
            <!-- END DEFAULT DATATABLE -->
          
            <div class="col-md-9">
               <!-- START DEFAULT DATATABLE -->
                <div class="panel panel-default">
                    <div class="panel-heading">                                
                        <h3 class="panel-title">Default</h3>
                        <ul class="panel-controls">
                            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                            <li><a href="<?php echo base_url() ?>index.php/Usulan_control" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                            <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                        </ul>                                
                    </div>
                  
                <div class="panel-body">
                        
                      <table >
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
 // $maxC1=0;
  //$maxC2=0;
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
                                           <?php $nilai[$tt->kd_kriteria][] = $bb->nilai; ?> 
                                           <?php echo $bb->nilai;?>
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
                          <tr width="10px">
                            <td colspan="4" align="center">MINMAX</td>
                            <?php
                             $x='0';
                             foreach ($kriteria as $key => $tt) {
                                if ($tt->id_usulan==$hs->id_usulan) {
                           foreach($kriteria as $key => $a){
                            if ($a->kd_kriteria==$tt->kd_kriteria) {
                                $tipe[]=$a->nilai;
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
                         <!--  -->
                        </tbody>
                      </table>
                   </div>
            </div>
          </div>
          <!-- START DEFAULT DATATABLE -->
          <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">                                
                        <h3 class="panel-title">menentukan alternative dan kriteria</h3>
                        <ul class="panel-controls">
                            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                            <li><a href="<?php echo base_url() ?>index.php/Usulan_control" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                            <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                        </ul>                                
                    </div>
                   </div>
            </div>
            <!-- END DEFAULT DATATABLE -->
            <div class="col-md-9">
               <!-- START DEFAULT DATATABLE -->
                <div class="panel panel-default">
                    <div class="panel-heading">                                
                        <h3 class="panel-title">Default</h3>
                        <ul class="panel-controls">
                            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                            <li><a href="<?php echo base_url() ?>index.php/Usulan_control" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                            <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                        </ul>                                
                    </div>
                  
                <div class="panel-body">
                        
                      <table >
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
                <div class="panel panel-default">
                    <div class="panel-heading">                                
                        <h3 class="panel-title">menentukan alternative dan kriteria</h3>
                        <ul class="panel-controls">
                            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                            <li><a href="<?php echo base_url() ?>index.php/Usulan_control" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                            <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                        </ul>                                
                    </div>
                   </div>
            </div>
               <!-- START DEFAULT DATATABLE -->
                <div class="panel panel-default">
                    <div class="panel-heading">                                
                        <h3 class="panel-title">Default</h3>
                        <ul class="panel-controls">
                            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                            <li><a href="<?php echo base_url() ?>index.php/Usulan_control" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                            <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                        </ul>                                
                    </div>
                  
                <div class="panel-body">
                        
                      <table  >
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
  // $maxc1=0;
  // $minC2=0;
  // $minc3=0;
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
                                           <?php echo $normal=number_format($hasil[$tt->kd_kriteria][$hs->id_usulan]*$value->bobot,2)."<br>"; 
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
            <!-- END DEFAULT DATATABLE -->
               <!-- START DEFAULT DATATABLE -->
                <div class="panel panel-default">
                    <div class="panel-heading">                                
                        <h3 class="panel-title">Default</h3>
                        <ul class="panel-controls">
                            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                            <li><a href="<?php echo base_url() ?>index.php/Usulan_control" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                            <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                        </ul>                                
                    </div>
                  
                <div class="panel-body">
                        
                      <table  >
                        <thead>
                          <tr class="headings">
                            <th class="column-title">no</th>
                            <th class="column-title">Id usulan </th>
                            <th class="column-title">Nama ususlan</th>
                            
                               <th class="column-title">
                                 Nilai Vektor
                                  </th>
                                
                           
                           
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
                            <td class=" "><?php  echo $hs->nama_usulan; ?></td>
                            <?php
                                $jum=0;
                              
                                          ?>
                                         <td><?php echo $sum[$hs->id_usulan]; ?></td>
                                          
                                         
                                           <?php 
                                    
                               
                              ?> 
                            
                           
                             
                          </tr> 
                          <?php endif;
                           $z=$hs->id_usulan;}
                          ?>
                        </tbody>
                      </table>
                    <div>
            </div>
            <!-- END DEFAULT DATATABLE -->
         
                <?php echo anchor(site_url('C_usulan/laporan'), '<i class="fa fa-wpforms" aria-hidden="true"></i> Cetak', 'class="btn btn-danger btn-sm"'); ?>
                <?php echo anchor(site_url('C_usulan/cetak_excel'), '<i class="fa fa-wpforms" aria-hidden="true"></i> Cetak', 'class="btn btn-danger btn-sm"'); ?>
                
          
          </div>

            

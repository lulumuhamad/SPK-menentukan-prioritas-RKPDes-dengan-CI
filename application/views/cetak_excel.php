<?php
    header ("Cache-Control: no-cache, must-revalidate");
    header ("Pragma: no-cache");
    header ("Content-type: application/x-msexcel");
    header ("Content-Disposition: attachment; filename=laporan-usulan-rkpdes.xls");
    ?>
    <style>
  table{
      border-collapse: collapse;
      width: 100%;
      margin: 0 auto;
  }
  table th{
      border:1px solid #000;
      padding: 3px;
      font-weight: bold;
      text-align: center;
  }
  table td{
      border:1px solid #000;
      padding: 3px;
      vertical-align: top;
  }
  </style>
    <div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-warning box-solid">
                    <div class="box-header">
                        <h3 class="box-title">MENENTUKAN USULAN DAN KRITERIA</h3>

                    </div>

                    <div class="box-body">
                        
                      <table id="tabeldata" class="table table-striped table-bordered" >
                        <thead>
                          <tr>
                            <th >NO </th>
                            <th > KODE USULAN </th>
                            <th  >NAMA USULAN</th>
                            <th  >LOKASI USULAN</th>
                              

                            <?php 
                             $a ='0';
                              foreach ($k as $key => $value) {
                                if($a <> $value->kd_kriteria):
                             ?> 
                             <th> <?php echo $value->nama_kriteria; ?></th>
                           <?php endif;
                           $a=$value->kd_kriteria;
                           } ?>
                           
                              <th width="15%">TAHUN PERIODE </th>
                           
                           
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
              <div class="col-xs-12">
                <div class="box box-warning box-solid">
                    <div class="box-header">
                        <h3 class="box-title">Menentukan Rating Kecocokan Dan Bobot Kriteria </h3>

                    </div>

                    <div class="box-body">
                        <table class="table table-striped table-bordered" >
                        <thead>
                          <tr class="headings">
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
                          <tr>
                            <td colspan="4" align="center">minmax</td>
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
          <div class="col-xs-12">
                <div class="box box-warning box-solid">
                    <div class="box-header">
                        <h3 class="box-title">Matriks X Berdasarkan Rating Kecocokan</h3>

                    </div>

                    <div class="box-body">
                        <table>
                     
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
 <div class="col-xs-12">
                <div class="box box-warning box-solid">
                    <div class="box-header">
                        <h3 class="box-title">NORMALISASI</h3>

                    </div>

                    <div class="box-body">
                        <table class="table table-striped table-bordered">
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
                    </div>
                </div>
                
            </div>
            <div class="col-xs-12">
                <div class="box box-warning box-solid">
                    <div class="box-header">
                        <h3 class="box-title">HASIL FAKTOR</h3>

                    </div>

                    <div class="box-body">
                       <table class="table table-striped table-bordered">
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
  // $maxc1=0;
  // $minC2=0;
  // $minc3=0;
  
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
                    </div>
                </div>
                
            </div>
          </div></section></div>

            

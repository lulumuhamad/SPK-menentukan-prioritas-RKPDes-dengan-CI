<!DOCTYPE html>
<html>

<style type="text/css">
  #watermark{
    position: fixed;
   top: -25;
    bottom: 0px;
    left: 15px;
    right: 0px;
    width: 26cm;
    height: 29cm;
    z-index: -1000;
  }
  body{
    margin-top: 4cm;
    margin-bottom: 1cm;
    margin-right: 1cm;
    margin-left: 1.1cm;

  }
 
</style>

    <h4 style="text-align: center">Daftar Skala Prioritas RKPDes Ciburuy</h4>
<br><p>
  <div id="watermark">
<table >
  <tr>
    <th ><img src="./assets/images/LOGO.png" width="10%"></th>
    <th><h2>Laporan Sistem Penunjang Keputusan (SPK) untuk Rekomendasi usulan program kerja pembangunan Desa Ciburuy Kecamatan Bayongbong Kabupaten Garut Provinsi Jawabarat</h2></th>
    
  </tr>
  <tr>
    <td colspan="3"><hr/></td>
  </tr>
  <tr>
    <td colspan="3">Laporan Usulan per-Periode : <?php echo $periode; ?></td>
  </tr>
</table>

</div>    
<div id="body">                  
  <table class="imagetable" align="justify">
              <thead>
                
                <tr>
                  <th rowspan="2" > KODE USULAN </th>
                  <th rowspan="2" width="140px"> USULAN</th>
                  <th rowspan="2" >LOKASI</th>
                  <th colspan="4" >Kriteria</th>
                  <th rowspan="2">nilai vektor</th>
                  <th rowspan="2">peringkat</th>
                  <th rowspan="2">keterangan</th>
                </tr>
                <tr>
                 <?php 
                   $a ='0';
                    foreach ($k as $key => $value) {
                      if($a <> $value->kd_kriteria):
                   ?> 
                   <th > <?php echo $value->nama_kriteria; ?></th>
                 <?php endif;
                 $a=$value->kd_kriteria;
                 } ?>
                 
                </tr>
              </thead>

              <tbody>
        <?php
  $no = 1;
  $us='0';
    foreach($kriteria as $op)
    { if($us <> $op->id_usulan):
    ?>
                          <tr class="even pointer">
                            
                            <td><?php echo $op->id_usulan; ?></td>
                            <td ><?php echo $op->nama_usulan; ?></td>
                            <td><?php echo $op->lokasi;?></td>
                            
                           <?php
                            $b='0';
                              foreach ($kriteria as $key => $tt) {
                                if ($tt->id_usulan == $op->id_usulan) {
                                    foreach ($kriteria as $key => $value) {
                                     if ($value->kd_kriteria == $tt->kd_kriteria) {
                                       foreach ($kriteria as $key => $bb) {
                                         if ($bb->kd_sub_kriteria == $tt->kd_sub_kriteria) {
                                         if($b <> $bb->kd_sub_kriteria):
                                          ?>
                                          <td>
                                           <?php echo $bb->keterangan;?>
                                         </td>
                                           <?php 
                                         endif;
                                         $b= $bb->kd_sub_kriteria;
                                        
                                         }
                                       }
                                     }
                                   }
                                }
                              }
                              ?> 
                            
                            <td><?php echo $op->nilai_vektor; ?></td>
                            <td ><?php echo $no++; ?></td>
                             <td>
                               <?php 
                               
                                  if ($no <=8) {
                                    echo "<b>Direkomendasikan untuk dimusywarahkan";
                                  }
                                  else
                                  {
                                    echo "ditinjau ulang";
                                  }
                                
                                 ?> 
                              </td>
                          </tr> 
                          <?php endif;
                          $us=$op->id_usulan; }
                          
                          ?>
                        </tbody>
                      </table>
                    </div>
                   
         <!-- This goes in the document HEAD so IE7 and IE8 don't cry -->
  <!--[if lt IE 9]>
  <style type="text/css">
    table.gradienttable th {
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#d5e3e4', endColorstr='#b3c8cc',GradientType=0 );
      position: relative;
      z-index: -1;
    }
    table.gradienttable td {
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ebecda', endColorstr='#ceceb7',GradientType=0 );
      position: relative;
      z-index: -1;
    }
  </style>
  <![endif]-->

<!-- CSS goes in the document HEAD or added to your external stylesheet -->
<!-- CSS goes in the document HEAD or added to your external stylesheet -->
<style type="text/css">
table.imagetable {
  font-family: verdana,arial,sans-serif;
  font-size:11px;
  color:#333333;
  border-width: 1px;
  border-color: #999999;
  border-collapse: collapse;
}
table.imagetable th {
  background:#b5cfd2 url('cell-blue.jpg');
  border-width: 1px;
  padding: 8px;
  border-style: solid;
  border-color: #999999;
}
table.imagetable td {
  background:#dcddc0 url('cell-grey.jpg');
  border-width: 1px;
  padding: 8px;
  border-style: solid;
  border-color: #999999;
}
</style>
<!-- Table goes in the document BODY -->

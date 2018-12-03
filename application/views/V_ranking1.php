 <table class="table datatable"  >
            <thead>
                <tr>
                       <th width="10">NO</th>
                    <th align="center">KODE USULAN</th>
                    <th align="center">NAMA USULAN</th>
                    <th align="center">LOKASI USULAN</th>
                    <th align="center">PERIODE</th>
                    <th align="center">NILAI VEKTOR</th>
                    <th align="center">RANKING</th>
                    <th align="center"></th>
                </tr>
            </thead>

            
            <tbody>
    <?php
      $no = 1;
      $r='0';
        foreach($isi1 as $key => $op1)
        {if($r <> $op1->tanggal):
        ?>                      
                               <td ><?php echo $no++;?></td>
                              <td ><?php echo $op1->id_usulan;?></td>
                                <td><?php echo $op1->nama_usulan;?></td>
                                 <td ><?php echo $op1->lokasi;?></td>
                                <td ><?php echo $op1->tanggal;?></td>
                                <?php $maxrank[$op1->tanggal][]=$op1->nilai_vektor;
                                  
                                  echo max($maxrank[$op1->tanggal]);
                                   ?>
                                <td align="left"><?php echo $op1->nilai_vektor;?> </td> 
                                <td align="left"><?php echo $op1->nilai_vektor;?> </td> 
                                 </tr>

                              <?php endif;
                                 $r=$op1->tanggal;}
                              ?>
                            </tbody>
                          </table>
                         



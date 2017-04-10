<?php include "Header.php"; ?>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <div class="col-lg-12 col-xs-12">
         <div class="box box-info">
           <div class="box-header">
             <i class="fa fa-database"></i>
             <h3 class="box-title"><b> Master Data Schremble Words &nbsp;&nbsp;<a href="<?php echo base_url('dashboard/admin/schremblewords/add'); ?>"><button class="btn btn-primary tambah-form btn-sm btn-flat" ><i class="fa fa-plus"></i>&nbsp; Tambah Data</button></a> <a href="<?php echo base_url('dashboard/admin/schremblewords/list'); ?>"><button class="btn btn-success tambah-form btn-sm btn-flat" ><i class="fa fa-refresh"></i>&nbsp; Refresh Page</button></a></h3>
             <div class="pull-right box-tools">
             </div>
           </div>
           <div class="box-body ">
              <div class="col-lg-12 scrool-kanan-bawah ">
              <table border="1" width="100%" class="table table-striped table-border">
                <?php
                    foreach ($datascw as $ds) 
                    {
                      $gabung1 = "coba" . $ds->nama1 . $ds->id;
                      $gabung2 = "coba" . $ds->nama2 . $ds->id;
                      $gabung3 = "coba" . $ds->nama3 . $ds->id;
                      $gabung4 = "coba" . $ds->nama4 . $ds->id;
                      $gabung5 = "coba" . $ds->nama5 . $ds->id;
                      $gabung6 = "coba" . $ds->nama6 . $ds->id;
                      $gabung7 = "coba" . $ds->nama7 . $ds->id;
                      $gabung8 = "coba" . $ds->nama8 . $ds->id;
                      $gabung9 = "coba" . $ds->nama9 . $ds->id;
                      $gabung10 = "coba" . $ds->nama10 . $ds->id;
                      $gabung11 = "coba" . $ds->nama11 . $ds->id;
                      $gabung12 = "coba" . $ds->nama12 . $ds->id;
                      $gabung13 = "coba" . $ds->nama13 . $ds->id;
                      $gabung14 = "coba" . $ds->nama14 . $ds->id;
                      $gabung15 = "coba" . $ds->nama15 . $ds->id;
                  ?>
                <tr>
                  <td width="5%" align="center"> <button id="<?php echo $gabung1 ?>" value="<?php echo $ds->nama1 ?>" onClick="cobajs('<?= $ds->nama1 ?>','<?= $ds->id ?>')"> <?php echo $ds->nama1 ?> </button> </td>
                  
                  <td width="5%" align="center"> <button id="<?php echo $gabung2 ?>" value="<?php echo $ds->nama2 ?>" onClick="cobajs('<?= $ds->nama2 ?>','<?= $ds->id ?>')"> <?php echo $ds->nama2 ?> </button> </td>

                  <td width="5%" align="center"> <button id="<?php echo $gabung3 ?>" value="<?php echo $ds->nama3 ?>" onClick="cobajs('<?= $ds->nama3 ?>','<?= $ds->id ?>')"> <?php echo $ds->nama3 ?> </button> </td>

                  <td width="5%" align="center"> <button id="<?php echo $gabung4 ?>" value="<?php echo $ds->nama4 ?>" onClick="cobajs('<?= $ds->nama4 ?>','<?= $ds->id ?>')"> <?php echo $ds->nama4 ?> </button> </td>

                  <td width="5%" align="center"> <button id="<?php echo $gabung5 ?>" value="<?php echo $ds->nama5 ?>" onClick="cobajs('<?= $ds->nama5 ?>','<?= $ds->id ?>')"> <?php echo $ds->nama5 ?> </button> </td>

                  <td width="5%" align="center"> <button id="<?php echo $gabung6 ?>" value="<?php echo $ds->nama6 ?>" onClick="cobajs('<?= $ds->nama6 ?>','<?= $ds->id ?>')"> <?php echo $ds->nama6 ?> </button> </td>

                  <td width="5%" align="center"> <button id="<?php echo $gabung7 ?>" value="<?php echo $ds->nama7 ?>" onClick="cobajs('<?= $ds->nama7 ?>','<?= $ds->id ?>')"> <?php echo $ds->nama7 ?> </button> </td>

                  <td width="5%" align="center"> <button id="<?php echo $gabung8 ?>" value="<?php echo $ds->nama8 ?>" onClick="cobajs('<?= $ds->nama8 ?>','<?= $ds->id ?>')"> <?php echo $ds->nama8 ?> </button> </td>

                  <td width="5%" align="center"> <button id="<?php echo $gabung9 ?>" value="<?php echo $ds->nama9 ?>" onClick="cobajs('<?= $ds->nama9 ?>','<?= $ds->id ?>')"> <?php echo $ds->nama9 ?> </button> </td>

                  <td width="5%" align="center"> <button id="<?php echo $gabung10 ?>" value="<?php echo $ds->nama10 ?>" onClick="cobajs('<?= $ds->nama10 ?>','<?= $ds->id ?>')"> <?php echo $ds->nama10 ?> </button> </td>

                  <td width="5%" align="center"> <button id="<?php echo $gabung11 ?>" value="<?php echo $ds->nama11 ?>" onClick="cobajs('<?= $ds->nama11 ?>','<?= $ds->id ?>')"> <?php echo $ds->nama11 ?> </button> </td>

                  <td width="5%" align="center"> <button id="<?php echo $gabung12 ?>" value="<?php echo $ds->nama12 ?>" onClick="cobajs('<?= $ds->nama12 ?>','<?= $ds->id ?>')"> <?php echo $ds->nama12 ?> </button> </td>

                  <td width="5%" align="center"> <button id="<?php echo $gabung13 ?>" value="<?php echo $ds->nama13 ?>" onClick="cobajs('<?= $ds->nama13 ?>','<?= $ds->id ?>')"> <?php echo $ds->nama13 ?> </button> </td>

                  <td width="5%" align="center"> <button id="<?php echo $gabung14 ?>" value="<?php echo $ds->nama14 ?>" onClick="cobajs('<?= $ds->nama14 ?>','<?= $ds->id ?>')"> <?php echo $ds->nama14 ?> </button> </td>

                  <td width="5%" align="center"> <button id="<?php echo $gabung15 ?>" value="<?php echo $ds->nama15 ?>" onClick="cobajs('<?= $ds->nama15 ?>','<?= $ds->id ?>')"> <?php echo $ds->nama15 ?> </button> </td>
                </tr>
                <?php } ?>
              </table>
              LIST SOAL : <br>
              <input type="text" id="hasil"><input type="text" id="score">
              </div>
           </div>
          </div>
        </div>
        <!-- Left col -->
      </div>
      <!-- /.row (main row) -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<script>
var temp = '';
  function cobajs($id,$idx) {  
  
      var d1 = $id;
      var cob = "#coba";
      var idx = $idx;
      var gabungan1 = cob + d1 + idx;

      //console.log(gabungan1);
       
      if(d1 == d1)
      {
        temp += d1;
        $(gabungan1).attr('disabled', true);
        $('#hasil').val(temp);
        if(temp == "SCM")
        {
            $('#score').val(10);
        }
        else
        {
           $('#score').val(0);
        }
        
      }
  }
</script>
<?php include "Footer.php"; ?>

<?php include "Header.php"; ?>
<?php
  //$waktu = 60;    
?>
    <!-- Main content -->
    <section class="content" >
      <!-- Small boxes (Stat box) -->
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <div class="col-lg-12 col-xs-12">
         <div class="box box-info" >
           <div class="box-header">
             <i class="fa fa-database"></i>
             <h3 class="box-title"><b> Master Data Schremble Words &nbsp;&nbsp;<a href="<?php echo base_url('dashboard/admin/schremblewords/add'); ?>"><button class="btn btn-primary tambah-form btn-sm btn-flat" ><i class="fa fa-plus"></i>&nbsp; Tambah Data</button></a> <button class="btn btn-success tambah-form btn-sm btn-flat" onclick="reload()"><i class="fa fa-refresh"></i>&nbsp; Refresh Page</button></h3>
             <div id="hitmundur"></div>
             <div class="pull-right box-tools">
             </div>
           </div>
           <div id="awal">
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
                  <td width="5%" align="center"> <button id="<?php echo $gabung1 ?>" name="submit" value="<?php echo $ds->nama1 ?>" onClick="cobajs('<?= $ds->nama1 ?>','<?= $ds->id ?>')"> <?php echo $ds->nama1 ?> </button> </td>
                  
                  <td width="5%" align="center"> <button id="<?php echo $gabung2 ?>" name="submit" value="<?php echo $ds->nama2 ?>" onClick="cobajs('<?= $ds->nama2 ?>','<?= $ds->id ?>')"> <?php echo $ds->nama2 ?> </button> </td>

                  <td width="5%" align="center"> <button id="<?php echo $gabung3 ?>" name="submit"value="<?php echo $ds->nama3 ?>" onClick="cobajs('<?= $ds->nama3 ?>','<?= $ds->id ?>')"> <?php echo $ds->nama3 ?> </button> </td>

                  <td width="5%" align="center"> <button id="<?php echo $gabung4 ?>" name="submit" value="<?php echo $ds->nama4 ?>" onClick="cobajs('<?= $ds->nama4 ?>','<?= $ds->id ?>')"> <?php echo $ds->nama4 ?> </button> </td>

                  <td width="5%" align="center"> <button id="<?php echo $gabung5 ?>" name="submit"value="<?php echo $ds->nama5 ?>" onClick="cobajs('<?= $ds->nama5 ?>','<?= $ds->id ?>')"> <?php echo $ds->nama5 ?> </button> </td>

                  <td width="5%" align="center"> <button id="<?php echo $gabung6 ?>" name="submit"value="<?php echo $ds->nama6 ?>" onClick="cobajs('<?= $ds->nama6 ?>','<?= $ds->id ?>')"> <?php echo $ds->nama6 ?> </button> </td>

                  <td width="5%" align="center"> <button id="<?php echo $gabung7 ?>" name="submit"value="<?php echo $ds->nama7 ?>" onClick="cobajs('<?= $ds->nama7 ?>','<?= $ds->id ?>')"> <?php echo $ds->nama7 ?> </button> </td>

                  <td width="5%" align="center"> <button id="<?php echo $gabung8 ?>" name="submit" value="<?php echo $ds->nama8 ?>" onClick="cobajs('<?= $ds->nama8 ?>','<?= $ds->id ?>')"> <?php echo $ds->nama8 ?> </button> </td>

                  <td width="5%" align="center"> <button id="<?php echo $gabung9 ?>" name="submit" value="<?php echo $ds->nama9 ?>" onClick="cobajs('<?= $ds->nama9 ?>','<?= $ds->id ?>')"> <?php echo $ds->nama9 ?> </button> </td>

                  <td width="5%" align="center"> <button id="<?php echo $gabung10 ?>" name="submit" value="<?php echo $ds->nama10 ?>" onClick="cobajs('<?= $ds->nama10 ?>','<?= $ds->id ?>')"> <?php echo $ds->nama10 ?> </button> </td>

                  <td width="5%" align="center"> <button id="<?php echo $gabung11 ?>" name="submit" value="<?php echo $ds->nama11 ?>" onClick="cobajs('<?= $ds->nama11 ?>','<?= $ds->id ?>')"> <?php echo $ds->nama11 ?> </button> </td>

                  <td width="5%" align="center"> <button id="<?php echo $gabung12 ?>" name="submit" value="<?php echo $ds->nama12 ?>" onClick="cobajs('<?= $ds->nama12 ?>','<?= $ds->id ?>')"> <?php echo $ds->nama12 ?> </button> </td>

                  <td width="5%" align="center"> <button id="<?php echo $gabung13 ?>" name="submit"value="<?php echo $ds->nama13 ?>" onClick="cobajs('<?= $ds->nama13 ?>','<?= $ds->id ?>')"> <?php echo $ds->nama13 ?> </button> </td>

                  <td width="5%" align="center"> <button id="<?php echo $gabung14 ?>" name="submit" value="<?php echo $ds->nama14 ?>" onClick="cobajs('<?= $ds->nama14 ?>','<?= $ds->id ?>')"> <?php echo $ds->nama14 ?> </button> </td>

                  <td width="5%" align="center"> <button id="<?php echo $gabung15 ?>" name="submit" value="<?php echo $ds->nama15 ?>" onClick="cobajs('<?= $ds->nama15 ?>','<?= $ds->id ?>')"> <?php echo $ds->nama15 ?> </button> </td>
                </tr>
                <?php } ?>
              </table>
              </div>
           </div>
               LIST SOAL : <br>
               <?php 
               foreach ($soal1 as $key => $value) 
               {
               ?>
               <form id="myform1">
                  <p><?php echo $value['nama']; ?> &nbsp;&nbsp;&nbsp;<?php echo $value['soal']; ?><br>
                  <input type="text" id="hasil1"><input type="text" id="score" name="score"><input type="text" name="keterangan1" id="keterangan1" value="<?php echo $value['nama']; ?>"><br><br></p>
              </form>
               <?php } ?>
               <?php 
               foreach ($soal2 as $key => $value) 
               {
               ?>
               <form id="myform2">
                  <p id="event1"><?php echo $value['nama']; ?> &nbsp;&nbsp;&nbsp;<?php echo $value['soal']; ?><br>
                  <input type="text" id="hasil2"><input type="text" id="score2" name="score"><input type="text" name="keterangan1" id="keterangan1" value="<?php echo $value['nama']; ?>"><br><br></p>
               </form>
               <?php } ?>

               <p align="right"><button id="eventbtn1" class="btn btn-success btn-flat"> Selanjutnya </button></p>
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
<script type="text/javascript">
function waktuHabis(){
  alert("Waktu anda habis!!!");
  autosaveFinish();
  window.location.href = "http://www.google.com";
  }   
function hampirHabis(periods){
  if($.countdown.periodsToSeconds(periods) == 30){
    $(this).css({color:"red"});
    }
  }
$(function(){
  
  var sisa_waktu =  <?php echo $waktu ?>;
  
  var TimeOut = sisa_waktu;
  $("#hitmundur").countdown({
    until: TimeOut,
    compact:true,
    onExpiry:waktuHabis,
    onTick: hampirHabis
    }); 
  })
</script>

<script type="text/javascript">
  jQuery(document).ready(function($)
  {
       $('#event1').hide();
       $('#eventbtn1').hide();
  });

  function counter(time, url){
  var interval = setInterval(function(){
    $('#waktu').text(time);
    time = time - 1;
 
    if(time == 0){
      clearInterval(interval);
      window.location = url;
    }
  }, 1000);
}
</script>

<script>
var temp1 = '';
var temp2 = '';

function reload() 
{ 
  $("#awal").load("<?php echo base_url('dashboard/admin/schremblewords/list'); ?> #awal");
  temp1 = '';
  temp2 = '';
  $('#event1').hide();
  $('#eventbtn1').hide();
  autodelete();
}
  function cobajs($id,$idx) {  
  
      var d1 = $id;
      var d2 = $id;
      var cob = "#coba";
      var idx = $idx;
      var gabungan1 = cob + d1 + idx;
      var total1 = $('#score').val();
      var total2 = $('#score2').val();

      //console.log(gabungan1);
       
      if(total1 == 0)
      {
          if(d1 == d1)
          {
            temp1 += d1;
            $(gabungan1).attr('disabled', true);
            $('#hasil1').val(temp1);
            if(temp1 == "SDM")
            {
                $('#score').val(10);
                autosave();
                $('#event1').show();
            }
            else
            {
               $('#score').val(0);
            }
            
          }
      }else{

          if(d2 == d2)
          {
            temp2 += d2;
            $(gabungan1).attr('disabled', true);
            $('#hasil2').val(temp2);
            if(temp2 == "SCM")
            {
                $('#score2').val(10);
                autosave2();
                $('#eventbtn1').show();
            }
            else
            {
               $('#score2').val(0);
            }
            
          }
      }
  }
</script>

<script type="text/javascript">
 
 function autosave()
 {
        var form_data = $('#myform1').serialize();
        $.ajax({
            url: "<?php echo base_url(). 'scorecontroller/tambah_data'; ?>",
            type: 'POST',
            data: form_data, 
            dataType: 'json',
            success: function(msg) {
                  if(msg.error == "no"){
                    alert('Sukses Input Data');
                  }else{
                    alert('Gagal Input Data');
                  }
            }
       });
 } 

 function autosave2()
 {
        var form_data = $('#myform2').serialize();
        $.ajax({
            url: "<?php echo base_url(). 'scorecontroller/tambah_data'; ?>",
            type: 'POST',
            data: form_data, 
            dataType: 'json',
            success: function(msg) {
                  if(msg.error == "no"){
                    alert('Sukses Input Data');
                  }else{
                    alert('Gagal Input Data');
                  }
            }
       });
  } 

   function autosaveFinish()
   {
          var form_data = $('#myform1').serialize();
          $.ajax({
              url: "<?php echo base_url(). 'scorecontroller/tambah_data_finish'; ?>",
              type: 'POST',
              data: form_data, 
              dataType: 'json',
              success: function(msg) {
                    if(msg.error == "no"){
                      alert('Sukses Input Data Finish');
                    }else{
                      alert('Gagal Input Data Finish');
                    }
              }
         });
    } 
</script>

<script type="text/javascript">
  

  $.get('/management2017/api/count/list/score',function(response)
     {
       var datatot = JSON.parse(response);
       var jumlah1 = datatot.length;

         if (jumlah1 == 2 || datatot.keterangan == "Finish")
         {
              alert("Lanjutkan");
              $('#awal').hide();
         }
         else
         {
           $(document).ready(function(){     
              autodelete();
           });
         }
     });
  
 function autodelete()
 {
     $.get('<?php echo base_url('scorecontroller/deleteall1'); ?>', function(data) {
         if (data == 'succeed') 
         {
            alert("deleted");
         }
      });
 } 
</script>
<?php include "Footer.php"; ?>

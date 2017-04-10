<?php include "Header.php"; ?>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12">
          <!-- TO DO List -->
          <div class="box box-primary">
            <div class="box-header">
              <i class="fa fa-database"></i>
              <h3 class="box-title">Master Data Soal &nbsp;&nbsp;<a href="<?php echo base_url('dashboard/admin/data/soal/add'); ?>"><button class="btn btn-primary tambah-form btn-sm btn-flat" ><i class="fa fa-plus"></i>&nbsp; Tambah Data</button></a></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <a href="<?php echo base_url('dashboard/admin/data/soal/list'); ?>">All (<?php echo $this->session->userdata("soal_jumlah"); ?>)</a> | <a href="<?php echo base_url('dashboard/admin/data/soal/list/bin'); ?>">Trash (<?php echo $this->session->userdata("jumlah_sampah_soal"); ?>)</a>
                  <hr>
               <table id="example1" class="table table-bordered table-striped table-responsive">
               <thead>
               <tr>
                 <th>No</th>
                 <th>Nama</th>
                 <th width="30%">Soal</th>
                 <th>Jawaban</th>
                 <th>Point</th>
                 <th>Created At</th>
                 <th width="18%">Actions</th>
              </tr>
              </thead>
              <tbody>
               <?php
                  $no = 1;
                  foreach ($soal as $s) {
               ?>
               <tr id="row-<?= $s->id_soal ?>">
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $s->nama ?></td>
                  <td><?php echo $s->soal ?></td>
                  <td><?php echo $s->jawaban ?></td>
                  <td><?php echo $s->poin ?></td>
                  <td><?php echo $s->created_at ?></td>
                  <td align="center">
                     <a href="<?php echo base_url('dashboard/admin/data/soal/edit/'.$s->id_soal); ?>"><button class="btn btn-warning btn-sm" ><i class="glyphicon glyphicon-edit"></i>&nbsp; Update</button></a>&nbsp;&nbsp;
                      <button class="btn btn-danger btn-sm" onClick="deleteData(<?= $s->id_soal ?>)"><i class="glyphicon glyphicon-trash"></i>&nbsp; Delete</button>
                </tr>
                <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                   <th>No</th>
                   <th>Nama</th>
                   <th>Soal</th>
                   <th>Jawaban</th>
                   <th>Point</th>
                   <th>Created At</th>
                   <th>Actions</th>
                </tr>
                </tfoot>
               </table>
              </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </section>
      </div>
      <!-- /.row (main row) -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script>
    function deleteData(id) {
        swal({
          title: "Are you sure?",
          text: "You will not be able to recover this Data!",
          type: "warning",
          showCancelButton: true,
          confirmButtonClass: 'btn-danger',
          confirmButtonText: 'Yes, delete it!',
          closeOnConfirm: false,
          closeOnCancel: true
        },
        function() {
            $.get('<?php echo base_url('soalcontroller/softdelete/'); ?>', {id:id}, function(data) {
              if (data == 'succeed') {
                  $('#row-' + id).remove();
                  swal("Deleted!", "Your Data has been deleted!", "success");
              }
            });
        });
    }
    function handleClickUpdate(e){
      e.preventDefault();
    }
  </script>

<?php include "Footer.php"; ?>

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
              <h3 class="box-title">Add Master Data Soal</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form action="<?php echo base_url(). 'soalcontroller/tambah_aksi'; ?>" method="post" onsubmit="return validasi();" enctype="multipart/form-data">
                <div class="box-body col-lg-12">
                  <div class="form-group">
                    <label>Nama Soal</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama Soal ... " required>
                  </div>
                </div>

                <div class="box-body col-lg-12">
                  <div class="form-group">
                    <label>Soal</label>
                    <input type="text" name="soal" class="form-control" placeholder="Soal ... " required>
                  </div>
                </div>

                <div class="box-body col-lg-12">
                  <div class="form-group">
                    <label>Jawaban</label>
                    <input type="text" name="jawaban" class="form-control" placeholder="Jawaban ... " required>
                  </div>
                </div>

                <div class="box-body col-lg-12">
                  <div class="form-group">
                    <label>Point</label>
                    <input type="text" name="poin" id="poin" class="form-control" placeholder="Point ... " required>
                  </div>
                </div>

                 <div class="box-body col-lg-12">
                  <div class="form-group">
                    <label>keterangan</label>
                      <input type="text" class="form-control" name="keterangan" placeholder="Keterangan" required>
                  </div>
                </div>

                <div class="form-group">
                  <input type="submit" name="submit" value="Save" class="btn btn-success">
                  <a href="<?php echo base_url('dashboard/admin/data/soal/list'); ?>"><input type="button" value="Back To View" class="btn btn-success"></a>
                  <input type="reset" name="reset" value="Cancel" class="btn btn-success">
                </div>
              </form>
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
  <script type="text/javascript">
    function validasi(){
      var poin = document.getElementById('poin').value;
      var number = /^[0-9]+$/;
  		
      if(!poin.match(number))
      {
        alert('Point Harus Angka');
        return false;
      }
  		return true;
    }
  </script>
<?php include "Footer.php"; ?>

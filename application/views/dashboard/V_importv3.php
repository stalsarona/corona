<link rel="stylesheet" href="<?php echo base_url()?>assets/dist/dropzone/min/dropzone.min.css">
<style> 
  .dropzone {
    border: 2px dashed #dedede;
    border-radius: 5px;
    background: #f5f5f5;
  }

  .dropzone i {
    font-size: 5rem;
  }

  .dropzone .dz-message {
    color: rgba(0, 0, 0, .54);
    font-weight: 500;
    font-size: initial;
    text-transform: uppercase;
  }

</style>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>SIMRS TUGUREJO</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Import Data</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Form Import Data <?php echo $status ?></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="card-body">
              <p class="mt-2">
              And here is your new drag & drop element <?php if($status === 'Covid'){?>
              <a href="<?php echo base_url()?>assets/import-dewo19/Original/format-importdata-covid.xlsx">&nbsp; <i class="fa fa-download">&nbsp; format excel</i></a>
              <?php } else if($status === 'cakupan'){?>
                <a href="<?php echo base_url()?>assets/import-dewo19/Original/format-cakupan-covid.xlsx">&nbsp; <i class="fa fa-download">&nbsp; format excel</i></a>
              <?php } else {?>
                <a href="<?php echo base_url()?>assets/import-dewo19/Original/format-rekap.xlsx">&nbsp; <i class="fa fa-download">&nbsp; format excel</i></a>
              <?php } ?>
              </p>
              <form class="dropzone dz-clickable" id="my-dropzone2">
                <div class="dz-message d-flex flex-column">
                  <i class="material-icons text-muted">cloud_upload</i>
                  Drag &amp; Drop here or click
                </div>
              </form>
            </div>        
          </div>
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- jQuery -->
<script src="<?php echo base_url()?>assets/plugins/jquery/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="<?php echo base_url()?>assets/dist/dropzone/min/dropzone.min.js"></script>
<script>
let currentFile = null;
Dropzone.autoDiscover = false;
const status = "<?php echo $status ?>";
let url;
if(status === 'Covid'){
  url = "<?php echo base_url('importData/checkUpload/Covid')?>";
} else if(status === 'cakupan'){
  url = "<?php echo base_url('importData/checkUpload/cakupan')?>"
} else {
  url = "<?php echo base_url('importData/checkUpload/rekap')?>";
}
var myDropzone = new Dropzone("#my-dropzone2", { 
    url: url,
    init: function() {
        this.on("success", function(file, response){
          if(response != "" ){
            const d = JSON.parse(response)
            d.code === 500 ? swal('Format File Salah','', 'info') : swal('Sukses import data','','success');
            d.code === 500 && this.removeFile(file);
            //console.log('response')
            return;
          }
          swal('Format File Salah','', 'info');
          this.removeFile(file);
        })
        this.on("error", function(file, error){
            console.log(error)
        })
    }
});
</script>
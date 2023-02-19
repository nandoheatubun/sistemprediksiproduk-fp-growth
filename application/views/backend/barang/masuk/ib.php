<div class="app-main__outer">
    <div class="app-main__inner">



 <div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
      <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">Form Data Barang </h5>
          <!-- <form class="" > -->
            <div class="col-md-6"><?php echo $this->session->flashdata('pesan'); ?></div>
            <?php echo form_open_multipart('barang/pib/'); ?>
            
          

          <div class="form-row">
              <div class="col-lg">
                <div class="position-relative form-group"><label for="files" class="">Tekan Tombol Choose File Untuk Mencari File Excel Data </label><br><br>
                  <input name="file"   type="file"  required>
                </div>
              </div>
            </div>
          
            
             
          <br><br>
         
                
                <a href="<?php echo base_url('barang/masuk'); ?>" class="mt-2 btn btn-warning btn-sm"><i class="fas fa-arrow-left"></i> Kembali</a>
                <button class="mt-2 btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan Data </button>
                <!-- </form> -->
                <?php echo form_close(); ?>
                </div>
                </div>
                



              </div>
            </div>
          </div>
        
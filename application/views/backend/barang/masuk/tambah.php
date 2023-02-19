<div class="app-main__outer">
    <div class="app-main__inner">



 <div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
      <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">Form Tambah Data Barang </h5>
          <!-- <form class="" > -->
            <div class="col-md-6"><?php echo $this->session->flashdata('pesan'); ?></div>
            <?php echo form_open('barang/save_barangmasuk/'); ?>
            
            
           

            <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="" class="">Baju</label>
                  <input type="numbers" name="barang1" class="form-control" placeholder="Produk..">
                </div>
              </div>
            </div>

             <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="" class="">Celana</label>
                  <input type="numbers" name="barang2" class="form-control" placeholder="Produk..">
                </div>
              </div>
            </div>

            <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="" class="">Hijab</label>
                  <input type="numbers" name="barang3" class="form-control" placeholder="Produk..">
                </div>
              </div>
            </div>

           <!--  <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="" class="">Kategori</label>
                  <select name="kategori" class="form-control">
                    <option value="1">Baju</option>
                    <option value="2">Celana</option>
                    <option value="3">Hijab</option>
                    <option value="4">Nikob</option>
                  </select>
                </div>
              </div>
            </div> -->
            

           <!--   <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="" class="">Tanggal</label>
                  <input type="date" name="tanggal_masuk" class="form-control" placeholder="Tanggal Masuk..">
                </div>
              </div>
            </div> -->
          
            
             
          <br><br>
         
                
                <a href="<?php echo base_url('Barang/masuk'); ?>" class="mt-2 btn btn-warning btn-sm"><i class="fas fa-arrow-left"></i> Kembali</a>
                <button class="mt-2 btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan Data </button>
                <!-- </form> -->
                <?php echo form_close(); ?>
                </div>
                </div>
                



              </div>
            </div>
          </div>
        
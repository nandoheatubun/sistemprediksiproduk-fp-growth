<div class="app-main__outer">
    <div class="app-main__inner">

<?php foreach ($datas as $r): ?>

 <div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
      <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">Form Edit Data Barang Masuk</h5>
          <!-- <form class="" > -->
            <div class="col-md-6"><?php echo $this->session->flashdata('pesan'); ?></div>
            <?php echo form_open('Barang/update_barangmasuk/'.$r->kode_barang); ?>
            

            <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="" class="">Baju</label>
                  <input type="number" name="barang1" class="form-control" placeholder="Produk.." value="<?php echo $r->barang1; ?>">
                </div>
              </div>
            </div>

             <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="" class="">Celana</label>
                  <input type="number" name="barang2" class="form-control" placeholder="Produk.." value="<?php echo $r->barang2; ?>">
                </div>
              </div>
            </div>

            <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="" class="">Hijab</label>
                  <input type="number" name="barang3" class="form-control" placeholder="Produk.." value="<?php echo $r->barang3; ?>">
                </div>
              </div>
            </div>


          
           
       
             
          <br><br>
         
                
                <a href="<?php echo base_url('Barang/masuk'); ?>" class="mt-2 btn btn-warning btn-sm"><i class="fas fa-arrow-left"></i> Kembali</a>
                <button class="mt-2 btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan Data </button>
                <!-- </form> -->
                <?php echo form_close(); ?>
                </div>
                </div>
                

<?php endforeach ?>

              </div>
            </div>
          </div>
        
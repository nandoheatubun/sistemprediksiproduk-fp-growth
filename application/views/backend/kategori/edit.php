<div class="app-main__outer">
    <div class="app-main__inner">


<?php foreach ($datas as $r): ?>
  

 <div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
      <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">Form Tambah Kategori Barang </h5>
          <!-- <form class="" > -->
            <div class="col-md-6"><?php echo $this->session->flashdata('pesan'); ?></div>
            <?php echo form_open('Kategori/update_kategori/'.$r->id_kategori); ?>
            
            <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="" class="">Kategori Barang</label>
                  <input type="text" name="kategori" class="form-control" placeholder="Kategori Barang.." value="<?php echo $r->kategori ?>">
                </div>
              </div>
            </div>
          
            
             
          <br><br>
         
                
                <a href="<?php echo base_url('Kategori/index'); ?>" class="mt-2 btn btn-warning btn-sm"><i class="fas fa-arrow-left"></i> Kembali</a>
                <button class="mt-2 btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan Data </button>
                <!-- </form> -->
                <?php echo form_close(); ?>
                </div>
                </div>
                


<?php endforeach ?>
              </div>
            </div>
          </div>
        
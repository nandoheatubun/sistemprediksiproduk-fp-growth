<div class="app-main__outer">
    <div class="app-main__inner">



 <div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
      <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">Form Tambah Data Barang Keluar</h5>
          <!-- <form class="" > -->
            <div class="col-md-6"><?php echo $this->session->flashdata('pesan'); ?></div>
            <?php echo form_open('Barang/save_barangkeluar/'); ?>
          
          <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="" class="">Barang</label>
                    
                    <select name="kode_barang" class="form-control">
                    <?php $barangs = $this->db->get('tb_barang_masuk')->result(); ?>
                    <?php foreach ($barangs as $sop): ?>
                      <option value="<?php echo $sop->kode_barang ?>"><?php echo $sop->nama_barang ?></option>
                    <?php endforeach ?>
                    </select>
                </div>
              </div>
            </div>
            

            <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="" class="">Jumlah</label>
                  <input type="number" name="jumlah_keluar" class="form-control" placeholder="Jumlah Keluar..">
                </div>
              </div>
            </div>
            

             
          <br><br>
         
                
                <a href="<?php echo base_url('Barang/keluar'); ?>" class="mt-2 btn btn-warning btn-sm"><i class="fas fa-arrow-left"></i> Kembali</a>
                <button class="mt-2 btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan Data </button>
                <!-- </form> -->
                <?php echo form_close(); ?>
                </div>
                </div>
                



              </div>
            </div>
          </div>
        
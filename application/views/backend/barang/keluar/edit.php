<div class="app-main__outer">
    <div class="app-main__inner">

<?php foreach ($datas as $r): ?>

 <div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
      <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">Form Edit Data Barang Keluar</h5>
          <!-- <form class="" > -->
            <div class="col-md-6"><?php echo $this->session->flashdata('pesan'); ?></div>
            <?php echo form_open('Barang/update_barangkeluar/'.$r->id_keluar); ?>
            

             <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="" class="">Barang</label>
                    <select name="kode_barang" class="form-control">
                  <?php $barang = $this->db->get('tb_barang_masuk')->result(); ?>
                  <?php foreach ($barang as $b): ?>
                  <?php $selected = ($r->kode_barang == $b->kode_barang)?"select":"" ?>
                      <option value="<?php echo $b->kode_barang ?>" <?php echo $selected ?>><?php echo $b->nama_barang; ?></option>
                  <?php endforeach ?>
                    </select>
                </div>
              </div>
            </div>
        

            <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="" class="">Jumlan</label>
                  <input type="number" name="jumlah_keluar" class="form-control" placeholder="Jumlah Keluar.." value="<?php echo $r->jumlah_keluar ?>">
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
                

<?php endforeach ?>

              </div>
            </div>
          </div>
        
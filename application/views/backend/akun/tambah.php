<div class="app-main__outer">
    <div class="app-main__inner">



 <div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
      <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">Form Tambah Akun Pengguna </h5>
          <!-- <form class="" > -->
            <div class="col-md-6"><?php echo $this->session->flashdata('pesan'); ?></div>
            <?php echo form_open('Akun/save_akun/'); ?>
            
            <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="" class="">Username </label>
                  <input type="text" name="username" class="form-control" placeholder="Username..">
                </div>
              </div>
            </div>
          
           <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="" class="">Email </label>
                  <input type="email" name="email" class="form-control" placeholder="Email..">
                </div>
              </div>
            </div>

             <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="" class="">Password </label>
                  <input type="text" name="password" class="form-control" placeholder="Password..">
                </div>
              </div>
            </div>

             <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="" class="">Level Pengguna </label>
                  <select name="level" class="form-control">
                    <option>PILih LEVEL PENGGUNA</option>
                    <option value="1">ADMIN</option>
                    <option value="2">PEMILIK</option>
                  </select>
                </div>
              </div>
            </div>

             <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="" class="">Status Akun </label>
                  <select name="status_akun" class="form-control">
                    <option>PILih STATUS AKUN</option>
                    <option value="1">AKTIF</option>
                    <option value="2">TIDAK AKTIF</option>
                  </select>
                </div>
              </div>
            </div>
          
          
          
            
             
          <br><br>
         
                
                <a href="<?php echo base_url('Akun/index'); ?>" class="mt-2 btn btn-warning btn-sm"><i class="fas fa-arrow-left"></i> Kembali</a>
                <button class="mt-2 btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan Data </button>
                <!-- </form> -->
                <?php echo form_close(); ?>
                </div>
                </div>
                



              </div>
            </div>
          </div>
        
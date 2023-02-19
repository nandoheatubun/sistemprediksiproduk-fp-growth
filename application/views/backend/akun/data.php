
<div class="app-main__outer">
    <div class="app-main__inner">
       
            <h5 >Data Pengguna Sistem</h5>
            <div class="col-lg-4"><?php echo $this->session->flashdata('pesan'); ?></div>

        <!-- row -->
        <div class="row">
              <div class="col-lg-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                        <a style="font-size: 12px;" href="<?php echo base_url('Akun/tambah'); ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Data Pengguna</a>
                                        </h5>
                                        <div class="table-responsive">
                                        <table class="mb-0 table table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th style="text-align: center; font-size: 12px;">NO</th>
                                                <th style="text-align: center; font-size: 12px;">USERNAME</th>
                                                <th style="text-align: center; font-size: 12px;">PASSWORD</th>
                                                <th style="text-align: center; font-size: 12px;">MENDAFTAR</th>
                                                <th style="text-align: center; font-size: 12px;">ACTION</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; foreach($datas as $r) { ?>
                                            <tr>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $i; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->username; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->level; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->mendaftar; ?></td>
                                                <td   style="text-align: center; font-size: 12px;">
                                                    <!-- <a href="<?php echo base_url('Akun/edit/'.$r->id_user); ?>"><i class="fa fa-pen" title="Edit Data Pengguna"></i></a> | -->
                                                <a onclick="return confirm('apakah anda ingin menghapus data pengguna?')" href="<?php echo base_url('Akun/hapus/'.$r->id_user); ?>"><i class="fa fa-trash" title="Hapus Data Pengguna"></i></a> 
                                                </td>
                                            </tr>
                                            <?php $i++; } ?>
                                            
                                            </tbody>
                                        </table>
                                    </div>
                                    </div>
                                    <?php echo $this->pagination->create_links(); ?>
                                </div>
                            </div>

        </div>
        <!-- ahir row -->
        


                        
</div>

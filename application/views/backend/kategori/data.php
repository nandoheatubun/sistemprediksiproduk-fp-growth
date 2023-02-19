
<div class="app-main__outer">
    <div class="app-main__inner">
       
            <h5 >Data Kategori Barang</h5>
            <div class="col-lg-4"><?php echo $this->session->flashdata('pesan'); ?></div>

        <!-- row -->
        <div class="row">
              <div class="col-lg-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                        <a style="font-size: 12px;" href="<?php echo base_url('Kategori/tambah'); ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Kategori Barang</a>
                                        </h5>
                                        <div class="table-responsive">
                                        <table class="mb-0 table table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th style="text-align: center; font-size: 12px;">NO</th>
                                                <th style="text-align: center; font-size: 12px;">KATEGORI BARANG</th>
                                                <th style="text-align: center; font-size: 12px;">ACTION</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; foreach($datas as $r) { ?>
                                            <tr>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $i; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->kategori; ?></td>
                                                <td   style="text-align: center; font-size: 12px;">
                                                    <a href="<?php echo base_url('Kategori/edit/'.$r->id_kategori); ?>"><i class="fa fa-pen" title="Edit Data Kategori Barang "></i></a> |
                                                <a onclick="return confirm('apakah anda ingin menghapus data ?')" href="<?php echo base_url('Kategori/hapus/'.$r->id_kategori); ?>"><i class="fa fa-trash" title="Hapus Data Kategori Barang "></i></a> 
                                                </td>
                                            </tr>
                                            <?php $i++; } ?>
                                            
                                            </tbody>
                                        </table>
                                    </div>
                                    </div>
                                    
                                    
                                </div>
                            </div>

        </div>
        <!-- ahir row -->
        


                        
</div>

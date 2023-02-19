
<div class="app-main__outer">
    <div class="app-main__inner">
       
            <h5 >Data Barang Keluar</h5>
            <div class="col-lg-4"><?php echo $this->session->flashdata('pesan'); ?></div>

        <!-- row -->
        <div class="row">
              <div class="col-lg-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                       <?php if ($this->session->userdata('level') !="admin") { ?>
                                           
                                     <?php   }elseif ($this->session->userdata('level') =="admin") { ?>
                                            <h5 class="card-title">
                                        <!-- <a style="font-size: 12px;" href="<?php echo base_url('Barang/tambahbarangkeluar'); ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Data Barang</a> -->
                                        </h5>
                                       <?php  } ?>
                                        <div class="table-responsive">
                                        <table class="mb-0 table table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th style="text-align: center; font-size: 12px;">NO</th>
                                                <th style="text-align: center; font-size: 12px;">BAJU</th>
                                                <th style="text-align: center; font-size: 12px;">CELANA</th>
                                                <th style="text-align: center; font-size: 12px;">HIJAB</th>
                                                
                                                <?php if ($this->session->userdata('level') !="admin") { ?>
                                     <?php   }elseif ($this->session->userdata('level') =="admin") { ?>
                                        <!-- <th style="text-align: center; font-size: 12px;">ACTION</th> -->
                                       <?php  } ?>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; foreach($datas as $r) { ?>
                                            <tr>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $i; ?></td>
                                               <td style="text-align: center; font-size: 12px;"><?php echo $r->barang1; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->barang2; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->barang3; ?></td>
                                                

                                                 <?php if ($this->session->userdata('level') !="admin") { ?>
                                     <?php   }elseif ($this->session->userdata('level') =="admin") { ?>
                                        <!-- <td   style="text-align: center; font-size: 12px;">
                                                    <a href="<?php echo base_url('Barang/editbarangkeluar/'.$r->id_keluar); ?>"><i class="fa fa-pen" title="Edit Data Barang "></i></a> |
                                                <a onclick="return confirm('apakah anda ingin menghapus data ?')" href="<?php echo base_url('Barang/hapusbarangkeluar/'.$r->id_keluar); ?>"><i class="fa fa-trash" title="Hapus Data Barang "></i></a> 
                                                </td> -->
                                       <?php  } ?>
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

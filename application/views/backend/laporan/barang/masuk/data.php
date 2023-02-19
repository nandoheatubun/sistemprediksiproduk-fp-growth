
<div class="app-main__outer">
    <div class="app-main__inner">
       
            <h5>Laporan Data Barang Masuk</h5>
            <div class="col-lg-4"><?php echo $this->session->flashdata('pesan'); ?></div>

        <!-- row -->
        <div class="row">
              <div class="col-lg-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                       <?php if ($this->session->userdata('level') !="admin") { ?>
                                           
                                     <?php   }elseif ($this->session->userdata('level') =="admin") { ?>
                                            <h5 class="card-title">
                                        <?php echo form_open('Laporan/printbarangmasuk','target="_blank"'); ?>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="postion-relative form-group">
                                                    <input type="date" name="b1" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="postion-relative form-group">
                                                    <input type="date" name="b2" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="postion-relative form-group">
                                                    <button class="btn btn-warning" type="submit"> Print <i class="fas fa-print"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <?php echo form_close(); ?>
                                        </h5>
                                       <?php  } ?>
                                        <div class="table-responsive">
                                        <table class="mb-0 table table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th style="text-align: center; font-size: 12px;">NO</th>
                                                <!-- <th style="text-align: center; font-size: 12px;">KODE BARANG</th> -->
                                                <th style="text-align: center; font-size: 12px;">PRODUK 1</th>
                                                <th style="text-align: center; font-size: 12px;">PRODUK 2</th>
                                                <th style="text-align: center; font-size: 12px;">PRODUK 3</th>
                                                <th style="text-align: center; font-size: 12px;">TANGGAL MASUK</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; foreach($datas as $r) { ?>
                                            <tr>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $i; ?></td>
                                                <!-- <td style="text-align: center; font-size: 12px;"><?php echo $r->kode_barang; ?></td> -->
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->barang1; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->barang2; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->barang3; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->tanggal_masuk; ?></td>
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

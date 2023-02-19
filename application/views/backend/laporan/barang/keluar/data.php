
<div class="app-main__outer">
    <div class="app-main__inner">
       
            <h5 >Prediksi FP-Growth</h5>
            <div class="col-lg-4"><?php echo $this->session->flashdata('pesan'); ?></div>

        <!-- row -->
        <div class="row">
              <div class="col-lg-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                       
                                        <div class="table-responsive">
                                        <table class="mb-0 table table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th style="text-align: center; font-size: 12px;">NO</th>
                                                <!-- <th style="text-align: center; font-size: 12px;">KODE BARANG</th> -->
                                                <th style="text-align: center; font-size: 12px;">PRODUK 1</th>
                                                <th style="text-align: center; font-size: 12px;">PRODUK 2</th>
                                                <th style="text-align: center; font-size: 12px;">PRODUK 2</th>
                                                <!-- <th style="text-align: center; font-size: 12px;">TANGGAL KELUAR</th> -->
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; foreach($barangkeluar as $r) { ?>
                                            <tr>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $i; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->barang1; ?></td>                                              
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->barang2; ?></td>                                              
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->barang3; ?></td>                                              
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

         <!-- row -->
        <div class="row">
              <div class="col-lg-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                       <p>Total Transaksi</p>
                                        <div class="table-responsive">
                                        <table class="mb-0 table table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th style="text-align: center; font-size: 12px;">NO</th>
                                                <th style="text-align: center; font-size: 12px;">PRODUK 1</th>
                                                <th style="text-align: center; font-size: 12px;">PRODUK 2</th>
                                                <th style="text-align: center; font-size: 12px;">PRODUK 3</th>
                                                <th style="text-align: center; font-size: 12px;">TOTAL</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; foreach($totaltransaksi as $r) { ?>
                                            <tr>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $i; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->barang1; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->barang2; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->barang3; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->barang1+$r->barang2+$r->barang3; ?></td>
                                              
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


         <!-- row -->
        <div class="row">
              <div class="col-lg-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                       <p>Frekuensi Tiap Barang</p>
                                        <div class="table-responsive">
                                        <table class="mb-0 table table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th style="text-align: center; font-size: 12px;">NO</th>
                                                <th style="text-align: center; font-size: 12px;">PRODUK 1</th>
                                                <th style="text-align: center; font-size: 12px;">PRODUK 2</th>
                                                <th style="text-align: center; font-size: 12px;">PRODUK 3</th>
                                                <th style="text-align: center; font-size: 12px;">FREKUENSI</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; foreach($frekuensitiapbarang as $r) { ?>
                                            <tr>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $i; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->barang1; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->barang2; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->barang3; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->barang1+$r->barang2+$r->barang3; ?></td>
                                              
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

         <!-- row -->
        <div class="row">
              <div class="col-lg-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                       <p>Filtering Barang</p>
                                        <div class="table-responsive">
                                        <table class="mb-0 table table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th style="text-align: center; font-size: 12px;">NO</th>
                                                <th style="text-align: center; font-size: 12px;">PRODUK 1</th>
                                                <th style="text-align: center; font-size: 12px;">PRODUK 2</th>
                                                <th style="text-align: center; font-size: 12px;">PRODUK 3</th>
                                                <th style="text-align: center; font-size: 12px;">FREKUENSI</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; foreach($frekuensitiapbarang as $r) { ?>
                                            <tr>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $i; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->barang1; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->barang2; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->barang3; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->barang1+$r->barang2+$r->barang3; ?></td>
                                              
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

         <!-- row -->
        <div class="row">
              <div class="col-lg-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                       <p>Frekuensi Tinggi 2 Items</p>
                                        <div class="table-responsive">
                                        <table class="mb-0 table table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th style="text-align: center; font-size: 12px;">NO</th>
                                                <th style="text-align: center; font-size: 12px;">PRODUK 1</th>
                                                <th style="text-align: center; font-size: 12px;">PRODUK 2</th>
                                                <th style="text-align: center; font-size: 12px;">MIN. SUPPORT</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; foreach($frekuensitiapbarang2items as $r) { ?>
                                            <tr>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $i; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->barang1; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->barang2; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->barang1+$r->barang2 * 0.10; ?> %</td>
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
        
        <!-- row -->
        <div class="row">
              <div class="col-lg-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                       <p>Frekuensi Tinggi 3 Items</p>
                                        <div class="table-responsive">
                                        <table class="mb-0 table table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th style="text-align: center; font-size: 12px;">NO</th>
                                                <th style="text-align: center; font-size: 12px;">PRODUK 1</th>
                                                <th style="text-align: center; font-size: 12px;">PRODUK 2</th>
                                                <th style="text-align: center; font-size: 12px;">PRODUK 3</th>
                                                <th style="text-align: center; font-size: 12px;">MIN. SUPPORT</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; foreach($frekuensitiapbarang3items as $r) { ?>
                                            <tr>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $i; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->barang1; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->barang2; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->barang3; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->barang1+$r->barang2+$r->barang3 * 0.10; ?> %</td>
                                              
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

        <!-- row -->
        <div class="row">
              <div class="col-lg-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                       <p>Asosiasi 2 Items : Min. Confidence</p>
                                        <div class="table-responsive">
                                        <table class="mb-0 table table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th style="text-align: center; font-size: 12px;">NO</th>
                                                <th style="text-align: center; font-size: 12px;">PRODUK</th>
                                                <th style="text-align: center; font-size: 12px;">MIN. CONFIDENCE</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; foreach($frekuensitiapbarang3items as $r) { ?>
                                            <tr>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $i; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo "Produk 1"." - "."Produk 2"; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->barang1/$r->barang2; ?> %</td>
                                              
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

        <!-- row -->
        <div class="row">
              <div class="col-lg-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                       <p>Asosiasi 3 Items : Min. Confidence</p>
                                        <div class="table-responsive">
                                        <table class="mb-0 table table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th style="text-align: center; font-size: 12px;">NO</th>
                                                <th style="text-align: center; font-size: 12px;">PRODUK</th>
                                                <th style="text-align: center; font-size: 12px;">MIN. CONFIDENCE</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; foreach($frekuensitiapbarang3items as $r) { ?>
                                            <tr>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $i; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo "Produk 1"." - "."Produk 2"." - "."Produk 3"; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo round($r->barang1/$r->barang2/$r->barang3,2); ?> %</td>
                                              
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


        <!-- row -->
        <div class="row">
              <div class="col-lg-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                       <p>Aturan Final</p>
                                        <div class="table-responsive">
                                        <table class="mb-0 table table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <!-- <th style="text-align: center; font-size: 12px;">NO</th> -->
                                                <th style="text-align: center; font-size: 12px;">TOTAL</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; foreach($barangkeluartotal as $r) { ?>
                                            <tr>
                                                <!-- <td style="text-align: center; font-size: 12px;"><?php echo $i; ?></td> -->
                                                <td style="text-align: center; font-size: 12px;"><?php

                                                $a = $r->barang1/$r->barang2;
                                                $b = round($r->barang1/$r->barang2/$r->barang3,2);
                                                $c = $a * $b;
                                                echo $c;

                                                ?> %</td>
                                              
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



<!-- <?php //echo $this->uri->segment(1) == 'Ruangan/Pembayaran' || $this->uri->segment(2) == '' ? 'class="mm-active"':'' ?> -->

  <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    
                    <div class="scrollbar-sidebar bg-light" >
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                
                                <li class="app-sidebar__heading ">Menu</li>
                              
                                
                                   
                                   <!-- <li class="app-sidebar__heading">AKTIVITAS</li> -->
                                   
                                    <?php if ($this->session->userdata('level')=='admin') {?>
                                        
                                        
                                        <!--  <li  <?php echo $this->uri->segment(1) == 'Kategori' && $this->uri->segment(2) == 'index' || $this->uri->segment(2) == 'edit' || $this->uri->segment(2) == 'tambah' || $this->uri->segment(1) == '' && $this->uri->segment(2) == '' ? 'class="mm-active"':'' ?>>
                                            <a style="font-size: 13px;" href="<?php echo base_url('Kategori/index'); ?>" >
                                                <i class="metismenu-icon pe-7s-rocket"></i>
                                                Kategori
                                            </a>
                                        </li> -->
                                        <!--  <li  <?php echo $this->uri->segment(1) == 'barang' && $this->uri->segment(2) == 'suplier' || $this->uri->segment(2) == 'esuplier' || $this->uri->segment(2) == 'tsuplier' || $this->uri->segment(1) == '' && $this->uri->segment(2) == '' ? 'class="mm-active"':'' ?>>
                                            <a style="font-size: 13px;" href="<?php echo base_url('barang/suplier'); ?>" >
                                                <i class="metismenu-icon pe-7s-users"></i>
                                                Suplier
                                            </a>
                                        </li> -->
                                       <li>
                                            <a style="font-size: 13px;" href="#">
                                                <i class="metismenu-icon pe-7s-diamond"></i>
                                                BARANG
                                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                            </a>
                                           <ul>
                                                <li  <?php echo $this->uri->segment(1) == 'Barang' && $this->uri->segment(2) == 'masuk' || $this->uri->segment(2) == 'edit' || $this->uri->segment(2) == 'tambah' || $this->uri->segment(1) == '' && $this->uri->segment(2) == '' ? 'class="mm-active"':'' ?>>
                                            <a style="font-size: 13px;" href="<?php echo base_url('Barang/masuk'); ?>" >
                                                <i class="metismenu-icon pe-7s-rocket"></i>
                                                Barang Masuk
                                            </a>
                                        </li>
                                         <li  <?php echo $this->uri->segment(1) == 'Barang' && $this->uri->segment(2) == 'keluar' || $this->uri->segment(2) == 'edit' || $this->uri->segment(2) == 'tambah' || $this->uri->segment(1) == '' && $this->uri->segment(2) == '' ? 'class="mm-active"':'' ?>>
                                            <a style="font-size: 13px;" href="<?php echo base_url('Barang/keluar'); ?>" >
                                                <i class="metismenu-icon pe-7s-rocket"></i>
                                                Barang Keluar
                                            </a>
                                        </li>
                                           </ul>
                                       </li>


                                    

                                       <li>
                                        <a style="font-size: 13px;" href="#">
                                                <i class="metismenu-icon pe-7s-info"></i>
                                                PREDIKSI
                                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                            </a>
                                           <ul>
                                                     
                                                      <li  <?php echo $this->uri->segment(1) == 'Laporan' && $this->uri->segment(2) == 'prediksiproduk'|| $this->uri->segment(1) == '' && $this->uri->segment(2) == '' ? 'class="mm-active"':'' ?>>
                                                        <a style="font-size: 13px;" href="<?php echo base_url('Laporan/prediksiproduk'); ?>" >
                                                            <i class="metismenu-icon pe-7s-rocket"></i>
                                                            Barang / Produk
                                                    </a>
                                                    </li>
                                                    <!--  <li  <?php echo $this->uri->segment(1) == 'Laporan' && $this->uri->segment(2) == 'barangkeluar'|| $this->uri->segment(1) == '' && $this->uri->segment(2) == '' ? 'class="mm-active"':'' ?>>
                                                        <a style="font-size: 13px;" href="<?php echo base_url('Laporan/barangkeluar'); ?>" >
                                                            <i class="metismenu-icon pe-7s-rocket"></i>
                                                            Barang Keluar
                                                    </a>
                                                    </li> -->

                                           </ul>
                                       </li>
                                
                              

                                <!--  <li  <?php echo $this->uri->segment(1) == 'Akun' && $this->uri->segment(2) == 'index' || $this->uri->segment(2) == 'edit' || $this->uri->segment(2) == 'tambah' || $this->uri->segment(1) == '' && $this->uri->segment(2) == '' ? 'class="mm-active"':'' ?>>
                                            <a style="font-size: 13px;" href="<?php echo base_url('Akun/index'); ?>" >
                                                <i class="metismenu-icon pe-7s-users"></i>
                                                Pengguna Sistem
                                            </a>
                                        </li> -->
                                    <?php } ?>

                               

                                        </ul>

                               

                                <!-- ahir data -->

                                <!-- <li class="app-sidebar__heading">Ruangan</li> -->

                               
                               
                            </ul>
                        </div>
                    </div>
                </div>
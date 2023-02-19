<!DOCTYPE html>
<html>
<head>
	<title>Print Barang Keluar</title>
	<link rel="stylesheet" type="text/css" >
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<style>
		.line-title{
			border: 0;
			border-style: inset;
			border-top: 1px #000;
		}
	</style>
</head>
<body>
	<img src="assets/img/logo.jpg" style="position: absolute; width: 60px; height: auto;">
	<table style="width: 100%;">
		<tr>
			<td align="center">
				<span style="line-height: 1.6; font-weight: bold;">
					SIPB
					<!-- <br>Bogor -->
				</span>
			</td>
		</tr>
	</table>
	<hr class="line-title">
	<p align="center">
		LAPORAN BARANG KELUAR <br>
		
	</p>
	 
	 <div class="table-responsive">
                                        <table class="mb-0 table table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th style="text-align: center; font-size: 12px;">NO</th>
                                                <!-- <th style="text-align: center; font-size: 12px;">KODE BARANG</th> -->
                                                <th style="text-align: center; font-size: 12px;">NAMA BARANG</th>
                                                <th style="text-align: center; font-size: 12px;">JUMLAH KELUAR</th>
                                                <th style="text-align: center; font-size: 12px;">TANGGAL KELUAR</th>
                                                
                                           
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; foreach($datas as $r) { ?>
                                            <tr>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $i; ?></td>
                                                <!-- <td style="text-align: center; font-size: 12px;"><?php echo $r->kode_barang; ?></td> -->
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->nama_barang; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->jumlah_keluar; ?></td>
                                                <td style="text-align: center; font-size: 12px;"><?php echo $r->tanggal_keluar; ?></td>
                                            </tr>
                                            <?php $i++; } ?>
                                            
                                            </tbody>
                                        </table>
                                    </div>
    
    <p style="text-align: right; "><?php date_default_timezone_set("Asia/Jakarta");
        $dates = date("d-m-Y ");
        echo "Bogor, ". $dates;
         ?></p>

</body>
</html>
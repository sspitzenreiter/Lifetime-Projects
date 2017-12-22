<?php
	include 'konek.php';
	
	session_start();
	error_reporting(0);

	if ($_SESSION['pilih'] == "admin"){
?>
 
<html>
	<head>
		<title>Kantin Koperasi Sinergi Comlabs Makmur</title>
		<link rel="stylesheet" href="style.css" type="text/css" />
		<style type="text/css">
		div#pagination_controls{font-size:18px;}
		div#pagination_controls > a{ color:#06F; }
		div#pagination_controls > a:visited{ color:#06F; }
		</style>
	</head>
	<body class="All">
	<form method="GET">

		<?php
				if(isset($_GET['cari'])){
				$tahun=""; $bulan=""; $nama_field="";
				if(isset($_GET['bulan']))$bulan=$_GET['bulan'];
				if(isset($_GET['tahun']))$tahun=$_GET['tahun'];
				if(isset($_GET['produk']))$produk=$_GET['produk'];
				
				if(isset($_GET['nama_field']))$nama_field=$_GET['nama_field'];
			
				if ($nama_field=="00") $nama_field ="time";
				
				$_SESSION['bulan'] = $bulan;
				$_SESSION['tahun'] = $tahun;
				if ($tahun == "00") 					
					$tahun = date("Y");

				if($bulan !="00" and $nama_field=="time")
					$where = "where $nama_field like '$tahun-$bulan%'"; 
				else					
					if ($bulan =="00" and $nama_field=="time")
					$where ="where tgl_brg_masuk like '$tahun%' and tgl_peng_barang like '$tahun%'";
					else
					$where = "where $nama_field like '$tahun-$bulan%'"; 
				
				if($produk!='')
				$where .= "and id_produk like '$produk'";
				
				$where_exp="?where=$where";
				$where_print="?where=$where";
			}
			else{
			$where ="";
			$where_exp="?bulan=$_GET[bulan]&tahun=$_GET[tahun]&produk=$_GET[produk]&nama_field=$_GET[nama_field]";
			$where_print="";
		
			$tahuns=""; $bulans=""; $tanggals=""; 
			if(isset($_GET['tahun']))$tahuns=$_GET['tahun'];
			if(isset($_GET['bulan']))$bulans=$_GET['bulan'];
			if(isset($_GET['tanggal']))$tanggals=$_GET['tanggal'];
			}
			
			
				
			$sql1 = "SELECT COUNT(id) FROM tb_kprod $where";
			$query1 = mysqli_query($db_link, $sql1);
			$row = mysqli_fetch_row($query1);
			
					
			$row1 = $row[0];
			
			$page_rows = 25;
			$last = ceil($row1/$page_rows);
			
			if($last < 1){
				$last = 1;
			}
			
			$pagenum = 1;
			
			if(isset($_GET['pn'])){
				
				$pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);
				
			}
			 
			if ($pagenum < 1) { 
				$pagenum = 1;
				
			} else if ($pagenum > $last) { 
				$pagenum = $last; 
			}
			
			$limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;
			
			$paginationCtrls = '';
			
			if($last != 1){
				if ($pagenum > 1) {
					$previous = $pagenum - 1;
					$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$previous.'">Previous</a> &nbsp; &nbsp; ';
					for($i = $pagenum-4; $i < $pagenum; $i++){
						
						if($i > 0){
						$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.',">'.$i.'</a> &nbsp; ';
						}
					}
				}
				$paginationCtrls .= ''.$pagenum.' &nbsp; ';
				for($i = $pagenum+1; $i <= $last; $i++){
					
					$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'">'.$i.'</a> &nbsp; ';
					if($i >= $pagenum+4){
						break;
						
					}
				}
				if ($pagenum != $last) {
					$next = $pagenum + 1;
					$paginationCtrls .= ' &nbsp; &nbsp; <a href="'.$_SERVER['PHP_SELF'].'?pn='.$next.'">Next</a> ';
				}
			}
					
			include 'menu.php';
		?>
		<table width="100%">
			<tr>
				<td width="46%"><div class="oval"><img src="image/kantin1.png" width="170"></div><br>
				<h3>Kantin Koperasi Sinergi Comlabs Makmur</h3>
				<?php
				if ($_SESSION['pilih'] == "admin"){
						$user_login = ($_SESSION['pilih'] == "admin");
					}
					$sql 	= "select * from level where id = '$user_login'";
					$usname = $_SESSION['usname'];
				?>
				<a><img src="image/pr.png" width="20px">&nbsp;<?php echo $usname; ?></a>
			</td>
			<td>
				<div class="ekspor">
					<a href='export.php<?=$where_exp?>'><img src="image/ex.png" width="40" name="export"  onclick=" return confirm('Yakin Anda akan mengeksport data ini?');"></a>
					<a href='print.php<?=$where_exp?>'><img src="image/print.png" width="40" name="print"></a>
				</div><br>
				<div class="cari">
				<select name="bulan" class="searchpil">
					<option value="00">- Bulan -</option>
					<option value="01">Januari</option>
					<option value="02">Februari</option>
					<option value="03">Maret</option>
					<option value="04">April</option>
					<option value="05">Mei</option>
					<option value="06">Juni</option>
					<option value="07">Juli</option>
					<option value="08">Agustus</option>
					<option value="09">September</option>
					<option value="10">Oktober</option>
					<option value="11">November</option>
					<option value="12">Desember</option>
					<option value="00">All</option>
				</select>&nbsp;
				<select name="nama_field" class="searchpil">
					<option value="00">- Tanggal -</option>
					<option value="tgl_brg_masuk">Barang Masuk</option>
					<option value="tgl_peng_barang">Pengambilan Barang</option>
				</select>&nbsp;
				<select name="produk" class="searchpil">
								<?php
									include 'konek.php';
									$sql = "select * from produk order by nama_produk asc";  //munculkan data dari databases
									$query= mysqli_query($db_link, $sql);
										$o ="<option ";
										$o.= "value=''>";
										$o .= '- Produk -</option>';
										echo $o;
									while($data = mysqli_fetch_array($query)){
										$res  ="<option ";
										$res .= "value='".$data['id_produk']."'>";
										$res .= $data['nama_produk'];
										$res .= '</option>';
										echo $res;							
									}
								?>
				</select>&nbsp;
				<select name="tahun" class="searchpil">
					<?php
					echo '<option value="00">- Tahun -</option>';
					for($i=2014 ; $i <= 2025;$i++){
						echo '<option value="'.$i.'">'.$i.'</option>';}
					?>
				</select>&nbsp;
				<form class="ser">
					&nbsp;<input class="submit" type="submit" name="cari" value="Cari">		
				</form>
			</div>
			</td>
			</tr>
			
		</table>
		<div class="hasilp"><h4>Hasil Pencarian : <br><?php echo "Id produk  <font color='red'>$produk</font>, Bulan  <font color='red'>$bulan</font>, Tahun  <font color='red'>$tahun</font>"?></h4></div>
		<div class="divtable">
			<table cellpadding="1" cellspacing="1" align="center" border="1" class="table">
				<tr class="tr">
					<td align="center" rowspan="2">No.</td>
					<td align="center" colspan="3" rowspan="1">Tanggal</td>
					<td align="center" colspan="3">Produk</td>
					<td align="center" colspan="2">Vendor</td>
					<td align="center" colspan="2">Jumlah Barang</td>
					<td align="center" colspan="2">Harga Barang</td>
					<td align="center" rowspan="2"><image src="image/10.png" width="50"><br>&nbsp;&nbsp;&nbsp;Action&nbsp;&nbsp;&nbsp;</td>
				</tr>
				<tr class="tr">
					<td align="center">Input</td>
					<td align="center">Barang Masuk</td>
					<td align="center">Pengambilan<br>Barang</td>
					<td align="center">Id Produk</td>
					<td align="center">Nama Produk</td>	
					<td align="center">Satuan</td>
					<td align="center">Nama Vendor</td>
					<td align="center">Kontak Vendor</td>
					<td align="center">Masuk</td>
					<td align="center">Tersisa</td>
					<td align="center">Pokok<br>(Rp)</td>
					<td align="center">Jual<br>(Rp)</td>
				</tr>
				<?php
					$sql = "SELECT * from tb_kprod $where order by time asc $limit ";
					$query=mysqli_query($db_link,$sql);
					
					if(isset($_GET['pn'])){
				
						$pg = $_GET['pn'];
						if ($pg=1){
						
						$no=1;
						
						}
						
						else {
						
						$a = 1+ (25 * $pg - 1) ;
						$no = $a;
						}
				
					}
			 
				
					$jumlah_desimal ="0";
					$pemisah_desimal =",";
					$pemisah_ribuan =".";
			
					$jml_tgl_brg_masuk=0;
					while($rows = mysqli_fetch_array($query)){
				?>
				<tr class="trdb">
				
					<td align="center"><font color="#009933"><?php echo $no++; ?></font></td>
					<td align="center" width='153'><?php echo $rows['time']; ?>&nbsp;</td>
					<td align="center" width='109'><?php echo $rows['tgl_brg_masuk']; ?>&nbsp;</td>
					<td align="center">&nbsp;<?php echo $rows['tgl_peng_barang']; ?>&nbsp;</td>
					<td align="center">&nbsp;<?php echo $rows['id_produk']; ?>&nbsp;</td>
					<td align="center"><?php echo $rows['nama_produk']; ?></td>
					<td align="center">&nbsp;<?php echo $rows['satuan']; ?>&nbsp;</td>
					<td align="center"><?php echo $rows['nama_vendor']; ?></td>
					<td align="center">&nbsp;<?php echo $rows['no_kontak']; ?>&nbsp;</td>
					<td align="center" width='60'>&nbsp;<?php echo number_format($rows['jumlah_masuk'], $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan); ?>&nbsp;</td>
					<td align="center"width='60' >&nbsp;<?php echo number_format($rows['jumlah_tersisa'], $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan); ?>&nbsp;</td>
					<td align="center"><?php echo number_format($rows['harga_pokok'], $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan); ?></td>
					<td align="center"><?php echo number_format($rows['harga_jual'], $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan); ?></td>
					<td align="center">
						<a href='edit_data_kantin.php?id=<?php echo $rows['id'];?>'><img src="image/edit.png" width="30" name="eedit" onclick=" return confirm('Yakin Anda akan mengedit data ini?');"></a> 
						<a href='hapus_data_kantin.php?id=<?php echo $rows['id'];?>'><img src="image/hapus.png" width="30" name="hapus" onclick=" return confirm('Apakah Anda yakin akan menghapus data ini?');"></a>
					</td>
				</tr>
				
				
				<?php 
				 $jml_tgl_brg_masuk+= $rows['tgl_brg_masuk']; //jumlah data
				}
				?>
				<tr class="tr">
					<td bgcolor="#009933" height="35" colspan="9" align="right" class="a">Jumlah &nbsp;</td>
					<?php
					$jum = mysqli_query ($db_link, "select SUM(jumlah_masuk),SUM(jumlah_tersisa),SUM(harga_pokok),SUM(harga_jual) from `tb_kprod` $where");
					$jumlah_desimal ="0";
					$pemisah_desimal =",";
					$pemisah_ribuan =".";
					$in_peng_inn	="0";
					while($row3 = mysqli_fetch_array($jum)){
						$jumlah_masukk		= $row3['SUM(jumlah_masuk)'];
						$jumlah_tersisaa	= $row3['SUM(jumlah_tersisa)'];
						$harga_pokokk		= number_format($row3['SUM(harga_pokok)'],$jumlah_desimal, $pemisah_desimal, $pemisah_ribuan);
						$harga_juall		= number_format($row3['SUM(harga_jual)'],$jumlah_desimal, $pemisah_desimal, $pemisah_ribuan);
						
						if (empty($jumlah_masukk))$jumlah_masukk="0";
						if (empty($jumlah_tersisaa))$jumlah_tersisaa="0";
						if (empty($harga_pokokk))$harga_pokokk="0";
						if (empty($harga_juall))$harga_juall="0";
						
						echo "<td align='center' bgcolor=' #009933'>$jumlah_masukk</td>";
						echo "<td align='center' bgcolor=' #009933'>$jumlah_tersisaa</td>";
						echo "<td align='center' bgcolor=' #009933' width='80'>Rp $harga_pokokk</td>";
						echo "<td align='center' bgcolor=' #009933' width='80'>Rp $harga_juall</td>";
						echo "<td align='center' bgcolor=' #009933'></td>";
					}
					?>
			</table>
			</div>
			<br><br><br>
			<center><div id="pagination_controls"><?php echo $paginationCtrls; ?></div></center><br><Br>

		</form>
		<?php
			include 'footer.php';
		?>
	</body>
</html>		
<?php 
	} else 
		header('location:index.php');
?>
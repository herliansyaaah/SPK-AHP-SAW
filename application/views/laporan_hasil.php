<!DOCTYPE html>
<html>
<head>
	<title>Hasil Perankingan Penerima Bonus Karyawan </title>
</head>

<style>
	
	h3{
		margin-top: 40px;
		text-align:center;
		font-weight:bold;
		margin-bottom: 30px;
	}
	p {
		margin-bottom: 10px;
		text-align:right;
	}
	h5{
		margin-top:70px;
		text-align:right;
		text-decoration:underline;
		font-weight:normal;
		font-size:16px;
	}
	.jabatan{
		text-align:right;
		font-weight:normal;
		font-size:16px;
		margin-top:-15;
	}
    table {
        border-collapse: collapse;
		margin-bottom : 100px;
    }
    table, th, td {
        border: 1px solid black;
    }
	footer {
		color:grey;
		font-size:12px;
		width: 100%;
		height: 50px;
		position: absolute;
		bottom: 0px;
	}
	thead{
		background: white;
	}
</style>

<body>
<h3 >DATA HASIL PERANKINGAN</h3>



<table border="1" width="100%">
	<thead>
		<tr align="center">
			<th>Alternatif</th>
			<th>Nilai</th>
			<th width="15%">Ranking</th>
		</tr>
	</thead>
	<tbody>
		<?php
			$no=1;
			foreach ($hasil as $keys): ?>
		<tr align="center">
			<td align="center">
				<?php
				$nama_alternatif = $this->Perhitungan_model->get_hasil_alternatif($keys->id_alternatif);
				echo $nama_alternatif['nama'];
				?>
			
			</td>
			<td><?= round($keys->nilai,3) ?></td>
			<td><?= $no; ?></td>
		</tr>
		<?php
			$no++;
			endforeach ?>
	</tbody>

</table>
	<p> 
		
		<?php
		function tgl_indo($tanggal){
			$bulan = array (
				1 =>   'Januari',
				'Februari',
				'Maret',
				'April',
				'Mei',
				'Juni',
				'Juli',
				'Agustus',
				'September',
				'Oktober',
				'November',
				'Desember'
			);
			$pecah = explode('-', $tanggal);
			
		
			return $pecah[2] . ' ' . $bulan[ (int)$pecah[1] ] . ' ' . $pecah[0];
		}

		echo "Serang, ".tgl_indo(date('Y-m-d')); 
		?>

		</p>

	<p>Mengetahui,</p>
	<h5>A B S O R I </h5>
	<p class="jabatan">Manager HRD</p>

	<Footer>
	Jl. Raya Serang Km. 68 Desa Nambo Ilir, Kec. Kibin-Banten, Indonesia Telp : (0254) 402301 – 03 Fax : (0254) 402304
	</div>
</body>
</html>